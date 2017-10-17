<!DOCTYPE html>
<html lang="tr">
<head>

<!-- Basic 
================================================== -->
<meta charset="utf-8">
<title><?php echo $page_title; ?></title>
<meta name="description" content="<?php echo $page_desc; ?>">
<meta name="keywords" content="<?php echo $page_keywords; ?>">
<meta name="author" content="melih şahinkesen">

<meta name="abstract" content="glutensiz ve sekersiz cafe">
<meta name="robots" content="index, follow">
<meta name="google-site-verification" content="">



<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="x-ua-compatible" content="ie=edge">

<!-- CSS
================================================== -->
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
<!-- Costom CSS -->
<link rel="stylesheet" href="assets/css/style.css" type="text/css" />
<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://use.fontawesome.com/eb12bfb416.css">
<!-- Flaticons CSS -->
<link rel="stylesheet" type="text/css" href="assets/css/flaticon.css">
<!-- Date time picker  CSS -->
<link rel="stylesheet" href="assets/css/datepicker.min.css"/>

<!-- SON KONTROL ET-->
<?php 
	if($page == "galeri" OR $page == "balayi" OR $page == "odalar" OR $page == "mice" OR $page == "casino") { 
		echo "<link rel='stylesheet' href='assets/css/gallery-masonry.css'/>"; 
	} 
?>

<!-- Fonts
================================================== -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600|Raleway|Roboto:300,400&amp;subset=latin-ext" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<!-- Favicons
================================================== -->
<link rel="shortcut icon" type="image/vnd.microsoft.icon" href="assets/images/favicons/favicon.ico">
<link rel="apple-touch-icon" type="image/png" href="assets/images/favicons/favicon_57.png"><!-- iPhone -->
<link rel="apple-touch-icon" type="image/png" sizes="72x72" href="assets/images/favicons/favicon_72.png"><!-- iPad -->
<link rel="apple-touch-icon" type="image/png" sizes="114x114" href="assets/images/favicons/favicon_114.png"><!-- iPhone4 -->
<link rel="icon" type="image/png" href="assets/images/favicons/favicon_144x114.png"><!-- Opera Speed Dial, at least 144×114 px -->

</head>

<body <?php echo ' id="'.$page.'" '; ?>>

<!-- header -->
<header>
	<div class="container">
  	<div class="row">
  		<div class="col-md-6 hidden-md-down">
  			<div class="sm-text">Nesibe Özçörekçi - Ruudo Coffee Bakery <br>VD : Kordon    VN : 2461677436</div>
  			<h3 style="margin-top: 18px;">LEZZETLİ, TAZE VE MİS KOKULU</h3>
  			<div class="md-text">Çölyaklılar, Şeker hastaları, Vegan beslenenler <br>Belirli gıdalara alerjileri olanlar, hoşgeldiniz.</div>
  		</div>
  		
  		<div class="col-lg-6">
  			<div class="logo"><a href="index.php"><img src="assets/images/logo-ruudo.png"></a></div>
  			<div class="sol-col">
  				<div class="sm-text vergi-no hidden-lg-up" style="margin-bottom: 12px;">Nesibe Özçörekçi - Ruudo Coffee Bakery<br>VD : Kordon    VN : 2461677436</div>
  				<div class="sm-text" style="margin-bottom: 3px;">Kültür Mah. Plevne Bulvarı<br>No:36/A Alsancak/İzmir</div>
  				<a href="https://www.google.com.tr/maps/place/Ruudo+Coffee+%26+Bakery/@38.4309222,27.1391213,17z/data=!3m1!4b1!4m5!3m4!1s0x14bbd8588af0dc63:0x4fe16c791051e703!8m2!3d38.430918!4d27.14131" class="md-text yol-tarifi-btn" target="_blank">Yol Tarifi Al <i class="fa fa-map-marker" aria-hidden="true"></i></a>
  			</div>
  			<div class="sag-col">
  				<div class="md-text hidden-xs-down">İletişim için:</div>
  				<div class="phone-area">
  					<div class="desktop-area"><span class="number">(0) 530 461 85 53<i class="fa fa-phone" aria-hidden="true"></i></span><span class="hidden-sm-down"> - </span><span class="number">(0) 534 353 03 92<i class="fa fa-phone" aria-hidden="true"></i></span></div>
  					<div class="mobile-area"><a href="tel:+905304618553" class="number">(0) 530 461 85 53<i class="fa fa-phone" aria-hidden="true"></i></a><span class="hidden-sm-down"> - </span><a href="tel:+905343530392" class="number">(0) 534 353 03 92<i class="fa fa-phone" aria-hidden="true"></i></a></div>
  				</div>
  				<div class="md-text hidden-sm-down">Ya da <a href="" data-toggle="modal" data-target="#mesajForm">tıklayıp</a> bize mesaj gönderin.</div>
  				<div class="md-text hidden-md-up sm-mesaj"><a href="" data-toggle="modal" data-target="#mesajForm">Mesaj <i class="fa fa-envelope" aria-hidden="true"></i></a></div>
  			</div>
  		</div>

  	</div>
  </div>
</header>
<!-- /header -->
<div class="line-pattern"></div>

<!-- navigation -->	
<nav id="nav-content">
	<div style="background-color: #444;">
		<div class="container">
			<div class="navbar navbar-expand-lg navbar-inverse">
		  	<a id="navbar-brand" class="navbar-brand" href="#">
					<img id="navbar-brand-img" src="assets/images/ruudo-icon-logo.png" width="31" height="28" alt="ruudo-icon-logo">
				</a>
				<div id="nav-bar-socials">
					<a href="https://tr.foursquare.com/v/ruudo-coffee--bakery/58248ec1c3fe293f5fc67065" target="_blank"><i class="fa fa-foursquare" aria-hidden="true"></i></a>
					<a href="https://www.facebook.com/ruudocoffee" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a href="https://www.instagram.com/ruudocoffee/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			    <i class="fa fa-bars" aria-hidden="true"></i>
		  	</button>
		 	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
			    <ul class="navbar-nav mr-auto">
			      <li class="nav-item <?php echo ($page == "index") ? "active" : ""; ?>">
			        <a href="index.php" class="nav-link">ANASAYFA<span class="sr-only">(current)</span></a>
			      </li>
						<li class="nav-item <?php echo ($page == "bizkimiz") ? "active" : ""; ?>">
			        <a href="bizkimiz.php" class="nav-link">BİZ KİMİZ?</a>
						</li>	      
		  			<li class="nav-item <?php echo ($page == "urunler") ? "active" : ""; ?>">
			        <a href="urunler.php" class="nav-link">ÜRÜNLERİMİZ</a>
			      </li>
			      <li class="nav-item <?php echo ($page == "sorucevap") ? "active" : ""; ?>">
			        <a href="sorucevap.php" class="nav-link">SORU-CEVAP</a>
			      </li>
			      <li class="nav-item <?php echo ($page == "blog") ? "active" : ""; ?>">
			        <a href="#" class="nav-link btn disabled" role="button" aria-disabled="true">BLOG<span class="nav-info-text">Çok Yakında!</span></a>

			      </li>
			      <li class="nav-item <?php echo ($page == "iletisim") ? "active" : ""; ?>">
			        <a class="nav-link" href="iletisim.php">BİZE ULAŞIN</a>
			      </li>
			    </ul>
			  </div>
			</div>
		</div>
	</div>
	<div class="pattern-line-up"></div>
</nav>
<!-- /navigation -->

<!-- Mesaj Modal -->
<div class="cart modal" id="mesajForm" tabindex="-1" role="dialog" aria-labelledby="mesajFormLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
			<div class="modal-header">
        <h5 class="modal-title" id="mesajFormLabel">Mesaj Formu <i class="fa fa-envelope" aria-hidden="true"></i></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>

      <div class="modal-body">

				<!-- Mesaj Formu -->
				<form name="mesaj-form" id="mesaj-form" action="formlar/form-php/form_to_mail-mesaj.php" method="post" onsubmit="return isMesajVal(this)">
				  <div class="form-group">
				  	<div class="input-group">
				  		<span class="input-group-addon">İsim & Soyisminiz</span>
				    	<input type="namesurname" name="m_realname" id="m_realname" class="form-control" placeholder="İsim Soyisim">
				    </div>
					  <div id="m_name_hata" class="badge badge-warning">Lütfen İsim ve Soyisminizi giriniz.</div>
				  </div>
				  <div class="form-group">
				  	<div class="input-group">
					  	<span class="input-group-addon">Telefon Numaranız</span>
					    <input type="phonenumber" name="m_telno" class="form-control" id="m_telno" placeholder="0xxxxxxxxxx">
					  </div>
					  <div id="m_tel_hata" class="badge badge-warning">Lütfen telefon numaranızı başında alan kodunuz ile birlikte 10 hane olarak giriniz</div>
				  </div>
				  <fieldset class="form-group">
				    <label style="font-weight: 600;">Neden Bize Ulaşıyorsunuz?</label>
				    <div class="form-check">
				    	<label class="form-check-label">
				        <input type="radio" class="form-check-input" name="amac-optionsRadios" id="amac-optionsRadios1" value="Özel Sipariş">
				        Özel Sipariş
				      </label>
				    </div>
				    <div class="form-check">
				    	<label class="form-check-label">
				        <input type="radio" class="form-check-input" name="amac-optionsRadios" id="amac-optionsRadios2" value="Glutensiz Yaş Pasta">
				        Glutensiz Yaş Pasta
				      </label>
				    </div>
				    <div class="form-check">
				    	<label class="form-check-label">
				        <input type="radio" class="form-check-input" name="amac-optionsRadios" id="amac-optionsRadios3" value="Glutensiz Ekmekler">
				        Glutensiz Ekmekler
				      </label>
				    </div>
				    <div class="form-check">
				    	<label class="form-check-label">
				        <input type="radio" class="form-check-input" name="amac-optionsRadios" id="amac-optionsRadios4" value="Glutensiz Ürünler">
				        Glutensiz Ürünler
				      </label>
				    </div>
				    <div class="form-check">
				    	<label class="form-check-label">
				        <input type="radio" class="form-check-input" name="amac-optionsRadios" id="amac-optionsRadios5" value="Şekersiz Ürünler">
				        Şekersiz Ürünler
				      </label>
				    </div>
				    <div class="form-check">
				    	<label class="form-check-label">
				        <input type="radio" class="form-check-input" name="amac-optionsRadios" id="amac-optionsRadios6" value="Vegan Ürünler">
				        Vegan Ürünler
				      </label>
				    </div>
				    <div class="form-check">
				    	<label class="form-check-label">
				        <input type="radio" class="form-check-input" name="amac-optionsRadios" id="amac-optionsRadios7" value="Alerjik Özel Ürünler">
				        Alerjik Özel Ürünler
				      </label>
				    </div>
				    <div class="form-check">
				    	<label class="form-check-label">
				        <input type="radio" class="form-check-input" name="amac-optionsRadios" id="amac-optionsRadios8" value="Organizasyon">
				        Organizasyon
				      </label>
				    </div>
				    <div class="form-check">
				    	<label class="form-check-label">
				        <input type="radio" class="form-check-input" name="amac-optionsRadios" id="amac-optionsRadios9" value="Teşekkür veya Şikayet">
				        Teşekkür veya Şikayet
				      </label>
				    </div>
				    <div class="form-check">
				    	<label class="form-check-label">
				        <input type="radio" class="form-check-input" name="amac-optionsRadios" id="amac-optionsRadios10" value="Öneri ve Yönlendirme">
				        Öneri ve Yönlendirme
				      </label>
				    </div>
				    <div class="form-check">
				      <label class="form-check-label">
				        <input type="radio" class="form-check-input" name="amac-optionsRadios" id="amac-optionsRadios11" value="Diğer" checked>
				        Diğer
				      </label>
				    </div>
				  </fieldset>
				  <div class="form-group">
				    <label class="note-label">
				      <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Paylaşmak istedikleriniz var mı?
				    </label>
				    <textarea class="form-control" id="m_mesaj" rows="3" type="note" name="m_mesaj"></textarea>
				  </div>

		  </div>

		  <div class="modal-footer">
				  <button type="button" id="m-sayfaya-don-btn" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
					<button type="submit" id="mesaj-f-btnGonder" class="btn btn-primary"  name="submit" type="submit" value="Submit" transition="fade">Mesajı Gönder</button>
					<br>
				  
				</form>
				<!-- //Mesaj Formu -->
      </div>
	  </div>
	</div>
</div>
<!-- //Mesaj Modal -->

