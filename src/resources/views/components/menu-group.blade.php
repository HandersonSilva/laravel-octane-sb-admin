<x-menu-item :activeRoutes="$activeRoutes">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#{{ $id }}" aria-expanded="true" aria-controls="{{ $id }}">
        <i class="fas fa-fw {{ $icon }}"></i>
        <span>{{ $label }}</span>
    </a>
    <div id="{{ $id }}" class="collapse {{ request()->routeIs($activeRoutes) ? 'show' : '' }}" aria-labelledby="heading{{ $id }}" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">{{$labelGroupItem}}</h6>
            {{ $slot }}
        </div>
    </div>
</x-menu-item>
