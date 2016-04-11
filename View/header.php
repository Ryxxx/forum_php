<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="user-scalable=no, initial-scale = 1, minimum-scale = 1, maximum-scale = 1, width=device-width">
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="<?php echo __SITE_URL; ?>/css/materialize.css">
        <link rel="stylesheet" href="<?php echo __SITE_URL; ?>/css/main.css">
        
        <title>Forum Php Moulin|Auxire</title>
    </head>
    <body>
        <img class="bg-img" src="<?php echo __SITE_URL; ?>/img/bg2.jpg">
        <div class="container">
            <img class="responsive-img" src="<?php echo __SITE_URL; ?>/img/logo.png">
            
            <nav>
                <div class="nav-wrapper">
                    <a href="#!" class="brand-logo">Forum</a>
                    <ul class="right hide-on-med-and-down">
                        <?php echo $connect_nav; ?>
<!--                        <li><a class="modal-trigger" href="#modalSignUp" ><i class="material-icons">input</i></a></li>-->
<!--                        <li><a class="modal-trigger" href="#modalSignIn" ><i class="material-icons">vpn_key</i></a></li>-->
                    </ul>
                </div>
            </nav>
            <div id="modalSignUp" class="modal">
                <form method="post" action="Model/Controller/inscription.php">
                    <div class="modal-content">
                        <h4>Inscription</h4>
                        <div class="row">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="pseudo" type="text" name="pseudo" class="validate" required>
                                    <label for="pseudo">Pseudo</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="nom" type="text" name="nom" class="validate" required>
                                    <label for="nom">Nom</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="prenom" type="text" name="prenom" class="validate" required>
                                    <label for="prenom">Prénom</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="mail" type="email" name="email" class="validate" required>
                                    <label for="mail">Email</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s2">
                                    <input name="sexe" type="radio" id="sexeH" />
                                    <label for="sexeH">Homme</label>
                                    <input name="sexe" type="radio" id="sexeF" />
                                    <label for="sexeF">Femme</label>
                                    <input name="sexe" type="radio" id="sexeA" />
                                    <label for="sexeA">Autre</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input id="password" type="password" name="mdp" class="validate" required>
                                    <label for="password">Password</label>
                                </div>
                                <div class="input-field col s6">
                                    <input id="conf_password" type="password" name="mdp" class="validate" required>
                                    <label for="conf_password">Confirmez password</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn waves-effect waves-light" type="submit" >Submit
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                </form>
            </div>
            <div id="modalSignIn" class="modal">
                <form method="post" action=" <?php echo __SITE_URL;?>/index/login">
                    <div class="modal-content">
                        <h4>Connexion</h4>
                        <div class="row">
                            <form class="col s12">
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="pseudo" type="text" class="validate" name="pseudo">
                                        <label for="pseudo">Pseudo</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <input id="password" type="password" class="validate" name="mdp">
                                        <label for="password">Password</label>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="input-field col s12">
                            <button class="btn waves-effect waves-light" type="submit">Submit
                                <i class="material-icons right">send</i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
            
            
            
            
            
            
            <div class="row">