<!DOCTYPE html>
<html lang="tr" data-footer="true">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">

    <title>SamSan</title>
    <meta name="robots" content="noindex, nofollow">

	<?=$this->include('layouts/partials/icons')?>
	<?=$this->include('layouts/partials/fonts')?>

    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="<?=base_url('public/assets/css/vendor/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('public/assets/css/vendor/OverlayScrollbars.min.css')?>">
    <?=$this->renderSection('styles')?>
    <!-- Vendor Styles End -->

    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="<?=base_url('public/assets/css/styles.css')?>">
    <!-- Template Base Styles End -->

    <link rel="stylesheet" href="<?=base_url('public/assets/css/main.css')?>">

    <script src="<?=base_url('public/assets/js/base/loader.js')?>"></script>
</head>
<body>
    <div id="root">
        <div id="nav" class="nav-container d-flex">
            <div class="nav-content d-flex">

	            <?=$this->include('layouts/partials/logo')?>

	            <?=$this->include('layouts/partials/menu/user')?>

	            <?=$this->include('layouts/partials/menu/icons')?>

	            <?=$this->include('layouts/partials/menu/default')?>

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

        <?=$this->include('layouts/partials/footer')?>

    </div>

    <?=$this->include('layouts/partials/search')?>

    <!-- Vendor Scripts Start -->
    <script src="<?=base_url('public/assets/js/vendor/jquery-3.5.1.min.js')?>"></script>
    <script src="<?=base_url('public/assets/js/vendor/bootstrap.bundle.min.js')?>"></script>
    <script src="<?=base_url('public/assets/js/vendor/OverlayScrollbars.min.js')?>"></script>
    <script src="<?=base_url('public/assets/js/vendor/autoComplete.min.js')?>"></script>
    <script src="<?=base_url('public/assets/js/vendor/clamp.min.js')?>"></script>

    <script src="<?=base_url('public/assets/icon/acorn-icons.js')?>"></script>
    <script src="<?=base_url('public/assets/icon/acorn-icons-interface.js')?>"></script>
    <script src="<?=base_url('public/assets/icon/acorn-icons-commerce.js')?>"></script>

    <?=$this->renderSection('scripts.vendor')?>
    <!-- Vendor Scripts End -->

    <!-- Template Base Scripts Start -->
    <script src="<?=base_url('public/assets/js/base/helpers.js')?>"></script>
    <script src="<?=base_url('public/assets/js/base/globals.js')?>"></script>
    <script src="<?=base_url('public/assets/js/base/nav.js')?>"></script>
    <script src="<?=base_url('public/assets/js/base/search.js')?>"></script>
    <script src="<?=base_url('public/assets/js/base/settings.js')?>"></script>
    <!-- Template Base Scripts End -->

    <!-- Page Specific Scripts Start -->
    <?=$this->renderSection('scripts.page')?>
    <script src="<?=base_url('public/assets/js/common.js')?>"></script>
    <script src="<?=base_url('public/assets/js/scripts.js')?>"></script>
    <!-- Page Specific Scripts End -->

</body>
</html>
