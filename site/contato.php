<?php include "header.php";?>

<div class="nav">
	<ul class="box-nav">
		<li class="you">Você está em:</li>
		<li><a href="index.php">Home</a></li>
		<li><a href="#">Atendimento</a></li>
		<li><a href="#">Contato</a></li>
		<li class="return"><a title="Voltar à página anterior" href="javascript:window.history.go(-1)"><  Voltar</a></li>	
	</ul>
</div>

	<section>
		<h1 class="page-title">Contato</h1>
		
		<!-- aside -->
		<aside>
		  <li class="mark">Telefone</li>
  		  <li class="mark-option">Sede</li>
  		  <li><a href="tel:+559999999999">(99) 9999-9999</a></li>
  		  <li class="mark-option">São Leopoldo</li>
  		  <li><a href="tel:+559999999999">(99) 9999-9999</a></li>
  		  <li class="mark-top">Fax</li>
  		  <li>(99) 9999-9999</li>
  		  <li class="mark-top">E-mail</li>
  		  <li class="mark-option">Corpo Diretivo</li>
  		  <li><a title="direcao@ieqr620.com.br" href="malito:direcao@ieqr620.com.br">direcao@ieqr620.com.br</a></li>
  		  <li class="mark-option">Outros</li>
  		  <li><a title="contato@ieqr620.com.br" href="malito:contato@ieqr620.com.br">contato@ieqr620.com.br</a></li>
			
		  <!-- aocials -->
		  <div class="social">
		  	 <li class="fb"><a title="Facebook" href="#">Facebook</a></li>
		  	 <li class="tw"><a title="Twitter" href="#">Twitter</a></li>
		  	 <li class="gp"><a title="Google +" href="#">Google +</a></li>
		  </div><!-- social -->
		</aside><!-- aside -->

		<!-- form contato -->
		<article class="form-contato">
		  <h2>Formulário de Contato</h2>

		  <form action="#" method="post" name="formContato">
		    <fieldset>Seu Nome:</fieldset>
		    <input type="text" title="Favor insira seu nome!" required="required" placeholder="Sidnei de Mello">

		    <fieldset>E-mail:</fieldset>
		    <input type="email" title="Favor insira seu e-mail!" required="required" placeholder="sidnei@ieqr620.com.br">

		    <fieldset>Telefone:</fieldset>
		    <input type="tel" title="Favor insira seu telefone!" required="required" placeholder="(99) 9999-9999 " class="fone">

		    <fieldset>Localidade (Cidade + UF):</fieldset>
		    <input class="localidade" type="text" title="Favor insira sua localidade!" required="required" placeholder="São Leopoldo - RS">

		    <fieldset>Mensagem:</fieldset>
		    <textarea name="mensagem" title="Ops! Acho que você esqueceu da sua mensagem!" required="required" placeholder="Mensagem:"></textarea>
		    <input type="submit" title="Enviar Mensagem" value="Enviar">
		  </form>
		</article><!-- /form contato -->
	</section>

<div class="mapa">
  <span class="bd-mapa"></span>
  <iframe src="http://goo.gl/AmXKNT" frameborder="0" style="border:0"></iframe>
</div>

<?php include "footer.php";?>
