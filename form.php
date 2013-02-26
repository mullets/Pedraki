<?php
	ob_start();
	$acao = $_GET['action'];
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$nomeAmigo = $_POST['nomeAmigo'];
	$emailAmigo = $_POST['emailAmigo'];
	$mensagemSite = $_POST['mensagemSite'];

	$nomea = $_POST['nomea'];
	$emaila = $_POST['emaila'];
	$telefonea = $_POST['telefonea'];

	$emailsender  = "no-reply@cromagrafyc.com.br";
	$emaildestinatario = "danielkim@cromagrafyc.com.br";

	switch ($acao) {
		case 'emprego':
			$assunto="Novo candidato cadastrado no site";
			$mensagem = '
			  <b>Interesse em Trabalhar</b> <br>
			  -------------------------------------------------------------------- <br> 
			  <strong>Nome</strong>:   '.utf8_encode($nome).' <br />
			  <strong>Email</strong>:    '.utf8_encode($email).'<br />
			   <strong>Telefone</strong>:    '.utf8_encode($telefone).'<br /> 
			';
			break;

		case 'indicar':
			$emaildestinatario = $emailAmigo;
			$assunto="Indicação de Site";
			$mensagem = '
			  <b>Olá '.$nomeAmigo.'! </b> <br>
			  Seu amigo '.$nome.' indicou nosso site para você conhecer. <br/><br/>
			  www.cromagrafyc.com.br <br/><br/>
			  Muito Obrigado.
			  Equipe CromaGrafyc.			 
			  <br/>

			';
			break;

		case 'assinar':
			$assunto="Cadastro Novidades Website";
			$mensagem = '
			  <b>Cadastro para receber novidades do site:</b> <br>
			  -------------------------------------------------------------------- <br> 
			  <strong>Nome</strong>:   '.utf8_encode($nome).' <br />
			  <strong>Email</strong>:    '.utf8_encode($email).'<br />
			';
			break;

		case 'contato':
			$assunto="Contato via Site";
			$mensagem = '
			  <b>Contato via website:</b> <br>
			  -------------------------------------------------------------------- <br> 
			  <strong>Nome</strong>:   '.utf8_encode($nomea).' <br />
			  <strong>Email</strong>:    '.utf8_encode($emaila).'<br />
			  <strong>Telefone</strong>:    '.utf8_encode($telefonea).'<br />
			  <strong>Mensagem</strong>:    '.utf8_encode($mensagemSite).'<br />
			';
			break;

	}

	if($_POST) {
		$quebra_linha = "\n";
		$headers = "MIME-Version: 1.1\n";  
		$headers .= "Content-type: text/html; charset=utf-8\n";
		$headers .= "From: CromaGrafyc <no-reply@cromagrafyc.com.br>\n"; // remetente
		if(!mail($emaildestinatario, $assunto, $mensagem, $headers ,"-r".$emailsender)){ // Se for Postfix
		    $headers .= "Return-Path: " . $emailsender . $quebra_linha; // Se "n�o for Postfix"
		    mail($emaildestinatario, $assunto, $mensagem, $headers );
		}
		header("Location:index.php?msg=2");
		exit;
	}
?> 