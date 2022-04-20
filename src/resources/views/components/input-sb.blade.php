<label for="{{$name}}">{{$title ?? $label}}
    @if($required)
        <label class="label-required">*</label>
    @endif
</label>

<input type="{{$type}}" class="form-control {{$class}} {{$errors->has($name) ? 'is-invalid' : ''}}"
       id="{{$id}}" name="{{$name}}"
       placeholder="{{$placeholder}}"
       value="{!! $value !!}"
       placeholder="{{$placeholder}}"
       @if($required) required @endif/>

@if ($errors->has($name))
        <strong class="text-danger"> {{$errors->first($name) }}</strong>
@endif
