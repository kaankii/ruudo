
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

// Popover-extra 
$('.popover_parent a').on('click', function() {
  $('.popover_parent > a').not(this).parent().removeClass('active');
  $(this).parent().toggleClass('active');
  $('.search input[type="text"]').focus();
});
// Popover-extra - Hide the dropdown when clicked off
$(document).on('click touchstart', function(event) {
  if (!$(event.target).closest('.popover_parent').length) {
    // Hide the menus.
    $('.popover_parent.active').removeClass('active');
  }
});