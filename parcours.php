<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/07/17
 * Time: 17:22
 */

require_once 'webpage.class.php';
require_once 'navbar.php';
require_once 'sides.functions.php';
require_once 'Work.class.php';
require_once 'Formation.class.php';

$works = Work::getAll();
$forms = Formation::getAll();

$html = new WebPage('Me contacter');
$html->appendCssUrl('bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css');
$html->appendCssUrl('bootstrap-4.0.0-alpha.6-dist/css/index.css');
$html->appendCssUrl('font-awesome-4.7.0/css/font-awesome.css');

$html->appendContent('<div id="back">
</div>');

$left = getLeftSide();
$right = getRightSide();

$jobs = '<div class="col-sm-12">';

foreach ($works as $work) {
    $jobs .= "<div class='alert alert-info'><h3>{$work->getNOM()}</h3><p>{$work->getFONCTION()}</p><p>{$work->getCP()} {$work->getLIEU()}</p><p>{$work->getDATEFIN()}</p></div>";
}

$jobs .= '</div>';

$formations = '<div class="col-sm-12">';

foreach ($forms as $form) {
    $var = 'En cours de formation';
    if($form->getVALIDE() == 3){
        $var = 'Validé';
    }
    else if($form->getVALIDE() == 1){
        $var = 'Non validé';
    }
    $d = $form->getDATEFIN();
    if(is_null($d)){
        $d = 'Pas de date';
    }

    $formations .= "<div class='alert alert-success'><h3>{$form->getNOM()}</h3><p>{$var}</p><p>{$form->getCP()} {$form->getVILLE()}</p><p>{$d}</p></div>";
}

$formations .= '</div>';

$page =<<<HTML
<div class="container-fluid">
    <div class="row">
        
        {$left}

        <div class="col-sm-12 col-md-8 col-lg-8 text-center">
            <div class="row text-center">
                <div class="col-sm-12 col-lg-6">
                    <div class="row">
                        <div class="col-sm-12 maintitle" id="job">
                            <h1>Jobs</h1>
                        </div>
                        {$jobs}
                    </div>
                </div>
                
                
                <div class="col-sm-12 col-lg-6">
                    <div class="row">
                        <div class="col-sm-12 maintitle" id="etude">
                            <h1>Etudes</h1>
                        </div>
                        {$formations}
                    </div>
                </div>
                
                
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