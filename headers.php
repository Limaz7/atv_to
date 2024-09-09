<?php
 $paginaCorrente = basename($_SERVER['SCRIPT_NAME']);
 //echo $pagina_corrente;
 ?>



<div class="navbar-fixed">    
    <nav class="white  lighten-3">
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo"><img src=".png" height="55" width="60"></a>
    
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li <?php if($paginaCorrente == 'index.php') {echo 'class="active"';}?>> <a class="black-text" href="index.php">Home</a></li>    
        <li <?php if($paginaCorrente == 'clientes.php') {echo 'class="active"'; } ?>> <a class="black-text" href="clientes.php">Clientes</a></li> 
        <li <?php if($paginaCorrente == 'sobre.php') {echo 'class="active"'; } ?>><a class="black-text" href="sobre.php">Sobre</a></li>
      </ul>
    </div>
  </nav>
</div> 