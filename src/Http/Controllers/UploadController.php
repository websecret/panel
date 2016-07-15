<?php namespace Websecret\Panel\Http\Controllers;

use Validator;
use File;
use GlideImage;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UploadController extends Controller
{

    protected $imagesFolder = 'uploads/images';

    public function images(Request $request)
    {
        $files = $request->file('files');

        $rules = [
            'files' => 'array'
        ];
        foreach ($files as $key => $file) {
            $rules['files.' . $key] = 'image';
        }
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['message' => $validator->messages()->toArray()]);
        }

        $imagesFolder = $this->imagesFolder . '/temp';

        $results = [];
        foreach ($files as $key => $file) {
            do {
                $filename = str_random() . '.' . $file->getClientOriginalExtension();
            } while (File::exists($imagesFolder . '/' . $filename));
            $file->move($imagesFolder, $filename);
            $results[] = [
                'link' => '/' . $imagesFolder . '/' . $filename,
                'path' => $imagesFolder . '/' . $filename,
            ];
        }

        return response()->json([
            'result' => 'success',
            'files' => $results,
        ]);
    }

    public function redactorImages(Request $request)
    {
        $imagesFolder = $this->imagesFolder . '/content/' . date('Y-m-d');
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

    public function froalaImages(Request $request)
    {
        $imagesFolder = $this->imagesFolder . '/content/' . date('Y-m-d');
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

    public function loadImage($model, $id, $type, $params, $path)
    {
        $modelsPath = config('panel.models_path');
        $modelClass = '\\' . $modelsPath . '\\' . studly_case($model);
        $model = $modelClass::find($id);
        $image = $model->images()->where('path', '=', $path)->where('type', '=', $type)->firstOrFail();
        return redirect($image->resize($params));
    }

}
