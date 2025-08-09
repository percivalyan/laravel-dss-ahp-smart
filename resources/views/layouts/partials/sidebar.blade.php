<aside class="sidebar">
    <div class="sidebar-start">
        <div class="sidebar-head">
            <a href="{{ url('/') }}" class="logo-wrapper" title="Home">
                <span class="sr-only">Home</span>
                <span class="icon logo" aria-hidden="true"></span>
                <div class="logo-text">
                    <span class="logo-title">Elegant</span>
                    <span class="logo-subtitle">Dashboard</span>
                </div>
            </a>
            <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                <span class="sr-only">Toggle menu</span>
                <span class="icon menu-toggle" aria-hidden="true"></span>
            </button>
        </div>

        <div class="sidebar-body">
            <ul class="sidebar-body-menu">
                <li>
                    <a class="{{ request()->is('dashboard') ? 'active' : '' }}" href="{{ url('/') }}">
                        <span class="icon home" aria-hidden="true"></span>Dashboard
                    </a>
                </li>

                @if (Auth::user()->role == 'admin')
                    <li>
                        <a class="{{ request()->is('users*') ? 'active' : '' }}" href="{{ route('users.index') }}">
                            <span class="icon user-3" aria-hidden="true"></span> Users
                        </a>
                    </li>
                @endif

                <li>
                    <a class="show-cat-btn" href="#">
                        <span class="icon image" aria-hidden="true"></span>Media
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li><a href="{{ url('media-01') }}">Media-01</a></li>
                        <li><a href="{{ url('media-02') }}">Media-02</a></li>
                    </ul>
                </li>

                <li>
                    <a class="show-cat-btn" href="#">
                        <span class="icon paper" aria-hidden="true"></span>Pages
                        <span class="category__btn transparent-btn" title="Open list">
                            <span class="sr-only">Open list</span>
                            <span class="icon arrow-down" aria-hidden="true"></span>
                        </span>
                    </a>
                    <ul class="cat-sub-menu">
                        <li><a href="{{ url('pages') }}">All pages</a></li>
                        <li><a href="{{ url('pages/create') }}">Add new page</a></li>
                    </ul>
                </li>

                <li>
                    <a href="{{ url('comments') }}">
                        <span class="icon message" aria-hidden="true"></span>
                        Comments
                    </a>
                    <span class="msg-counter">7</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="sidebar-footer">
        <a href="{{ route('profile.edit') }}" class="sidebar-user">
            <span class="sidebar-user-img">
                <picture>
                    <source srcset="{{ asset('img/avatar/avatar-illustrated-01.webp') }}" type="image/webp" />
                    <img src="{{ asset('img/avatar/avatar-illustrated-01.png') }}" alt="{{ Auth::user()->name }}" />
                </picture>
            </span>
            <div class="sidebar-user-info">
                <span class="sidebar-user__title">{{ Auth::user()->name }}</span>
                <span class="sidebar-user__subtitle">{{ ucfirst(Auth::user()->role) }}</span>
            </div>
        </a>
    </div>
</aside>
