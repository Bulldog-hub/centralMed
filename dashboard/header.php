<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Central Med - Tableau de bord</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="../centralmedicon.ico" type="image/x-icon" >
</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top no-margin">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header fixed-brand" id="brand">
        <button type="button" class="navbar-toggle"></button>
        <a class="brand" href="#">
            <img src="../static/img/logo.png" alt="" width="50px">
        </a>
        <button class="navbar-toggle collapse in" data-toggle="collapse" id="menu-toggle-2">
            <i class="collapse_icon fa fa-caret-left"></i>
            <i class="extend_icon fa fa-caret-right" style="display:none;"></i>
        </button>

    </div><!-- navbar-header-->
    <ul class="period nav nav-pills">
        <li class="active_period"><a href="#">Derniers jours</a></li>
        <li class=""><a href="#">Mois en cours</a></li>
        <li class=""><a href="#">Année en cours</a></li>
    </ul>
    <img src="http://66.media.tumblr.com/avatar_369b115beb6e_128.png"
         alt="" class="avatar">

    <input class="search" type="text" placeholder="Rechercher..." />
</nav>
<div id="wrapper">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
            <span class="menu_title">Données personnelles</span>
            <li class="active">
                <a href="index.php" class=" " data-rubrique="dashboard"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span>Tableau de bord</a>
            </li>
            <li>
                <a href="#" class="rubriqueLien" data-rubrique="pathologie"><span class="fa-stack fa-lg pull-left"><i class="fa fa-meh-o fa-stack-1x "></i></span> Pathologies</a>
            </li>
            <li>
                <a href="#" class="rubriqueLien" data-rubrique="antecedents"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-heartbeat fa-stack-1x "></i></span>Antécédents</a>
            </li>
            <li>
                <a href="#" class="rubriqueLien" data-rubrique="documents"><span class="fa-stack fa-lg pull-left"><i class="fa fa-folder-open fa-stack-1x "></i></span>Documents</a>
            </li>
            <li>
                <a href="agenda.php" class="" data-rubrique="agenda"><span class="fa-stack fa-lg pull-left"><i class="fa fa-book fa-stack-1x "></i></span>Agenda</a>
            </li>
            <li>
                <a href="#" class="rubriqueLien" data-rubrique="contact"><span class="fa-stack fa-lg pull-left"><i class="fa fa-pencil fa-stack-1x "></i></span>Contact</a>
            </li>

            <span class="menu_title">Profil</span>
            <li>
                <a href="#" class="rubriqueLien" data-rubrique="messages"><span class="fa-stack fa-lg pull-left"><i class="fa fa-envelope fa-stack-1x "></i></span>Messages<span class="badge">4</span></a>
            </li>
            <li>
                <a href="#" class="rubriqueLien" data-rubrique="commentaires"><span class="fa-stack fa-lg pull-left"><i class="fa fa-comment fa-stack-1x "></i></span>Commentaires<span class="badge">19</span></a>
            </li>
            <li>
                <a href="#" class="rubriqueLien" data-rubrique="stockage"> <span class="fa-stack fa-lg pull-left"><i class="fa fa-database fa-stack-1x "></i></span>Stockage</a>
            </li>
            <li>
                <a href="#" class="rubriqueLien" data-rubrique="calendrier"><span class="fa-stack fa-lg pull-left"><i class="fa fa-calendar fa-stack-1x "></i></span>Calendrier</a>
            </li>
        </ul>

        <div class="add_appointment">
            <button class="btn btn-primary">
                <i class="fa fa-plus"></i>
                <span class="menu_title">Ajouter un RDV</span>
            </button>
        </div>
    </div><!-- /#sidebar-wrapper -->

    <div id="page-content-wrapper">