<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="pt-br"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="pt-br"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" lang="pt-br"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="pt-br" manifest="cache.manifest"> <!--<![endif]-->
<head>
   <meta charset="UTF-8">

   <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><![endif]-->

   <title>IEQ - Igreja do Evangelho Quadrangular | Portal</title>

   <!-- metas tags -->
   <meta name="keywords" content="your, tags"/>
   <meta name="description" content="150 words"/>
   <meta name="copyright"content="© 2014 Igreja do Evangelho Quadrangular">
   <meta name="author" content="name, email@yourdomain.com">
   <meta name="robots" content="index, follow"/>

   <!-- metas tags open graph protocol -->
   <meta property="og:site_name" content="Portal - Igreja do Evangelho Quadrangular"/>
   <meta property="og:type" content="website"/>
   <meta property="fb:admins" content="ID-PÁGINA-DO-FACEBOOK"/>
   <meta property="og:title" content="Portal - Igreja do Evangelho Quadrangular"/>
   <meta property="og:image" content="avatar.png"/>
   <meta property="og:description" content="Site Descrition"/>
   <meta name="og:email" content="email@yourdomain.com"/>
   <meta name="og:phone_number" content="(XX) XXXX-XXXX"/>  
   
   <!-- meta viewports -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- stylesheets -->
   <link rel="stylesheet" href="_css/style.css" type="text/css" media="screen">

   <!-- favicons -->
   <link rel="shortcut icon" type="image/x-icon" href="_images/icons/favicon.png">
   <!-- iPad iOS7+Retina Display -->
   <link rel="apple-touch-icon" sizes="152x152" href="_images/icons/apple-touch-icon-152x152.png">
   <!-- iPad iOS7-Retina Display -->
   <link rel="apple-touch-icon" sizes="144x144" href="_images/icons/apple-touch-icon-144x144.png">
   <!-- iPhone iOS7+Retina Display -->
   <link rel="apple-touch-icon" sizes="120x120" href="_images/icons/apple-touch-icon-120x120.png">
   <!-- iPhone iOS7-Retina Display -->
   <link rel="apple-touch-icon" sizes="114x114" href="_images/icons/apple-touch-icon-114x114.png">
   <!-- iPad iOS7-retina display e iPad Mini-->
   <link rel="apple-touch-icon" sizes="76x76" href="_images/icons/apple-touch-icon-76x76.png">
   <!-- iPad iOS7-retina display  -->
   <link rel="apple-touch-icon" sizes="72x72" href="_images/icons/apple-touch-icon-152x152.png">
   <!-- iPhone iOS7-, iPod Touch e Android 2.2+ -->
   <link rel="apple-touch-icon" href="_images/icons/favicon.png">

   <!-- windows 8 tiles -->
   <meta name="msapplication-TileImage" content="_images/icons/tile.png"/>
   <meta name="msapplication-TileColor" content="#EF1746"/>

   <!-- meta viewport -->
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- modernizr -->
   <!--[if IE]><script async src="_js/modernizr.js"></script><![endif]-->
</head>
   <body>
      <!--[if IE 8]><p class="chromeframe">Atenção! seu navegador é <em>muito antigo.</em> <a title="Atualizar meu navegador" href="http://browsehappy.com/">Atualize para uma versão recente</a> ou <a title="Instalar o Chrome Frame" href="http://www.google.com/chromeframe/?redirect=true&prefersystemlevel=true&hl=pt-BR">Instale o Google Chrome Frame</a> para aproveitar todos os recursos deste site.</p><![endif]-->

      <div class="bar-header">
         <p>
            <em class="fone">Fone:</em><a class="acess-link" title="Ligue já" href="tel:+550000000000">(00) 0000-0000</a><em class="endereco">Endereço:</em><a class="acess-link" title="Ver no Mapa" target="_blank" href="http://maps.google.com/?q=Rua São Paulo, 1267 93010170 São Leopoldo - RS Brazil">Rua São Paulo, 1267 93010170 São Leopoldo - RS</a> <a href="#" title="Clique para fazer login" id="loginclick" class="login">Logar-se</a>
            <section>
               <div id="box-login">
                  <form action="#">
                     <ul>
                         <label>Usuário:</label>
                         <li>
                           <input name="login" type="text"/>
                         </li>

                         <label>Senha:</label>
                         <li><input name="senha" type="password"/>
                         </li>
                         <label class="remember"><input class="remember" name="l-dados" type="checkbox" value="1" title="Marque para lembrar seus dados de acesso."><span class="remember-me">Lembrar meus dados.</span></label><li>
                            <input type="submit" value="Logar" title="Logar no Painel Admin" class="btn-login right">
                         </li>
                     </ul>
                  </form>
               </div><!-- /box login -->
           </section>
         </p>
      </div>

      <header>
         <section class="container">
            <figure class="logo">
               <a href="index.php" title="IEQ - Igreja do Evangelho Quadrangular">
                  <img src="_images/logo-ieq.png" alt="Logo IEQ" class="logo-ieq">
               </a>
            </figure><!-- /logo -->

               <div class="location">
                  <!-- redireciona o usuário para o site da igreja -->
                  <form action="/ieq/site/index.php">
                     <select name="cidade" id="cidade">
                        <option value="-1">Selecione a cidade</option>
                        <option value="1">São Leopoldo</option>
                        <option value="2">Porto Alegre</option>
                        <option value="3">Canoas</option>
                        <option value="4">Esteio</option>
                        <option value="5">Sapucaia</option>
                        <option value="6">Monte Negro</option>
                     </select>

                     <select name="igreja" id="igreja">
                        <option value="-1">Selecione a Igreja</option>
                        <option value="1">Sede</option>
                        <option value="2">Filial -1</option>
                        <option value="3">Filial -2</option>
                        <option value="4">Filial -3</option>
                        <option value="5">Filial -4</option>
                        <option value="6">Filial -5</option>
                     </select>
                     <input type="submit" class="locat-btn" value="Ok" title="OK, entrar no site da congregação">
                  </form>
               </div><!-- /location -->

               <figure class="logo-bispo right">
                  <img src="_images/logo-bispo.png" alt="Logo IEQ Bispo Sidnei de Mello">
               </figure><!-- /logo -->
         </section><!-- /section -->

         <nav>
            <ul class="menu">
               <li><a class="txd" title="Home" href="index.php">Home</a></li>
               <li class="arrow"><a href="#" title="Igrejas">Igrejas</a>
                  <ul class="sub-menu">
                     <li><a title="São Leopoldo" href="/ieq/index.php">São Leopoldo</a></li>
                     <li><a title="Sapucaia" href="#">Sapucaia</a></li>
                     <li><a title="Esteio" href="#">Esteio</a></li>
                     <li><a title="Canoas" href="#">Canoas</a></li>
                     <li><a title="Porto Alegre" href="#">Porto Alegre</a></li>
                     <li><a title="Outras" href="#">Outras</a></li>
                  </ul>
               </li>

               <li><a class="txd" title="Eventos" href="eventos.php">Eventos</a></li>
               <li class="arrow"><a title="Galeria" href="#">Galeria</a>
                  <ul class="sub-menu">
                     <li><a class="txd" title="Fotos" href="fotos.php">Fotos</a></li>
                     <li><a class="txd" title="Videos" href="videos.php">Videos</a></li>
                  </ul>
               </li>
               </li>
               <li><a class="txd" href="cultos.php" title="Cultos">Cultos</a></li>
               <li class="atendimento"><a href="#" title="Atendimento">Atendimento</a>
                  <ul class="sub-menu">
                     <li><a title="Contato" href="contato.php">Contato</a></li>
                     <li><a title="Pedido de Oração" href="pedido-oracao.php">Pedido de Oração</a></li>
                  </ul>
               </li>
            </ul>
         </nav><!-- /nav - menu -->
      </header><!-- /header -->

      
