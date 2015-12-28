<label class="col-md-4 control-label">Phones</label>
<div class="col-md-8">
    @foreach($phones as $phone)
        <div class="input-group m-b-sm js_panel_multiple-row" data-name="phone">
            <div class="input-group-addon"><i class="fa fa-phone"></i></div>
            <input type="text" class="form-control" name="phones[]" value="{{ $phone->phone }}" >
            <span class="input-group-btn">
                <a href="#" class="btn btn-danger btn-block js_panel_multiple-remove" data-name="phone"><span class="fa fa-close"></span></a>
            </span>
        </div>
    @endforeach
    <div class="input-group m-b-sm js_panel_multiple-row js_panel_multiple-row-clone" data-name="phone">
        <div class="input-group-addon"><i class="fa fa-phone"></i></div>
        <input type="text" class="form-control" name="phones[]" disabled="disabled" value="" >
        <span class="input-group-btn">
            <a href="#" class="btn btn-danger btn-block js_panel_multiple-remove" data-name="phone"><span class="fa fa-close"></span></a>
         </span>
    </div>
    <div class="row m-b-sm">
        <div class="col-sm-12">
            <a href="#" class="btn btn-success btn-sm js_panel_multiple-add" data-name="phone"><span class="fa fa-plus"></span> Add Phone</a>
        </div>
    </div>
</div>