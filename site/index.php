<?php include "header.php";?>

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

      <section class="content">
            <figure class="carousel">
               <h1 class="title">Últimos Eventos</h1>
                  <ul>
                     <li><img src="_images/eventos/event1.jpg" title="evento 1" alt=""></li>
                     <li><img src="_images/eventos/event2.jpg" title="evento 2" alt=""></li>
                     <li class="right"><img src="_images/eventos/event3.jpg" title="evento 3" alt=""></li>
                  </ul>
            </figure>

            <button class="right">
               <a href="eventos.php" title="Ver Todos desta categoria">Ver Todos</a>
            </button>

            <figure class="fotos">
               <h1 class="title">Últimas Fotos</h1>
                  <ul>
                     <li><img src="_images/fotos/photo1.JPG" title="foto 1" alt=""></li>
                     <li><img src="_images/fotos/photo2.JPG" title="foto 2" alt=""></li>
                     <li class="right"><img src="_images/fotos/photo3.JPG" title="foto 3" alt=""></li>
                     <li><img src="_images/fotos/photo4.JPG" title="foto 4" alt=""></li>
                     <li><img src="_images/fotos/photo5.jpg" title="foto 5" alt=""></li>
                     <li class="right"><img src="_images/fotos/photo6.jpg" title="foto 6" alt=""></li>
                  </ul>

                  <button class="right">
                     <a href="fotos.php" title="Ver Todas desta categoria">Ver Todas</a>
                  </button>
            </figure>

            <figure class="videos">
               <h1 class="title">Últimos Videos</h1>
                  <ul>
                     <li>
                     <!-- 
                     OBS: FAÇA A VARIÁVEL DO PHP PARA IMPRIR OS DADOS DO BANCO ANTES DE 
                     ?rel=0&theme=light&color=white  NOS IFRAMES, POIS ESTES CÓDIGOS FAZEM COM QUE O PLAYER DO VIDEO SEJA DE OUTRA COR.
                     -->
                        <iframe src="//www.youtube.com/embed/kDEOpEs-Yj0?rel=0&theme=light&color=white" frameborder="0" allowfullscreen></iframe></li>
                     <li><iframe src="//www.youtube.com/embed/_9IdF-MN3aY?rel=0&theme=light&color=white" frameborder="0" allowfullscreen></iframe></li>
                     <li class="right"><iframe src="//www.youtube.com/embed/VzXgU4uekvE?rel=0&theme=light&color=white" frameborder="0" allowfullscreen></iframe></li>
                  </ul>

                  <button class="right">
                     <a href="videos.php" title="Ver Todos desta categoria">Ver Todos</a>
                  </button>
            </figure>

            <div class="comunicados">
               <h3 class="title">Comunicados</h3>

                  <div class="banner">
                     <ul>
                        <li><img src="_images/comunicados/comunicate.jpg" title="comunicado 1" alt=""></li>
                        <li><img src="_images/comunicados/jovens.jpg" title="comunicado 2" alt=""></li>
                        <li><img src="_images/comunicados/tadel.png" title="comunicado 3" alt=""></li>
                     </ul>
                  </div>

               <div class="eventos-da-semana">
                  <div class="datas">
                     <h4 class="title-eventos">Terça</h4>
                        <p>Não perca o culto desta terça, teremos hoje a presença do pastor Walter trazendo seus conhecimentos da palavra de Deus e nos abençoando com a graça do divino.</p>

                        <em class="date right">Data: 04/03/2014</em>
                  </div>

                  <div class="datas">
                     <h4 class="title-eventos">Quarta</h4>
                        <p>Não perca o culto desta quarta, teremos hoje a presença do pastor Walter trazendo seus conhecimentos da palavra de Deus e nos abençoando com a graça do divino.</p>

                        <em class="date right">Data: 05/03/2014</em>
                  </div>

                  <div class="datas">
                     <h4 class="title-eventos">Quinta</h4>
                        <p>Não perca o culto desta quinta, teremos hoje a presença do pastor Walter trazendo seus conhecimentos da palavra de Deus e nos abençoando com a graça do divino.</p>

                        <em class="date right">Data: 06/03/2014</em>
                  </div>

                  <div class="datas">
                     <h4 class="title-eventos">Sexta</h4>
                        <p>Não perca o culto desta sexta, teremos hoje a presença do pastor Walter trazendo seus conhecimentos da palavra de Deus e nos abençoando com a graça do divino.</p>

                        <em class="date right">Data: 07/03/2014</em>
                  </div>
               </div><!-- /eventos da semana -->

               <div class="fb">
                  <h5 class="fb-title">Curta nossa Fan Page</h5>

                  <div class="fb-like-box" data-href="https://www.facebook.com/pages/International-Church-of-the-Foursquare-Gospel/106236119407288?rf=108188135875433" data-width="300" data-height="335" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div>
               </div>
           </div><!-- /comunicados -->

         <div class="publicidade">
            <h1 class="title">Publicidade</h1>

               <div class="banner">
                  <ul>
                     <li><img src="_images/publicidades/publict.jpg" title="publicidade 1" alt=""></li>
                     <li><img src="_images/publicidades/publict.jpg" title="publicidade 2" alt=""></li>
                     <li><img src="_images/publicidades/publict.jpg" title="publicidade 3" alt=""></li>
                  </ul>
               </div>

               <div class="igrejas">
                  <h1 class="title">Congregações</h1>
                  <ul>
                     <li><a href="#"><img src="_images/congregacoes/cong1.jpg" alt="" title="congregação 1"></a></li>
                     <li><a href="#"><img src="_images/congregacoes/cong2.JPG" alt="" title="congregação 2"></a></li>
                     <li><a href="#"><img src="_images/congregacoes/cong3.jpg" alt="" title="congregação 3"></a></li>
                     <li><a href="#"><img src="_images/congregacoes/cong4.jpg" alt="" title="congregação 4"></a></li>
                     <li><a href="#"><img src="_images/congregacoes/cong5.jpg" alt="" title="congregação 5"></a></li>
                     <li><a href="#"><img src="_images/congregacoes/cong3.jpg" alt="" title="congregação 6"></a></li>
                     <li><a href="#"><img src="_images/congregacoes/cong1.jpg" alt="" title="congregação 7"></a></li>
                     <li><a href="#"><img src="_images/congregacoes/cong5.jpg" alt="" title="congregação 8"></a></li>
                     <li><a href="#"><img src="_images/congregacoes/cong2.JPG" alt="" title="congregação 9"></a></li>
                     <li><a href="#"><img src="_images/congregacoes/cong4.jpg" alt="" title="congregação 10"></a></li>
                     <li><a href="#"><img src="_images/congregacoes/cong5.jpg" alt="" title="congregação 11"></a></li>
                     <li><a href="#"><img src="_images/congregacoes/cong4.jpg" alt="" title="congregação 12"></a></li>
                     <li><a href="#"><img src="_images/congregacoes/cong2.JPG" alt="" title="congregação 13"></a></li>
                     <li><a href="#"><img src="_images/congregacoes/cong3.jpg" alt="" title="congregação 14"></a></li>
                     <li><a href="#"><img src="_images/congregacoes/cong1.jpg" alt="" title="congregação 15"></a></li>
                  </ul>
               </div>

            <button class="right top">
               <a href="congregacoes.php" title="Ver Todas desta categoria">Ver Todas</a>
            </button>
         </div><!-- /section -->
      </section><!-- /section -->

<?php include "footer.php";?>
