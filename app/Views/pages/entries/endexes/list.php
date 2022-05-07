<?=$this->extend('layouts/main')?>

<?=$this->section('styles')?>
<!-- ./add "custom" styles -->
<?=$this->endSection()?>

<?=$this->section('content')?>
	<!-- Title and Top Buttons Start -->
	<div class="page-title-container">
		<div class="row">

			<!-- Title Start -->
			<div class="col-auto mb-3 mb-md-0 me-auto">
				<div class="w-auto">
					<a href="<?=site_url(route_to('entries'))?>" class="muted-link pb-1 d-inline-block breadcrumb-back">
						<i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
						<span class="text-small align-middle">Bilgi Girişi</span>
					</a>
					<h1 class="mb-0 pb-0 display-4" id="title">
						<a href="<?=site_url(route_to('entries.endexes'))?>">
							Endeks Bilgileri
						</a>
					</h1>
				</div>
			</div>
			<!-- Title End -->

			<!-- Top Buttons Start -->
			<div class="col-3 d-flex align-items-end justify-content-end">

				<a href="<?=site_url(route_to('entries.endexes.add'))?>" class="btn btn-outline-primary btn-icon btn-icon-start ms-0 ms-sm-1 w-100 w-md-auto">
					<i data-acorn-icon="plus"></i>
					<span class="d-none d-lg-inline-block">Yeni Kayıt</span>
				</a>

				<!-- Check Button Start -->
				<div class="btn-group ms-1 check-all-container">
					<div class="btn btn-outline-primary btn-custom-control p-0 ps-3 pe-2" data-target="#checkboxTable">
							<span class="form-check float-end">
								<input type="checkbox" class="form-check-input" id="checkAll">
							</span>
					</div>
					<button
						type="button"
						class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
						data-bs-offset="0,3"
						data-bs-toggle="dropdown"
						aria-haspopup="true"
						aria-expanded="false"
					></button>
					<div class="dropdown-menu dropdown-menu-end">
						<a href="#" class="dropdown-item">
							<span class="align-middle d-inline-block">Durumu Değiştir</span>
						</a>
						<a href="#" class="dropdown-item">
							<span class="align-middle d-inline-block">Taşı</span>
						</a>
						<a href="#" class="dropdown-item">
							<span class="align-middle d-inline-block">Sil</span>
						</a>
					</div>
				</div>
				<!-- Check Button End -->

			</div>
			<!-- Top Buttons End -->

		</div>
	</div>
	<!-- Title and Top Buttons End -->

	<!-- Controls Start -->
	<div class="row mb-2">

		<!-- Search Start -->
		<div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
			<div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
				<form action="<?=current_url()?>" method="post">

                    <?=csrf_field()?>

					<input type="text" name="q" placeholder="Ara" class="form-control">
					<span class="search-magnifier-icon">
                        <i data-acorn-icon="search"></i>
                    </span>
				</form>
				<span class="search-delete-icon d-none">
                    <i data-acorn-icon="close"></i>
                </span>
			</div>
		</div>
		<!-- Search End -->

		<div class="col-sm-12 col-md-7 col-lg-9 col-xxl-10 text-end mb-1">
			<div class="d-inline-block">

				<!-- Print Button Start -->
				<button
					type="button"
					title="Yazdır"
					class="btn btn-icon btn-icon-only btn-foreground-alternate shadow"
					data-bs-toggle="tooltip"
					data-bs-placement="top"
					data-bs-delay="0"
				>
					<i data-acorn-icon="print"></i>
				</button>
				<!-- Print Button End -->

				<!-- Export Dropdown Start -->
				<div class="d-inline-block">
					<button
						type="button"
						title="Dışarı Aktar"
						class="btn btn-icon btn-icon-only btn-foreground-alternate shadow"
						data-bs-toggle="tooltip"
						data-bs-placement="top"
						data-bs-delay="0"
					>
						<i data-acorn-icon="download"></i>
					</button>
				</div>
				<!-- Export Dropdown End -->

				<!-- Length Start -->
				<div class="dropdown-as-select d-inline-block" data-childSelector="span">
					<button type="button" class="btn p-0 shadow" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-bs-offset="0,3">
							<span
								class="btn btn-foreground-alternate dropdown-toggle"
								data-bs-toggle="tooltip"
								data-bs-placement="top"
								data-bs-delay="0"
								title="Abone Sayısı"
							>
								10 Abone
							</span>
					</button>
					<div class="dropdown-menu shadow dropdown-menu-end">
						<a href="#" class="dropdown-item">
							5 Abone
						</a>
						<a href="#" class="dropdown-item active">
							10 Abone
						</a>
						<a href="#" class="dropdown-item">
							20 Abone
						</a>
					</div>
				</div>
				<!-- Length End -->

			</div>
		</div>
	</div>
	<!-- Controls End -->

	<!-- Customers List Start -->
	<div class="row">
		<div class="col-12 mb-5">
			<div class="card mb-2 bg-transparent no-shadow d-none d-lg-block">
				<div class="row g-0 sh-3">
					<div class="col">
						<div class="card-body pt-0 pb-0 h-100">
							<div class="row g-0 h-100 align-content-center">
								<div class="col-lg-1 d-flex align-items-center mb-2 mb-lg-0 text-muted text-small text-uppercase">
									Abone No
								</div>
								<div class="col-lg-2 d-flex align-items-center text-muted text-small text-uppercase">
									Ad Soyad
								</div>
                                <div class="col-lg-2 d-flex align-items-center text-muted text-small text-uppercase">
                                    Dönem
                                </div>
                                <div class="col-lg-2 d-flex align-items-center text-muted text-small text-uppercase">
                                    Son Endeks
                                </div>
                                <div class="col-lg-2 d-flex align-items-center text-muted text-small text-uppercase">
                                    Fatura Tutarı
                                </div>
								<div class="col-lg-2 d-flex align-items-center text-muted text-small text-uppercase">
									Son Ödeme Tarihi
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="checkboxTable">

				<?php foreach ($endexes as $endex) : ?>
					<div class="card mb-2">
						<div class="card-body pt-0 pb-0 sh-30 sh-lg-8">
							<div class="row g-0 h-100 align-content-center">
								<div class="col-11 col-lg-1 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-1 order-lg-1 h-lg-100 position-relative">
									<div class="text-muted text-small d-lg-none">
										Abone No
									</div>
									<a href="<?=site_url(route_to('definitions.subscribers.edit', $endex->subscriber_id))?>" class="text-truncate h-100 d-flex align-items-center">
										<?=$endex->getNo()?>
									</a>
								</div>
								<div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-3 order-lg-2">
									<div class="text-muted text-small d-lg-none">
										Ad Soyad
									</div>
									<div class="text-alternate">
										<?=$endex->getFullName()?>
									</div>
								</div>
								<div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-4 order-lg-4">
									<div class="text-muted text-small d-lg-none">
                                        Dönem
									</div>
									<div class="text-alternate">
										<?=$endex->period?>
									</div>
								</div>
								<div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
									<div class="text-muted text-small d-lg-none">
										Son Endeks
									</div>
									<div class="text-alternate">
										<?=$endex->lighting_endex?>
									</div>
								</div>
                                <div class="col-6 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-5 order-lg-4">
                                    <div class="text-muted text-small d-lg-none">
                                        Fatura Tutarı
                                    </div>
                                    <div class="text-alternate">
										<?=$endex->billing_price?>
                                    </div>
                                </div>
								<div class="col-12 col-lg-2 d-flex flex-column justify-content-center mb-2 mb-lg-0 order-last order-lg-5">
									<div class="text-muted text-small d-lg-none mb-1">
                                        Son Ödeme Tarihi
									</div>
                                    <div class="text-alternate">
										<?=$endex->due_date?>
                                    </div>
								</div>
								<div class="col-1 col-lg-1 d-flex flex-column justify-content-center align-items-lg-end mb-2 mb-lg-0 order-2 text-end order-lg-last">
									<label class="form-check float-end pe-none mt-1">
										<input type="checkbox" name="<?=$endex->id?>" class="form-check-input">
									</label>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; ?>

			</div>
		</div>
	</div>
	<!-- Customers List End -->

	<!-- Pagination Start -->
	<div class="d-flex justify-content-center">
		<?=$pager->links('default', 'custom_pager')?>
	</div>
	<!-- Pagination End -->
<?=$this->endSection()?>

<?=$this->section('scripts.vendor')?>
<!-- ./add "vendor" scripts -->
<?=$this->endSection()?>

<?=$this->section('scripts.page')?>
	<?=script_tag('public/assets/js/cs/checkall.js')?>
	<?=script_tag('public/assets/js/pages/customers.list.js')?>
<?=$this->endSection()?>
