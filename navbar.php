<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 10/07/17
 * Time: 14:07
 */

function getNav(){

    $html = '
<nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse stickcontent">
    <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Bienvenue</a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="bootstrap-4.0.0-alpha.6-dist/css/index.php">Mes compétences</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="parcours.php">Mon parcours</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="hobbies.php">Mes passions</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Me contacter</a>
            </li>
        </ul>
    </div>
</nav>';

    return $html;

}

function getFoot(){

    return '<footer class="footer footer-inverse bg-inverse text-muted">
    <div class="col-12">
        <div class="row">
            <div class="container">
                <div class="col-md-12 col-sm-12 text-center">
                    <span>© Copyright 2016/2017 - Tous droits réservés - Toute reproduction partielle ou totale de ce site est interdite.</span>
                </div>
            </div>
        </div>
    </div>
</footer>';

}