@if(isset($label))
<div class="row mb-3">
    <div class="col-md-3">
        <label for="{{$label}}" class="form-label">{{ucfirst($label)}}</label>
    </div>
    <div class="col-md-9">
        <input type="checkbox" name="{{$name}}" id="{{@$id}}" value="1" {{(isset($checked) ? 'checked' : '')}}> <small class="text-muted">{{@$helper}}</small>
    </div>
</div>
@else
<input type="checkbox" name="{{$name}}" id="{{@$id}}" value="1" {{(isset($checked) ? 'checked' : '')}}>
@endif