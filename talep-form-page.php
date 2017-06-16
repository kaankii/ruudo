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

<section id="talep-form-test-section">
	<div class="container">
		<h4><strong>Talep Form Test Buttonu</strong></h4>
		<div type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#talepForm">
			<div>Talep Formu</div>
		</div>
	</div>
</section>
<hr>

<section class="container">
	<div class="row">

		<!-- Filtreler -->
		<div class="col-md-4">
			<h4><strong>Filtreler</strong></h4>
			<div id="filter-section" class="filters">
				<div class="row search-box">
					<div class="col-md-12">
						<span class="filter-label"><strong><i class="fa fa-cutlery" aria-hidden="true"></i> Ürün:</strong></span><br>
						<div class="btn-group" role="group" data-filter-group="color">
							<span class="btn btn-sm btn-default btn-filter is-checked" data-filter="">TÜMÜ</span>
							<span class="btn btn-sm btn-default btn-filter" data-filter=".corek">ÇÖREKLER</span>
							<span class="btn btn-sm btn-default btn-filter" data-filter=".kahve">KAHVELER</span>
							<span class="btn btn-sm btn-default btn-filter" data-filter=".kek">KEKLER</span>
							<span class="btn btn-sm btn-default btn-filter" data-filter=".muffin">MUFFİNLER</span>
						</div>
					</div>
					<div class="col-md-12">
						<span class="filter-label"><strong><i class="fa fa-check-square-o" aria-hidden="true"></i> Yeme Tercihi:</strong></span><br>
						<div class="btn-group" role="group" data-filter-group="size">
							<span class="btn btn-sm btn-default btn-filter is-checked" data-filter="">TÜMÜ</span>
							<span class="btn btn-sm btn-default btn-filter" data-filter=".glutensiz">GLUTENSİZ</span>
							<span class="btn btn-sm btn-default btn-filter" data-filter=".unsuz">UNSUZ</span>
							<span class="btn btn-sm btn-default btn-filter" data-filter=".sutsuz">SÜT ÜRÜNSÜZ</span>
						</div>
					</div>
					<div class="col-md-12">
						<span class="filter-label"><strong><i class="fa fa-truck" aria-hidden="true"></i> Kargo:</strong></span><br>
						<div class="btn-group" role="group" data-filter-group="shape">
							<span class="btn btn-sm btn-default btn-filter is-checked" data-filter="">TÜMÜ</span>
							<span class="btn btn-sm btn-default btn-filter" data-filter=".kargo">KARGOLANABİLİR</span>
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
			    <div class="sepet-btn-content">
			      <button @click="showCart = !showCart" v-show="!verified" data-toggle="modal" data-target="#checkout-Modal">
			        <i class="fa fa-shopping-cart" aria-hidden="true"></i> {{ items.length + (items.length > 1 || items.length === 0 ? " ürünler" : " ürün") }} 
			      </button>
			    </div>
			  </div>

			  <!-- İlk Sepet Modal -->
			  <div class="cart modal" v-show="showCart" id="checkout-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			    <div class="modal-dialog" role="document">
				    <div class="modal-content">
							<div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				        <h5 class="modal-title" id="exampleModalLabel">Talep Sepeti <i class="fa fa-shopping-cart" aria-hidden="true"></i></h5>
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
				        <button type="button" class="btn btn-primary show-error" data-toggle="modal" data-target="{{ talepBtnModal }}"  type="button" v-show="items.length > 0" v-bind:class="talepBtnClass" onclick="copyCartText()">Talep Et</button>
				      </div>
					  </div>
					</div>
				</div>
				<!-- //İlk Sepet Modal -->

			  <!-- Ürünler -->
		    <div class="shop" v-show="!verified">
		      <ul class="urun-grid">
		        <li v-for="item in shop" class="item {{ item.class }}">
		          <div>
		            <h5><strong>{{ item.name }}</strong></h5>
		            <p>{{ item.oz }}</p>
		            <strong>{{ item.price }}<i class="fa fa-try" aria-hidden="true"></i></strong>
		            <br>
		            <button @click="addToCart(item)">Sepete Ekle</button>
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
				        <h5 class="modal-title" id="talepFormLabel">Talep Formu - Son Sepet <i class="fa fa-shopping-cart" aria-hidden="true"></i></h5>
				      </div>

				      <div class="modal-body">
				      	<div v-show="cargoSection === 2">
					      	<h5 style="color: #cc8500;"><i class="fa fa-archive" aria-hidden="true"></i> Sipariş Kapıdan Teslim Edilecektir.</h5>
					      	<small class="text-muted">(!) Kargo ile almak için sepetteki seçiminizi değiştirin</small>
	    				  	<hr>
								</div>

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

								<!-- Form Textarea ya kopyalanan gizli div -->
				   			<div id="sepet-kopya" style="display: none;">
					        <li v-for="item in items">
				          	{{ item.name }} - {{ item.quantity }} Adet / {{ item.price * item.quantity }} TL
					        </li>
					        <li v-show="cargoSection === 1" >
					          	Kargo / {{ cargoPrice }} TL
					        </li>
					        <li v-show="cargoSection === 2" >
					          	Kapıdan Teslim Alınacak
					        </li>
					      </div>

								<div class="toplam-fiyat">
									<h4>Toplam: <strong><span>{{ total }}</strong><i class="fa fa-try" aria-hidden="true"></i></span></strong></h4>
								</div>

								<hr>

								<!-- Son Sepet Formu -->
								<form name="urun-talep-form" id="urun-talep-form" action="formlar/form-php/form_to_mail-urun_talep.php" method="post" onsubmit="return isTalepVal(this)">

								  <div class="form-group" style="display: none;"> <!-- Gizlenen Input -->
								    <textarea name="urun_sepettekiler" id="urun_sepettekiler" class="form-control" ></textarea>
								  </div>
									<input type="totalprice" name="f_totalprice" id="f_totalprice" value="{{ total }}" style="display: none;"><!-- Gizlenen Input -->
								  <div class="form-group">
								  	<div class="input-group">
								  		<span class="input-group-addon">İsim & Soyadınız</span>
								    	<input type="namesurname" name="f_realname" id="f_realname" class="form-control" placeholder="İsim & Soyisim">
								    </div>
									  <div id="f_name_hata" class="label label-warning">Lütfen İsim ve Soyadınızı giriniz.</div>
								  </div>
								  <div class="form-group">
								  	<div class="input-group">
									  	<span class="input-group-addon">Telefon Numaranız</span>
									    <input type="phonenumber" name="f_telno" class="form-control" id="f_telno" placeholder="0xxxxxxxxxx">
									  </div>
									  <div id="f_tel_hata" class="label label-warning">Lütfen telefon numaranızı başında alan kodunuz ile birlikte 10 hane olarak giriniz</div>
								  </div>

						  </div>

						  <div class="modal-footer">
								  <button type="button" id="sepete-don-son-btn" class="btn btn-secondary" data-dismiss="modal">Sepete Dön</button>
									<button type="submit" id="fast-f-btnGonder" class="btn btn-primary"  name="submit" type="submit" value="Submit" transition="fade">Talebi Gönder</button>
									<br>
								  
								</form>
								<!-- //Son Sepet Formu -->
				      </div>
					  </div>
					</div>
				</div>
				<!-- //Son Sepet Modal -->
			</div>
		</div>
		<!-- //Ürünlerin Listelendiği Yer -->
	</div>
</section>



<?php
include("footer.php");
?>
