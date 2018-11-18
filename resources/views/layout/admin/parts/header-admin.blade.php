<header class="app-header">
    <div class="app-header__logo">
        <a href="/"><img src="{{ URL::asset('/images/placeholder-logo.png') }}" alt="Logo" /></a>
    </div>
    <div class="app-header__menu">
        <ul>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
            <li><a href="#"></a></li>
        </ul>
    </div>
    <div class="app-header__profile">
        <img src="{{ URL::asset('/images/placeholder-face.png') }}" alt="#" class="app-header__profile-photo" />
        <div class="app-header__profile-name">
            Red Ribbon <i class="material-icons">arrow_drop_down</i>
            <ul class="app-header__profile-name-dropdown">
                <li><a href="#">Settings</a></li>
            <li><a href="{{ route('admin.logout') }}">Logout</a></li>
            </ul>
        </div>
    </div>
    <div class="app-header__menu-toggle">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
</header>