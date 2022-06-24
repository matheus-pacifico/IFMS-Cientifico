<?php

  if($_POST['id'] === "") {

  //$url = "http://localhost:8080/obra/deletarporid/{$_POST['id']}";
  header('Location: ../View/Paginas/deletarObra.php');

  } else{

    $url = "http://bookfllix.herokuapp.com/obra/deletarporid/{$_POST['id']}";

    $ch = require "init_curl.php";

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");

    $statusc =curl_getinfo($ch, CURLINFO_RESPONSE_CODE);


    curl_close($ch);

    
    header('Location: ../View/Paginas/index.php');
  }



?>