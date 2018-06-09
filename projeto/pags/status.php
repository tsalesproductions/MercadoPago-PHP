<?php
	$status = $explode['1'];
	$nome = $_SESSION['nome'];
	$sobrenome = $_SESSION['sobrenome'];
	$email = $_SESSION['email'];
	$telefone = $_SESSION['telefone'];
	$valor = $_SESSION['valor'];

	switch($status){
		case "success":
		$textoStatus = "PAGAMENTO APROVADO";
		$classStatus = "alert alert-success";
		$mensagemStatus = "Pagamento confirmado! Aguarde a liberação do seu VIP!";
		sendMail($nome, $sobrenome, $email, $telefone, $valor, 'Aprovado');
		break;

		case "failure":
		$textoStatus = "PAGAMENTO RECUSADO";
		$classStatus = "alert alert-danger";
		$mensagemStatus = "Seu pagamento foi recusado. Não fique trite, tente outro método de pagamento.";
		break;

		case "pending":
		$textoStatus = "PAGAMENTO PENDENTE";
		$classStatus = "alert alert-warning";
		$mensagemStatus = "Pagamento pendente. Assim que for aprovado liberaremos seu VIP. Aguarde!";
		sendMail($nome, $sobrenome, $email, $telefone, $valor, 'Pendente');
		break;

	}

	?>
	<div class="col-sm" align="center">
	    <h4><?php echo titulo_site;?> | STATUS</h4>
	<hr>
	    <div><?php echo $textoStatus;?></div>
	    <hr>
	    <div class='<?php echo $classStatus;?>'><?php echo $mensagemStatus;?></div>
	    <p align="right"><a href="" class="btn btn-outline-primary btn-lg">Voltar ao inicio</a></p>
	    <hr>
	</div>
</div>