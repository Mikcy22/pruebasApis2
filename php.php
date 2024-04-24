<?php
$consumer_key = 'tu_consumer_key';
$consumer_secret = 'tu_consumer_secret';

$woocommerce = new WC_API_Client(
    'https://dev.mengisoft.com/noeliajusticia', 
    $consumer_key, 
    $consumer_secret,
    ['wp_api' => true, 'version' => 'wc/v3']
);

$pedidos = $woocommerce->get('orders');

print_r($pedidos);
?>
