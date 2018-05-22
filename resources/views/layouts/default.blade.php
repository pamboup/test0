<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>EdenSoft<?php if(isset($_SESSION['title'])) echo $_SESSION['title'];?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
  <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/creativeTim.css" rel="stylesheet"/>
  <link href="css/verticalAffixMenu.css" rel="stylesheet"/>

</head>
<body>
  <div class="row affix-row">


    @include('layouts/partials/_nav')
    @yield('content')
    @include('layouts/partials/_footer')


  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" data-turbolinks-eval="false"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <!--<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>-->
  <script src="js/creativeTim.js"></script>
  <script src="js/autocompletion.js"></script>

  @include('flashy::message')

</body>
</html>
