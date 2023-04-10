<div class="min-vh-100">
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3"></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item @if($uri == 'home') active @endif">
            <a class="nav-link" href="{{ route('home') }}">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>
    @can('admin')
        <!-- Nav Item - Dashboard -->
            <li class="nav-item @if($uri == 'users') active @endif">
                <a class="nav-link" href="{{ route('users') }}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Users</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item @if($uri == 'agencies') active @endif">
                <a class="nav-link" href="{{ route('agencies') }}">
                    <i class="fas fa-fw fa-building"></i>
                    <span>Agencies</span></a>
            </li>
    @endcan
    @can('agency')
        <!-- Nav Item - Dashboard -->
            <li class="nav-item @if($uri == 'ofw') active @endif">
                <a class="nav-link" href="{{ route('ofw') }}">
                    <i class="fas fa-fw fa-plane-departure"></i>
                    <span>My OFW</span></a>
            </li>
        @endcan
    @can('user')
    <li class="nav-item @if($uri == 'userdocs') active @endif"">
        <a class="nav-link" href="{{ route('userdocs')}}">
            <i class="fas fa-fw fa-regular fa-folder"></i>
            <span>Documents</span>
        </a>
    </li>
    @endcan

    </ul>
</div>
