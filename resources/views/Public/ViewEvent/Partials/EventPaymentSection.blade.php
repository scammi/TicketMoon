<section id='order_form' class="container">
<script src="https://sdk.mercadopago.com/js/v2"></script>
<div class="cho-container"></div>
<script>
  const mp = new MercadoPago('TEST-8fc21640-da5b-4459-9148-9372b86755b3', {
    locale: 'es-AR'
  });

  mp.checkout({
    preference: {
      id: '<?php echo $preference_id ?>'
    },
    render: {
      container: '.cho-container',
      label: 'Pagar',
    }
  });
</script>
</section>
