<!-- footer -->
<footer>
	<div class="container">
		<div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12" id="footer-content-neredeyiz">
        <h3>NEREDEYİZ?</h3>
        <p>Kültür Mah. Plevne Bulvarı No: 36/A<br> 
          Alsancak / İZMİR --> <a href="https://www.google.com.tr/maps/place/Ruudo+Coffee+%26+Bakery/@38.4309222,27.1391213,17z/data=!3m1!4b1!4m5!3m4!1s0x14bbd8588af0dc63:0x4fe16c791051e703!8m2!3d38.430918!4d27.14131" role="button" target="_blank"><i class="fa fa-map-marker" aria-hidden="true"></i> Yol Tarifi Al</a><br><br>
          Kültürpark/Fuar'ın Lozan kapısının karşısındaki taksi durağının bağlı bulunduğu cadde üzerinde, Reyhan Pastanesine giderken sol kolda. Doğal ürünler satan Naturel market'in hemen yanındayız.
        </p>
      </div>
      <div class="col-lg-4" id="footer-content-iciniz">
        <h3>İÇİNİZ RAHAT OLSUN</h3>
        <p>Glutensiz Ekmek<br>
          Glutensiz Yaş Pasta<br>
          Şekersiz Tatlılar<br>
          Vegan Ürünler<br>
          Şekersiz Kurabiyeler<br>
          Sporcu Besinleri<br>
          Glutensiz Çörekler<br>
        </p>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12" id="footer-content-takip">
        <h3>BİZİ TAKİP EDİN</h3>
        <p>Ürünlerimizin anlık görsellerine, sürpriz kampanyalara, yeni çıkan ürünlerimize ve diğer müşterilerimizin yorumlarına ulaşabilmek için sosyal medya hesaplarımızdan bizi takip edebilirsiniz.
        </p>
        <div id="footer-socials">
          <a class="f-foursquare" href="https://tr.foursquare.com/v/ruudo-coffee--bakery/58248ec1c3fe293f5fc67065" target="_blank"><i class="fa fa-foursquare" aria-hidden="true"></i></a>
          <a class="f-facebook" href="https://www.facebook.com/ruudocoffee" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a class="f-instagram" href="https://www.instagram.com/ruudocoffee/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
      </div>
      <div class="col-md-12" id="footer-sign">© 2017 Ruudocoffee <a href="http://melihsahinkesen.com/" target="_blank"><img src="assets/images/footer-sign.png"> created by melihsahinkesen</a></div>
		</div>
	</div>
</footer>
<!-- /footer -->



<!-- jQuery first, then JS. -->
<?php
if ($page !== "urunler") {
  echo '
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  ';
}
?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
<script src="assets/js/css_browser_selector.js"></script>
<script src="assets/js/form-disable.js"></script>
<script src="assets/js/masked_input_plugin.js"></script>
<?php
if ($page == "urunler") {
  echo '
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>
    <script src="assets/js/filtre-grid.js"></script>
  ';
}
if ($page == "index") {
  echo '
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/datepicker-edit.js"></script>
  ';
}
?>

<!-- SON KONTROL - ZOPIM EKLE
<script async="" charset="utf-8" src="https://v2.zopim.com/?4ntMHmXHdRE5M0zZ7db4mvn0opUsgDKx" type="text/javascript"></script>
-->

<!--Start of Zendesk Chat Script-->
<!-- SON KONTROL - ZOPIM EKLE
<script type="text/javascript">
	window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
	d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
	_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
	$.src="https://v2.zopim.com/?4ntMHmXHdRE5M0zZ7db4mvn0opUsgDKx";z.t=+new Date;$.
	type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
-->
<!--End of Zendesk Chat Script-->

<!-- Google Analytics -->
<script async="" src="assets/js/analytics.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','assets/js/analytics.js','ga');

  ga('create', 'UA-99002428-1', 'auto');
  ga('send', 'pageview');
</script>

<script src="assets/js/js.js"></script>


</body>
</html>