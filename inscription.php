<!----------php---------->
<?php
include 'head.php';

session_start();
 if($_POST['password'] != $_POST['passwordrepeat'] && $_POST['password']!='' && isset($_POST['firstname']))//isset($_POST['fistname']) && isset($_POST['date']) && isset($_POST['address']) && isset($_POST['location']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['passwordrepeat']))
 {
    echo'<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>MautoRS</title>
        <meta property="og:image" content="assets/img/logo_MautoRS_final.png">
        <meta property="og:type" content="website">
        <link rel="icon" type="image/png" sizes="2000x1870" href="assets/img/logo_MautoRS_final.png">
        <link rel="icon" type="image/png" sizes="2000x1870" href="assets/img/logo_MautoRS_final.png">
        <link rel="icon" type="image/png" sizes="2000x1870" href="assets/img/logo_MautoRS_final.png">
        <link rel="icon" type="image/png" sizes="2000x1870" href="assets/img/logo_MautoRS_final.png">
        <link rel="icon" type="image/png" sizes="2000x1870" href="assets/img/logo_MautoRS_final.png">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="manifest" href="manifest.json">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral:300,300i,400,400i">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
        <link rel="stylesheet" href="assets/css/-Filterable-Gallery-with-Lightbox-BS4-.css">
        <link rel="stylesheet" href="assets/css/-Identity-Page-BS4-.css">
        <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
        <link rel="stylesheet" href="assets/css/3D_CSS_PROGRESS_BAR_BY_REDSTAPLER-1.css">
        <link rel="stylesheet" href="assets/css/3D_CSS_PROGRESS_BAR_BY_REDSTAPLER.css">
        <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List-v12.css">
        <link rel="stylesheet" href="assets/css/Basic-fancyBox-Gallery.css">
        <link rel="stylesheet" href="assets/css/Bold-BS4-Animated-Back-To-Top.css">
        <link rel="stylesheet" href="assets/css/Bold-BS4-Bold-BS4-Pricing-Table-Style-45-Style-45-1.css">
        <link rel="stylesheet" href="assets/css/Bold-BS4-Bold-BS4-Pricing-Table-Style-45-Style-45.css">
        <link rel="stylesheet" href="assets/css/Bold-BS4-Pricing-Table-Style-54-1.css">
        <link rel="stylesheet" href="assets/css/Bold-BS4-Pricing-Table-Style-54.css">
        <link rel="stylesheet" href="assets/css/Bold-BS4-Responsive-Pricing-Table-Snippet.css">
        <link rel="stylesheet" href="assets/css/Bold-BS4-Text-Shadow-Effects.css">
        <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
        <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
        <link rel="stylesheet" href="assets/css/Dynamically-Queue-Videos.css">
        <link rel="stylesheet" href="assets/css/Features-Clean.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="assets/css/Bootstrap-Payment-Form.css">
        <link rel="stylesheet" href="assets/css/Footer-Dark.css">
        <link rel="stylesheet" href="assets/css/Grid-and-List-view-V10-1.css">
        <link rel="stylesheet" href="assets/css/Grid-and-List-view-V10.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
        <link rel="stylesheet" href="assets/css/Important-Highlighted-Event.css">
        <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
        <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
        <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
        <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/Team-Boxed.css">
        <link rel="stylesheet" href="assets/css/User-Payment-Overview-Rows---Panel-Container.css">
        <link rel="stylesheet" href="assets/css/Video-Parallax-Background-v2.css">
        <link rel="stylesheet" href="assets/css/Video-Parallax-Background.css">
        <link rel="stylesheet" href="assets/css/Video-Responsive.css">
        <link rel="stylesheet" href="assets/css/Zig-Zag-Timeline-v3.css">
    </head>

    <body>
        <div class="login-dark">
            <form method="post" style="padding-right: 15px;padding-left: 15px;">
                <h2 class="sr-only">Login Form</h2><a class="forgot" href="perdu.html" style="color: rgb(186,0,0);font-size: 26px;">Not the same password</a></form>
        </div>
        <nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav" style="color: rgb(255,255,255);font-size: 20px;font-family: Cabin, sans-serif;background-color: rgba(0,0,0,0.11);">
            <div class="container-fluid"><a class="navbar-brand" href="index.html" style="color: rgba(255,255,255,0.9);background-image: url(&quot;assets/img/logo_MautoRS_final.png&quot;);width: 65px;height: 65px;background-position: center;background-size: contain;"></a><button data-toggle="collapse"
                    class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1" style="max-width: 328px;">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="event.html" style="color: rgba(255,255,255,0.9);">Evénement</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="media.html" style="color: rgba(255,255,255,0.5);">Média</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="shop.html" style="color: rgba(255,255,255,0.5);">Shop</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="Connexion.html" style="color: rgba(255,255,255,0.5);">Compte</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item" style="padding-left: 100px;padding-right: 100px;"><img src="assets/img/logo_MautoRS_final.png" style="width: 100px;"></div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3><strong>Quick access</strong></h3>
                            <ul>
                                <li><a href="info.html">Information</a></li>
                                <li><a href="Contact.html">Contact</a></li>
                                <li><a href="Connexion.html">Connexion</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>MautoGB</h3>
                            <p>The engine of travel</p>
                        </div>
                        <div class="col item social"><a href="https://www.youtube.com/channel/UCt_xFYkMUnXI5OnaVi-ibUA"><i class="icon ion-social-youtube-outline"></i></a><a href="https://www.instagram.com/mautors_/"><i class="icon ion-social-instagram"></i></a></div>
                    </div>
                    <p class="copyright">MautoGB © 2020</p>
                </div>
            </footer>
        </div><a class="cd-top js-cd-top cd-top--fade-out cd-top--show" style="background-image: url(&quot;assets/img/cd-top-arrow.svg&quot;);background-color: rgba(118,118,118,0.8);background-repeat: no-repeat;" href="#0">Top</a>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bs-animation.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
        <script src="assets/js/-Filterable-Gallery-with-Lightbox-BS4-.js"></script>
        <script src="assets/js/Basic-fancyBox-Gallery.js"></script>
        <script src="assets/js/-Identity-Page-BS4-.js"></script>
        <script src="assets/js/3D_CSS_PROGRESS_BAR_BY_REDSTAPLER.js"></script>
        <script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
        <script src="assets/js/Bold-BS4-Animated-Back-To-Top.js"></script>
        <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
        <script src="assets/js/Grid-and-List-view-V10.js"></script>
        <script src="assets/js/Profile-Edit-Form.js"></script>
        <script src="https://www.youtube.com/iframe_api"></script>
        <script src="assets/js/Video-Parallax-Background-v2.js"></script>
        <script src="assets/js/Video-Parallax-Background.js"></script>
        <script src="assets/js/Dynamically-Queue-Videos.js"></script>
    </body>

    </html>
    ';
    echo'<head><meta http-equiv="refresh" content="1;URL=inscription.php"></head>';
 }
 elseif($_POST['password'] == $_POST['passwordrepeat'] && $_POST['password']!='' && !empty($_POST['firstname']))
 {
     // connexion à la base de données
     $db_username = 'mautorsadmin';
     $db_password = 'mautorspassword';
     $db_name     = 'mautorsdb';
     $db_host     = 'localhost';
     $db = mysqli_connect($db_host, $db_username, $db_password,$db_name)
            or die('could not connect to database');

     // on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
     // pour éliminer toute attaque de type injection SQL et XSS
    // $username = mysqli_real_escape_string($db,htmlspecialchars($_POST['username']));
 	  $name = $_POST['name'];
 	  //$surname = mysqli_real_escape_string($db,htmlspecialchars($_POST['surname']));
    $firstname = $_POST['firstname'];
    $date = $_POST['date'];
    $adress = $_POST['address'];
    $ville = $_POST['location'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $requete = "INSERT INTO T_Utilisateur (nom, prenom, datenaiss, adress, ville, email, motdepasse) VALUES ('".$name."', '".$firstname."', '".$date."', '".$adress."', '".$ville."', '".$email."', '".$password."');";
    $exec_requete = mysqli_query($db,$requete);
    $reponse      = mysqli_fetch_array($exec_requete);

    echo'<!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>MautoRS</title>
        <meta property="og:image" content="assets/img/logo_MautoRS_final.png">
        <meta property="og:type" content="website">
        <link rel="icon" type="image/png" sizes="2000x1870" href="assets/img/logo_MautoRS_final.png">
        <link rel="icon" type="image/png" sizes="2000x1870" href="assets/img/logo_MautoRS_final.png">
        <link rel="icon" type="image/png" sizes="2000x1870" href="assets/img/logo_MautoRS_final.png">
        <link rel="icon" type="image/png" sizes="2000x1870" href="assets/img/logo_MautoRS_final.png">
        <link rel="icon" type="image/png" sizes="2000x1870" href="assets/img/logo_MautoRS_final.png">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="manifest" href="manifest.json">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cabin">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Spectral:300,300i,400,400i">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css">
        <link rel="stylesheet" href="assets/css/-Filterable-Gallery-with-Lightbox-BS4-.css">
        <link rel="stylesheet" href="assets/css/-Identity-Page-BS4-.css">
        <link rel="stylesheet" href="assets/css/-Login-form-Page-BS4-.css">
        <link rel="stylesheet" href="assets/css/3D_CSS_PROGRESS_BAR_BY_REDSTAPLER-1.css">
        <link rel="stylesheet" href="assets/css/3D_CSS_PROGRESS_BAR_BY_REDSTAPLER.css">
        <link rel="stylesheet" href="assets/css/Animated-Pretty-Product-List-v12.css">
        <link rel="stylesheet" href="assets/css/Basic-fancyBox-Gallery.css">
        <link rel="stylesheet" href="assets/css/Bold-BS4-Animated-Back-To-Top.css">
        <link rel="stylesheet" href="assets/css/Bold-BS4-Bold-BS4-Pricing-Table-Style-45-Style-45-1.css">
        <link rel="stylesheet" href="assets/css/Bold-BS4-Bold-BS4-Pricing-Table-Style-45-Style-45.css">
        <link rel="stylesheet" href="assets/css/Bold-BS4-Pricing-Table-Style-54-1.css">
        <link rel="stylesheet" href="assets/css/Bold-BS4-Pricing-Table-Style-54.css">
        <link rel="stylesheet" href="assets/css/Bold-BS4-Responsive-Pricing-Table-Snippet.css">
        <link rel="stylesheet" href="assets/css/Bold-BS4-Text-Shadow-Effects.css">
        <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css">
        <link rel="stylesheet" href="assets/css/Contact-Form-v2-Modal--Full-with-Google-Map.css">
        <link rel="stylesheet" href="assets/css/Dynamically-Queue-Videos.css">
        <link rel="stylesheet" href="assets/css/Features-Clean.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="assets/css/Bootstrap-Payment-Form.css">
        <link rel="stylesheet" href="assets/css/Footer-Dark.css">
        <link rel="stylesheet" href="assets/css/Grid-and-List-view-V10-1.css">
        <link rel="stylesheet" href="assets/css/Grid-and-List-view-V10.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
        <link rel="stylesheet" href="assets/css/Important-Highlighted-Event.css">
        <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
        <link rel="stylesheet" href="assets/css/Profile-Edit-Form-1.css">
        <link rel="stylesheet" href="assets/css/Profile-Edit-Form.css">
        <link rel="stylesheet" href="assets/css/Registration-Form-with-Photo.css">
        <link rel="stylesheet" href="assets/css/styles.css">
        <link rel="stylesheet" href="assets/css/Team-Boxed.css">
        <link rel="stylesheet" href="assets/css/User-Payment-Overview-Rows---Panel-Container.css">
        <link rel="stylesheet" href="assets/css/Video-Parallax-Background-v2.css">
        <link rel="stylesheet" href="assets/css/Video-Parallax-Background.css">
        <link rel="stylesheet" href="assets/css/Video-Responsive.css">
        <link rel="stylesheet" href="assets/css/Zig-Zag-Timeline-v3.css">
    </head>

    <body>
        <div class="login-dark">
            <form method="post" style="padding-right: 15px;padding-left: 15px;">
                <h2 class="sr-only">Login Form</h2><a class="forgot" href="perdu.html" style="color: rgb(0,207,69);font-size: 26px;">Account created</a></form>
        </div>
        <nav class="navbar navbar-light navbar-expand-md navbar navbar-expand-lg fixed-top" id="mainNav" style="color: rgb(255,255,255);font-size: 20px;font-family: Cabin, sans-serif;background-color: rgba(0,0,0,0.11);">
            <div class="container-fluid"><a class="navbar-brand" href="index.html" style="color: rgba(255,255,255,0.9);background-image: url(&quot;assets/img/logo_MautoRS_final.png&quot;);width: 65px;height: 65px;background-position: center;background-size: contain;"></a><button data-toggle="collapse"
                    class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1" style="max-width: 328px;">
                    <ul class="nav navbar-nav">
                        <li class="nav-item" role="presentation"><a class="nav-link active" href="event.html" style="color: rgba(255,255,255,0.9);">Evénement</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="media.html" style="color: rgba(255,255,255,0.5);">Média</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="shop.html" style="color: rgba(255,255,255,0.5);">Shop</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="Connexion.html" style="color: rgba(255,255,255,0.5);">Compte</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="footer-dark">
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-3 item" style="padding-left: 100px;padding-right: 100px;"><img src="assets/img/logo_MautoRS_final.png" style="width: 100px;"></div>
                        <div class="col-sm-6 col-md-3 item">
                            <h3><strong>Quick access</strong></h3>
                            <ul>
                                <li><a href="info.html">Information</a></li>
                                <li><a href="Contact.html">Contact</a></li>
                                <li><a href="Connexion.html">Connexion</a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 item text">
                            <h3>MautoGB</h3>
                            <p>The engine of travel</p>
                        </div>
                        <div class="col item social"><a href="https://www.youtube.com/channel/UCt_xFYkMUnXI5OnaVi-ibUA"><i class="icon ion-social-youtube-outline"></i></a><a href="https://www.instagram.com/mautors_/"><i class="icon ion-social-instagram"></i></a></div>
                    </div>
                    <p class="copyright">MautoGB © 2020</p>
                </div>
            </footer>
        </div><a class="cd-top js-cd-top cd-top--fade-out cd-top--show" style="background-image: url(&quot;assets/img/cd-top-arrow.svg&quot;);background-color: rgba(118,118,118,0.8);background-repeat: no-repeat;" href="#0">Top</a>
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bs-animation.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.pack.js"></script>
        <script src="assets/js/-Filterable-Gallery-with-Lightbox-BS4-.js"></script>
        <script src="assets/js/Basic-fancyBox-Gallery.js"></script>
        <script src="assets/js/-Identity-Page-BS4-.js"></script>
        <script src="assets/js/3D_CSS_PROGRESS_BAR_BY_REDSTAPLER.js"></script>
        <script src="assets/js/Animated-Pretty-Product-List-v12.js"></script>
        <script src="assets/js/Bold-BS4-Animated-Back-To-Top.js"></script>
        <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
        <script src="assets/js/Grid-and-List-view-V10.js"></script>
        <script src="assets/js/Profile-Edit-Form.js"></script>
        <script src="https://www.youtube.com/iframe_api"></script>
        <script src="assets/js/Video-Parallax-Background-v2.js"></script>
        <script src="assets/js/Video-Parallax-Background.js"></script>
        <script src="assets/js/Dynamically-Queue-Videos.js"></script>
    </body>

    </html>
    ';
    echo'<head><meta http-equiv="refresh" content="2;URL=connexion.php"></head>';
    exit();

 }

?>
 


<!DOCTYPE html>
<html>
<body>
<div class="register-photo" style="padding-top: 200px;padding-bottom: 200px;background-image: url(&quot;assets/img/star-sky.jpg&quot;);height: 1150px;">
        <div class="form-container">
            <div class="image-holder" style="background-image: url(&quot;assets/img/DSC_4131a00094.JPG&quot;);background-position: center;background-size: cover;"></div>
            <form method="post">
                <h2 class="text-center"><strong>Create</strong> an account.</h2>
                <div class="form-group"><input class="form-control" type="text" id="name" name="name" placeholder="name" required='true'></div>
                <div class="form-group"><input class="form-control" type="text" id="firstname" name="firstname" placeholder="first name" required='true'></div>
                <div class="form-group"><input class="form-control" type="date" name="date" max="12.12.1920" required='true'></div>
                <div class="form-group"><input class="form-control" type="text" id="address" name="address" placeholder="address" required='true'></div>
                <div class="form-group"><input class="form-control" type="text" id="location" name="location" placeholder="location" required='true'></div>
                <div class="form-group"><input class="form-control" type="email" id="email" name="email" placeholder="email" required='true'></div>
                <div class="form-group"><input class="form-control" type="password" id="password" name="password" placeholder="password" required='true'></div>
                <div class="form-group"><input class="form-control" type="password" id="passwordrepeat" name="passwordrepeat" placeholder="password (repeat)" required='true'></div>
                <div class="form-group">
                    <div class="form-check"><label class="form-check-label"><input class="form-check-input" type="checkbox" required='true'>I agree to the <a href="License.html">license terms</a>.</label></div>
                </div>

       
                <script type="text/javascript">
             // incertion variable
                 function Captcha(){
                     var alpha = new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z','1','2','3','4','5','6','7','8','9','0');
                     var i;
                     for (i=0;i<6;i++){
                       // verification
                       var a = alpha[Math.floor(Math.random() * alpha.length)];
                       var b = alpha[Math.floor(Math.random() * alpha.length)];
                       var c = alpha[Math.floor(Math.random() * alpha.length)];
                       var d = alpha[Math.floor(Math.random() * alpha.length)];
                       var e = alpha[Math.floor(Math.random() * alpha.length)];
                       var f = alpha[Math.floor(Math.random() * alpha.length)];
                       var g = alpha[Math.floor(Math.random() * alpha.length)];
                      }
                    var code = a + ' ' + b + ' ' + ' ' + c + ' ' + d + ' ' + e + ' '+ f + ' ' + g;
                    document.getElementById("mainCaptcha").value = code
                  }
                 //verification
                  function ValidCaptcha(){
                      var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
                      var string2 = removeSpaces(document.getElementById('txtInput').value);
                      if (string1 == string2){
                        document.write('<div class="form-group"><button  class="btn btn-primary btn-block" type="submit" style="background-color: rgb(33,74,128);">Sign Up</button></div>');
                      }
                      else{
                        location.reload();
                      }
                  }
                  function removeSpaces(string){
                    return string.split(' ').join('');
                  }
             </script>
             <!-- Visuelle -->
        </head>

     <body onload="Captcha();">
        <table>
          <tr>
           <td>
                <br />
           </td>
          </tr>
          <tr>
           <td>

             <div id='enable' onClick=vueRequete(document.getElementById('reqVisible').innerHTML);
             onmousedown='if (typeof (event.preventDefault)!=undefined) {event.preventDefault();}'> <br>
               <input type="text" id="mainCaptcha"
                   style="background-image:url(assets/img/captcha.jpg); text-align:center; border:none;
                   font-weight:bold; font-family:Modern" />
           </td>
          </tr>
          <tr>
           <td>
            <input type="text" id="txtInput"/>
          </td>
         </tr>
         <input id="Button1" type="button" value="Check" onclick="ValidCaptcha();"/>
         <tr>
          <td>
            <input type="button" id="refresh" value="Refresh" onclick="Captcha();" />
          </td>
        </tr>
      </table>
      </body>

      <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style="background-color: rgb(33,74,128);">Sign Up</button></div><a class="already" href="Connexion.php">You already have an account? Login here.</a></form>

        </div>
    </div>

    </div><a class="cd-top js-cd-top cd-top--fade-out cd-top--show" style="background-image: url(&quot;assets/img/cd-top-arrow.svg&quot;);background-color: rgba(118,118,118,0.8);background-repeat: no-repeat;" href="#0">Top</a>
<!---------------php-------------->
<?php
include 'footer.php';
include 'menu.php';
include 'script.php';
?>
</body>

</html>
