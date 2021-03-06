// External js: jquery, isotope.pkgd.js, bootstrap.min.js, bootstrap-slider.js
$(document).ready( function() {

  // Create object to store filter for each group
  var buttonFilters = {};
  var buttonFilter = '*';
  // Create new object for the range filters and set default values,
  // The default values should correspond to the default values from the slider

  // Initialise Isotope
  // Set the item selector
  var $grid = $('.urun-grid').isotope({
    itemSelector: '.item',
    layout: 'masonry',
    // use filter function
    filter: function() {
      var $this = $(this);
      return $this.is( buttonFilter );
    }
  });


  // Look inside element with .filters class for any clicks on elements with .btn
  $('.filters').on( 'click', '.btn', function() {
    var $this = $(this);
    // Get group key from parent btn-group (e.g. data-filter-group="color")
    var $buttonGroup = $this.parents('.btn-group');
    var filterGroup = $buttonGroup.attr('data-filter-group');
    // set filter for group
    buttonFilters[ filterGroup ] = $this.attr('data-filter');
    // Combine filters or set the value to * if buttonFilters
    buttonFilter = concatValues( buttonFilters ) || '*';
    // Log out current filter to check that it's working when clicked
    console.log( buttonFilter )
    var changefilter = buttonFilter.toString();
    changefilter = changefilter.replace(/\./gi, ' • ')
      .replace('glutensiz', 'Glutensiz')
      .replace('vegan', 'Vegan')
      .replace('sekersiz', 'Şekersiz')
      .replace('yumurtasiz', 'Yumurtasız')
      .replace('sutsuz', 'Sütsüz')
      .replace('unsuz', 'Unsuz')
      .replace('corek', 'Çörekler')
      .replace('muffin', 'Muffinler')
      .replace('sandvic', 'Sandviçler')
      .replace('kurabiye', 'Kurabiyeler')
      .replace('kek', 'Kekler')
      .replace('ekmek', 'Ekmekler')
      .replace('enerjibar', 'Enerji Barlar')
      .replace('yaspasta', 'Yaş Pastalar')
      .replace('kahve', 'Kahveler')
      .replace('kargo', 'Kargolanabilir')
      .replace(' • ', '')
      .replace('*', '');
    document.getElementById("filtreli-urun").innerHTML =  changefilter;
    // Trigger isotope again to refresh layout
    $grid.isotope();
  });


  // change is-checked class on btn-filter to toggle which one is active
  $('.btn-group').each( function( i, buttonGroup ) {
      var $buttonGroup = $( buttonGroup );
      $buttonGroup.on( 'click', '.btn-filter', function() {
          $buttonGroup.find('.is-checked').removeClass('is-checked');
          $(this).addClass('is-checked');

      });
  });

});


// Flatten object by concatting values
function concatValues( obj ) {
  var value = '';
  for ( var prop in obj ) {
    value += obj[ prop ];
  }
  return value;
};
