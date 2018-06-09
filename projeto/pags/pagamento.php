<?php
	$_SESSION['nome'] = $_POST['nome'];
	
	$_SESSION['sobrenome'] = $_POST['sobrenome'];
	$_SESSION['email'] = $_POST['email'];
	$_SESSION['telefone'] = $_POST['telefone'];
	$_SESSION['valor'] = number_format($_POST['valor'], 2,',', '.');

	$mp = new MP(client_id, client_secret);
	$preference_data = array(
	"items" => array(
	  array(
	    "payer_email" => $_SESSION['email'],
	    "back_url" => url_site,
	      "title" => mb_convert_encoding("#FATURA ".titulo_site, "UTF-8", "auto"),
	      "currency_id" => "BRL",
	      "category_id" => "Serviços",
	      "quantity" => 1,
	      "unit_price" => floatval(number_format((float)str_replace(",",".",$_SESSION['valor']), 2, '.', '')
	    ))),

	      "payer" => array(
	      "name" => $_SESSION['nome'],
	      "surname" => $_SESSION['sobrenome'],
	      "email" => $_SESSION['email']
	 	 ),
		"back_urls" => array(
			"success" => url_site."status/success/",
			"failure" => url_site."status/failure/",
			"pending" => url_site."status/pending/"
		));
	$preference = $mp->create_preference($preference_data);
?>
<div class="col-sm-8 offset-md-2">
	<h4 align="center">Pedido efetuado com sucesso!</h4><br>

	<div class="row">
		<div class="col-sm-7">
			<h5>Seus dados:</h5>
			<hr>
			<p>Nome: <b><?php echo $_SESSION['nome'];?> <?php echo $_SESSION['sobrenome'];?></b></p>
			<p>Email: <b><?php echo $_SESSION['email'];?></b></p>
			<p>Telefone: <b><?php echo $_SESSION['telefone'];?></b></p>
			<p>Valor a pagar: <code>R$ <?php echo $_SESSION['valor'];?></code></p>
		</div>

		<div class="col-sm-5">
			<h5>Pagamento:</h5>
			<hr>
			<small class="text-success">Tudo certo, agora é só efetuar o pagamento</small>
			<hr>
			<a target="_blank" href="<?php echo $preference["response"]["init_point"];?>" name="MP-Checkout" class="orange-ar-m-sq-arall"><img src="images/mercadopagolarge.png"/ width="400" class="img-fluid"></a>
    		<script type="text/javascript" src="//resources.mlstatic.com/mptools/render.js"></script>
			<hr>
		</div>
	</div>
</div>