<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/07/17
 * Time: 15:56
 */


require_once 'webpage.class.php';
require_once 'navbar.php';
require_once 'sides.functions.php';

$html = new WebPage('Me contacter');
$html->appendCssUrl('bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css');
$html->appendCssUrl('bootstrap-4.0.0-alpha.6-dist/css/index.css');
$html->appendCssUrl('font-awesome-4.7.0/css/font-awesome.css');

$html->appendContent('<div id="back">
</div>');

$left = getLeftSide();
$right = getSideAct();

$page =<<<HTML
<div class="container-fluid">
    <div class="row">
        
        {$left}

        <div class="col-sm-12 col-md-8 col-lg-8 text-center">
            <div class="row text-center">
                <div class="col-sm-12 maintitle">
                    <h1 id="sport">Sport</h1>
                </div>
                <table class="table">
                    <tr class="table-active">
                        <th class="text-center">Nom</th>
                        <th class="text-center">Niveau</th>
                    </tr>
                    <tr>
                        <td class="text-center"><h5>JUDO</h5></td>
                        <td class="text-center">Cette discipline a été une des meilleures que j'ai pu exercer. J'ai participé aux tournois régionaux, inter-régionaux puis aux championnats de France. Elle m'a permis d'apprendre le respect de soi et des autres ainsi que l'assiduité et le contrôle de soi.</td>
                    </tr>
                    <tr>
                        <td class="text-center"><h5>BASKETBALL</h5></td>
                        <td class="text-center">Durant 5 années, j'ai joué dans un club de basketball qui fut 1 fois 3e du championnat de France. Cette discipline m'a permis de découvrir la vraie compétition en étant doublement surclassé et donc être confronté à des personnes beaucoup plus fortes techniquement.</td>
                    </tr>
                    <tr>
                        <td class="text-center"><h5>MUSCULATION</h5></td>
                        <td class="text-center">La musculation me permet de conserver le dépassement de soi et de découvrir mes propres limites.</td>
                    </tr>
                    <tr>
                        <td class="text-center"><h5>COURSE</h5></td>
                        <td class="text-center">Je pratique la course depuis plusieurs années afin d'entretenir une forme physique convenable car dans l'informatique nous passons la majorité de notre temps assis.</td>
                    </tr>
                    <tr>
                        <td class="text-center"><h5>FOOTBALL</h5></td>
                        <td class="text-center">Ayant fait du football de 6 à 9 ans, cela m'a permis de découvrir le dépassement de soi, avoir un esprit de gagnant et le travail de groupe.</td>
                    </tr>
                </table>
                <div class="col-sm-12 maintitle">
                    <h1 id="info">Informatique</h1>
                </div>
                <table class="table">
                    <tr class="table-active">
                        <th class="text-center">Nom</th>
                        <th class="text-center">Niveau</th>
                    </tr>
                    <tr>
                        <td class="text-center"><h5>PHOTOSHOP</h5></td>
                        <td class="text-center">Photoshop est un logiciel de création/modification d'images. C'est un outil extrêmement puissant cependant son prix excessif le rend peu accessible par tous.</td>
                    </tr>
                    <tr>
                        <td class="text-center"><h5>PACK OFFICE</h5></td>
                        <td class="text-center">Le pack office est, pour ma part, un incontournable de l'informatique et se doit d'être maîtrisé par toutes personnes souhaitant faire un métier dans cette section..</td>
                    </tr>
                    <tr>
                        <td class="text-center"><h5>REPARATION DE SMARTPHONES</h5></td>
                        <td class="text-center">La réparation de smartphone est le meilleur moyen pour acquérir de la patience ainsi que mettre à l'épreuve s</td>
                    </tr>
                </table>
                <div class="col-sm-12 maintitle">
                    <h1 id="social">Social</h1>
                </div>
                <table class="table">
                    <tr class="table-active">
                        <th class="text-center">Qualités</th>
                        <th class="text-center">Qualités</th>
                    </tr>
                    <tr>
                        <td class="text-center"><h5>Sociable</h5></td>
                        <td class="text-center"><h5>Rigoureux</h5></td>
                    </tr>
                    <tr>
                        <td class="text-center"><h5>Persévérant</h5></td>
                        <td class="text-center"><h5>Discipliné</h5></td></tr>
                    <tr>
                        <td class="text-center"><h5>Débrouillard</h5></td>
                        <td class="text-center"><h5>Ponctuel</h5></td>
                    </tr>
                </table>
                
            </div>
        </div>
        
        {$right}

    </div>
</div>
HTML;


$html->appendContent(getNav().$page.getFoot());

$html->appendContent('
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
<script src="app.js"></script>
<script src="bootstrap-4.0.0-alpha.6-dist/js/stick.js"></script>
<script>$(".stickcontent").stick_in_parent();</script>');

echo $html->toHTML();