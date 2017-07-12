/**
 * Created by root on 10/07/17.
 */

var getHttpRequest = function () {

    httpRequest = false;

    if(window.XMLHttpRequest){
        httpRequest = new XMLHttpRequest();
        if(httpRequest.overrideMimeType){
            httpRequest.overrideMimeType('text/xml');
        }
    }

    return httpRequest;

};

var bouton = document.querySelector('#sendmail')
var resultMail = document.getElementById('mailResponse');

bouton.addEventListener('click', function (e) {

    e.preventDefault()

    var isSend = '<div class="col-md-10 offset-md-1 alert alert-danger text-center">Une erreur est survenue, veuillez réessayer plus tard !</div>'

    bouton.innerHTML = 'Envoi en cours...'

    var httpRequest = getHttpRequest();

    var subject = document.getElementById("subject").value
    var mail = document.getElementById("mail").value
    var content = document.getElementById("content").value

    httpRequest.onreadystatechange = function () {

        if(httpRequest.readyState === 4){

            resultMail.innerHTML = httpRequest.responseText

            isSend = '<div class="col-md-10 offset-md-1 alert alert-success text-center">Le mail a été envoyé avec succès</div>'

            document.getElementById('contactSendMail').reset();

            bouton.innerHTML = 'Envoyer le mail <i class="fa fa-send"></i>'

            resultMail.innerHTML = isSend

        }

    }

    httpRequest.open('GET', 'sendMail.php?subject='+subject+'&content='+content+'&mail='+mail, true);

    httpRequest.send();
    
})