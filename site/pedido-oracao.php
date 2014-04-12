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
          <input type="text" title="Favor insira seu nome!" required="required" placeholder="Sidnei de Mello">

          <fieldset>E-mail:</fieldset>
          <input type="email" title="Favor insira seu e-mail!" required="required" placeholder="sidnei@ieqr620.com.br">

          <fieldset>Localidade (Cidade + UF):</fieldset>
          <input class="localidade" type="text" title="Favor insira sua localidade!" required="required" placeholder="São Leopoldo - RS">

          <fieldset>Pedido de Oração:</fieldset>
          <textarea name="mensagem" title="Ops! Acho que você esqueceu da sua mensagem!" required="required" placeholder="Mensagem:"></textarea>
          <input type="submit" title="Enviar Mensagem" value="Enviar">
        </form>
      </article><!-- /form contato -->
   </section>

<?php include "footer.php";?>
