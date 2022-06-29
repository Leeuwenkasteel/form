@if(isset($label))
<div class="row">
    <div class="col-md-3">
        <label for="{{$label}}" class="form-label">{{ucfirst($label)}}</label>
    </div>
    <div class="col-md-9">
    @foreach($options as $key => $option)
        <input type="checkbox" name="{{$name}}[]" id="{{@$id}}" value="{{$key}}" {{(isset($checked) && in_array($key, $checked) ? 'checked' : '')}} > {{$option}}<br/>
    @endforeach
    </div>
</div>
@else

@foreach($options as $key => $option)
    <input type="checkbox" name="{{$name}}" id="{{@$id}}" value="1" {{(isset($checked) && in_array($key, $checked) ? 'checked' : '')}}> {{$option}}
@endforeach
@endif