<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("admin.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    Acasa
                </a>
            </li>
            @can('user_management_access')
            <li class="nav-item nav-dropdown">
                <a class="nav-link  nav-dropdown-toggle" href="#">
                    <i class="fa-fw fas fa-users nav-icon">

                    </i>
                    Manager
                </a>
                <ul class="nav-dropdown-items">

                    @can('permission_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is('admin/permissions') || request()->is('admin/permissions/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-unlock-alt nav-icon">

                            </i>
                            Permisiunii
                        </a>
                    </li>
                    @endcan


                    @can('role_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is('admin/roles') || request()->is('admin/roles/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-briefcase nav-icon">

                            </i>
                            {{ trans('Roluri') }}
                        </a>
                    </li>
                    @endcan


                    @can('user_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is('admin/users') || request()->is('admin/users/*') ? 'active' : '' }}">
                            <i class="fa-fw fas fa-user nav-icon">

                            </i>
                            {{ trans('Utilizatori') }}
                        </a>
                    </li>
                    @endcan
                </ul>
            </li>
            @endcan


            @can('contact_access')
            <li class="nav-item">
                <a href="{{ route('admin.contacts.offerRequest') }}" class="nav-link {{ request()->is('admin/contacts') || request()->is('admin/contacts/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-flag nav-icon">

                    </i>
                    {{ trans('Cereri primite') }}
                </a>
            </li>
            @endcan


            @can('contact_access')
            <li class="nav-item">
                <a href="{{ route('admin.contacts.offerMade') }}" class="nav-link {{ request()->is('admin/contacts') || request()->is('admin/contacts/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-cogs nav-icon">

                    </i>
                    {{ trans('Oferte facute') }}
                </a>
            </li>
            @endcan

            @can('contact_access')
            <li class="nav-item">
                <a href="{{ route('admin.contacts.offerAccepted') }}" class="nav-link {{ request()->is('admin/contacts') || request()->is('admin/contacts/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-flag nav-icon">

                    </i>
                    {{ trans('Oferte acceptate') }}
                </a>
            </li>
            @endcan

            @can('contact_access')
            <li class="nav-item">
                <a href="{{ route('admin.contacts.entryToday') }}" class="nav-link {{ request()->is('admin/contacts') || request()->is('admin/contacts/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-cogs nav-icon">

                    </i>
                    {{ trans('Intrari azi') }}
                </a>
            </li>
            @endcan

            @can('contact_access')
            <li class="nav-item">
                <a href="{{ route('admin.contacts.exitToday') }}" class="nav-link {{ request()->is('admin/contacts') || request()->is('admin/contacts/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-cogs nav-icon">

                    </i>
                    {{ trans('Iesiri azi') }}
                </a>
            </li>
            @endcan


            @can('contact_access')
            <li class="nav-item">
                <a href="{{ route('admin.contacts.offerHistory') }}" class="nav-link {{ request()->is('admin/contacts') || request()->is('admin/contacts/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-cogs nav-icon">

                    </i>
                    {{ trans('Istoric service') }}
                </a>
            </li>
            @endcan


            @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
            @can('profile_password_edit')
            <li class="nav-item">
                <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                    <i class="fa-fw fas fa-key nav-icon">
                    </i>
                    {{ trans('Schimba parola') }}
                </a>
            </li>
            @endcan
            @endif
            <li class="nav-item">
                <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                    <i class="nav-icon fas fa-fw fa-sign-out-alt">

                    </i>
                    {{ trans('Deconectare') }}
                </a>
            </li>
        </ul>

    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>