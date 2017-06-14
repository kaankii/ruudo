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
	<div type="button" class="btn btn-primary" data-toggle="modal" data-target="#talepForm" >
		<div>Talep Formu</div>
	</div>

	<!-- Modal -->
	<div class="modal fade bd-example-modal-lg" id="talepForm" tabindex="-1" role="dialog" aria-labelledby="talepFormLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Arama Formu</h4>
	      </div>
	      <div class="modal-body">
	      	Sizi aramamız için lütfen numaranızı bırakınız.<br>
	      	<small class="text-muted">*Lütfen gerekli alanları doldurunuz.</small>
	      	<hr>

	      	<?php include("formlar/talep-form.php"); ?>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- /Modal -->
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

			  <!-- Sepet -->
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
						        <li v-show="kargo > 0" transition="fade">
						          <div class="sepet-elemani kargo-line" v-bind:class="[kargoClass]">
						          	Kargo <i class="fa fa-truck" aria-hidden="true"></i> <span class="ucretsiz-text">*100TL Üzeri ücretsiz.</span>
						          	<span class="sepet-eleman-fiyati"><strong>{{ kargo }}</strong><i class="fa fa-try" aria-hidden="true"></i></span>
						          </div>
						        </li>
						      </ul>

						    	<!-- Son Sepet -->
									<div class="" id="">
										<div class="toplam-fiyat">
											<h5>Toplam: <strong><span>{{ total }}</strong><i class="fa fa-try" aria-hidden="true"></i></span></strong></h5>
										</div>

									  <div class="form-group input-group">
									    <span class="input-group-addon" id="basic-addon1">Teslimat Nasıl Olacak?</span>
									    <select class="form-control" id="exampleSelect1" v-model="kargo">    	
									      <option v-for="kargoOption in kargoOptions" v-bind:value="kargoOption.value">
									      	{{ kargoOption.text }}
									      </option>
									    </select>
									  </div>
									</div>
					        
						    
						    </div>
						    <div v-show="items.length === 0">
						      <p>Sepetiniz boş!</p>
						    </div>
						  </div>
						  <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Alışverişe Devam</button>
				        <button type="button" class="btn btn-primary" type="button" v-show="items.length > 0" v-bind:class="[talepBtnClass]">Talep Et</button>
				      </div>
					  </div>
					</div>
				</div>

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

		    
		    <div class="checkout" v-show="verified">
		      <h3>Your Cart</h3>
		      <h5 v-for="item in items"><strong>{{ item.quantity }}</strong> - {{ item.name }}<span>${{ item.price * item.quantity }}</span></h5>
		      <hr />
		      <div class="row">
		        <div class="u-pull-right">
		          <h5>Total: <span>{{ total | currency }}</span></h5>
		          <button>Looks Good</button> <button @click="verified = false, showCart = true">Kapat</button>
		        </div>
		      </div>
		    </div>
			</div>

		</div>
	</div>
</div>








<!-- section: slider -->
<section id="slider">
	<div class="container">
		
	</div>
</section>
<!-- /section: slider -->


<?php
include("footer.php");
?>
