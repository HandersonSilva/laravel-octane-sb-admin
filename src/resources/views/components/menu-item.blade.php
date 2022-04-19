<li {{ $attributes->class(['nav-item', 'active' => request()->routeIs($activeRoutes)]) }}>
    @if($slot->isEmpty())
        <a class="nav-link" href="{{ $route }}">
            <i class="fas fa-fw {{ $icon }}"></i>
            <span>{{ $label }}</span>
        </a>
    @else
        {{ $slot }}
    @endif
</li>
