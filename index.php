<?php 
  $pag = "1";

  include('_includes/head.php');
 ?>
  <body>
    <div id="container">

      <?php include('_includes/topo.php'); ?>

      <div id="content">
        <div id="menuLateral">
          <div class="catalogo">
            <h2 title="Catálogo">Catálogo</h2>
            <div class="sublinhado"></div>
            <ul>
              <li><a href="" title="">Teste 1</a></li>
              <li><a href="" title="">Teste 2</a></li>
              <li><a href="" title="">Teste 3</a></li>
              <li><a href="" title="">Teste 4</a></li>
              <li><a href="" title="">Teste 5</a></li>
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

          <div class="outros">
            <h2 title="Frete">Frete</h2>
            <div class="sublinhado"></div>
              <ul>
                <li><a href="contato.php" title="<?php echo $dddPadrao; echo $telPadrao; ?>"><?php echo $dddPadrao; ?> <?php echo $telPadrao; ?></a></li>
                <li><a href="contato.php" title="<?php echo $emailPadrao; ?>"><?php echo $emailPadrao; ?></a></li>
              </ul>
          </div>

          <div class="outros">
            <h2 title="Redes Sociais<">Redes Sociais</h2>
            <div class="sublinhado"></div>
              <ul>
                <li><a href="contato.php" title="<?php echo $dddPadrao; echo $telPadrao; ?>"><?php echo $dddPadrao; ?> <?php echo $telPadrao; ?></a></li>
                <li><a href="contato.php" title="<?php echo $emailPadrao; ?>"><?php echo $emailPadrao; ?></a></li>
              </ul>
          </div>
        </div><!--menuLateral-->

        <?php //Bloco de pagina ?>
        <div id="home">


        </div>

    </div><!--content-->
  </div><!--container-->

  <?php include('_includes/footer.php'); ?>

  <!-- JS -->
  <?php include('_includes/js.php'); ?>

  </body>
</html>






