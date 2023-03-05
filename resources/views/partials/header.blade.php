<div class="header">
    <div class="header__title">Lê Tuấn</div>
    <div class="header__menu">
        <a href="{{ route('home') }}" class="{{ route('home') === url()->current() ? 'header__menu-is-active' : '' }}">Home</a>
        <a href="{{ route('about') }}" class="{{ route('about') === url()->current() ? 'header__menu-is-active' : '' }}">About</a>
        <a href="{{ route('blog') }}" class="{{ route('blog') === url()->current() ? 'header__menu-is-active' : '' }}">Blog</a>
        <a href="{{ route('contact') }}" class="{{ route('contact') === url()->current() ? 'header__menu-is-active' : '' }}">Contact</a>
    </div>
</div>
