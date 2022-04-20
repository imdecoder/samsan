<?=$this->include('layouts/partials/header')?>

    <div id="root">
        <div id="nav" class="nav-container d-flex">
            <div class="nav-content d-flex">

                <!-- Logo Start -->
                <div class="logo position-relative">
                    <a href="index.html">

                        <!-- Logo can be added directly -->
                        <!-- <img src="assets/img/logo/logo-white.svg" alt="logo"> -->

                        <!-- Or added via css to provide different ones for different color themes -->
                        <div class="img"></div>
                    </a>
                </div>
                <!-- Logo End -->

                <!-- User Menu Start -->
                <div class="user-container d-flex">
                    <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="assets/img/profile/eminarif.jpg" alt="profile" class="profile">
                        <div class="name">
                            Emin Arif Pirinç
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end user-menu wide">
                        <div class="row mb-3 ms-0 me-0">
                            <div class="col-12 ps-1 mb-2">
                                <div class="text-extra-small text-primary">
                                    HESABIM
                                </div>
                            </div>
                            <div class="col-6 ps-1 pe-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            Bilgiler
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Takvim
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 pe-1 ps-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            Güvenlik
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Ödemeler
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mb-1 ms-0 me-0">
                            <div class="col-12 p-1 mb-2 pt-2">
                                <div class="text-extra-small text-primary">
                                    UYGULAMA
                                </div>
                            </div>
                            <div class="col-6 ps-1 pe-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            Temalar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Dil
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 pe-1 ps-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            Cihazlar
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            Depolama
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="row mb-1 ms-0 me-0">
                            <div class="col-12 p-1 mb-3 pt-3">
                                <div class="separator-light"></div>
                            </div>
                            <div class="col-6 ps-1 pe-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            <i class="me-2" data-acorn-icon="help" data-acorn-size="17"></i>
                                            <span class="align-middle">Yardım</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="me-2" data-acorn-icon="file-text" data-acorn-size="17"></i>
                                            <span class="align-middle">Belgeler</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-6 pe-1 ps-1">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#">
                                            <i class="me-2" data-acorn-icon="gear" data-acorn-size="17"></i>
                                            <span class="align-middle">Ayarlar</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="me-2" data-acorn-icon="logout" data-acorn-size="17"></i>
                                            <span class="align-middle">Çıkış Yap</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- User Menu End -->

                <!-- Icons Menu Start -->
                <ul class="list-unstyled list-inline text-center menu-icons">
                    <li class="list-inline-item">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#searchPagesModal">
                            <i data-acorn-icon="search" data-acorn-size="18"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="giris.html">
                            <i data-acorn-icon="lock-off" data-acorn-size="18"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" id="colorButton">
                            <i data-acorn-icon="light-on" class="light" data-acorn-size="18"></i>
                            <i data-acorn-icon="light-off" class="dark" data-acorn-size="18"></i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" data-bs-toggle="dropdown" data-bs-target="#notifications" aria-haspopup="true" aria-expanded="false" class="notification-button">
                            <div class="position-relative d-inline-flex">
                                <i data-acorn-icon="bell" data-acorn-size="18"></i>
                                <span class="position-absolute notification-dot rounded-xl"></span>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end wide notification-dropdown scroll-out" id="notifications">
                            <div class="scroll">
                                <ul class="list-unstyled border-last-none">
                                    <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                        <img src="assets/img/favicon/favicon-32x32.png" alt="..." class="me-3 sw-4 sh-4 rounded-xl align-self-center">
                                        <div class="align-self-center">
                                            <a href="yedekleme.html">
                                                Yedekleme işlemi tamamlandı.
                                            </a>
                                            <div class="text-small mt-1">
                                                18.04.2022
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                        <img src="assets/img/profile/profile-3.webp" alt="..." class="me-3 sw-4 sh-4 rounded-xl align-self-center">
                                        <div class="align-self-center">
                                            <a href="odeme.html">
                                                Yaklaşan bir ödeme bulundu.
                                            </a>
                                            <div class="text-small mt-1">
                                                18.04.2022
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                                        <img src="assets/img/profile/profile-4.webp" alt="..." class="me-3 sw-4 sh-4 rounded-xl align-self-center">
                                        <div class="align-self-center">
                                            <a href="odeme.html">
                                                Yaklaşan bir ödeme bulundu.
                                            </a>
                                            <div class="text-small mt-1">
                                                17.04.2022
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
                <!-- Icons Menu End -->

                <!-- Menu Start -->
                <div class="menu-container flex-grow-1">
                    <ul id="menu" class="menu">
                        <li>
                            <a href="index.html">
                                <i data-acorn-icon="shop" class="icon" data-acorn-size="18"></i>
                                <span class="label">Anasayfa</span>
                            </a>
                        </li>
                        <li>
                            <a href="#bilgiGirisi" data-href="bilgi-girisi.html">
                                <i data-acorn-icon="keyboard" class="icon" data-acorn-size="18"></i>
                                <span class="label">Bilgi Girişi</span>
                            </a>
                            <ul id="bilgiGirisi">
                                <li>
                                    <a href="endeks-bilgileri-girisi.html">
                                        <span class="label">Endeks Bilgileri Girişi</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="fatura-hesaplama-ve-tahsilati.html">
                                        <span class="label">Fatura Hes. ve Tahsilatı</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="tek-faturasi-girisi.html">
                                        <span class="label">TEK Faturası Girişi</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="abone-listesi.html">
                                        <span class="label">Abone Listesi</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="ayarlar.html">
                                <i data-acorn-icon="gear" class="icon" data-acorn-size="18"></i>
                                <span class="label">Ayarlar</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- Menu End -->

                <!-- Mobile Buttons Start -->
                <div class="mobile-buttons-container">

                    <!-- Menu Button Start -->
                    <a href="#" id="mobileMenuButton" class="menu-button">
                        <i data-acorn-icon="menu"></i>
                    </a>
                    <!-- Menu Button End -->

                </div>
                <!-- Mobile Buttons End -->

            </div>
            <div class="nav-shadow"></div>
        </div>
        <main>
            <div class="container">
	            <?=$this->renderSection('content')?>
            </div>
        </main>

        <!-- Layout Footer Start -->
        <footer>
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <p class="mb-0 text-muted text-medium">
                                &copy; Copyright SamSan
                            </p>
                        </div>
                        <div class="col-sm-6 d-none d-sm-block">
                            <ul class="breadcrumb pt-0 pe-0 mb-0 float-end">
                                <li class="breadcrumb-item mb-0 text-medium">
                                    <a href="yardim.html" target="_blank" class="btn-link">
                                        Yardım
                                    </a>
                                </li>
                                <li class="breadcrumb-item mb-0 text-medium">
                                    <a href="belgeler.html" target="_blank" class="btn-link">
                                        Belgeler
                                    </a>
                                </li>
                                <li class="breadcrumb-item mb-0 text-medium">
                                    <a href="ayarlar.html" target="_blank" class="btn-link">
                                        Ayarlar
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Layout Footer End -->

    </div>

    <!-- Search Modal Start -->
    <div class="modal fade modal-under-nav modal-search modal-close-out" id="searchPagesModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header border-0 p-0">
                    <button type="button" class="btn-close btn btn-icon btn-icon-only btn-foreground" data-bs-dismiss="modal" aria-label="İptal"></button>
                </div>
                <div class="modal-body ps-5 pe-5 pb-0 border-0">
                    <input id="searchPagesInput" class="form-control form-control-xl borderless ps-0 pe-0 mb-1 auto-complete" type="text" autocomplete="off">
                </div>
                <div class="modal-footer border-top justify-content-start ps-5 pe-5 pb-3 pt-3 border-0">
                        <span class="text-alternate d-inline-block m-0 me-3">
                            <i data-acorn-icon="arrow-bottom" data-acorn-size="15" class="text-alternate align-middle me-1"></i>
                            <span class="align-middle text-medium">Gezin</span>
                        </span>
                    <span class="text-alternate d-inline-block m-0 me-3">
                            <i data-acorn-icon="arrow-bottom-left" data-acorn-size="15" class="text-alternate align-middle me-1"></i>
                            <span class="align-middle text-medium">Seç</span>
                        </span>
                </div>
            </div>
        </div>
    </div>
    <!-- Search Modal End -->

<?=$this->include('layouts/partials/footer')?>
