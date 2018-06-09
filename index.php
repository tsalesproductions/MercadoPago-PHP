<?php
	require_once "lib/mercadopago.php";
	$mp = new MP(client_id, client_secret);


	$preference_data = array(
	"items" => array(
	  array(
	    "payer_email" => $email,
	    "back_url" => url_site,
	      "title" => mb_convert_encoding("#FATURA ".titulo_site, "UTF-8", "auto"),
	      "currency_id" => "BRL",
	      "category_id" => "Serviços",
	      "quantity" => 1,
	      "unit_price" => floatval(number_format((float)str_replace(",",".",$valor), 2, '.', '')
	    ))),

	      "payer" => array(
	      "name" => $nome,
	      "surname" => $sobrenome,
	      "email" => $email
	 	 ),
		"back_urls" => array(
			"success" => url_site."status/success/",
			"failure" => url_site."status/failure/",
			"pending" => url_site."status/pending/"
		));
	$preference = $mp->create_preference($preference_data);
	?>

	<h4>Pagar agora com MercadoPago:</h4>
    <a target="_blank" href="<?php echo $preference["response"]["init_point"];?>" name="MP-Checkout" class="orange-ar-m-sq-arall"><img src="images/mercadopagolarge.png"/ width="400" class="img-fluid"></a>
    <script type="text/javascript" src="//resources.mlstatic.com/mptools/render.js"></script>