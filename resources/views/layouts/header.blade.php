<nav class="container-fluid px-lg-0 navbar navbar-expand-lg navbar-light red-express__header position-fixed bg-lg-none bg-white">
    <div class="container px-0">
        <button
                class="navbar-toggler d-none border-0 ps-2 pe-0 ms-2"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
        <a class="navbar-brand logo" href="/">
            <img src="/img/home/logo.png" alt="Logo">
        </a>


        <div class="d-flex d-lg-none">
            @include('components.buttons.btn_search', ['text'=>"Отследить", 'class'=>"btn-sm-green"])
            <button
                class="navbar-toggler border-0 ps-2 pe-0 ms-2"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-controls="navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse position-relative" id="navbarNav">
            <button
                type="button"
                class="btn-close position-absolute d-lg-none d-block"
                data-bs-toggle="collapse"
                data-bs-target="#navbarNav"
                aria-expanded="false"
                aria-label="Toggle navigation"
                style="right: 5%; top: 1%"
            ></button>
            <ul class="navbar-nav mt-5 mt-lg-0 red-express__links d-flex align-items-center">
                <li class="nav-item mt-lg-0 mt-3">
                    <a class="nav-link"  href="#">О нас</a>
                </li>
                <li class="nav-item mt-lg-0 mt-3">
                    <a class="nav-link" href="#">Цены</a>
                </li>
                <li class="nav-item mt-lg-0 mt-3">
                    <a class="nav-link" href="#">Представительство</a>
                </li>
                <li class="nav-item mt-lg-0 mt-3">
                    <a class="nav-link" href="/news">Новости</a>
                </li>
                <li class="nav-item mt-lg-0 mt-3">
                    <a class="nav-link" href="#">FAQ</a>
                </li>
                <li class="nav-item mt-lg-0 mt-3">
                    @include('components.buttons.btn_search', ['text'=>"Отследить груз", 'class'=>"btn-green"])
                </li>
            </ul>
        </div>
    </div>
</nav>
