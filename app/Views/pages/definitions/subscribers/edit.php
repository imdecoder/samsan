<?=$this->extend('layouts/main')?>

<?=$this->section('styles')?>
<?=link_tag('public/assets/css/vendor/quill.bubble.css')?>
<?=link_tag('public/assets/css/vendor/select2.min.css')?>
<?=link_tag('public/assets/css/vendor/select2-bootstrap4.min.css')?>
<?=link_tag('public/assets/css/vendor/tagify.css')?>
<?=link_tag('public/assets/css/vendor/dropzone.min.css')?>
<?=$this->endSection()?>

<?=$this->section('content')?>

<form action="<?=current_url()?>" method="post">

	<?=csrf_field()?>

	<!-- Title and Top Buttons Start -->
	<div class="page-title-container">
		<div class="row g-0">

			<!-- Title Start -->
			<div class="col-auto mb-3 mb-md-0 me-auto">
				<div class="w-auto">
					<a href="<?=site_url(route_to('definitions.subscribers'))?>" class="muted-link pb-1 d-inline-block breadcrumb-back">
						<i data-acorn-icon="chevron-left" data-acorn-size="13"></i>
						<span class="text-small align-middle">Aboneler</span>
					</a>
					<h1 class="mb-0 pb-0 display-4" id="title">
						Abone Düzenle
					</h1>
				</div>
			</div>
			<!-- Title End -->

			<!-- Top Buttons Start -->
			<div class="col-auto d-flex align-items-end justify-content-end">
                <a href="#" class="btn btn-outline-danger btn-icon btn-icon-start w-100 me-2">
                    <i data-acorn-icon="bin"></i>
                    <span>Sil</span>
                </a>
				<div class="btn-group ms-1 w-100 w-md-auto">
                    <button type="submit" class="btn btn-outline-primary btn-icon btn-icon-start w-100">
						<i data-acorn-icon="save"></i>
						<span>Kaydet</span>
					</button>
					<button
						type="button"
						class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split"
						data-bs-offset="0,3"
						data-bs-toggle="dropdown"
						aria-haspopup="true"
						aria-expanded="false"
					></button>
					<div class="dropdown-menu dropdown-menu-end">
						<button type="button" class="dropdown-item">
							Taslak
						</button>
						<button type="button" class="dropdown-item">
							İptal
						</button>
					</div>
				</div>
			</div>
			<!-- Top Buttons End -->

		</div>
	</div>
	<!-- Title and Top Buttons End -->

	<?=$this->include('layouts/partials/errors')?>

	<div class="row">
		<div class="col-xl-6 mb-5">
			<h2 class="small-title">
				Genel Bilgiler
			</h2>
			<div class="card">
				<div class="card-body">
					<div class="mb-3">
						<label class="form-label">
							Yıl
						</label>
						<input type="text" name="year" value="<?=$subscriber->getYear()?>" class="form-control" id="maskNumber">
					</div>
					<div class="mb-3">
						<label class="form-label">
							Abone No
						</label>
						<input type="text" name="no" value="<?=$subscriber->getNo()?>" class="form-control" disabled>
					</div>
					<div class="mb-3">
						<label class="form-label">
							Abone Adı
						</label>
						<input type="text" name="firstname" value="<?=$subscriber->getFirstname()?>" class="form-control">
					</div>
					<div class="mb-3">
						<label class="form-label">
							Abone Soyadı
						</label>
						<input type="text" name="lastname" value="<?=$subscriber->getLastname()?>" class="form-control">
					</div>
					<div class="mb-3">
						<label class="form-label">
							Abone Unvanı
						</label>
						<input type="text" name="degree" value="<?=$subscriber->getDegree()?>" class="form-control">
					</div>
					<div class="mb-0">
						<label class="form-label">
							Notlar
						</label>
						<textarea name="notes" rows="5" class="form-control"><?=$subscriber->getNotes()?></textarea>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6 mb-5">
			<h2 class="small-title">
				Ek Bilgiler
			</h2>
			<div class="card">
				<div class="card-body">
					<div class="mb-3">
						<label class="form-label">
							Sabit Telefon No
						</label>
						<input type="text" name="phone" value="<?=$subscriber->getPhone()?>" class="form-control">
					</div>
					<div class="mb-3">
						<label class="form-label">
							Cep Telefon No
						</label>
						<input type="text" name="mobile" value="<?=$subscriber->getMobile()?>" class="form-control">
					</div>
					<div class="mb-3 w-100">
						<label class="form-label">
							Sayaç Tipi
						</label>
						<select name="counter_type" class="select-single-no-search">
							<option value="<?=COUNTER_T?>" <?=$subscriber->getCounterType() == COUNTER_T ? 'selected' : null?>>
								Tenvirat
							</option>
							<option value="<?=COUNTER_M?>" <?=$subscriber->getCounterType() == COUNTER_M ? 'selected' : null?>>
								Motor
							</option>
							<option value="<?=COUNTER_TM?>" <?=$subscriber->getCounterType() == COUNTER_TM ? 'selected' : null?>>
								Tenvirat + Motor
							</option>
						</select>
					</div>
					<div class="mb-3 w-100">
						<label class="form-label">
							Mülk Sahibi
						</label>
						<select name="ownership" class="select-single-no-search">
							<option value="<?=SUBS_OWN_YES?>" <?=$subscriber->getOwnership() == SUBS_OWN_YES ? 'selected' : null?>>
								Evet
							</option>
							<option value="<?=SUBS_OWN_NO?>" <?=$subscriber->getOwnership() == SUBS_OWN_NO ? 'selected' : null?>>
								Hayır
							</option>
						</select>
					</div>
					<div class="mb-3">
						<label class="form-label">
							Depozit
						</label>
						<input type="text" name="deposit" placeholder="₺ 0,00" value="<?=$subscriber->getDeposit()?>" class="form-control mask-currency">
					</div>
					<div class="mb-3">
						<label class="form-label">
							Makbuz Tarihi
						</label>
						<input type="text" name="receipt_date" value="<?=$subscriber->getReceiptDate()?>" class="form-control">
					</div>
					<div class="mb-0">
						<label class="form-label">
							Makbuz Numarası
						</label>
						<input type="text" name="receipt_no" value="<?=$subscriber->getReceiptNo()?>" class="form-control">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xl-6">
			<h2 class="small-title">
				Tenvirat
			</h2>
			<div class="card">
				<div class="card-body">
					<div class="mb-3">
						<label class="form-label">
							Sayaç No
						</label>
						<input type="text" name="counter_lighting_no" value="<?=$subscriber->getCounterLightingNo()?>" class="form-control">
					</div>
					<div class="mb-3">
						<label class="form-label">
							Çarpan
						</label>
						<input type="text" name="counter_lighting_factor" value="<?=$subscriber->getCounterLightingFactor()?>" class="form-control">
					</div>
					<div class="mb-3">
						<label class="form-label">
							Sayaç Markası
						</label>
						<input type="text" name="counter_lighting_brand" value="<?=$subscriber->getCounterLightingBrand()?>" class="form-control">
					</div>
				</div>
			</div>
		</div>
		<div class="col-xl-6">
			<h2 class="small-title">
				Motor
			</h2>
			<div class="card">
				<div class="card-body">
					<div class="mb-3">
						<label class="form-label">
							Sayaç No
						</label>
						<input type="text" name="counter_engine_no" value="<?=$subscriber->getCounterEngineNo()?>" class="form-control">
					</div>
					<div class="mb-3">
						<label class="form-label">
							Çarpan
						</label>
						<input type="text" name="counter_engine_factor" value="<?=$subscriber->getCounterEngineFactor()?>" class="form-control">
					</div>
					<div class="mb-3">
						<label class="form-label">
							Sayaç Markası
						</label>
						<input type="text" name="counter_engine_brand" value="<?=$subscriber->getCounterEngineBrand()?>" class="form-control">
					</div>
				</div>
			</div>
		</div>
	</div>
</form>
<?=$this->endSection()?>

<?=$this->section('scripts.vendor')?>
<?=script_tag('public/assets/js/vendor/imask.js')?>
<?=script_tag('public/assets/js/vendor/quill.min.js')?>
<?=script_tag('public/assets/js/vendor/quill.active.js')?>
<?=script_tag('public/assets/js/vendor/select2.full.min.js')?>
<?=script_tag('public/assets/js/vendor/tagify.min.js')?>
<?=script_tag('public/assets/js/vendor/dropzone.min.js')?>
<?=$this->endSection()?>

<?=$this->section('scripts.page')?>
<?=script_tag('public/assets/js/forms/inputmask.js')?>
<?=script_tag('public/assets/js/cs/dropzone.templates.js')?>
<?=script_tag('public/assets/js/pages/products.detail.js')?>
<?=$this->endSection()?>
