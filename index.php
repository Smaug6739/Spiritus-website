<?php
session_start();
//var_dump($_SESSION);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Spiritus</title>
        <meta charset="utf-8">
        <meta name="viewport" content="maximum-scale=1">
        <meta name="viewport" content="width=device-width">
        <meta name="viewport" content="initial-scale=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"/>
        <link href="https://fonts.googleapis.com/css?family=VT323&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="public/css/mediaQueries.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="public/css/style.css" type="text/css" media="screen" />
    </head>

    <body>
        <?php include "includes/nav.php"; ?>
        <div class="center">
            <img class="head" src='public/img/spiritus-avatar.png'>
            <h3>Spiritus#3360</h3>
            <h4 style="margin-top:50px">
            Spiritus est un bot polyvalent prêt à améliorer et à booster votre serveur Discord<br>
            avec des fonctionnalités telles que la modération avancée, l'administration,le manangement d'un serveur,<br>
            des commandes personalisées, et bien plus encore !</h4>
        </div>
        <div style="margin-top:75px" class="center"><a class="bouton3" href="https://discord.com/oauth2/authorize?client_id=689210215488684044&scope=bot&permissions=1946446974">INVITEZ LE BOT</a></div>
        <div class="fonctions">
            <div><svg width="28" height="25" viewBox="0 0 28 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M26.5556 12.5H21.4444L17.6111 24L9.94444 1L6.11111 12.5H1" stroke="#6A50FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><h2>99,99% de disponibilité</h2><p>Vous n'avez pas à vous soucier des temps morts, Spiritus est en ligne!</p></div>
            <div><svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24 16.3333C24 17.0111 23.7308 17.6611 23.2515 18.1404C22.7722 18.6196 22.1222 18.8889 21.4444 18.8889H6.11111L1 24V3.55556C1 2.87778 1.26925 2.22776 1.7485 1.7485C2.22776 1.26925 2.87778 1 3.55556 1H21.4444C22.1222 1 22.7722 1.26925 23.2515 1.7485C23.7308 2.22776 24 2.87778 24 3.55556V16.3333Z" stroke="#6A50FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><h2>Réponse automatique</h2><p>Laissez le bot répondre aux mots déclencheurs</p></div>
            <div><svg width="21" height="25" viewBox="0 0 21 25" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M10.2 24C10.2 24 19.4 19.4 19.4 12.5V4.45L10.2 1L1 4.45V12.5C1 19.4 10.2 24 10.2 24Z" stroke="#6A50FF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg><h2>Protection anti-raid</h2><p>Grace à ses commandes de modération, votre serveur est protégers</p></div>
        </div>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
