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
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="font-awesome-4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
                    <a href="#" class="rubriqueLien" data-rubrique="dashboard"><span class="fa-stack fa-lg pull-left"><i class="fa fa-dashboard fa-stack-1x "></i></span>Tableau de bord</a>
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
                    <a href="#" class="rubriqueLien" data-rubrique="agenda"><span class="fa-stack fa-lg pull-left"><i class="fa fa-book fa-stack-1x "></i></span>Agenda</a>
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
                    Ajouter un RDV
                </button>
            </div>
        </div><!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid xyz">
                <div class="rubrique row" id="dashboard" >
                    <div class="row">
                    <div class="col-sm-8">
                        <div class="widget">
                            <div class="widget_title">
                                <i class="fa fa-external-link-square"></i>
                                <span class="title"> Pathologie en cours </span>
                                <i class="fa fa-cog"></i>
                            </div>
                            <ul class="table">
                                <li>Hyperthyroidie d'Hashimoto</li>
                                <li>(Baisse de la fonction de la thyroide liée au dysfonctionnement du système immunitaire)</li>
                                <li>Diabète de type 2</li>
                            </ul>
                        </div>
                    
                        <div class="widget">
                            <div class="widget_title">
                                <i class="fa fa-external-link-square"></i>
                                <span class="title"> Antécédent médical </span>
                                <i class="fa fa-cog"></i>
                            </div>
                            <ul class="table">
                            <li>Pneumopathie</li>
                            <li>Appendicectomie</li>
                            <li>Varicelle d'Arthur Février 2016</li>
                            </ul>
                        </div>
                    </div>

                    <div class="widget col-sm-4">
                        <div class="widget_title">
                            <i class="fa fa-external-link-square"></i>
                            <span class="title"> Agenda médical </span>
                            <i class="fa fa-cog"></i>
                        </div>
                        <ul class="table">
                        <li>Renouvellement médication 30 mai 2016</li>
                        <li>Prise de sang 2 juin 2016</li>
                        <li>Frottis 12 juin 2016</li>
                        <li>RDV DR Bammert 16 juin 2016</li>
                        <li>Personnel Famille</li>
                        </ul>
                    </div>
                    </div>
                    
                    <div class="row">
                    <div class="widget col-sm-4">
                        <div class="widget_title">
                            <i class="fa fa-external-link-square"></i>
                            <span class="title"> Documents </span>
                            <i class="fa fa-cog"></i>
                        </div>
                        <ul class="table">
                        <li>Radio pulmonaire <span class="date">Avril 2015</span></li>
                        <li>Analyse biologique <span class="date">Mai 2015</span></li>
                        <li>Radio pulmonaire <span class="date">Avril 2015</span></li>
                        <li>Analyse biologique <span class="date">Mai 2015</span></li>
                        </ul>
                    </div>

                    <div class="widget col-sm-8">
                        <div class="widget_title">
                            <i class="fa fa-external-link-square"></i>
                            <span class="title"> RDV sur l'année </span>
                            <i class="fa fa-cog"></i>
                            <img class="img-responsive" src="http://placehold.it/1000x600" alt="">
                        </div>

                    </div>
                    </div>
                </div>
                <div class="rubrique" id="pathologie" style="display: none;"></div>
                <div class="rubrique" id="antecedents" style="display: none;"></div>
                <div class="rubrique" id="documents" style="display: none;"></div>
                <div class="rubrique" id="agenda" style="display: none;"></div>
                <div class="rubrique" id="contact" style="display: none;">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6">
                            <div class="well well-sm">
                                <div class="row">
                                    <div class="col-sm-6 col-md-4">
                                        <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
                                    </div>
                                    <div class="col-sm-6 col-md-8">
                                        <h4>
                                            Bhaumik Patel</h4>
                                            <small><cite title="San Francisco, USA">San Francisco, USA <i class="glyphicon glyphicon-map-marker">
                                            </i></cite></small>
                                            <p>
                                                <i class="glyphicon glyphicon-envelope"></i>email@example.com
                                                <br />
                                                <i class="glyphicon glyphicon-globe"></i><a href="http://www.jquery2dotnet.com">www.jquery2dotnet.com</a>
                                                <br />
                                                <i class="glyphicon glyphicon-gift"></i>June 02, 1988</p>
                                                <!-- Split button -->
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-primary">
                                                        Social</button>
                                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                                            <span class="caret"></span><span class="sr-only">Social</span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">Twitter</a></li>
                                                            <li><a href="https://plus.google.com/+Jquery2dotnet/posts">Google +</a></li>
                                                            <li><a href="https://www.facebook.com/jquery2dotnet">Facebook</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Github</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery-1.11.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/sidebar_menu.js"></script>
    <script src="js/dashboard.js"></script>
</body>

</html>
