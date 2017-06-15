<form name="hizli-form" id="hizli-form" action="formlar/form-php/form-to-mail-fast.php" method="post" onsubmit="return isFastVal(this)">

  <div class="form-group">
    <label for="realname">İsim & Soyisimiz*</label>
    <input type="namesurname" name="f_realname" id="f_realname" class="form-control" placeholder="İsim & Soyisim">
    <div id="f_name_hata" class="label label-warning">Lütfen İsim ve Soyisminizi giriniz.</div>
  </div>
  <div class="form-group">
    <label for="phonenumber">Telefon Numaranız*</label>
    <input type="phonenumber" name="f_telno" class="form-control" id="f_telno" placeholder="0xxxxxxxxxx">
    <div id="f_tel_hata" class="label label-warning">Lütfen telefon numaranızı başında alan kodunuz ile birlikte 10 hane olarak giriniz</div>
    <small class="text-muted">*Lütfen telefon numaranızı başında alan kodunuz ile birlikte 10 hane olarak giriniz</small>
  </div>
  <label for="aramaZamani">Ne Zaman Arayalım?</label>
	<select class="form-control" name="f-aranma-zamani" id="f-aranma-zamani">
	  <option value="">Zaman Seçiniz</option>
	  <option value="1">En Kısa Sürede</option>
	  <option value="2">Sabah</option>
	  <option value="3">Öğle</option>
	  <option value="4">Akşamüstü</option>
	  <option value="5">Akşam</option>
	</select>  
	</br>

	<button type="submit" class="btn btn-primary"  id="fast-f-btnGonder" name="submit" type="submit" value="Submit">Gönder</button>
	<br>
  
	<div id="f-form-gonderiliyor" class="label label-success" style="display: none; font-size: 1rem;">Form Gönderiliyor<i class="fa fa-cog fa-spin fa-fw margin-bottom"></i></div>
</form>

