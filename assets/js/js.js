
// Talep Button Uyarı
$('.show-error').click(function(){
  $('.talep-fancy').toggleClass('talepwarning');
});

// Telefon numarası maskesi
jQuery(function($){
  $("#f_telno").mask("09999999999?");
  $("#m_telno").mask("09999999999?");
  $("#ekmek_telno").mask("09999999999?");
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

// Menu fix
$(function(){
  // Check the initial Poistion of the Sticky Header
  var stickyMenuTop = $('#nav-content').offset().top;
  var menuTop = document.getElementById('nav-content').offsetHeight;

  $(window).scroll(function(){
    if( $(window).scrollTop() > stickyMenuTop ) {
      $('#nav-content').css({position: 'fixed', top: '0px'});
      $('#navbar-brand').css('width', '31px');
      $('#navbar-brand-img').css('opacity', '1');
      $('#nav-bar-socials').css('left', '50px');
      $('#sepet-btn-content').css('top', '80px');
      document.getElementById("slider").style.marginTop = menuTop  + "px";
      
    } else {
      $('#nav-content').css({position: 'relative', top: '0px'});
      $('#navbar-brand').css('width', '0px');
      $('#navbar-brand-img').css('opacity', '0');
      $('#nav-bar-socials').css('left', '0px');
      $('#sepet-btn-content').css('top', '245px');
      document.getElementById("slider").style.marginTop = "-10px";
    }
  });
});