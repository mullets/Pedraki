<?php 
  $pag = "1";

  include('_includes/head.php');
 ?>
<body onload="setupZoom()">
    <div id="container">

      <?php include('_includes/topo.php'); ?>

      <div id="content">
        <div id="menuLateral">
          <div class="catalogo">
            <h2 title="Catálogo">Catálogo</h2>
            <div class="sublinhado"></div>
            <ul>
              <li><a href="produtos.php" title="">Canjiquinha</a></li>
              <li><a href="produtos.php" title="">Mosaico</a></li>
              <li><a href="produtos.php" title="">Pedras São Thomé</a></li>
              <li><a href="produtos.php" title="">Pedras Mineira</a></li>
              <li><a href="produtos.php" title="">Cacos</a></li>
            </ul>
          </div>

          <div class="outros">
            <h2 title="Contato">Contato</h2>
            <div class="sublinhado"></div>
              <ul>
                <li><a href="contato.php" title="<?php echo $dddPadrao; echo $telPadrao; ?>"><?php echo $dddPadrao; ?> <?php echo $telPadrao; ?></a></li>
                <li><a href="contato.php" title="<?php echo $emailPadrao; ?>"><?php echo $emailPadrao; ?></a></li>
              </ul>
          </div>

          <div class="outros" style="height:150px;">
            <h2 title="Frete">Frete</h2>
            <div class="sublinhado"></div>
              <img src="_imgs/frete.jpg" />
          </div>

          <div class="outros" style="height:200px;">
            <h2 title="Redes Sociais<">Redes Sociais</h2>
            <div class="sublinhado"></div>
              <img src="_imgs/redes.jpg" />
          </div>
        </div><!--menuLateral-->

        <?php //Bloco de pagina ?>
        <div id="home">
          <div id="topH">
            <div class="colum empresa">
              <h2>Produtos</h2>
            <div class="sublinhado gde mt"></div>
              <p>Alguns de nossos produtos</p>
                <a href="_imgs/produtos/01.jpg">
                  <img src="_imgs/produtos/01.jpg" width="260" height="200" style="float:left; padding:10px;" />
                </a>
                <a href="_imgs/produtos/02.jpg">
                  <img src="_imgs/produtos/02.jpg" width="260" height="200" style="float:left; padding:10px;" />
                </a>                
                <a href="_imgs/produtos/03.jpg">
                  <img src="_imgs/produtos/03.jpg" width="260" height="200" style="float:left; padding:10px;" />
                </a>                
                <a href="_imgs/produtos/04.jpg">
                  <img src="_imgs/produtos/04.jpg" width="260" height="200" style="float:left; padding:10px;" />
                </a>
                <a href="_imgs/produtos/05.jpg">
                  <img src="_imgs/produtos/05.jpg" width="260" height="200" style="float:left; padding:10px;" />
                </a>
                <a href="_imgs/produtos/06.jpg">
                  <img src="_imgs/produtos/06.jpg" width="260" height="200" style="float:left; padding:10px;" />
                </a>

            </div>

            <div class="colum mt" >
              <h2 class="min">Orçamento online</h2>
              <div class="sublinhado gde"></div>
              <p>

                Em breve.
              </p>
              <!-- <button class="btn1 botao_laranja">Leia mais</button> -->
            </div>
          </div>
        </div>
        <br class="clear">
       
        
    </div><!--content-->
  </div><!--container-->
            <script type="text/javascript" src="http://www.ferrobattuto.com.br/_js/jquery.last.js"></script>
            <script type="text/javascript" src="http://www.ferrobattuto.com.br/_js/jquery.fancy.js"></script>
            <script type="text/javascript" src="http://www.ferrobattuto.com.br/_js/jquery.fancy.html.js"></script>
  <?php include('_includes/footer.php'); ?>

  <!-- JS -->
  <?php include('_includes/js.php'); ?>

  </body>
</html>






