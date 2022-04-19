<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <x-menu-item
        :route="route('dashboard.index')"
        :icon="'fas fa-fw fa-tachometer-alt'"
        :label="'Dashboard'"
        :activeRoutes="'dashboard.*'"/>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <x-menu-group
        :id="'components'"
        :label="'Components'"
        :icon="'fas fa-fw fa-cog'"
        :activeRoutes="'component.*'"
        :labelGroupItem="'Custom Components:'"
    >
        <x-menu-group-item
            :route="route('component.button')"
            :label="'Buttons'"
            :activeRoutes="'component.button'"
        />

        <x-menu-group-item
            :route="route('component.card')"
            :label="'Cards'"
            :activeRoutes="'component.card'"
        />

    </x-menu-group>


    <!-- Nav Item - Utilities Collapse Menu -->
    <x-menu-group
        :id="'collapseUtilities'"
        :label="'Utilities'"
        :icon="'fas fa-fw fa-wrench'"
        :activeRoutes="'utilities.*'"
        :labelGroupItem="'Custom Utilities:'"
    >
        <x-menu-group-item
            :route="route('utilities.color')"
            :label="'Colors'"
            :activeRoutes="'utilities.color'"
        />

        <x-menu-group-item
            :route="route('utilities.border')"
            :label="'Borders'"
            :activeRoutes="'utilities.border'"
        />

        <x-menu-group-item
            :route="route('utilities.animation')"
            :label="'Animations'"
            :activeRoutes="'utilities.animation'"
        />

        <x-menu-group-item
            :route="route('utilities.other')"
            :label="'Other'"
            :activeRoutes="'utilities.other'"
        />

    </x-menu-group>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Addons
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <x-menu-group
        :id="'collapsePages'"
        :label="'Pages'"
        :icon="'fas fa-fw fa-folder'"
        :activeRoutes="'pages.*'"
    >
        <h6 class="collapse-header">Login Screens:</h6>
        <x-menu-group-item
            :route="route('pages.login')"
            :label="'Login'"
            :activeRoutes="'pages.login'"
        />

        <x-menu-group-item
            :route="route('pages.register')"
            :label="'Register'"
            :activeRoutes="'pages.register'"
        />

        <x-menu-group-item
            :route="route('pages.forgot-passord')"
            :label="'Forgot Password'"
            :activeRoutes="'pages.forgot-passord'"
        />

        <div class="collapse-divider"></div>
        <h6 class="collapse-header">Other Pages:</h6>

        <x-menu-group-item
            :route="route('pages.page-404')"
            :label="'404 Page'"
            :activeRoutes="'pages.page-404'"
        />

        <x-menu-group-item
            :route="route('pages.page-500')"
            :label="'500 Page'"
            :activeRoutes="'pages.page-500'"
        />

        <x-menu-group-item
            :route="route('pages.blank')"
            :label="'Blank Page'"
            :activeRoutes="'pages.blank'"
        />

    </x-menu-group>


    <!-- Nav Item - Charts -->
    <x-menu-item
        :route="route('charts.index')"
        :icon="'fas fa-fw fa-chart-area'"
        :label="'Charts'"
        :activeRoutes="'charts.*'"/>

    <!-- Nav Item - Tables -->
    <x-menu-item
        :route="route('user.index')"
        :icon="'fal fa-user-cog'"
        :label="'Users'"
        :activeRoutes="'user.*'"/>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

    <!-- Sidebar Message -->
    <div class="sidebar-card d-none d-lg-flex">
        <img class="sidebar-card-illustration mb-2" src="{{asset("img/undraw_rocket.svg")}}" alt="...">
        <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!
        </p>
        <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
    </div>
</ul>
<!-- End of Sidebar -->
