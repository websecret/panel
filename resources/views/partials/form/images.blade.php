@php($isImageMultiple = $model::getImageIsMultiple($type))
<div class="table-responsive js_panel_images-upload-wrapper" data-url="{{ route('panel::upload') }}" data-multiple="{{ $isImageMultiple }}">
    <table class="table table-bordered table-stripped js_panel_images-row">
        @php($imageKey = 0)
        <thead>
        <tr>
            <th>
                Изображение
            </th>
            <th>
                Описание
            </th>
            <th>
                Действия
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach($model->images()->ofType($type)->orderBy('order')->get() as $image)
            <tr class="js_panel_images-col">
                <td>
                    <div class="js_panel_images-wrapper">
                        <img class="js_panel_images-img" src="{{ $image->load() }}" alt=""/>
                        <input class="js_panel_images-new" type="hidden" name="{{ $name }}{{ $nameAfter }}[is_new][]" value="0" data-name-before="{{ $name }}" data-name-after="{{ $nameAfter }}[is_new][]"/>
                        <input class="js_panel_images-order" type="hidden" name="{{ $name }}{{ $nameAfter }}[order][]" value="{{ $image->order }}" data-name-before="{{ $name }}" data-name-after="{{ $nameAfter }}[order][]"/>
                        <input class="js_panel_images-path" type="hidden" name="{{ $name }}{{ $nameAfter }}[path][]" value="{{ $image->path }}" data-name-before="{{ $name }}" data-name-after="{{ $nameAfter }}[path][]"/>
                        <input class="js_panel_images-main" type="radio" name="{{ $name }}{{ $nameAfter }}[main]" value="{{ $imageKey }}" {{ $image->main || !$isImageMultiple ? "checked='checked'" : '' }} data-name-before="{{ $name }}" data-name-after="{{ $nameAfter }}[main]"/>
                        @if($isImageMultiple)
                            <div class="js_panel_images-main-info">Сделать главным</div>
                        @endif
                    </div>
                </td>
                <td>
                    <textarea name="{{ $name }}{{ $nameAfter }}[description][]" rows="5" class="form-control" placeholder="Описание" data-name-before="{{ $name }}" data-name-after="{{ $nameAfter }}[description][]">{{ $image->description }}</textarea>
                </td>
                <td>
                    <a href="#" class="btn btn-white js_panel_images-remove"><i class="fa fa-trash"></i> </a>
                    <a href="{{ $image->load() }}" data-gallery="" class="js_panel_images-zoom btn btn-white"><span class="fa fa-search-plus"></span></a>
                </td>
            </tr>
            @break(!$isImageMultiple)
            @php($imageKey++)
        @endforeach
        <tr class="js_panel_images-col js_panel_images-col-clone">
            <td>
                <div class="js_panel_images-wrapper">
                    <img class="js_panel_images-img" src="" alt=""/>
                    <input class="js_panel_images-new" type="hidden" name="{{ $name }}{{ $nameAfter }}[is_new][]" value="1" disabled data-name-before="{{ $name }}" data-name-after="{{ $nameAfter }}[is_new][]"/>
                    <input class="js_panel_images-order" type="hidden" name="{{ $name }}{{ $nameAfter }}[order][]" value="" disabled data-name-before="{{ $name }}" data-name-after="{{ $nameAfter }}[order][]"/>
                    <input class="js_panel_images-path" type="hidden" name="{{ $name }}{{ $nameAfter }}[path][]" value="" disabled data-name-before="{{ $name }}" data-name-after="{{ $nameAfter }}[path][]"/>
                    <input class="js_panel_images-main" type="radio" name="{{ $name }}{{ $nameAfter }}[main]" value="" disabled data-name-before="{{ $name }}" data-name-after="{{ $nameAfter }}[main]"/>
                    @if($isImageMultiple)
                        <div class="js_panel_images-main-info">Сделать главным</div>
                    @endif
                </div>
            </td>
            <td>
                <textarea name="{{ $name }}{{ $nameAfter }}[description][]" rows="5" disabled class="form-control" placeholder="Описание" data-name-before="{{ $name }}" data-name-after="{{ $nameAfter }}[description][]"></textarea>
            </td>
            <td>
                <a href="#" class="btn btn-white js_panel_images-remove"><i class="fa fa-trash"></i> </a>
                <a href="#" data-gallery="" class="js_panel_images-zoom btn btn-white"><span class="fa fa-search-plus"></span></a>
            </td>
        </tr>
        </tbody>
    </table>
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
    <div>
        <input type="file" {{ $isImageMultiple ? 'multiple="multiple"' : '' }} class="js_panel_images-upload"/>
    </div>
</div>