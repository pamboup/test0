<?php
  if(isset($_GET['param']))
    $active = $_GET['param'];
  else $active = "";
?>

 <div class="col-sm-3 col-md-2 affix-sidebar">
  <div class="sidebar-nav">
  <div class="navbar navbar-default" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      </button>
      <span class="visible-xs navbar-brand">Sidebar menu</span>
    </div>
    <div class="navbar-collapse collapse sidebar-navbar-collapse">
    <div class="wizard-header" style="background-color:#E9967A; padding-left:5px; width:100%">
      <h3 class="wizard-title" style="color:white; display:inline">
        Bureau d'accueil
      </h3>
      <!--<h5>This information will let us know more about you.</h5> -->
    </div>

    <!--<div class="wizard-header" style="background-color:#E9967A; padding-left:15px">
      <h3 class="wizard-title" style="color:white; display:inline">
        Enfants
      </h3>
      <!- -<h5>This information will let us know more about you.</h5> - ->
    </div>-->
    <ul class="nav navbar-nav" id="sidenav01">
      <li <?php if($active == "formulaireAccueil") echo 'class="active"'?>>
        <a href="?param=formulaireAccueil">
        <h5 style="display:inline">
          <span class="glyphicon glyphicon-home"></span>
          Formulaire d’accueil
        </h5>
        </a>
      </li>
      <li <?php if($active == "suivi") echo 'class="active"'?>>
        <a href="?param=suivi">
        <h5 style="display:inline">
          <span class="glyphicon glyphicon-eye-open"></span>
          Suivi
        </h5>
        </a>
      </li>
      <li <?php if($active == "piecesJointes") echo 'class="active"'?>>
        <a href="?param=piecesJointes">
        <h5 style="display:inline">
          <span class="glyphicon glyphicon-inbox"></span>
          Pièces jointes
        </h5>
        </a>
      </li>
      <li <?php if($active == "consultation") echo 'class="active"'?>>
        <a href="?param=consultation">
        <h5 style="display:inline">
          <span class="glyphicon glyphicon-search"></span>
          Consultation
        </h5>
        </a>
      </li>
      <li <?php if($active == "statistique") echo 'class="active"'?>>
        <a href="?param=statistique">
        <h5 style="display:inline">
          <span class="glyphicon glyphicon-stats"></span>
          Statistique
        </h5>
        </a>
      </li>
    </ul>

    </div><!--/.nav-collapse -->
  </div>
  </div>
 </div>
