<div class="mb-3 row">
    <div class="col-md-3">
        <label for="{{$label}}" class="form-label">{{ucfirst($label)}}</label>
    </div>
    <div class="col-md-9">
    @foreach($options as $key => $option)
        <input type="radio" name="{{$name}}" value="{{$key}}"> {{$option}}<br/>
    @endforeach
    </div>
</div>