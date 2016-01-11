<?php $isImageMultiple = $model::getImageIsMultiple($type); ?>
<div class="js_panel_images-upload-wrapper" data-url="{{ route('panel::upload') }}" data-multiple="{{ $isImageMultiple }}" data-model="{{ get_class($model) }}" data-type="{{ $type }}" data-params="{{ $params }}">
    <div class="js_panel_images-row">
        <?php $imageKey = 0; ?>
        @foreach($model->images()->ofType($type)->get() as $image)
            <div class="js_panel_images-col">
                <input class="js_panel_images-main" type="radio" name="images[{{ $type }}][main]" value="{{ $imageKey }}" {{ $image->main || !$isImageMultiple ? "checked='checked'" : '' }}/>
                <label class="js_panel_images-wrapper">
                    <img class="js_panel_images-img" src="{{ $model->loadImage($image, $params) }}" alt=""/>
                    <a href="{{ $model->loadImage($image) }}" data-gallery="" class="js_panel_images-zoom"><span class="fa fa-search-plus"></span></a>
                    <a href="#" class="js_panel_images-remove"><span class="fa fa-close"></span></a>
                    <input class="js_panel_images-path" type="hidden" name="images[{{ $type }}][path][{{ $imageKey }}]" value="{{ $image->path }}"/>
                </label>
            </div>
            <?php
            if(!$isImageMultiple) {
                break;
            }
            $imageKey++;
            ?>
        @endforeach
        <div class="js_panel_images-col js_panel_images-col-clone">
            <input class="js_panel_images-main" type="radio" name="images[{{ $type }}][main]" value="" disabled="disabled"/>
            <label class="js_panel_images-wrapper">
                <img class="js_panel_images-img" src="" alt=""/>
                <a href="#" data-gallery="" class="js_panel_images-zoom"><span class="fa fa-search-plus"></span></a>
                <a href="#" class="js_panel_images-remove"><span class="fa fa-close"></span></a>
                <input class="js_panel_images-path" type="hidden" name="images[{{ $type }}][path][]" value="" disabled="disabled"/>
            </label>
        </div>
        <div class="js_panel_images-loading-col">
            <div class="js_panel_images-loading">
                <div class="js_panel_images-loading1 js_panel_images-loading-child"></div>
                <div class="js_panel_images-loading2 js_panel_images-loading-child"></div>
                <div class="js_panel_images-loading3 js_panel_images-loading-child"></div>
                <div class="js_panel_images-loading4 js_panel_images-loading-child"></div>
                <div class="js_panel_images-loading5 js_panel_images-loading-child"></div>
                <div class="js_panel_images-loading6 js_panel_images-loading-child"></div>
                <div class="js_panel_images-loading7 js_panel_images-loading-child"></div>
                <div class="js_panel_images-loading8 js_panel_images-loading-child"></div>
                <div class="js_panel_images-loading9 js_panel_images-loading-child"></div>
                <div class="js_panel_images-loading10 js_panel_images-loading-child"></div>
                <div class="js_panel_images-loading11 js_panel_images-loading-child"></div>
                <div class="js_panel_images-loading12 js_panel_images-loading-child"></div>
            </div>
        </div>
    </div>
    <div>
        <input type="file" {{ $isImageMultiple ? 'multiple="multiple"' : '' }} class="js_panel_images-upload"/>
    </div>
</div>