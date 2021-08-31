<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-item">
                <a href="{{ route("user.home") }}" class="nav-link">
                    <i class="nav-icon fas fa-fw fa-tachometer-alt">

                    </i>
                    Acasa
                </a>
            </li>


            <li class="nav-item">
                <a href="{{ route('user.contact') }}" class="nav-link {{ request()->is('user/contact') || request()->is('user/contact/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-flag nav-icon">

                    </i>
                    {{ trans('Cere oferta') }}
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('user.contact.offerSend') }}" class="nav-link {{ request()->is('user/contact') || request()->is('admin/contact/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-cogs nav-icon">

                    </i>
                    {{ trans('Oferte cerute') }}
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('user.contact.offerReceived') }}" class="nav-link {{ request()->is('user/contact') || request()->is('admin/contact/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-cogs nav-icon">

                    </i>
                    {{ trans('Oferte primite') }}
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('user.contact.offerAccepted') }}" class="nav-link {{ request()->is('user/contact') || request()->is('admin/contact/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-cogs nav-icon">

                    </i>
                    {{ trans('Oferte acceptate') }}
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ route('user.contact.offerHistory') }}" class="nav-link {{ request()->is('user/contact') || request()->is('admin/contact/*') ? 'active' : '' }}">
                    <i class="fa-fw fas fa-cogs nav-icon">

                    </i>
                    {{ trans('Istoric service') }}
                </a>
            </li>

            
            
            
            
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