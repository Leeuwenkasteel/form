<div class="mb-3 row">
    <div class="col-md-3">
        <label for="{{$label}}" class="form-label">{{ucfirst($label)}}</label>
    </div>
    <div class="col-md-9">
        <input type="file" class="form-control class="@error($name) is-invalid @enderror"" id="{{$label}}" name="{{$name}}" value="{{old($name, @$value)}}" {{(isset($min) ? "min=$min" : '')}}>
        @error($name)
            <div class="small text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>