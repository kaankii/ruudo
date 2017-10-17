<?php
$page="urunler";
$page_title="Ürünlerimiz / Ruudo Coffee & Bakery";
$page_desc="Tüm glutensiz ürünlerimizin olduğu sayfa.";
$page_keywords="glutensiz ekmek, glutensiz ürünler, vegan ürünler, glutensiz pasta, şekersiz tatlılar, glutensiz, şekersiz tatlılar, izmir glutensiz, sütsüz tatlı";

include("degiskenler/genel.php");
include("header.php");

?>
<!-- section: slider -->
<section id="slider">
	<div class="slide slide-urunler">
		<div class="container">
			
		</div>
	</div>
</section>
<!-- /section: slider -->

<section class="container">
	<div class="content dark-content">
		<div class="col-md-12">
			<div class="row">
				<!-- Filtreler -->
				<div class="col-xl-3 col-lg-4">
					<div class="row">
						<div id="filter-section" class="filters col-md-12">
							<div class="col-md-12 filter-part filter-foto">
								<h3><strong>ALERJİ VEYA BESLENME TERCİHİNE GÖRE</strong></h3>
								<div class="btn-group" role="group" data-filter-group="yeme-tercih-filtre">
									<button type="button" class="btn btn-sm btn-default btn-filter btn-image" data-filter=".glutensiz">
										<img src="assets/images/menu-thumbs/thumb-urun_tercih-gluten.jpg">
										<div class="perde"></div>
										<div class="btn-text">Glutensiz</div>
										<div class="btn-text2">Glutensiz Ürünler</div>
									</button>
									<button type="button" class="btn btn-sm btn-default btn-filter btn-image" data-filter=".vegan">
										<img src="assets/images/menu-thumbs/thumb-urun_tercih-vegan.jpg">
										<div class="perde"></div>
										<div class="btn-text">Vegan</div>
										<div class="btn-text2">Hayvansal Gıda İçermeyen Ürünler</div>
									</button>
									<button type="button" class="btn btn-sm btn-default btn-filter btn-image" data-filter=".sekersiz">
										<img src="assets/images/menu-thumbs/thumb-urun_tercih-sekersiz.jpg">
										<div class="perde"></div>
										<div class="btn-text">Şekersiz</div>
										<div class="btn-text2">Rafine Şekersiz Ürünler</div>
									</button>
									<button type="button" class="btn btn-sm btn-default btn-filter btn-image" data-filter=".yumurtasiz">
										<img src="assets/images/menu-thumbs/thumb-urun_tercih-yumurtasiz.jpg">
										<div class="perde"></div>
										<div class="btn-text">Yumurtasız</div>
										<div class="btn-text2">Yumurta İçermeyen Ürünler</div>
									</button>
									<button type="button" class="btn btn-sm btn-default btn-filter btn-image" data-filter=".sutsuz">
										<img src="assets/images/menu-thumbs/thumb-urun_tercih-sutsuz.jpg">
										<div class="perde"></div>
										<div class="btn-text">Sütsüz</div>
										<div class="btn-text2">Süt ve Süt Ürünü İçermeyen</div>
									</button>
									<button type="button" class="btn btn-sm btn-default btn-filter btn-image" data-filter=".unsuz">
										<img src="assets/images/menu-thumbs/thumb-urun_tercih-unsuz.jpg">
										<div class="perde"></div>
										<div class="btn-text">Unsuz</div>
										<div class="btn-text2">İçinde Un Olmayan Ürünler</div>
									</button>
									<button type="button" class="btn btn-sm btn-default btn-filter is-checked" data-filter=""><span class="ruudo-icon icon-ruudo-logo-icon"></span> Tümü</button>
								</div>
							</div>
							<div class="col-md-12 filter-part">
								<h3><strong>ÇEŞİTLER</strong></h3>
								<div class="btn-toolbar" role="toolbar" aria-label="Yiyecek türleri filtresi">
									<div class="btn-group" role="group" data-filter-group="yeme-fitre">
										<button type="button" class="btn btn-sm btn-default btn-filter" data-filter=".corek"><span class="ruudo-icon icon-ruudo-logo-icon"></span> Çörekler</button>
										<button type="button" class="btn btn-sm btn-default btn-filter" data-filter=".muffin"><span class="ruudo-icon icon-ruudo-logo-icon"></span> Muffinler</button>
										<button type="button" class="btn btn-sm btn-default btn-filter" data-filter=".sandvic"><span class="ruudo-icon icon-ruudo-logo-icon"></span> Sandviçler</button>
										<button type="button" class="btn btn-sm btn-default btn-filter" data-filter=".kurabiye"><span class="ruudo-icon icon-ruudo-logo-icon"></span> Kurabiyeler</button>
										<button type="button" class="btn btn-sm btn-default btn-filter" data-filter=".kek"><span class="ruudo-icon icon-ruudo-logo-icon"></span> Kekler</button>
										<button type="button" class="btn btn-sm btn-default btn-filter" data-filter=".ekmek"><span class="ruudo-icon icon-ruudo-logo-icon"></span> Ekmekler</button>
										<button type="button" class="btn btn-sm btn-default btn-filter" data-filter=".enerjibar"><span class="ruudo-icon icon-ruudo-logo-icon"></span> Enerji Barları</button>
										<button type="button" class="btn btn-sm btn-default btn-filter" data-filter=".yaspasta"><span class="ruudo-icon icon-ruudo-logo-icon"></span> Yaş Pastalar</button>
										<button type="button" class="btn btn-sm btn-default btn-filter" data-filter=".kahve"><span class="ruudo-icon icon-ruudo-logo-icon"></span> Kahveler</button>
										<button type="button" class="btn btn-sm btn-default btn-filter is-checked" data-filter=""><span class="ruudo-icon icon-ruudo-logo-icon"></span> Tümü</button>
									</div>
								</div>
							</div>
							<div class="col-md-12 filter-part">
								<h3><strong><i class="fa fa-truck" aria-hidden="true"></i> KARGO</strong></h3>
								<div class="btn-group" role="group" data-filter-group="kargo-filtre">
									<button type="button" class="btn btn-sm btn-default btn-filter" data-filter=".kargo"><span class="ruudo-icon icon-ruudo-logo-icon"></span> Kargolanabilir</button>
									<button type="button" class="btn btn-sm btn-default btn-filter is-checked" data-filter=""><span class="ruudo-icon icon-ruudo-logo-icon"></span> Tümü</button>
								</div>
							</div>
						</div>

						<div id="urun-alt-reklam" class="col-md-12">
							<img src="assets/images/urun-alt-afis.jpg">
							<div class="text"><i class="fa fa-bullhorn" aria-hidden="true"></i><?php echo $urunAltAfis; ?></div>
						</div>
					</div>
				</div>

				<!-- Ürünlerin Listelendiği Yer -->
				<div class="col-xl-9 col-lg-8 genislet-sag-col">
					<div id="filtreli-urun"><span class="animate-flicker"><i class="fa fa-hand-o-left" aria-hidden="true"></i> Filtrelerimizi gördünüz mü?</span> </div>
					<div id="urun-banner">
						<div class="img-lg"><img src="assets/images/banner-anasayfa.jpg"></div>
						<div class="img-sm"><img src="assets/images/banner-anasayfa-320.jpg"></div>
					</div>
					<div id="app">
					  <div class="header">
					    <div id="sepet-btn-content">
					      <button id="sepet-box" class="btn btn-secondary" @click="showCart = !showCart" v-show="!verified" data-toggle="modal" data-target="#checkout-Modal">
					         
					        <div class="sepert-icon-area"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
					        <div class="sepet-urun-area">
					        	<div class="text1">Sepetinde</div>
					        	<div class="text2">{{ items.length + (items.length > 1 || items.length === 0 ? " Ürün" : " Ürün") }} var ></div>
					        </div>
					      </button>
					    </div>
					  </div>

					  <!-- İlk Sepet Modal -->
					  <div class="cart modal" v-show="showCart" id="checkout-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					    <div class="modal-dialog modal-lg" role="document" v-bind:class="[cargoClass]">
						    <div class="modal-content">
									<div class="modal-header">
						        <h5 class="modal-title" id="exampleModalLabel">Talep Sepeti <i class="fa fa-shopping-cart" aria-hidden="true"></i></h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						      </div>
						      <div class="sepet-alt-title">
						      	<div class="perde">
						      		<i class="fa fa-truck" aria-hidden="true"></i> <?php echo $kargoKampanyaUcreti; ?><i class="fa fa-try" aria-hidden="true"></i> ve üzeri alışverişlerinizde kargo ücretsiz.
						      	</div>
						      </div>
						      <div class="modal-body">
								    <div v-show="items.length > 0">
								      <ul>
								        <li v-for="item in items" transition="fade">
								          <div class="sepet-elemani">
								          	<div class="sepet-remove-icon"><i class="fa fa-times-circle-o" @click="removeFromCart(item)"></i></div>
								          	<div class="sepet-urun">{{ item.name }}</div>
								          	<div class="sepet-adet">{{ item.quantity }} Adet</div>
								          	<div class="sepet-ozellik"><span class="secili-ozellik badge badge-info" v-show="item.checkedNames.length > 0"><i class="fa fa-star-half-o" aria-hidden="true"></i> {{ item.checkedNames }}</span></div>								          	   
								          </div>
							          	<div class="sepet-eleman-fiyati"><span>{{ item.price * item.quantity }} <i class="fa fa-try" aria-hidden="true"></i></span></div>
								        </li>
								        <li class="kargo-line" v-show="cargoSection === 1" transition="fade">
								          <div class="sepet-elemani">
								          	<div class="sepet-kargo-icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
								          	<div class="sepet-kargo-text">KARGO<span class="u-text"> ÜCRETSİZ</span></div>
								          </div>
							          	<div class="sepet-eleman-fiyati">{{ cargoBasePrice }} <i class="fa fa-try" aria-hidden="true"></i></div>
								        </li>
								      </ul>

											<div class="toplam-fiyat">
												<div class="text">Toplam: <span>{{ total }} <i class="fa fa-try" aria-hidden="true"></i></span></div>
												<div class="total-kargo-uyari" v-show="cargoSection === 1" transition="fade">{{ toCargoProm }}<i class="fa fa-try" aria-hidden="true"></i> daha alışveriş yaparsanız<br> <i class="fa fa-truck" aria-hidden="true"></i> "Kargo Ücretsiz"</div>
											</div>

										  <div class="form-group input-group {{ talepBtnWarning }}" style="margin-top: 20px;">
										    <span class="input-group-addon" id="basic-addon1" >Teslimat Nasıl Olacak?</span>
										    <select class="form-control" id="exampleSelect1" v-model="cargoSection" >    	
										      <option v-for="cargoOption in cargoOptions" v-bind:value="cargoOption.value" >
										      	{{ cargoOption.text }}
										      </option>
										    </select>
										  </div>
								    </div>

								    <div v-show="items.length === 0">
								      <p style="font-weight: 600; color: #b94831;">Sepetiniz boş!</p>
								    </div>
								  </div>

								  <div class="siparis-info-btn-content">
								  	<div class="btn siparis-info-btn hidden-sm-up" data-toggle="popover" data-placement="left" title="Sipariş Sistemi" data-content="bulunduğunuz il ve sipariş verdiğiniz ürünler özelinde bu durum değişebiliyor. Biz hiç bir ürünümüzün içerisinde, raf ömrü uzasın diye katkı maddeleri kullanmıyoruz. Bu nedenle her ürünümüzün son kullanım tarihi üretildiği andan itibaren başlıyor. Bu nokta da yaşadığınız yere kargo 1.5 günde gidebiliyorsa, gönderimi yapıyoruz.">Sipariş sistemi nasıl işler <i class="fa fa-question-circle" aria-hidden="true"></i></div>
								  </div>

								  <div class="modal-footer">
								  	<div class="btn siparis-info-btn hidden-xs-down" data-toggle="popover" title="Sipariş Sistemi" data-content="bulunduğunuz il ve sipariş verdiğiniz ürünler özelinde bu durum değişebiliyor. Biz hiç bir ürünümüzün içerisinde, raf ömrü uzasın diye katkı maddeleri kullanmıyoruz. Bu nedenle her ürünümüzün son kullanım tarihi üretildiği andan itibaren başlıyor. Bu nokta da yaşadığınız yere kargo 1.5 günde gidebiliyorsa, gönderimi yapıyoruz."><i class="fa fa-question-circle" aria-hidden="true"></i> Sipariş sistemi nasıl işler?</div>
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
				          	<div class="urun-resmi">
									  	<img v-show="item.image != ''" src="{{ item.image }}" alt="{{ item.name }} {{ item.class }}">
									  </div>
										<div class="detay-btn-content">
											<button type="button" class="btn btn-primary btn-sm detay-btn" data-toggle="modal" data-target="#urun-detay-modal{{ item.id }}">
												<div class="detay-btn-icon">
													<i class="fa fa-info-circle" aria-hidden="true"></i>
												</div>
												<div class="detay-btn-text">Ürün Detayı</div>
											</button>
										</div>
									  <div class="urun-content">
					            <h3>{{ item.name }}</h3>
						          <div class="ozellik-extra">
						          	<span v-show="item.checkedNames.length > 0"><i class="fa fa-star-half-o" aria-hidden="true"></i> {{ item.checkedNames }}</span>
						          </div>		 
						          <div>          	
						            <div class="fiyat-ozel-box">
							            <div class="fiyat-porsiyon-box">
								            <ul>
								            	<li class="fiyat">{{ item.price }} <i class="fa fa-try" aria-hidden="true"></i></li>
								            	<li class="porsiyon" v-show="item.porsiyon != ''">{{ item.porsiyon }}</li>
								            </ul>
								          </div>
								          <div class="popover_parent" v-show="item.ozellestirOptions != ''">
								          	<a href="javascript:void(0)" class="ozellestir-btn btn popover_parent" role="button" v-show="item.ozellestirOptions != ''">
								          		Malzemeleri <br>Özelleştir <i class="fa fa-star-half-o" aria-hidden="true"></i>
								          	</a>
														<fieldset class="popover-extra search">
															<ul>
													    	<li v-for="ozellestir in item.ozellestirOptions">
														    	<label class="form-check-label">
															    	<input type="checkbox" value="{{ ozellestir.text }}" v-model="item.checkedNames">
															    	{{ ozellestir.text }}
														    	</label>
													    	</li>
													  	</ul>
												  	</fieldset>
								          </div>
								          <div class="sepete-ekle-btn-content" v-show="item.sepeteEkleBtn > 0">
								          	
	    					            <button class="sepete-ekle-btn btn btn-sm" @click="addToCart(item)" >
	    					            	<div class="text">
	    					            		<i class="fa fa-shopping-cart first" aria-hidden="true"></i>
	    					            		<span>SEPETE</span>EKLE
	    					            		<i class="fa fa-shopping-cart last" aria-hidden="true"></i>
	    					            	</div>
	    					            	<div class="ani-plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
								            </button>
					            			<span class="urun-adet" v-show="item.quantity > 0">{{ item.quantity }}</span>
					            			<span class="spt-ekl-alt"></span>
								          </div>
								        </div> 
					            </div>
					            <p class="minimize">{{ item.metin }}</p>
				            	<div class="p-devami" v-show="item.metin.length > 139">
				            		<a type="button" data-toggle="modal" data-target="#urun-detay-modal{{ item.id }}">devamı  <i class="fa fa-caret-right" aria-hidden="true"></i></a>
				            	</div>
						          <div class="ozellik-info">
						          	<ul>
						          		<li class="copy-not" transition="fade" v-show="item.calorie != ''">{{ item.calorie }} KALORİ</li>
						          		<li class="copy-not" transition="fade" v-show="item.gram != ''">{{ item.gram }} GR</li>			          	
						          		<li class="copy-not kargo-icon" transition="fade" data-toggle="tooltip" data-placement="top" title="Kargolanabilir"><i class="fa fa-truck" aria-hidden="true"></i></li>
						          		<li class="copy-not" transition="fade" v-for="ozellik in item.ozellikInfo">{{ ozellik.text }}</li>
						          	</ul>
						          </div>

				            </div>
				          </div>

							    <!-- Ürün Detay Modal -->
									<div  class="modal fade urun-detay-modal" id="urun-detay-modal{{ item.id }}" tabindex="-1" role="dialog" aria-labelledby="urunDetayModalLabel" aria-hidden="true">
									  <div class="modal-dialog modal-lg">
									    <div class="modal-content">
									      <div class="modal-header">
									        <h5 class="modal-title">{{ item.name }}</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>
									      <div class="modal-body">
									      	<!-- Foto Gallery -->
													<div id="urun-detay-carousel-Indicators" class="carousel slide" data-ride="carousel">
													  <ol class="carousel-indicators">
													    <li data-target="#urun-detay-carousel-Indicators" data-slide-to="0" class="active"></li>
													    <li data-target="#urun-detay-carousel-Indicators" v-for="urunDetayImages in item.imageExtra" data-slide-to="{{ urunDetayImages.sira }}"></li>
													  </ol>
													  <div class="carousel-inner" role="listbox">
													    <div class="carousel-item active">
													      <img class="d-block img-fluid" src="{{ item.image }}" alt="First slide">
													    </div>
													    <div class="carousel-item" v-for="urunDetayImages in item.imageExtra">
													      <img class="d-block img-fluid" src="{{ urunDetayImages.link }}" alt="Second slide">
													    </div>
													  </div>
													  <a class="carousel-control-prev" href="#urun-detay-carousel-Indicators" role="button" data-slide="prev">
													    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
													    <span class="sr-only">Geri</span>
													  </a>
													  <a class="carousel-control-next" href="#urun-detay-carousel-Indicators" role="button" data-slide="next">
													    <span class="carousel-control-next-icon" aria-hidden="true"></span>
													    <span class="sr-only">İleri</span>
													  </a>
													</div>
													<!-- /Foto Gallery -->

												  <div class="urun-content">
									          <div>          	
									            <div class="fiyat-ozel-box">
										            <div class="fiyat-porsiyon-box">
											            <ul>
											            	<li class="fiyat">{{ item.price }} <i class="fa fa-try" aria-hidden="true"></i></li>
											            	<li class="porsiyon" v-show="item.porsiyon != ''">{{ item.porsiyon }}</li>
											            </ul>
											          </div>
											          <div class="popover_parent" v-show="item.ozellestirOptions != ''">
											          	<a href="javascript:void(0)" class="ozellestir-btn btn popover_parent" role="button" v-show="item.ozellestirOptions != ''">
											          		Malzemeleri <br>Özelleştir <i class="fa fa-star-half-o" aria-hidden="true"></i>
											          	</a>
																	<fieldset class="popover-extra search">
																		<ul>
																    	<li v-for="ozellestir in item.ozellestirOptions">
																	    	<label class="form-check-label">
																		    	<input type="checkbox" value="{{ ozellestir.text }}" v-model="item.checkedNames">
																		    	{{ ozellestir.text }}
																	    	</label>
																    	</li>
																  	</ul>
															  	</fieldset>
											          </div>
											          <div class="sepete-ekle-btn-content" v-show="item.sepeteEkleBtn > 0">
											          	
				    					            <button class="sepete-ekle-btn btn btn-sm" @click="addToCart(item)" >
				    					            	<div class="text">
				    					            		<i class="fa fa-shopping-cart first" aria-hidden="true"></i>
				    					            		<span>SEPETE</span>EKLE
				    					            		<i class="fa fa-shopping-cart last" aria-hidden="true"></i>
				    					            	</div>
				    					            	<div class="ani-plus"><i class="fa fa-plus" aria-hidden="true"></i></div>
											            </button>
								            			<span class="urun-adet" v-show="item.quantity > 0">{{ item.quantity }}</span>
								            			<span class="spt-ekl-alt"></span>
											          </div>
											        </div> 
								            </div>
								           	<div class="ozellik-extra">
									          	<span v-show="item.checkedNames.length > 0"><i class="fa fa-star-half-o" aria-hidden="true"></i> {{ item.checkedNames }}</span>
									          </div>		 

								            <p>{{ item.metin }}</p>
									          <div class="ozellik-info">
									          	<ul>
									          		<li class="copy-not kargo-icon" transition="fade" data-toggle="tooltip" data-placement="top" title="Kargolanabilir"><i class="fa fa-truck" aria-hidden="true"></i></li>
									          		<li class="copy-not" transition="fade" v-for="ozellik in item.ozellikInfo">{{ ozellik.text }}</li>
									          	</ul>
									          </div>
									          <div class="urun-detay-extra-ozellik">
										          <ul>
										          	<li class="copy-not" transition="fade" v-show="item.calorie != ''"><i class="flaticon-calories"></i> {{ item.calorie }} KALORİ</li>
										          	<li class="copy-not" transition="fade" v-show="item.gram != ''"><i class="flaticon-weight"></i> {{ item.gram }} GR</li>
										          </ul>
									          </div>
										    	</div>
								      	</div>
									      <div class="modal-footer">
									        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Ürünlere Dön</button>
									      </div>
									    </div>
									  </div>
									</div>
							    <!-- //Ürün Detay Modal -->

				        </li>
				      </ul>
				    </div>
				    <!-- //Ürünler -->

				    <!-- Son Sepet Modal -->
					  <div class="cart modal" v-show="showCart" id="talepForm" tabindex="-1" role="dialog" aria-labelledby="talepFormLabel" aria-hidden="true">
					    <div class="modal-dialog modal-lg" role="document" v-bind:class="[cargoClass]">
						    <div class="modal-content">
									<div class="modal-header">
						        <h5 class="modal-title" id="talepFormLabel">Talep Formu <i class="fa fa-shopping-cart" aria-hidden="true"></i></h5>
						        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						      </div>

						      <div class="modal-body">
						      	<div v-show="cargoSection === 2">
							      	<h5 style="color: #cc8500;"><i class="fa fa-archive" aria-hidden="true"></i> Sipariş Kapıdan Teslim Edilecektir.</h5>
							      	<div class="text-muted" style="font-size: .8rem;">(!) Kargo ile almak için sepetteki seçiminizi değiştirin</div>
			    				  	<hr>
										</div>

								      <ul>
								        <li v-for="item in items" transition="fade">
								          <div class="sepet-elemani">
								          	<div class="sepet-remove-icon"><i class="fa fa-times-circle-o" @click="removeFromCart(item)"></i></div>
								          	<div class="sepet-urun">{{ item.name }}</div>
								          	<div class="sepet-adet">{{ item.quantity }} Adet</div>
								          	<div class="sepet-ozellik"><span class="secili-ozellik badge badge-info" v-show="item.checkedNames.length > 0"><i class="fa fa-star-half-o" aria-hidden="true"></i> {{ item.checkedNames }}</span></div>								          	   
								          </div>
							          	<div class="sepet-eleman-fiyati"><span>{{ item.price * item.quantity }} <i class="fa fa-try" aria-hidden="true"></i></span></div>
								        </li>
								        <li class="kargo-line" v-show="cargoSection === 1" transition="fade">
								          <div class="sepet-elemani">
								          	<div class="sepet-kargo-icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
								          	<div class="sepet-kargo-text">KARGO<span class="u-text"> ÜCRETSİZ</span></div>
								          </div>
							          	<div class="sepet-eleman-fiyati">{{ cargoBasePrice }} <i class="fa fa-try" aria-hidden="true"></i></div>
								        </li>
								      </ul>


										<!-- Form Textarea ya kopyalanan gizli div -->
						   			<div id="sepet-kopya" style="display: none;">
							        <li v-for="item in items">
						          	{{ item.name }} - {{ item.quantity }} Adet / {{ item.checkedNames }} / {{ item.price * item.quantity }} TL
							        </li>
							        <li v-show="cargoSection === 1" >
						          	# Kargo / {{ cargoPrice }} TL
							        </li>
							        <li v-show="cargoSection === 2" >
						          	# Kapıdan Teslim Alınacak
							        </li>
							      </div>

										<div class="toplam-fiyat">
											<div class="text">Toplam: <span>{{ total }} <i class="fa fa-try" aria-hidden="true"></i></span></div>
										</div>

										<hr>

										<!-- Son Sepet Formu -->
										<form name="urun-talep-form" id="urun-talep-form" action="formlar/form-php/form_to_mail-urun_talep.php" method="post" onsubmit="return isTalepVal(this)">

										  <div class="form-group" style="display: none;"> <!-- Gizlenen Input -->
										    <textarea name="urun_sepettekiler" id="urun_sepettekiler" class="form-control" ></textarea>
										  </div>
											<input type="totalprice" name="f_totalprice" id="f_totalprice" value="{{ total }}" style="display: none;"><!-- Gizlenen Input -->
										  <div class="form-group">
											  <div class="form-check">
											    <label class="form-check-label note-label">
											      <input type="checkbox" class="form-check-input" id="note-checkbox" v-model="checked">
											      <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Eklemek istediğiniz notunuz?
											    </label>
											    <textarea class="form-control" id="f_talepnote" rows="3" v-show=" checkbox = checked " type="note" name="f_talepnote"></textarea>
											  </div>
										  </div>
										  <div class="form-group" v-show="cargoSection === 1">
										    <label for="address">Teslimat Adresiniz?</label>
										    <textarea class="form-control" id="f_address" name="f_address" rows="2" placeholder="Adresiniz"></textarea>
										  </div>
										  <div class="form-group">
										  	<div class="input-group">
										  		<span class="input-group-addon">İsim & Soyisminiz</span>
										    	<input type="namesurname" name="f_realname" id="f_realname" class="form-control" placeholder="İsim Soyisim">
										    </div>
											  <div id="f_name_hata" class="badge badge-warning">Lütfen İsim ve Soyadınızı giriniz.</div>
										  </div>
										  <div class="form-group">
										  	<div class="input-group">
											  	<span class="input-group-addon">Telefon Numaranız</span>
											    <input type="phonenumber" name="f_telno" class="form-control" id="f_telno" placeholder="0xxxxxxxxxx">
											  </div>
											  <div id="f_tel_hata" class="badge badge-warning">Lütfen telefon numaranızı başında alan kodunuz ile birlikte 10 hane olarak giriniz</div>
										  </div>

											<div id="isbank-accordion" role="tablist" aria-multiselectable="true">
											  <div class="card">
											    <div class="card-header" role="tab" id="isbank-headingOne">
											      <h5 class="mb-0">
											        <a data-toggle="collapse" data-parent="#isbank-accordion" href="#isbank-collapseOne" aria-expanded="true" aria-controls="isbank-collapseOne">
											          <div class="logo"><img src="assets/images/sepet-logo-isbank.png"></div>
											        </a>
											      </h5>
											    </div>

											    <div id="isbank-collapseOne" class="collapse" role="tabpanel" aria-labelledby="isbank-headingOne">
											      <div class="card-block">
											        I-BAN : TR370004600648888000032064
											      </div>
											    </div>
											  </div>
											</div>
											<div id="akbank-accordion" role="tablist" aria-multiselectable="true">
											  <div class="card">
											    <div class="card-header" role="tab" id="akbank-headingOne">
											      <h5 class="mb-0">
											        <a data-toggle="collapse" data-parent="#akbank-accordion" href="#akbank-collapseOne" aria-expanded="true" aria-controls="akbank-collapseOne">
											          <div class="logo"><img src="assets/images/sepet-logo-akbank.png"></div>
											        </a>
											      </h5>
											    </div>

											    <div id="akbank-collapseOne" class="collapse" role="tabpanel" aria-labelledby="akbank-headingOne">
											      <div class="card-block">
											        I-BAN : TR370004600648888000032064
											      </div>
											    </div>
											  </div>
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
		</div>
	</div>
</section>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script type="text/javascript">
jQuery(function(){

  var minimized_elements = $('p.minimize');
    
  minimized_elements.each(function(){    
    var t = $(this).text();        
    if(t.length < 140) return;
    
    $(this).html(
      t.slice(0,140)+'<span>... </span>'
    );
  }); 
});
$(function () { $('[data-toggle="popover"]').popover() })
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script>
<script type="text/javascript">
const shop = [
	<?php
		foreach (glob("degiskenler/urunler/*.php") as $filename)
		{
	    include $filename;
		}
	?>
];

const vm = new Vue({
  el: "#app",
  data: {
    items: [],
    shop: shop,
    cargoBasePrice: <?php echo $kargoUcreti; ?>,/* Kargo Ücreti*/
    cargoPromPrice: <?php echo $kargoKampanyaUcreti; ?>,/* Kargo Kampanya Ücreti*/
    cargoPrice: 0,
    toCargoProm: 0,
    cargoSection: 0,
    cargoOptions: [
      { text: 'Seçiniz', value: 0 },
      { text: 'Kargo ile', value: 1 },
      { text: 'Kapıdan', value: 2 }
    ],
    cargoClass: '',
    talepDisabled: true,
    talepBtnClass: 'disabled',
    talepBtnModal: '',
    talepBtnWarning: 'talep-fancy',
    showCart: false,
    verified: false,
  },
  computed: {
    total() {
      var total = 0;

      for (var i = 0; i < this.items.length; i++) {
        total += this.items[i].price;
      } 
      if ( this.cargoSection === 1 && total > this.cargoPromPrice ) {
        this.cargoPrice = 0;
        this.cargoClass = 'kargo-ucretsiz';
      } else if ( this.cargoSection === 1 && total < this.cargoPromPrice ) {
      	this.toCargoProm = this.cargoPromPrice - total 
        this.cargoPrice =  this.cargoBasePrice;
        this.cargoClass = '';
        total += parseInt( this.cargoPrice );
      } else {
        this.cargoPrice = 0;
        total += parseInt( this.cargoPrice );
      }
      if ( this.cargoSection === 0 ) {
        this.talepBtnClass = 'disabled';
        this.talepBtnModal = '';
        this.talepBtnWarning = 'talep-fancy';
      } else {
        this.talepBtnClass = '';
        this.talepBtnModal = '#talepForm';
        this.talepBtnWarning= '';
      }
      return total;
    }
  },
  methods: {
    addToCart(item) {
      item.quantity += 1;
      this.items.push(item);
    },
    removeFromCart(item) {
      item.quantity -= 1;
      this.items.splice(this.items.indexOf(item), 1);
      if ( this.total < this.cargoPromPrice ) {
        this.cargoPrice = this.cargoBasePrice;
        this.cargoClass = '';
        total += parseInt( this.cargoPrice );
      }
      return this.total;
    },
  }
});
</script>
<script type="text/javascript">
	console.log('start');
	$('.sepete-ekle-btn').on('click', function() {
	  $('#sepet-box').addClass('eklendi');
	  setTimeout(function(){ $('#sepet-box').removeClass('eklendi');; }, 1500);
	});
</script>
<script type="text/javascript">
	$(function () {
	  $('[data-toggle="tooltip"]').tooltip()
	})
</script>



<?php
include("footer.php");
?>
