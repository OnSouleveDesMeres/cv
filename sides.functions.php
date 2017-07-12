<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/07/17
 * Time: 14:03
 */

function getLeftSide(){

    $side =<<<HTML
<div class="col-sm-12 col-md-4 col-lg-2 sides">
            <div class="stickcontent infos row">
                <div class="col-sm-6 offset-sm-3">
                    <img src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/17103273_1438464576198355_1751054025086467267_n.jpg?oh=4654e5ce09cd3be8c4cda19ae1c5ee04&oe=5A08AA89" class="rounded-circle embed-responsive">
                </div>
                <div style="height: 30px"></div>
                <div class="col-md-10 offset-md-1 col-sm-6">
                    <h3 class="text-left"><i class="fa fa-id-card"></i> Sylvain</h3>
                </div>
                <div class="col-md-10 offset-md-1 col-sm-6">
                    <h3 class="text-left"><i class="fa fa-id-card"></i> COMBRAQUE</h3>
                </div>
                <div class="col-md-10 offset-md-1 col-sm-6">
                    <h3 class="text-left"><i class="fa fa-birthday-cake"></i> 19 ans</h3>
                </div>
                <div class="col-md-10 offset-md-1 col-sm-6">
                    <h3 class="text-left"><i class="fa fa-map-o"></i> 51100</h3>
                </div>
                <div class="col-md-10 offset-md-1 col-sm-6">
                    <h3 class="text-left"><i class="fa fa-map-marker"></i> Reims</h3>
                </div>
                <div class="col-md-10 offset-md-1 col-sm-6">
                    <span>Je m'appelle Sylvain COMBRAQUE, je suis en études d'informatique à <a class="links" href="http://www.univ-reims.fr"> l'IUT de Reims </a>. Dans ce CV en ligne vous en apprendrez plus sur mes compétences et mes passions. Vous pouvez me contacter directement depuis le site.</span>
                </div>
            </div>
        </div>
HTML;

    return $side;

}

function getRightSide($boolean){

    $side = '
        <div class="col-lg-2 hidden-md-down sides" id="result">
            
        </div>';

    if($boolean){

        $side =<<<HTML
<div class="col-lg-2 hidden-md-down sides">
            <div class="stickcontent infos">
                <ul class="liste">
                    <li>
                        <h4><a href="#iut">Compétences acquises à l'IUT</a></h4>
                    </li>
                    <ul>
                        <li>
                            <a href="#webiut">Développement web</a>
                        </li>
                        <li>
                            <a href="#bdiut">Base de données</a>
                        </li>
                        <li>
                            <a href="#otheriut">Autres langages</a>
                        </li>
                    </ul>
                    <li>
                        <h4><a href="#self">Compétences acquises par moi-même</a></h4>
                    </li>
                    <ul>
                        <li>
                            <a href="#webself">Développement web</a>
                        </li>
                        <li>
                            <a href="#bdself">Base de données</a>
                        </li>
                        <li>
                            <a href="#otherself">Autres langages</a>
                        </li>
                    </ul>
                </ul>
            </div>
        </div>
HTML;


    }

    return $side;

}

function getSideAct(){

        $side =<<<HTML
<div class="col-lg-2 hidden-md-down sides">
            <div class="stickcontent infos">
                <ul class="liste">
                    <li>
                        <h4><a href="#sport">SPORT</a></h4>
                    </li>
                    <li>
                        <h4><a href="#info">INFORMATIQUE</a></h4>
                    </li>
                    <li>
                        <h4><a href="#social">SOCIAL</a></h4>
                    </li>
                </ul>
            </div>
        </div>
HTML;

    return $side;

}