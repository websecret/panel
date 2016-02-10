<?php namespace App\Console\Commands;

use Illuminate\Console\Command;
use File;

class ClearImages extends Command {

    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'images:clear';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Clear not used images';

    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $photoClass = config('panel.photo_model');
        $imagesBaseFolder = config('laravel-glide.source.path');

        foreach($photoClass::all() as $photo) {
            if(!$photo->imageable) {
                $photo->delete();
            }
        }

        foreach(File::allFiles($imagesBaseFolder) as $key => $imagePath) {
            $imageName = str_replace('\\', '/', str_replace($imagesBaseFolder.DIRECTORY_SEPARATOR, '', $imagePath));
            if(!$photoClass::where('path', '=', $imageName)->count()) {
                File::delete($imagePath);
            }
        }
    }

}