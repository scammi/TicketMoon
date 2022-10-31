<script src="https://sdk.mercadopago.com/js/v2"></script>
<script>
// Initialize the checkout
const mp = new MercadoPago('TEST-8fc21640-da5b-4459-9148-9372b86755b3', {
    locale: 'en-US'
  });

const checkout = mp.checkout({
  preference: {
      id: '<?php echo $preference_id?>'
  },
  autoOpen: true, // Allow the Checkout Pro to open automatically
});

</script>