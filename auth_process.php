<?php

  require_once("globals.php");
  require_once("db.php");
  require_once("models/User.php");
  require_once("dao/UserDAO.php");

  //Resgata o tipo do formulário
  $type = filter_input(INPUT_POST, "type");

  // Verificação do tipo de formulário
  if($type === "register") {
    
  }