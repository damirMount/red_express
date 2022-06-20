<header class="py-2 px-lg-0 d-flex justify-content-center position-fixed top-0 left-0 bg-lg-none bg-white red-express__header" style="z-index: 4; width: 100vw">

    <nav class="container justify-content-lg-between navbar navbar-expand-lg navbar-light">
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
            <div>
                <a class="navbar-brand" href="/">
                    <img src="/img/home/logo.png" alt="Logo">
                </a>
            </div>


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

            <div class="collapse navbar-collapse position-relative" style="flex-grow: 0;" id="navbarNav">
                <button
                    type="button"
                    class="btn-close position-absolute d-lg-none d-block"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                    style="right: 5%; top: 1%"
                ></button>
                <ul class="navbar-nav mt-5 mt-lg-0 red-express__links d-flex ms-5 ms-lg-0 align-items-lg-center">
                    <li class="nav-item mt-lg-0 mt-3">
                        <a class="nav-link"  href="/#about-company">О нас</a>
                    </li>
                    <li class="nav-item mt-lg-0 mt-3">
                        <a class="nav-link" href="/#price">Цены</a>
                    </li>
                    <li class="nav-item mt-lg-0 mt-3">
                        <a class="nav-link" href="/#representatives">Представительство</a>
                    </li>
                    <li class="nav-item mt-lg-0 mt-3">
                        <a class="nav-link" href="/#news">Новости</a>
                    </li>
                    <li class="nav-item mt-lg-0 mt-3">
                        <a class="nav-link" href="/#faq">FAQ</a>
                    </li>
                    <li class="nav-item mt-lg-0 mt-3">
                        @include('components.buttons.btn_search', ['text'=>"Отследить груз", 'class'=>"btn-green"])
                    </li>
                </ul>
            </div>
    </nav>
</header>
