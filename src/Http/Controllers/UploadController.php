<?php namespace  Websecret\Panel\Http\Controllers;

use Validator;
use File;
use Config;
use GlideImage;
use Illuminate\Http\Request;

class UploadController
{

    public function images(Request $request)
    {
        $files = $request->file('files');

        $rules = [
            'file' => 'mimes:jpg,jpeg,png'
        ];
        foreach ($files as $file) {
            $validation_files['file'] = $file;
            $validator = Validator::make($validation_files, $rules);
            if ($validator->fails()) {
                return response()->json(['message' => $validator->messages()->first('file')]);
            }
        }

        $model = $request->input('model');
        $modelBasename = strtolower(class_basename($model));
        $type = $request->input('type');
        $params = $request->input('params');

        $results = [];

        $imagesFolder = config('laravel-glide.source.path') . '/' . $modelBasename;

        foreach ($files as $key => $file) {

            do {
                $filename = str_random() . '.' . $file->getClientOriginalExtension();
            } while (File::exists($imagesFolder . '/' . $filename));
            $file->move($imagesFolder, $filename);

            $results[] = [
                'filename' => $modelBasename . '/' . $filename,
                'path' => GlideImage::load($modelBasename . '/' . $filename, $model::getImageParams($type, $params))->getUrl(),
            ];
        }

        return response()->json([
            'type' => 'success',
            'files' => $results,
        ]);
    }
}
