<div class="container">
    <div class="row align-items-center">
        <div class="col-lg order-lg-first">
            <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link @if(\Request::routeIs('home')) active @endif">
                        <i class="fe fe-home"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('my.profile') }}" class="nav-link @if(\Request::routeIs('my.profile')) active @endif">
                        <i class="fe fe-user"></i> My Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index.html" class="nav-link"><i class="fe fe-message-square"></i> Requests</a>
                </li>
                <li class="nav-item">
                    <a href="./index.html" class="nav-link"><i class="fe fe-settings"></i> Settings</a>
                </li>
            </ul>
        </div>
    </div>
</div>
