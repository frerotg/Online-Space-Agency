<?php

    define('LOGIN','onlinespace');
    define('PASSW','badudes4');
    define('DSN','mysql:host=mysql51-53.perso;dbname=onlinespace');
    
    $option = array(
       PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
       PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    );