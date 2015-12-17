<div class="row">
    @foreach($fields as $addressField)
        <div class="col-md-12">
            <div class="form-group {{ FormHelper::formGroupClass('address.'.$addressField, $errors) }}">
                <label class="col-md-4 control-label">{{ trans('labels.address.'.$addressField) }}</label>
                <div class="col-md-8">
                    <input type="text" class="form-control js_panel_input-autocomplete" data-autocomplete-url="{{ $address::getAutocompleteUrl($addressField) }}" name="address[{{$addressField}}]" value="{{ Request::old('address.'.$addressField, $address->{$addressField}) }}" >
                    <div class="error-block">
                        {!! FormHelper::formGroupLabel('address.'.$addressField, $errors) !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>