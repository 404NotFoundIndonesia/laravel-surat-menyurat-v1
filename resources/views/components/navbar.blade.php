<nav
    class="layout-navbar container-xxl zindex-5 navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
    id="layout-navbar"
>
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="bx bx-menu bx-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <!-- Search -->
        <form action="{{ url()->current() }}">
            <div class="navbar-nav align-items-center">
                <div class="nav-item d-flex align-items-center">
                    <i class="bx bx-search fs-4 lh-0"></i>
                    <input
                        type="text"
                        name="search"
                        value="{{ $search ?? '' }}"
                        class="form-control border-0 shadow-none"
                        placeholder="{{ __('navbar.search') }}"
                        aria-label="{{ __('navbar.search') }}"
                    />

                </div>
            </div>
        </form>
        <!-- /Search -->

        <ul class="navbar-nav flex-row align-items-center ms-auto">
            <!-- User -->
            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                   data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{ auth()->user()->profile_picture }}" alt
                             class="w-px-40 h-auto rounded-circle"/>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <img src="{{ auth()->user()->profile_picture }}" alt
                                             class="w-px-40 h-auto rounded-circle"/>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{{ auth()->user()->name }}</span>
                                    <small class="text-muted text-capitalize">{{ auth()->user()->role }}</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('profile.show') }}">
                            <i class="bx bx-user me-2"></i>
                            <span class="align-middle">{{ __('navbar.profile.profile') }}</span>
                        </a>
                    </li>
                    @if(auth()->user()->role == 'admin')
                    <li>
                        <a class="dropdown-item" href="{{ route('settings.show') }}">
                            <i class="bx bx-cog me-2"></i>
                            <span class="align-middle">{{ __('navbar.profile.settings') }}</span>
                        </a>
                    </li>
                    @endif
                    {{--                    <li>--}}
                    {{--                        <a class="dropdown-item" href="#">--}}
                    {{--                                        <span class="d-flex align-items-center align-middle">--}}
                    {{--                                          <i class="flex-shrink-0 bx bx-bell me-2"></i>--}}
                    {{--                                          <span class="flex-grow-1 align-middle">{{ __('navbar.profile.notifications') }}</span>--}}
                    {{--                                          <span--}}
                    {{--                                              class="flex-shrink-0 badge badge-center rounded-pill bg-danger w-px-20 h-px-20">4</span>--}}
                    {{--                                        </span>--}}
                    {{--                        </a>--}}
                    {{--                    </li>--}}
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="dropdown-item cursor-pointer">
                                <i class="bx bx-power-off me-2"></i>
                                <span class="align-middle">{{ __('navbar.profile.logout') }}</span>
                            </button>
                        </form>
                    </li>
                </ul>
            </li>
            <!--/ User -->
        </ul>
    </div>
</nav>
