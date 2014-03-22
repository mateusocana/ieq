<?php include "site/header.php";?>

   <!-- slide -->
   <div class="home-slide">
      <div class="slide-pager">
         <a class="prev" title="Anterior" href="#">Anterior</a>
         <a class="next" title="Próximo" href="#">Próximo</a>
      </div>

      <div class="slide">
         <ul>
            <li><img src="_images/slide/banner3.jpg" title="slide 1" alt=""></li>
            <li><img src="_images/slide/banner2.jpg" title="slide 2" alt=""></li>
            <li><img src="_images/slide/banner.jpg" title="slide 3" alt=""></li>
            <li><img src="_images/slide/banner4.jpg" title="slide 4" alt=""></li>
            <li><img src="_images/slide/banner5.jpg" title="slide 5" alt=""></li>
         </ul>
      </div>
   </div><!-- /home-slide -->

   <section>

      <h1 class="title left">Eventos da Região</h1>

      <h1 class="title right">(Bom dia) <a title="Visitante" class="fone" href="#">Visitante</a></h1>
   </section>

<?php include "site/footer.php";?>

<!-- remove a classe nav - menu -->
<script type="text/javascript">
   $(function(){
      $('nav').remove();
   });
</script>
