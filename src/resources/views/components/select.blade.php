<div class="mb-3 row">
    <div class="col-md-3">
        <label for="{{$label}}" class="form-label">{{ucfirst($label)}}</label>
    </div>
    <div class="col-md-9">
        <select class="form-select" id="{{$id}}" name="{{$name}}">
            <option>{{trans('form::messages.select')}}</option>
            @foreach($options as $key => $option)
                <option value="{{$key}}" {{isset($select) && $key == $select ? 'selected="select"' : ''}}>
                    {{$option}}
                </option>
            @endforeach 
            @isset($other)
                <option value="other">{{trans('form::messages.other')}}</option
            >@endisset
        </select>
        @error($name)
            <div class="small text-danger mt-1">{{ $message }}</div>
        @enderror
    </div>
</div>