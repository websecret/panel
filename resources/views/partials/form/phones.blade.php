<label class="col-md-4 control-label">Phones</label>
<div class="col-md-8">
    @foreach($phones as $phone)
        <div class="row mb-15 js_panel_multiple-row" data-name="phone">
            <div class="col-sm-10 col-md-8 col-lg-9">
                <input type="text" class="form-control" name="phones[]" value="{{ $phone->phone }}" >
            </div>
            <div class="col-sm-2 col-md-4 col-lg-3">
                <a href="#" class="btn btn-danger btn-block js_panel_multiple-remove" data-name="phone"><span class="fa fa-minus"></span></a>
            </div>
        </div>
    @endforeach
    <div class="row mb-15 js_panel_multiple-row js_panel_multiple-row-clone" data-name="phone">
        <div class="col-sm-10 col-md-8 col-lg-9">
            <input type="text" class="form-control" name="phones[]" disabled="disabled" value="" >
        </div>
        <div class="col-sm-2 col-md-4 col-lg-3">
            <a href="#" class="btn btn-danger btn-block js_panel_multiple-remove" data-name="phone"><span class="fa fa-minus"></span></a>
        </div>
    </div>
    <div class="row mb-15">
        <div class="col-sm-12">
            <a href="#" class="btn btn-success btn-sm js_panel_multiple-add" data-name="phone"><span class="fa fa-plus"></span> Add Phone</a>
        </div>
    </div>
</div>