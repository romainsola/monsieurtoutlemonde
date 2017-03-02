<ul class="menu-items">
    <li class="m-t-30 ">
        <a href="{{ route('backend.home') }}">
            <span class="title">Accueil</span>
        </a>
        <span class="{{ Request::is('/') ? 'bg-primary' : '' }} icon-thumbnail"><i class="pg-home"></i></span>
    </li>
</ul>