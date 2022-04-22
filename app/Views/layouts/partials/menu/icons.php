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
						<img src="<?=base_url('public/assets/img/favicon/favicon-32x32.png')?>" alt="..." class="me-3 sw-4 sh-4 rounded-xl align-self-center">
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
						<img src="<?=base_url('public/assets/img/profile/profile-3.webp')?>" alt="..." class="me-3 sw-4 sh-4 rounded-xl align-self-center">
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
						<img src="<?=base_url('public/assets/img/profile/profile-4.webp')?>" alt="..." class="me-3 sw-4 sh-4 rounded-xl align-self-center">
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
