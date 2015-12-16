<?php $isImageMultiple = $model::getImageIsMultiple($type); ?>
<div class="js_panel_images-upload-wrapper" data-url="{{ route('panel::upload') }}" data-multiple="{{ $isImageMultiple }}" data-model="{{ get_class($model) }}" data-type="{{ $type }}" data-params="{{ $params }}">
    <div class="js_panel_images-row">
        <div class="js_panel_images-col js_panel_images-col-clone">
            <div class="js_panel_images-wrapper">
                <img class="js_panel_images-img" src="" alt=""/>
                <a href="#" class="js_panel_images-remove"><span class="fa fa-close"></span></a>
                <label class="js_panel_images-main">
                    <input type="radio" name="images[{{ $type }}][main]" value="" disabled="disabled"/>
                </label>
                <input class="js_panel_images-path" type="hidden" name="images[{{ $type }}][path][]" value="" disabled="disabled"/>
            </div>
        </div>
        <?php $imageKey = 0; ?>
        @foreach($model->images()->ofType($type)->get() as $image)
            <div class="js_panel_images-col">
                <div class="js_panel_images-wrapper">
                    <img class="js_panel_images-img" src="{{ $model->loadImage($image, $params) }}" alt=""/>
                    <a href="#" class="js_panel_images-remove"><span class="fa fa-close"></span></a>
                    <label class="js_panel_images-main">
                        <input type="radio" name="images[{{ $type }}][main]" value="{{ $imageKey }}" {{ $image->main || !$isImageMultiple ? "checked='checked'" : '' }}/>
                    </label>
                    <input class="js_panel_images-path" type="hidden" name="images[{{ $type }}][path][{{ $imageKey }}]" value="{{ $image->path }}"/>
                </div>
            </div>
            <?php
                if(!$isImageMultiple) {
                    break;
                }
                $imageKey++;
            ?>
        @endforeach
    </div>
    <div>
        <input type="file" {{ $isImageMultiple ? 'multiple="multiple"' : '' }} class="js_panel_images-upload"/>
    </div>
</div>