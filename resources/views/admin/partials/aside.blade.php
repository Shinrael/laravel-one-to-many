<aside class="bg-dark navbar-dark text-white flex-shrink-0">
    <nav>
        <ul>
            <li>
                <a href="{{ route('admin.projects.index') }}">
                    <i class="fa-solid fa-diagram-project"></i>
                    <span>Elenco Progetti</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.projects.create') }}">
                    <i class="fa-solid fa-square-plus"></i>
                    <span>Nuovo progetto</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.technologies.index') }}">
                    <i class="fa-solid fa-microchip"></i>
                    <span>Elenco Tecnologie</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.types.index') }}">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <span>Elenco Tipi</span>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.type_projects') }}">
                    <i class="fa-solid fa-clipboard-list"></i>
                    <span>Elenco Post per Tipi</span>
                </a>
            </li>
        </ul>
    </nav>
</aside>
