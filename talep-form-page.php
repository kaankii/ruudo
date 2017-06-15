<?php
$page="talep-form-page";
$page_title="Talep Test Sayfası";
$page_desc="Talepler için hazırlanan sepetli test sayfasıdır.";
$page_keywords="glutensiz ekmek, glutensiz ürünler, vegan ürünler, glutensiz pasta, şekersiz tatlılar";

include("degiskenler/genel.php");
include("header.php");

?>

<header class="jumbotron">
	<div class="container">
		<h1>
			<span class="ruudo-icon icon-ruudo-logo-icon"></span>			
			Ruudo Ürünler Sayfası
		</h1>
		<p>Tüm ürünlerin getirileceği sayfanın code test bölgesi</p>
  </div>
</header>


<div class="container" style="margin-bottom: 30px;">
	<h2><strong>Talep Form Test</strong></h2>

	<!-- Div trigger modal -->
	<div type="button" class="btn btn-primary" data-toggle="modal" data-target="#talepForm">
		<div>Talep Formu</div>
	</div>
</div>

<hr>

<div class="container">
	<div class="row">

		<!-- Filtreler -->
		<div class="col-md-4">

			<h4><strong>Filtreler</strong></h4>
			<div class="filters filter-section">
				<div class="row search-box">
					<div class="col-md-12">
						<span class="filter-label"><strong><i class="fa fa-cutlery" aria-hidden="true"></i> Ürün:</strong></span><br>
						<div class="btn-group" role="group" data-filter-group="color">
							<span class="btn btn-sm btn-default btn-filter is-checked" data-filter="">Tümü</span>
							<span class="btn btn-sm btn-default btn-filter" data-filter=".corek">ÇÖREKLER</span>
							<span class="btn btn-sm btn-default btn-filter" data-filter=".kahve">KAHVELER</span>
							<span class="btn btn-sm btn-default btn-filter" data-filter=".kek">KEKLER</span>
							<span class="btn btn-sm btn-default btn-filter" data-filter=".muffin">MUFFİNLER</span>
						</div>
					</div>
					<div class="col-md-12">
						<span class="filter-label"><strong><i class="fa fa-check-square-o" aria-hidden="true"></i> Yeme Tercihi:</strong></span><br>
						<div class="btn-group" role="group" data-filter-group="size">
							<span class="btn btn-sm btn-default btn-filter is-checked" data-filter="">Tümü</span>
							<span class="btn btn-sm btn-default btn-filter" data-filter=".glutensiz">Glutensiz</span>
							<span class="btn btn-sm btn-default btn-filter" data-filter=".unsuz">Unsuz</span>
							<span class="btn btn-sm btn-default btn-filter" data-filter=".sutsuz">Süt Ürünsüz</span>
						</div>
					</div>
					<div class="col-md-12">
						<span class="filter-label"><strong><i class="fa fa-truck" aria-hidden="true"></i> Kargo:</strong></span><br>
						<div class="btn-group" role="group" data-filter-group="shape">
							<span class="btn btn-sm btn-default btn-filter is-checked" data-filter="">Tümü</span>
							<span class="btn btn-sm btn-default btn-filter" data-filter=".kargo">Kargolanabilir</span>
						</div>
					</div>

				</div>
			</div>
		</div>


		<!-- Ürünlerin Listelendiği Yer -->
		<div class="col-md-8">
			<div id="app">
			  <div class="header">
			    <h4><strong>Ürünler</strong></h4>
			    <div>
			      <button @click="showCart = !showCart" v-show="!verified" data-toggle="modal" data-target="#checkout-Modal">
			        {{ items.length + (items.length > 1 || items.length === 0 ? " items" : " item") }}
			      </button>
			    </div>
			  </div>

			  <!-- İlk Sepet Modal -->
			  <div class="cart modal" v-show="showCart" id="checkout-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			    <div class="modal-dialog" role="document">
				    <div class="modal-content">
							<div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h5 class="modal-title" id="exampleModalLabel">Talep Sepeti</h5>
				      </div>

				      <div class="modal-body">
						    <div v-show="items.length > 0">
						      <ul>
						        <li v-for="item in items" transition="fade">
						          <div class="sepet-elemani">
						          	{{ item.name }} - <strong>{{ item.quantity }} Adet</strong><i class="fa fa-trash" @click="removeFromCart(item)"></i>
						          	<span class="sepet-eleman-fiyati"><strong>{{ item.price * item.quantity }}</strong><i class="fa fa-try" aria-hidden="true"></i></span>
						          </div>
						        </li>
						        <li v-show="cargoSection === 1" transition="fade">
						          <div class="sepet-elemani kargo-line" v-bind:class="[cargoClass]">
						          	Kargo <i class="fa fa-truck" aria-hidden="true"></i> <span class="ucretsiz-text">*<?php echo $kargoKampanyaUcreti; ?>TL Üzeri ücretsiz.</span>
						          	<span class="sepet-eleman-fiyati"><strong>{{ cargoBasePrice }}</strong><i class="fa fa-try" aria-hidden="true"></i></span>
						          </div>
						        </li>
						      </ul>

									<div class="toplam-fiyat">
										<h5>Toplam: <strong><span>{{ total }}</strong><i class="fa fa-try" aria-hidden="true"></i></span></strong></h5>
									</div>

								  <div class="form-group input-group {{ talepBtnWarning }}" >
								    <span class="input-group-addon" id="basic-addon1" >Teslimat Nasıl Olacak?</span>
								    <select class="form-control" id="exampleSelect1" v-model="cargoSection" >    	
								      <option v-for="cargoOption in cargoOptions" v-bind:value="cargoOption.value" >
								      	{{ cargoOption.text }}
								      </option>
								    </select>
								  </div>
						    </div>

						    <div v-show="items.length === 0">
						      <p>Sepetiniz boş!</p>
						    </div>
						  </div>

						  <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Alışverişe Devam</button>
				        <button type="button" class="btn btn-primary show-error" data-toggle="modal" data-target="{{ talepBtnModal }}"  type="button" v-show="items.length > 0" v-bind:class="talepBtnClass">Talep Et</button>
				      </div>
					  </div>
					</div>
				</div>
				<!-- //İlk Sepet Modal -->

			  <!-- Ürünler -->
		    <div class="shop" v-show="!verified">
		      <ul class="grid">
		        <li v-for="item in shop" class="item {{ item.class }}">
		          <div>
		            <h5><strong>{{ item.name }}</strong></h5>
		            <p>{{ item.oz }}</p>
		            <strong>{{ item.price }}<i class="fa fa-try" aria-hidden="true"></i></strong>
		            <br>
		            <button @click="addToCart(item)">Add to cart</button>
		          </div>
		        </li>
		      </ul>
		    </div>
		    <!-- //Ürünler -->

		    <!-- Son Sepet Modal -->
			  <div class="cart modal bd-example-modal-lg" v-show="showCart" id="talepForm" tabindex="-1" role="dialog" aria-labelledby="talepFormLabel" aria-hidden="true">
			    <div class="modal-dialog modal-lg">
				    <div class="modal-content">
							<div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h5 class="modal-title" id="talepFormLabel">Son Sepet</h5>
				      </div>

				      <div class="modal-body">
      	      	Sizi aramamız için lütfen numaranızı bırakınız.<br>
				      	<small class="text-muted">*Lütfen gerekli alanları doldurunuz.</small>
    				  	<hr>

					      <ul>
					        <li v-for="item in items" transition="fade">
					          <div class="sepet-elemani">
					          	{{ item.name }} - <strong>{{ item.quantity }} Adet</strong>
					          	<span class="sepet-eleman-fiyati"><strong>{{ item.price * item.quantity }}</strong><i class="fa fa-try" aria-hidden="true"></i></span>
					          </div>
					        </li>
					        <li v-show="cargoSection === 1" transition="fade">
					          <div class="sepet-elemani kargo-line" v-bind:class="[cargoClass]">
					          	Kargo <i class="fa fa-truck" aria-hidden="true"></i> <span class="ucretsiz-text">*<?php echo $kargoKampanyaUcreti; ?>TL Üzeri ücretsiz.</span>
					          	<span class="sepet-eleman-fiyati"><strong>{{ cargoBasePrice }}</strong><i class="fa fa-try" aria-hidden="true"></i></span>
					          </div>
					        </li>
					      </ul>

								<div class="toplam-fiyat">
									<h5>Toplam: <strong><span>{{ total }}</strong><i class="fa fa-try" aria-hidden="true"></i></span></strong></h5>
								</div>

								<hr>

<form name="hizli-form" id="hizli-form" action="formlar/form-php/form-to-mail-fast.php" method="post" onsubmit="return isFastVal(this)">

  <div class="form-group">
    <label for="exampleTextarea">Example textarea</label>
    <textarea name="f_sepettekiler" id="f_sepettekiler" class="form-control" rows="3">{{ total }}
    </textarea>
  </div>
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
						  </div>




						  <div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Sepete Dön</button>
	<button type="submit" class="btn btn-primary"  id="fast-f-btnGonder" name="submit" type="submit" value="Submit">Talebi Gönder</button>
	<br>
  
	<div id="f-form-gonderiliyor" class="label label-success" style="display: none; font-size: 1rem;">Form Gönderiliyor<i class="fa fa-cog fa-spin fa-fw margin-bottom"></i></div>
</form>
				      </div>
					  </div>
					</div>
				</div>
				<!-- //Son Sepet Modal -->

			</div>
		</div>
		<!-- //Ürünlerin Listelendiği Yer -->

	</div>
</div>






<?php
include("footer.php");
?>
