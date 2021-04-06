<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login Facebook</title>
	<meta charset="utf-8">
	<meta name="description" content="Pagina de cadastro Facebook">
	<meta name="keywords" content="Palavras,chaves,separadas,por,virgula">
	<meta name="author" content="Davi Queiroz">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&amp;display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="center">
			<div class="logo">
				<h2>Bolludo</h2>
			</div><!--Logo-->
			<form method="post" class="form-login">
				<div class="form-element">
					<p>E-mail ou Telefone:</p>
					<input type="Email">
				</div><!--form-element-->
			<div class="form-element">
					<p>Senha:</p>
					<input type="password"></br>
				</div><!--form-element-->
			<div class="form-element"> 
					<input type="submit" name="acao" value="Entrar">
				</div><!--form-element-->

				<div class="recuperacao"><a href="">Esqueçeu a senha?</a></div>
			</form><!--Form-Login-->
			<div class="clear"></div>
		</div><!--Center-->
	</header>

	<section class="main">
		<div class="center">
			<div class="img-pessoas">
				<img src="imagens/img1.png">
			</div><!--img-pessoas-->

				<div class="abrir-conta">
					<h2>Abra Sua Conta</h2>	
					<h3>É gratuito e sempre será.</h3>				

					<form class="create-account">
						<div class="w50">
							<input placeholder="Nome" type="text">
						</div><!--w50-->
						
						<div class="w50">
							<input placeholder="Sobrenome" type="text">
						</div><!--w50-->
						
						<div class="w100">
							<input placeholder="E-mail" type="email">
						</div><!--100-->
						
						<div class="w100">
							<input placeholder="Senha" type="password">
						</div><!--100-->
						
						<div class="w100">
							<h2>Data De Nascimento</h2>
							<select name="nascimento-dia" id="data" class="nascimento">
                            <?php
                                for ($i=1; $i < 32	 ; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>

							<select name="nascimento-mes" class="nascimento">
								<option value="1">Janeiro</option>
								<option value="2">Fevereiro</option>
								<option value="3">Março</option>
								<option value="4">abril</option>
								<option value="5">Maio</option>
								<option value="6">Junho</option>
								<option value="7">Julho</option>
								<option value="8">Agosto</option>
								<option value="9">Setembro</option>
								<option value="10">Outubro</option>
								<option value="11">Novembro</option>
								<option value="12">Dezembro</option>
							</select>

							<select name="nascimento-ano" id="data" class="nascimento">
                            <?php
                                for ($i=1940; $i <= 2021 ; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
							<div class="clear"></div>
						</div><!--100-->

						<div class="w100">
							<input type="submit" value="Cadastre-se">
						</div><!--100-->

						<div class="w100">
							<h3>Gênero</h3>
							<div class="input-radio">
								<input type="radio" name="sexo"  value="Masculino" id="">
								<label for="Masculino">Masculino</label>
								<input type="radio" name="sexo"  value="Feminino" id="">
								<label for="Masculino">Feminino</label>
								<input type="radio" name="sexo"  value="Outros" id="">
								<label for="Outros">Outros</label>
							</div>
						</div><!--100-->
						
					</form><!--create-account-->

				</div><!--abrir-conta-->
			<div class="clear"></div>
		</div><!--Center-->
	</section><!--main-->
	<section class="linguas">
		<div class="center">
			<a class="selected-lingua" href="#">Portugues (BR)</a>
			<a class="" href="#">Portugues (BR)</a>
			<a class="" href="#">Portugues (BR)</a>
			<a class="" href="#">Portugues (BR)</a>
			<a class="" href="#">Portugues (BR)</a>
			<a class="" href="#">Portugues (BR)</a>
			<a class="" href="#">Portugues (BR)</a>

		</div><!--center-->
	</section><!--linguas-->
		<section class="footer">
		<div class="center">
			<a class="" href="#">Cadastre-se</a>
			<a class="" href="#">Entrar</a>
			<a class="" href="#">Messenger</a>

		</div><!--center-->
	</section><!--linguas-->
</body>
</html>
