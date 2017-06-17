
// Talep Button Uyarı
$('.show-error').click(function(){
  $('.talep-fancy').toggleClass('talepwarning');
});

// Telefon numarası maskesi
jQuery(function($){
  $("#f_telno").mask("09999999999?");
});

function copyCartText() {
  var output = document.getElementById("sepet-kopya").innerHTML;
  document.getElementById("urun_sepettekiler").value = output;
}