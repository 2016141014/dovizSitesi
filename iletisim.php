<?php require_once "header.php" ?>

<section class="kurumsal_head">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-6">
				<h1 class="h1_kurum">İletişim Bilgileri</h1>
			</div>
		</div>
	</div>
</section>
<div class="sliderAlt"></div>
<section class="iletisim">
	<div class="container text-center">
		<h3>İletişim Bilgileri</h3>
		<div class="row">
			<div class="col-md-3 itetisim_kutu">
				<img src="images/icon_telefon.png" alt="Telefon">
				<br>
				<strong>Telefon:</strong>
				<br>
				<a href="tel:0346 224 66 62">0346 224 66 62</a>
			</div>
			<div class="col-md-3 itetisim_kutu">
				<img src="images/icon_fax.png" alt="Fax">
				<br>
				<strong>Fax:</strong>
				<br>
				<a href="tel:0346 223 14 32">0346 223 14 32</a>
			</div>
			<div class="col-md-3 itetisim_kutu">
				<img src="images/icon_eposta.png" alt="E-Posta">
				<br>
				<strong>E-Posta:</strong>
				<br>
				<a href="info@bugradoviz.com.tr">info@bugradoviz.com.tr</a>
			</div>
			<div class="col-md-3 itetisim_kutu">
				<img src="images/icon_adres.png" alt="Adresi">
				<br>
				<strong>Adres:</strong>
				<br>
				<a href="#">Eski Kale Mah. Atatürk Cad. Meydan İş Merkezi No:18 / SİVAS</a>
			</div>
		</div>
	</div>
</section>
<div class="iletisim_alt"></div>
<section class="form" style="width: 100%;">
    <form style="margin-left: 350px; margin-bottom: 50px; margin-top: 50px;">
        <div class="row">
            <div class="form-group col-md-8">
                <label for="adSoyad">İsim Soyisim</label>
                <input type="text" class="form-control" placeholder="İsim & Soyisimiz">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8">
                <label for="telefon">Telefon</label>
                <input type="text" class="form-control" placeholder="Telefon Numaranız">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8">
                <label for="telefon">E-Posta</label>
                <input type="text" class="form-control" placeholder="E-Posta Adresiniz">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-8">
                <label for="guvenlik">Güvenlik Kodu: <t id="kod">1</t> </label>
                <input type="number" class="form-control" placeholder="Lütfen üsteki güvenlik kodunu girin">
            </div>
        </div>

        <script>
            var a = Math.floor(Math.random()*900)+100;
            document.getElementById("kod").innerHTML = a;
        </script>

        <div class="row">
            <div class="form-group col-md-8">
                <label for="mesaj">Mesaj</label>
                <textarea class="form-control rounded-0" rows="3" placeholder="Mesajınız"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Gönder</button>
    </form>
</section>
<?php require_once "footer.php" ?>
