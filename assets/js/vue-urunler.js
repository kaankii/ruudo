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
