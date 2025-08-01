<header class="top-header">
    <nav class="navbar navbar-expand">
        <div class="mobile-toggle-icon d-xl-none">
            <i class="bi bi-list"></i>
        </div>
        <div class="top-navbar d-none d-xl-block">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">Dashboard</a>
                </li>
            </ul>
        </div>
        <div class="search-toggle-icon d-xl-none ms-auto">
            <i class="bi bi-search"></i>
        </div>
        <form class="searchbar d-none d-xl-flex ms-auto">
            <div class="position-absolute top-50 translate-middle-y search-icon ms-3"><i class="bi bi-search"></i></div>
            <input class="form-control" type="text" placeholder="Type here to search">
            <div class="position-absolute top-50 translate-middle-y d-block d-xl-none search-close-icon"><i
                    class="bi bi-x-lg"></i></div>
        </form>
        <div class="top-navbar-right ms-3">
            <ul class="navbar-nav align-items-center">
                <li class="nav-item dropdown dropdown-large">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                        data-bs-toggle="dropdown">
                        <div class="user-setting d-flex align-items-center gap-1">
                            <img src="{{ $authAdmin->profile_picture }}" class="user-img" alt="">
                            <div class="user-name d-none d-sm-block">{{ $authAdmin->username ?? 'John Doe' }}
                            </div>
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <img src="{{ $authAdmin->profile_picture }}" alt=""
                                        class="rounded-circle" width="60" height="60">
                                    <div class="ms-3">
                                        <h6 class="mb-0 dropdown-user-name">
                                            {{ $authAdmin->username ?? 'John Doe' }}</h6>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('admin.profile') }}">
                                <div class="d-flex align-items-center">
                                    <div class="setting-icon"><i class="bi bi-person-fill"></i></div>
                                    <div class="setting-text ms-3"><span>Profile</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="setting-icon"><i class="bi bi-gear-fill"></i></div>
                                    <div class="setting-text ms-3"><span>Setting</span></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <form action="{{ route('admin.logout') }}" method="POST"
                                onclick="event.preventDefault(); this.submit();">
                                @csrf
                                <a class="dropdown-item" href="javascript:void(0);">
                                    <div class="d-flex align-items-center">
                                        <div class="setting-icon"><i class="bi bi-lock-fill"></i></div>
                                        <div class="setting-text ms-3"><span>Logout</span></div>
                                    </div>
                                </a>
                            </form>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown dropdown-large d-none d-sm-block">
                    <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#"
                        data-bs-toggle="dropdown">
                        <div class="notifications">
                            <span class="notify-badge">8</span>
                            <i class="bi bi-bell-fill"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end p-0">
                        <div class="p-2 border-bottom m-2">
                            <h5 class="h5 mb-0">Notifications</h5>
                        </div>
                        <div class="header-notifications-list p-2">
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="notification-box"><i class="bi bi-basket2-fill"></i></div>
                                    <div class="ms-3 flex-grow-1">
                                        <h6 class="mb-0 dropdown-msg-user">New Orders <span
                                                class="msg-time float-end text-secondary">1 m</span></h6>
                                        <small
                                            class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">You
                                            have recived new orders</small>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="notification-box"><i class="bi bi-mic-fill"></i></div>
                                    <div class="ms-3 flex-grow-1">
                                        <h6 class="mb-0 dropdown-msg-user">Your item is shipped <span
                                                class="msg-time float-end text-secondary">7 m</span></h6>
                                        <small
                                            class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Successfully
                                            shipped your item</small>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="notification-box"><i class="bi bi-lightbulb-fill"></i></div>
                                    <div class="ms-3 flex-grow-1">
                                        <h6 class="mb-0 dropdown-msg-user">Defense Alerts <span
                                                class="msg-time float-end text-secondary">2 h</span></h6>
                                        <small
                                            class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">45%
                                            less alerts last 4 weeks</small>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="notification-box"><i class="bi bi-bookmark-heart-fill"></i></div>
                                    <div class="ms-3 flex-grow-1">
                                        <h6 class="mb-0 dropdown-msg-user">4 New Sign Up <span
                                                class="msg-time float-end text-secondary">2 w</span></h6>
                                        <small
                                            class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">New
                                            4 user registartions</small>
                                    </div>
                                </div>
                            </a>
                            <a class="dropdown-item" href="#">
                                <div class="d-flex align-items-center">
                                    <div class="notification-box"><i class="bi bi-briefcase-fill"></i></div>
                                    <div class="ms-3 flex-grow-1">
                                        <h6 class="mb-0 dropdown-msg-user">All Documents Uploaded <span
                                                class="msg-time float-end text-secondary">1 mo</span></h6>
                                        <small
                                            class="mb-0 dropdown-msg-text text-secondary d-flex align-items-center">Sussessfully
                                            uploaded all files</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <div>
                                <hr class="dropdown-divider">
                            </div>
                            <a class="dropdown-item" href="#">
                                <div class="text-center">View All Notifications</div>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
