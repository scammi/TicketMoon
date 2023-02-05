<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
// Initialize the checkout
const mp = new MercadoPago('<?php echo $mercado_pago_public_key ?>', { // Replace with key
    locale: 'en-US'
  });

const checkout = mp.checkout({
  preference: {
      id: '<?php echo $preference_id?>'
  },
  autoOpen: true, // Allow the Checkout Pro to open automatically
});

</script>