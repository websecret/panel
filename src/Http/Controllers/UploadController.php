<?php namespace Websecret\Panel\Http\Controllers;

use Validator;
use File;
use GlideImage;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UploadController extends Controller
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
                'fullsize' => GlideImage::load($modelBasename . '/' . $filename)->getUrl(),
            ];
        }

        return response()->json([
            'result' => 'success',
            'files' => $results,
            'type' => $type,
            'params' => $params,
        ]);
    }

    public function redactorImages(Request $request)
    {
        $imagesFolder = 'images/wysiwyg';

        $file = $request->file('file');

        do {
            $filename = str_random() . '.' . $file->getClientOriginalExtension();
        } while (File::exists($imagesFolder . '/' . $filename));
        $file->move($imagesFolder, $filename);

        $results[] = [
            'url' => '/' . $imagesFolder . '/' . $filename,
        ];
        return response()->json($results);
    }

    public function floaraImages(Request $request)
    {
        $imagesFolder = 'images/wysiwyg';

        $file = $request->file('file');

        do {
            $filename = str_random() . '.' . $file->getClientOriginalExtension();
        } while (File::exists($imagesFolder . '/' . $filename));
        $file->move($imagesFolder, $filename);

        $results = [
            'link' => '/' . $imagesFolder . '/' . $filename,
        ];
        return response()->json($results);
    }

}
