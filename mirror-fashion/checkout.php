<!DOCTYPE html>
<html>
	<head>
  		<title>Mirror Fashion</title>

    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width">

    	<link rel="stylesheet" href="css/bootstrap.css">
    	<style>
			.form-control:invalid {
				border: 1px solid #cc0000;
			}

			.navbar {
				margin: 0;
			}
    	</style>
  	</head>
	
	<body>
		<nav class="navbar navbar-default navbar-static-top">
			<div class="navbar-header">
				<a class="navbar-brand" href="index.html">Mirror Fashion</a>

				<button class="navbar-toggle" type="button" data-target=".navbar-collapse" data-toggle="collapse">
					menu
				</button>
			</div>
			
			<ul class="nav navbar-nav collapse navbar-collapse">
				<li><a href="sobre.html">Sobre</a></li>
				<li><a href="#">Ajuda</a></li>
				<li><a href="#">Perguntas frequentes</a></li>
				<li><a href="#">Entre em contato</a></li>
			</ul>
		</nav>

		<div class="jumbotron">
			<div class="container">
				<h1>Ótima escolha!</h1>
  				<p>Obrigado por comprar na Mirror Fashion! Preencha seus dados para efetivar a compra.</p>
  			</div>
  		</div>

		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2 class="panel-title">Sua compra</h2>
						</div>
			
						<div class="panel-body">
							<img src="img/produtos/foto1-verde.png" alt="Fuzzy Cardigan" class="img-thumbnail img-responsive">
							<dl>
								<dt>Nome</dt>
								<dd>Fuzzy Cardigan</dd>
								
								<dt>Preço</dt>
								<dd>129,90</dd>
								
								<dt>Cor</dt>
								<dd>Verde</dd>

								<dt>Tamanho</dt>
								<dd>42</dd>
							</dl>
						</div>
					</div>
				</div>

				<form class="col-sm-8">
					<div class="row">
						<fieldset class="col-sm-6">
							<legend>Dados pessoais</legend>

							<div class="form-group">
								<label for="nome">Nome completo</label>
								<input type="text" class="form-control" id="nome" name="nome" autofocus required>
							</div>

							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="email@exemplo.com">
							</div>

							<div class="form-group">
								<label for="cpf">CPF</label>
								<input type="text" class="form-control" id="cpf" name="cpf" placeholder="000.000.000-00" required>
							</div>

							<div class="checkbox">
								<label>
									<input type="checkbox" value="sim" name="spam" checked>
									Quero receber spam da Mirror Fashion
								</label>
							</div>
						</fieldset>

						<fieldset class="col-sm-6">
							<legend>Cartão de Crédito</legend>

							<div class="form-group">
								<label for="numero-cartao">Número - CVV</label>
								<input type="text" class="form-control" id="numero-cartao" name="numero-cartao">
							</div>

							<div class="form-group">
								<label for="bandeira-cartao">Bandeira</label>
								<select name="bandeira-cartao" id="bandeira-cartao" class="form-control">
									<option value="master">MasterCard</option>
									<option value="visa">VISA</option>
									<option value="amex">American Express</option>
								</select>
							</div>

							<div class="form-group">
								<label for="validade-cartao">Validade</label>
								<input type="month" class="form-control" id="validade-cartao" name="validade-cartao">
							</div>
						</fieldset>
					</div>

					<button type="submit" class="btn btn-primary pull-right">
						<span class="glyphicon glyphicon-thumbs-up"></span>
						Confirmar Pedido
					</button>
				</form>
			</div>
		</div>

		<script src="js/jquery.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>
