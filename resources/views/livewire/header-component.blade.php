<div class="d-flex">
    <a class="header-brand" href="/">
        <img src="{{ asset('image/logo.png') }}" class="header-brand-img" alt="tabler logo">
    </a>
    <div class="d-flex order-lg-2 ml-auto">
{{--        <div class="dropdown d-none d-md-flex">--}}
{{--            <a class="nav-link icon" data-toggle="dropdown">--}}
{{--                <i class="fe fe-bell"></i>--}}
{{--                <span class="nav-unread"></span>--}}
{{--            </a>--}}
{{--            <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow" style="width: auto;">--}}
{{--                <a href="#" class="dropdown-item d-flex">--}}
{{--                    <span class="avatar mr-3 align-self-center" style="background-image: url({{asset('theme/tabler/dist/demo/faces/female/18.jpg')}})"></span>--}}
{{--                    <div class="overflow-hidden">--}}
{{--                        <strong>Rose</strong>--}}
{{--                        deployed new version of NodeJS REST Api V3--}}
{{--                        <div class="small text-muted">2 hours ago</div>--}}
{{--                    </div>--}}
{{--                </a>--}}
{{--                <div class="dropdown-divider"></div>--}}
{{--                <a href="#" class="dropdown-item text-center text-muted-dark">Mark all as read</a>--}}
{{--            </div>--}}
{{--        </div>--}}
        @auth
            <div class="dropdown">
                <a href="#" class="nav-link pr-0 leading-none" data-toggle="dropdown">
                    <span class="avatar" style="background-image: url(./demo/faces/female/25.jpg)"></span>
                    <span class="ml-2 d-none d-lg-block">
                      <span class="text-default">Jane Pearson</span>
                      <small class="text-muted d-block mt-1">Administrator</small>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="#">
                        <i class="dropdown-icon fe fe-user"></i> Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="dropdown-icon fe fe-settings"></i> Settings
                    </a>
                    <a class="dropdown-item" href="#">
                        <span class="float-right"><span class="badge badge-primary">6</span></span>
                        <i class="dropdown-icon fe fe-mail"></i> Inbox
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="dropdown-icon fe fe-send"></i> Message
                    </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <i class="dropdown-icon fe fe-help-circle"></i> Need help?
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="dropdown-icon fe fe-log-out"></i> Sign out
                    </a>
                </div>
            </div>
        @else
            <div class="nav-item d-none d-md-flex">
                <a href="{{ route('login') }}" class="btn btn-link text-decoration-none">Log in</a>
                @if (Route::has('register'))
                 <a href="{{ route('register') }}" class="btn btn-link border-left  text-decoration-none">Register</a>
                @endif
            </div>
        @endif
    </div>
    <a href="#" class="header-toggler d-lg-none ml-3 ml-lg-0" data-toggle="collapse" data-target="#headerMenuCollapse">
        <span class="header-toggler-icon"></span>
    </a>
</div>
