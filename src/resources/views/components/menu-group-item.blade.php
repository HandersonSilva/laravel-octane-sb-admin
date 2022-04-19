<a
    class="collapse-item {{ request()->routeIs($activeRoutes) ? 'active':''}}"
    href="{{ $route }}"
>
    {{ $label }}
</a>
