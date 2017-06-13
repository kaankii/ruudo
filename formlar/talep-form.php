<form name="talep-form" method="post" onsubmit="return isFastVal(this)">

  <div class="form-group">
    <label for="realname">İsim & Soyisim*</label>
    <input type="namesurname" name="fullname" id="f_realname" class="form-control" placeholder="İsim & Soyisim">
	  <div id="f_name_hata" class="label label-warning">Lütfen İsim ve Soyisminizi giriniz.</div>
  </div>
  <div class="form-group">
    <label for="phonenumber">Telefon Numaranız*</label>
    <input type="phonenumber" name="phone" class="form-control" id="f_telefonno" placeholder="0xxxxxxxxxx">
	  <div id="f_tel_hata" class="label label-warning">Lütfen telefon numaranızı başında alan kodunuz ile birlikte 10 hane olarak giriniz</div>
    <small class="text-muted">*Lütfen telefon numaranızı başında alan kodunuz ile birlikte 10 hane olarak giriniz</small>
  </div>
  <label for="aramaZamani">Ne Zaman Arayalım?</label>
	<select class="form-control" name="nezaman_arayalim" id="f-aranma-zamani">
	  <option value="">Zaman Seçiniz</option>
	  <option value="1">En Kısa Sürede</option>
	  <option value="2">Sabah</option>
	  <option value="3">Öğle</option>
	  <option value="4">Akşamüstü</option>
	  <option value="5">Akşam</option>
	</select>  
	</br>

	<?php if ($page!=="hizli-form") { echo '<button type="button" class="btn btn-default" data-dismiss="modal">Kapat</button>'; } ?>
	<button type="submit" class="btn btn-primary"  id="fast-f-btnGonder" name="submit" type="submit" value="Submit">Gönder</button>
	<br>

</form>


