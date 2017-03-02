<ul class="menu-items">
    <li class="m-t-30 ">
        <a href="{{ route('backend.home') }}">
            <span class="title">Accueil</span>
        </a>
        <span class="{{ Request::is('/gestion') ? 'bg-primary' : '' }} icon-thumbnail"><i class="pg-home"></i></span>
    </li>
    <li>
        <a href="{{ route('backend.article.liste') }}">
            <span class="title">Mes articles</span>
        </a>
        <span class="{{ Request::is('/gestion/article') ? 'bg-primary' : '' }} icon-thumbnail"><i class="pg-ui"></i></span>
    </li>
    <li>
        <a href="{{ route('backend.commentaire.liste') }}">
            <span class="title">Commentaires</span>
        </a>
        <span class="{{ Request::is('/gestion') ? 'bg-primary' : '' }} icon-thumbnail"><i class="pg-comment"></i></span>
    </li>
    <li>
        <a href="{{ route('backend.home') }}">
            <span class="title">Paramètres</span>
        </a>
        <span class="{{ Request::is('/gestion') ? 'bg-primary' : '' }} icon-thumbnail"><i class="pg-laptop"></i></span>
    </li>
</ul>