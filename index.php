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
        <a href="produtos.php" ><img src="_imgs/topo.jpg" style="margin-top:-25px;" class="lbanner"></a><br/><br/>
        <div id="home">
          <div id="topH">
            <div class="colum empresa">
              <h2>A empresa</h2>
            <div class="sublinhado gde mt"></div>
              <p><img src="_imgs/logolateral.jpg" class="mr " alt="Pedraki" align="left" />
                <span class="">A <b>PEDRA AKI</b> trabalha com muita dedicação para transformar o 
                ambiente dos seus sonhos na mais perfeita realidade. <br />Nossa empresa é 
                especializada em decorações com pedras em pisos e paredes em áreas internas 
                e externas.</p>
                <br/>
              <p>Com alto nível de profissionalismo e competência, fazemos das decorações 
              do seu ambiente um sucesso absoluto para que sejam partes integrantes da vida 
              pessoal e profissional de cada um.</p>
              <button class="btn1 botao_laranja right mtl"><a href="empresa.php">Leia mais</a></button>
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
       
        <div id="home" style="margin-left:195px;">
          <div id="topH">
            <div class="colum empresa">
              <h2>Notícias</h2>
            <div class="sublinhado gde mt"></div>
              <ul class="list-noticias">
                <li>28.09.2012 - Resgatadas no ano 2000, as pedras para decoração voltam com tudo para modernizar o seu ambiente.</li>
                <li>28.09.2012 - Ao decorar a casa com pedras naturais e possível contar com um material sofisticado, resistente e que imprime personalidade ao ambiente.</li>
                <li>28.09.2012 - A utilização da decoração residencial e comercial com pedras vem sendo utilizada a bastante tempo, porem isso ira variar bastante da criatividade e dos modelos de pedras visto que você poderá criar um modelo único com sua criatividade.</li>
              </ul>
            </div>
        </div>
    </div><!--content-->
  </div><!--container-->

  <?php include('_includes/footer.php'); ?>

  <!-- JS -->
  <?php include('_includes/js.php'); ?>

  </body>
</html>






