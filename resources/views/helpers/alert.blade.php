@if($errors->count())
    <div class="alert alert-danger" role="alert">{!!  collect($errors->all())->implode('<br>') !!}</div>
@endif