<!DOCTYPE html>
<html>
	<head>
		<title>Formulario</title>
		<link rel='stylesheet' type='text/css' href='estilo.css?versao=1.3'/>
		<script type="text/javascript" src="jquery-1.6.2.min.js"></script>
	    <script type="text/javascript" src="nosso.js?versao=1.4"></script>

	</head>
	<body>

		<h1>Formulario Email</h1>
		<form action="enviarEmail.php" method="request">
			<label for="assunto">assunto</label>
			<input type="text" id="assunto" name="assunto"><br><br>
			<label for="email">destinatario</label>
			<input type="text" name="from"><br><br>
			<label for="nome">nome</label>
			<input type="text" name="nome"><br><br>
			<label for="conteudo" id="lbcont">conteudo</label>
			<textarea id="conteudo" name="conteudo"></textarea>
			<button type="submit" id="btnEnviarEmail">Enviar</button>
		</form>


	</body>


</html>