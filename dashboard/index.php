<?php include "header.php" ?>
        <!-- Page Content -->

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
                                <li><strong>Hyperthyroidie d'Hashimoto</strong> <br>
                                (Baisse de la fonction de la thyroide liée au dysfonctionnement du système immunitaire)</li>
                                <li><strong>Diabète de type 2</strong></li>
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
                        <ul class="tabs">
                            <li class="active">Personnel</li>
                            <li>Famille</li>
                        </ul>

                            <ul class="tab__content ">
                                <li class="active">
                                    <ul class="agenda table list-group">
                                        <li class="list-group-item list-group-item-danger">Renouvellement médication <span class="badge">30 mai 2016</span></li>
                                        <li class="list-group-item list-group-item-danger">Prise de sang <span class="badge">2 juin 2016</span></li>
                                        <li class="list-group-item list-group-item-info">Frottis <span class="badge">12 juin 2016</span></li>
                                        <li class="list-group-item list-group-item-info">RDV DR Bammert <span class="badge">16 juin 2016</span></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul class="agenda table list-group">
                                       <li class="list-group-item list-group-item-danger">Vaccin arthur <span class="badge">2 Juin 2016</span></li>
                                        <li class="list-group-item list-group-item-danger">Prise de sang <span class="badge">2 juin 2016</span></li>

                                    </ul>
                                </li>
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
                            <img class="img-responsive" src="img/stats.png" alt="">
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
     


<?php include "footer.php" ?>
