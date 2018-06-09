<?php
	define('titulo_site', 'PAGAMENTO'); //Título do site
	define('url_site', 'http://localhost/pagamento/');  //URL do site OBRIGATÓRIO
	define('client_id', ''); //Vai precisar pegar no MP
	define('client_secret', ''); //Vai precisar pegar no MP
	define('email', 'thiago_salests@hotmail.com'); //Email que receberá os e-mails


	function sendMail($nome, $sobrenome, $email, $telefone, $valor, $status){
		$to = email;
		$subject = '['.titulo_site.'] PAGAMENTO EFETUADO!'; 
		$headers .= "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		$message = '<html><body>';
		$message .= 
		'
		<h1>Olá, você recebeu um novo pagamento!</h1>
		<hr>
		<h2>Dados do pagante:</h2>
		<p><b>Nome:</b> '.$nome.' '.$sobrenome.'</p>
		<p><b>Email:</b> '.$email.' </p>
		<p><b>Telefone:</b> '.$telefone.' </p>
		<p><b>Valor:</b> <code> R$ '.$valor.' </code>
		<p><b>Status:</b> '.$status.' </p>
		<hr>
		<p>Obs: Confirme o pagamento na conta do MercadoPago antes de efetuar a liberação.</p>
		</p>';
		$message .= '</body></html>';

		mail($to, $subject, $message, $headers);
	}
?>