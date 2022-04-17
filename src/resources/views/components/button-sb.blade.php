<button
    type="{{ $type ?? 'button' }}"
    class="btn btn-sm shadow-sm {{$class}} ">
    <i
        class="{{$icon}}"></i>
    {{ $label ?? '' }}
</button>
