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
		<button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#talepForm">Talep Formu</button>
	</div>
</section>
<hr>

<section class="container">
	<div class="row">

		<!-- Filtreler -->
		<div class="col-lg-4">
			<h4><strong>Filtreler</strong></h4>
			<div id="filter-section" class="filters">
				<div class="row search-box">
					<div class="col-md-12">
						<span class="filter-label"><strong><i class="fa fa-cutlery" aria-hidden="true"></i> Ürün:</strong></span><br>
						<div class="btn-toolbar" role="toolbar" aria-label="Yiyecek türleri filtresi">
							<div class="btn-group" role="group" data-filter-group="yeme-fitre">
								<button type="button" class="btn btn-sm btn-default btn-filter is-checked" data-filter="">TÜMÜ</button>
								<button type="button" class="btn btn-sm btn-default btn-filter" data-filter=".corek">ÇÖREKLER</button>
								<button type="button" class="btn btn-sm btn-default btn-filter" data-filter=".kahve">KAHVELER</button>
								<button type="button" class="btn btn-sm btn-default btn-filter" data-filter=".kek">KEKLER</button>
								<button type="button" class="btn btn-sm btn-default btn-filter" data-filter=".muffin">MUFFİNLER</button>
							</div>
						</div>
					</div>
					<div class="col-md-12">
						<span class="filter-label"><strong><i class="fa fa-check-square-o" aria-hidden="true"></i> Yeme Tercihi:</strong></span><br>
						<div class="btn-group" role="group" data-filter-group="yeme-tercih-filtre">
							<button type="button" class="btn btn-sm btn-default btn-filter is-checked" data-filter="">TÜMÜ</button>
							<button type="button" class="btn btn-sm btn-default btn-filter" data-filter=".glutensiz">GLUTENSİZ</button>
							<button type="button" class="btn btn-sm btn-default btn-filter" data-filter=".unsuz">UNSUZ</button>
							<button type="button" class="btn btn-sm btn-default btn-filter" data-filter=".sutsuz">SÜT ÜRÜNSÜZ</button>
						</div>
					</div>
					<div class="col-md-12">
						<span class="filter-label"><strong><i class="fa fa-truck" aria-hidden="true"></i> Kargo:</strong></span><br>
						<div class="btn-group" role="group" data-filter-group="kargo-filtre">
							<button type="button" class="btn btn-sm btn-default btn-filter is-checked" data-filter="">TÜMÜ</button>
							<button type="button" class="btn btn-sm btn-default btn-filter" data-filter=".kargo">KARGOLANABİLİR</button>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Ürünlerin Listelendiği Yer -->
		<div class="col-lg-8">
			<div id="app">
			  <div class="header">
			    <h4><strong>Ürünler</strong></h4>
			    <div class="sepet-btn-content">
			      <button class="btn btn-secondary" @click="showCart = !showCart" v-show="!verified" data-toggle="modal" data-target="#checkout-Modal">
			        <i class="fa fa-shopping-cart" aria-hidden="true"></i> {{ items.length + (items.length > 1 || items.length === 0 ? " Ürün" : " Ürün") }} 
			      </button>
			    </div>
			  </div>

			  <!-- İlk Sepet Modal -->
			  <div class="cart modal" v-show="showCart" id="checkout-Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			    <div class="modal-dialog" role="document">
				    <div class="modal-content">
							<div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Talep Sepeti <i class="fa fa-shopping-cart" aria-hidden="true"></i></h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				      </div>

				      <div class="modal-body">
						    <div v-show="items.length > 0">
						      <ul>
						        <li v-for="item in items" transition="fade">
						          <div class="sepet-elemani">
						          	{{ item.name }} - <strong>{{ item.quantity }} Adet</strong> <i class="fa fa-trash" @click="removeFromCart(item)"></i>  <span class="secili-ozellik badge badge-info" v-show="item.checkedNames.length > 0"><i class="fa fa-star-half-o" aria-hidden="true"></i> {{ item.checkedNames }}</span>
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
							  <img v-show="item.image != ''" class="" src="{{ item.image }}" alt="Çörek dereotlu peynirli {{ item.class }}">
		            <h5><strong>{{ item.name }}</strong></h5>
		            <p>{{ item.oz }}</p>
		            <strong>{{ item.price }}<i class="fa fa-try" aria-hidden="true"></i></strong> <span class="badge badge-info" v-show="item.checkedNames.length > 0" style="font-size: 60%;"> <i class="fa fa-star-half-o" aria-hidden="true"></i> {{ item.checkedNames }}</span>
		            <br>
		            <button class="sepete-ekle-btn btn btn-sm" @click="addToCart(item)">Sepete Ekle</button>

							  <div class="popover_parent" v-show="item.ozellestirOptions != ''">
							  <a href="javascript:void(0)" class="btn btn-outline-info btn-sm" role="button"><i class="fa fa-star-half-o" aria-hidden="true"></i> Özelleştir</a>
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
				        <h5 class="modal-title" id="talepFormLabel">Talep Formu - Son Sepet <i class="fa fa-shopping-cart" aria-hidden="true"></i></h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
					          	{{ item.name }} - <strong>{{ item.quantity }} Adet</strong> <span class="secili-ozellik badge badge-info" v-show="item.checkedNames.length > 0"><i class="fa fa-star-half-o" aria-hidden="true"></i> {{ item.checkedNames }}</span>
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
				          	{{ item.name }} - {{ item.quantity }} Adet / {{ item.checkedNames }} / {{ item.price * item.quantity }} TL
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
									  <div class="form-check">
									    <label class="form-check-label note-label">
									      <input type="checkbox" class="form-check-input" id="note-checkbox" v-model="checked">
									      <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Eklemek istediğiniz notunuz?
									    </label>
									    <textarea class="form-control" id="f_talepnote" rows="3" v-show=" checkbox = checked " type="note" name="f_talepnote"></textarea>
									  </div>
								  </div>
								  <div class="form-group">
								  	<div class="input-group">
								  		<span class="input-group-addon">İsim & Soyadınız</span>
								    	<input type="namesurname" name="f_realname" id="f_realname" class="form-control" placeholder="İsim & Soyisim">
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

<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
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
    verified: false
  },
  computed: {
    total() {
      var total = 0;
      
      for (var i = 0; i < this.items.length; i++) {
        total += this.items[i].price;
      } 
      if ( this.cargoSection === 1 && total > this.cargoPromPrice ) {
        this.cargoPrice = 0;
        this.cargoClass = 'ucretsiz';
      } else if ( this.cargoSection === 1 && total < this.cargoPromPrice ) {
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


<?php
include("footer.php");
?>
