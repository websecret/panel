<div class="row">
    @foreach(\App\Models\Address::$addressFields as $addressField)
        <div class="col-md-12">
            <div class="form-group {{ PanelForm::formGroupClass('address.'.$addressField, $errors) }}">
                <label class="col-md-4 control-label">{{ trans('labels.address.'.$addressField) }}</label>
                <div class="col-md-8">
                    <input type="text" class="form-control" name="address[{{$addressField}}]" value="{{ Request::old('address.'.$addressField, $address ? $address->{$addressField} : '') }}" >
                    <div class="error-block">
                        {!! PanelForm::formGroupLabel('address.'.$addressField, $errors) !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>