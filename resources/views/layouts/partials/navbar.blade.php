    <nav class="main-nav--bg">
        <div class="container main-nav">
            <div class="main-nav-start">
                @php
                    $segments = request()->segments(); // ambil path segment dari URL
                    $url = url('/');
                @endphp

                <nav aria-label="breadcrumb">
                    <ol class="flex space-x-2 text-gray-600 text-xl">
                        {{-- Loop setiap segment --}}
                        @foreach ($segments as $key => $segment)
                            @php
                                $url .= '/' . $segment;
                                // Buat label lebih rapi (capitalize, ganti dash dengan spasi)
                                $label = ucfirst(str_replace('-', ' ', $segment));
                            @endphp

                            <li>
                                @if ($key + 1 < count($segments))
                                    <a href="{{ $url }}"
                                        class="hover:underline text-blue-600">{{ $label }}</a>
                                    <span>/</span>
                                @else
                                    <span class="text-gray-500">{{ $label }}</span>
                                @endif
                            </li>
                        @endforeach
                    </ol>
                </nav>

            </div>

            <div class="main-nav-end">
                <button class="sidebar-toggle transparent-btn" title="Menu" type="button">
                    <span class="sr-only">Toggle menu</span>
                    <span class="icon menu-toggle--gray" aria-hidden="true"></span>
                </button>
                <div class="lang-switcher-wrapper">
                    <ul class="lang-menu dropdown">
                        <li><a href="##">English</a></li>
                        <li><a href="##">French</a></li>
                        <li><a href="##">Uzbek</a></li>
                    </ul>
                </div>
                <button class="theme-switcher gray-circle-btn" type="button" title="Switch theme">
                    <span class="sr-only">Switch theme</span>
                    <i class="sun-icon" data-feather="sun" aria-hidden="true"></i>
                    <i class="moon-icon" data-feather="moon" aria-hidden="true"></i>
                </button>
                <div class="nav-user-wrapper">
                    <button href="##" class="nav-user-btn dropdown-btn" title="My profile" type="button">
                        <span class="sr-only">My profile</span>
                        <span class="nav-user-img">
                            <picture>
                                <source
                                    srcset="
                                                    ./img/avatar/avatar-illustrated-02.webp
                                                "
                                    type="image/webp" />
                                <img src="./img/avatar/avatar-illustrated-02.png" alt="User name" />
                            </picture>
                        </span>
                    </button>
                    <ul class="users-item-dropdown nav-user-dropdown dropdown">
                        <li>
                            <a href="{{ route('profile.edit') }}">
                                <i data-feather="user" aria-hidden="true"></i>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li>
                            <a class="danger" href="{{ route('logout') }}">
                                <i data-feather="log-out" aria-hidden="true"></i>
                                <span>Log out</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
