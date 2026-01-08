<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <a href="{{ route('dashboard.index') }}" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logoticafrique.png') }}" alt="" height="40">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">
            <div id="two-column-menu"></div>

            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span>Menu</span></li>

                @can('voir-tableau de bord')
                <li class="nav-item">
                    <a class="nav-link menu-link {{ Route::is('dashboard.*') ? 'active' : '' }}" href="{{ route('dashboard.index') }}">
                        <i class="ri-dashboard-2-line"></i> <span>TABLEAU DE BORD</span>
                    </a>
                </li>
                @endcan

                <li class="nav-item">
                    <a class="nav-link menu-link {{ Route::is('contact.*') ? 'active' : '' }}" href="{{ route('contact.contact') }}">
                        <i class="ri-mail-check-line"></i> <span>CONTACTS & DEVIS</span>
                    </a>
                </li>

                @if (Auth::user()->role == 'superadmin' || Auth::user()->role == 'developpeur' || Auth::user()->can('voir-parametre'))
                <li class="nav-item">
                    <a class="nav-link menu-link {{ Route::is('role.*') || Route::is('parametre.*') || Route::is('module.*') || Route::is('admin-register.*') ? '' : 'collapsed' }}"
                        href="#sidebarAuth" data-bs-toggle="collapse" role="button"
                        aria-expanded="{{ Route::is('role.*') || Route::is('parametre.*') || Route::is('module.*') || Route::is('admin-register.*') ? 'true' : 'false' }}"
                        aria-controls="sidebarAuth">
                        <i class="ri-settings-2-fill"></i> <span>PARAMETRES</span>
                    </a>
                    <div class="collapse menu-dropdown {{ Route::is('role.*') || Route::is('parametre.*') || Route::is('module.*') || Route::is('permission.*') || Route::is('admin-register.*') ? 'show' : '' }}" id="sidebarAuth">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{ route('parametre.index') }}" class="nav-link {{ Route::is('parametre.*') ? 'active' : '' }}">Informations</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('admin-register.index') }}" class="nav-link {{ Route::is('admin-register.*') ? 'active' : '' }}">Utilisateurs</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('module.index') }}" class="nav-link {{ Route::is('module.*') ? 'active' : '' }}">Modules</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('role.index') }}" class="nav-link {{ Route::is('role.*') ? 'active' : '' }}">Roles</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ route('permission.index') }}" class="nav-link {{ Route::is('permission.*') ? 'active' : '' }}">Permissions</a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endif
            </ul>
        </div>
    </div>
    <div class="sidebar-background"></div>
</div>
<div class="vertical-overlay"></div>