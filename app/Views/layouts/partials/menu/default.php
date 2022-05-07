<!-- Menu Start -->
<div class="menu-container flex-grow-1">
	<ul id="menu" class="menu">
		<li>
			<a href="<?=site_url(route_to('home'))?>">
				<i data-acorn-icon="shop" class="icon" data-acorn-size="18"></i>
				<span class="label">Anasayfa</span>
			</a>
		</li>
        <li>
            <a href="#definitions" data-href="<?=site_url(route_to('definitions'))?>">
                <i data-acorn-icon="attachment" class="icon" data-acorn-size="18"></i>
                <span class="label">Tanımlar</span>
            </a>
            <ul id="definitions">
                <li>
                    <a href="<?=site_url(route_to('definitions.subscribers'))?>">
                        <span class="label">Abone Tanımı</span>
                    </a>
                </li>
                <li>
                    <a href="<?=site_url(route_to('definitions.rates'))?>">
                        <span class="label">KDV, Ceza Ora. & Birim Fiy.</span>
                    </a>
                </li>
                <li>
                    <a href="<?=site_url(route_to('definitions.unsubscribers'))?>">
                        <span class="label">İlişik Kesen Aboneler</span>
                    </a>
                </li>
            </ul>
        </li>
		<li>
			<a href="#entries" data-href="<?=site_url(route_to('entries'))?>">
				<i data-acorn-icon="keyboard" class="icon" data-acorn-size="18"></i>
				<span class="label">Bilgi Girişi</span>
			</a>
			<ul id="entries">
                <li>
                    <a href="<?=site_url(route_to('entries.endexes'))?>">
                        <span class="label">Endeks Bilgileri Girişi</span>
                    </a>
                </li>
                <li>
                    <a href="<?=site_url(route_to('entries.invoices'))?>">
                        <span class="label">Fatura Hes. ve Tahsilatı</span>
                    </a>
                </li>
                <li>
                    <a href="<?=site_url(route_to('entries.tek'))?>">
                        <span class="label">TEK Faturası Girişi</span>
                    </a>
                </li>
                <li>
                    <a href="<?=site_url(route_to('entries.subscribers'))?>">
                        <span class="label">Abone Listesi</span>
                    </a>
                </li>
			</ul>
		</li>
        <li>
            <a href="<?=site_url(route_to('castings'))?>">
                <i data-acorn-icon="book" class="icon" data-acorn-size="18"></i>
                <span class="label">Dökümler</span>
            </a>
        </li>
        <li>
            <a href="<?=site_url(route_to('reports'))?>">
                <i data-acorn-icon="chart-4" class="icon" data-acorn-size="18"></i>
                <span class="label">Raporlar</span>
            </a>
        </li>
		<li>
			<a href="<?=site_url(route_to('settings'))?>">
				<i data-acorn-icon="gear" class="icon" data-acorn-size="18"></i>
				<span class="label">Ayarlar</span>
			</a>
		</li>
	</ul>
</div>
<!-- Menu End -->
