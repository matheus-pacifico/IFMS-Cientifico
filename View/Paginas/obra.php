
  <?php

  $ch = require "../../Controller/init_curl.php";

  //$url = "http://localhost:8080/obra/mostrar";

  $url = "http://bookfllix.herokuapp.com/obra/mostrar";

  curl_setopt($ch, CURLOPT_URL, $url);

  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

  $resultado = json_decode(curl_exec($ch));

  $ch = curl_init($url);

  curl_close($ch);


  ?>



  <div class="container">



    <div class="row d-flex justify-content-center">

      <?php if(!empty($resultado)) {

       foreach ($resultado as $obraObjeto) { 



      ?>



          <div class="col-md-10 col-sm-3 padi">   

            <div class="card">

              <div class="card-body">



                <h5 class="card-title tituloObra"><a class="tituloObra" href="<?php $url . '/{obraObjeto->id}' ?>" action=""><?php echo $obraObjeto->titulo . " "; ?></a></h5>



                <h6 class="card-subtitle mb-2 text-muted"><?php echo "ID: " . $obraObjeto->id;

                  echo "    IFSN: " . $obraObjeto->ifsn;

                  echo " " . "    Autor: " . $obraObjeto->autor;

                  echo "    Área: " . $obraObjeto->area; ?>

                </h6>



              <div class="card-text">
                <?php echo $obraObjeto->descricao; ?>
              </div>



              <!--<a href="#" class="card-link">Download</a>



              <a href="#" class="card-link">Ver mais</a>-->

            </div>

          </div>

        </div>

        <?php

       // echo "<p></p>";

      }

  } else { ?>



    <div style="text-align: center; height: 25em">

     <h2>Nenhum Resultado encontrado!</h2>

   </div>

   <?php }

   ?>



  </div>

</div>

