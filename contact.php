<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/07/17
 * Time: 14:27
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
$right = getRightSide(false);

$page =<<<HTML
<div class="container-fluid">
    <div class="row">
        
        {$left}

        <div class="col-sm-12 col-md-8 col-lg-8 text-center">
            <div class="row" style="height: 50px"></div>
            <div id="mailResponse"></div>
            <form action="sendMail.php" method="get" id="contactSendMail">
                <div class="row">
                  <div class="col-sm-12 col-md-5 offset-md-1">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujet">
                  </div>
                  <div class="col-md-1" style="height: 30px"></div>
                  <div class="col-sm-12 col-md-4">
                    <input type="email" class="form-control" name="email" id="mail" placeholder="Email">
                  </div>
                </div>
                <div class="row" style="height: 50px"></div>
                <div class="row">
                  <div class="col-sm-12 col-md-10 offset-md-1">
                    <textarea type="text" class="form-control" name="content" id="content" placeholder="Contenu du mail"></textarea>
                  </div>
                </div>
                <div class="row" style="height: 50px"></div>
                <button class="btn btn-info" id="sendmail" type="submit">Envoyer le mail <i class="fa fa-send"></i></button>
            </form>
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