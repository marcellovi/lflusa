<nav class="navbar navbar-expand-lg bg-light shadow-lg">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="{{ asset('assets/images/logo-lfl.png') }}" class="logo img-fluid" alt="Frei Luiz">
            <span>
                    Lar Frei Luiz - USA
                    <small>Non-profit Organization</small>
                </span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="index.php">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link click-scroll dropdown-toggle" href="#"
                       role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">About</a>
                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Administração</a></li>
                        <li><a class="dropdown-item" href="larluizfrei.php">Lar Frei Luiz</a></li>
                        <li><a class="dropdown-item" href="espiritismo.php">O Espiritismo</a></li>
                        <li><a class="dropdown-item" href="fundadores.php">Os Fundadores</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="library.php">Library</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="bazaar.php">Bazaar</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link click-scroll dropdown-toggle" href="#"
                       id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown"
                       aria-expanded="false">Agenda</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item mt-2" href="#">LFL News</a></li>
                        <div class="dropdown-divider"></div>
                        <li><a class="dropdown-item" href="#">Cursos & Treinamentos</a></li>
                        <li><a class="dropdown-item" href="#">Our Calendar</a></li>
                        <li><a class="dropdown-item" href="#">Message Board</a></li>
                        <li><a class="dropdown-item" href="#">Ações Sociais</a></li>
                        <li><a class="dropdown-item" href="#">Parcerias</a></li>
                        <li><a class="dropdown-item" href="#">Estudos Doutrinarios</a></li>
                        <li><a class="dropdown-item" href="#">Photo Galery</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link click-scroll" href="#section_6">Contact</a>
                </li>

                <li class="nav-item ms-3">
                    <a class="nav-link custom-btn custom-border-btn btn" href="https://www.paypal.com/donate/?hosted_button_id=YKMAEAZ4C86DU">Donate</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
