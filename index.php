<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 06/07/17
 * Time: 15:21
 */

require_once 'webpage.class.php';
require_once 'navbar.php';
require_once 'sides.functions.php';

$html = new WebPage('index');

$html->appendCssUrl('bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css');
$html->appendCssUrl('bootstrap-4.0.0-alpha.6-dist/css/index.css');
$html->appendCssUrl('font-awesome-4.7.0/css/font-awesome.css');

$html->appendContent('
<div id="back">
</div>');

$left = getLeftSide();
$right = getRightSide(true);

$html->appendContent(getNav());

$page =<<<HTML
<div class="container-fluid">
    <div class="row">
        {$left}

        <div class="col-sm-12 col-md-8 col-lg-8">
            <section class="row text-center" id="iut">

                <div class="col-sm-12 maintitle">
                    <h1>Compétences acquises à l'IUT</h1>
                </div>

                <table class="table" id="webiut">
                    <tr class="titles">
                        <th colspan="12" class="text-center">Développement web</th>
                    </tr>
                    <tr class="table-active">
                        <th class="text-center" colspan="9">Nom</th>
                        <th class="text-center" colspan="3">Niveau</th>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="9"><a href="https://www.w3schools.com/html/"><h5>HTML5</h5></a></td>
                        <td class="text-center" colspan="3"><i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="9"><a href="https://www.w3schools.com/css/"><h5>CSS3</h5></a></td>
                        <td class="text-center" colspan="3"><i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="9"><a href="https://www.w3schools.com/js/"><h5>Javascript1.8</h5></a></td>
                        <td class="text-center" colspan="3"><i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="9"><a href="https://www.php.net"><h5>PHP5/7</h5></a></td>
                        <td class="text-center" colspan="3"><i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i></td>
                    </tr>
                </table>

                <table class="table" id="bdiut">
                    <tr class="titles">
                        <th colspan="12" class="text-center">Base de données</th>
                    </tr>
                    <tr class="table-active">
                        <th class="text-center" colspan="9">Nom</th>
                        <th class="text-center" colspan="3">Niveau</th>
                    </tr>
                    <tr>
                        <td class="text-center" colspan="9"><a href="https://www.oracle.com/fr/index.html"><h5>Oracle</h5></a></td>
                        <td class="text-center" colspan="3"><i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i></td>
                    </tr>
                </table>

                <table class="table" id="otheriut">
                    <tr class="titles">
                        <th colspan="2" class="text-center">Autres langages</th>
                    </tr>
                    <tr class="table-active">
                        <th class="text-center">Nom</th>
                        <th class="text-center">Niveau</th>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="https://www.rstudio.com/"><h5>RStudio</h5></a></td>
                        <td class="text-center"><i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="https://www.java.com/fr/"><h5>Java</h5></a></td>
                        <td class="text-center"><i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i></td>
                    </tr>
                </table>




            </section>

            <section class="row text-center" id="self">

                <div class="col-sm-12 maintitle">
                    <h1>Compétences acquises par moi-même</h1>
                </div>

                <table class="table" id="webself">
                    <tr class="titles">
                        <th colspan="2" class="text-center">Développement web</th>
                    </tr>
                    <tr class="table-active">
                        <th class="text-center">Nom</th>
                        <th class="text-center">Niveau</th>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="https://www.w3schools.com/html/"><h5>JQuery</h5></a></td>
                        <td class="text-center"><i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i></td>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="https://www.w3schools.com/css/"><h5>AJAX</h5></a></td>
                        <td class="text-center"><i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i></td>
                    </tr>
                </table>

                <table class="table" id="bdself">
                    <tr class="titles">
                        <th colspan="2" class="text-center">Base de données</th>
                    </tr>
                    <tr class="table-active">
                        <th class="text-center">Nom</th>
                        <th class="text-center">Niveau</th>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="https://www.oracle.com/fr/index.html"><h5>MySQL</h5></a></td>
                        <td class="text-center"><i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i> <i class="fa fa-circle"></i></td>
                    </tr>
                </table>

                <table class="table" id="otherself">
                    <tr class="titles">
                        <th colspan="2" class="text-center">Autres langages</th>
                    </tr>
                    <tr class="table-active">
                        <th class="text-center">Nom</th>
                        <th class="text-center">Niveau</th>
                    </tr>
                    <tr>
                        <td class="text-center"><a href="https://www.rstudio.com/"><h5>Android</h5></a></td>
                        <td class="text-center"><i class="fa fa-circle"></i> <i class="fa fa-circle"></i></td>
                    </tr>
                </table>

            </section>
        </div>

        {$right}
        
    </div>
</div>
HTML;

$html->appendContent($page);

$html->appendContent(getFoot());

$html->appendContent('
<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="bootstrap-4.0.0-alpha.6-dist/js/bootstrap.min.js"></script>
<script src="bootstrap-4.0.0-alpha.6-dist/js/stick.js"></script>
<script>$(".stickcontent").stick_in_parent();</script>');

echo $html->toHTML();