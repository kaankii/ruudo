<!-- footer -->
<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-12">

			</div>
		</div>
	</div>
</footer>
<!-- /footer -->

<!-- jQuery first, then JS. -->
<?php
if ($page !== "talep-form-page") {
  echo '
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
  ';
}
?>
<script src="assets/js/tether.min.js"></script><!-- Tether for Bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js" integrity="sha384-vZ2WRJMwsjRMW/8U7i6PWi6AlO1L79snBrmgiDpgIWJ82z8eA5lenwvxbMV1PAh7" crossorigin="anonymous"></script>
<script src="assets/js/css_browser_selector.js"></script>
<script src="assets/js/form-disable.js"></script>
<script src="assets/js/masked_input_plugin.js"></script>
<?php
if ($page == "talep-form-page") {
  echo '
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/2.2.2/isotope.pkgd.min.js"></script>
    <script src="assets/js/filtre-grid.js"></script>
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