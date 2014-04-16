<?php include "header.php";?>

<div class="nav">
   <ul class="box-nav">
      <li class="you">Você está em:</li>
      <li><a href="index.php">Home</a></li>
      <li><a href="#">Atendimento</a></li>
      <li><a href="#">Pedido de Oração</a></li>
      <li class="return"><a title="Voltar à página anterior" href="javascript:window.history.go(-1)"><  Voltar</a></li> </ul>
</div>

   <section>
      <h1 class="page-title">Pedido de Oração</h1>
      
      <!-- form contato -->
      <article class="form-contato">
        <h2>Faça seu pedido de oração</h2>

        <form action="#" method="post" name="formContato">
          <fieldset>Seu Nome:</fieldset>
          <input type="text" title="Favor insira seu nome!" required="required" maxlength="30" placeholder="Sidnei de Mello" onkeyup="proximoCampo(this, 'email');">

          <fieldset>E-mail:</fieldset>
          <input placeholder="sidnei@ieqr620.com.br" required="required" type="email" id="email" name="email" maxlength="45" title="Favor insira seu e-mail!" onkeyup="proximoCampo(this, 'fone');">

          <fieldset>Localidade (Cidade + UF):</fieldset>
          <input class="localidade" onkeyup="proximoCampo(this, 'mensagem');" id="localidade" name="localidade" maxlength="45" type="text" title="Favor insira sua localidade!" required="required" placeholder="São Leopoldo - RS" onkeyup="proximoCampo(this, 'mensagem');">

          <fieldset>Mensagem:</fieldset>
          <textarea id="mensagem" maxlength="500" name="mensagem" required="required" placeholder="Mensagem:"></textarea>
          <input type="submit" title="Enviar Mensagem" value="Enviar">
        </form>
      </article><!-- /form contato -->
   </section>

<?php include "footer.php";?>
