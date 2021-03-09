<?php
session_start();
?>
<!doctype html>
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
    <body style="background-color:#2c2f33">
     <?php include "includes/nav.php"; ?>
        <div class="row d-flex flex-column flex-xl-row justify-content-around col-lg-12 m-0 p-1">
            <div style="text-align:center;">  
                <h3 class="souligneTitreCommandes">Commandes d'administrations</h3>
                <table id="zoom">
                    <tr>
                        <td class='bord'>Nom</td>
                        <td class='bord'>Description</td>
                        <td class='bord'>Alias</td>
                        <td class='bord'>Usage</td>
                        <td class='bord'>Exemples</td>
                        <td class='bord'>Catégorie</td>
                        <td class='bord'>VIP</td>
                    </tr>
                    <tr>
                        <td class='bord'>admin</td>
                        <td class='bord'>Commandes d'administration du bot.</td>
                        <td class='bord'>admin</td>
                        <td class='bord'>admin [action] </td>
                        <td class='bord'>admin restart</td>
                        <td class='bord'>Admin</td>
                        <td class='bord'>Non</td>
                    </tr>
                    <tr>
                        <td class='bord'>config</td>
                        <td class='bord'>Configure le bot</td>
                        <td class='bord'>config</td>
                        <td class='bord'>config [action] </td>
                        <td class='bord'>config prefix //</td>
                        <td class='bord'>Admin</td>
                        <td class='bord'>Non</td>
                    </tr>
                    <tr>
                        <td class='bord'>systeme-experience</td>
                        <td class='bord'>Active ou désactive le système d'experience sur le serveur (uniquement les messages).</td>
                        <td class='bord'>config</td>
                        <td class='bord'>systeme-experience</td>
                        <td class='bord'>systeme-experience</td>
                        <td class='bord'>Admin</td>
                        <td class='bord'>Oui</td>
                    </tr>
                    <tr>
                        <td class='bord'>serveur-stats </td>
                        <td class='bord'>Permet d'activer ou désactiver un compteur de membres</td>
                        <td class='bord'>serveur-stats</td>
                        <td class='bord'>serveur-stats</td>
                        <td class='bord'>serveur-stats</td>
                        <td class='bord'>Admin</td>
                        <td class='bord'>Non</td>
                    </tr>
                </table>
                    <h3 class="souligneTitreCommandes">Commandes d'experience</h3>
                <table id="zoom">
                
                    <tr>
                        <td class='bord'>Nom</td>
                        <td class='bord'>Description</td>
                        <td class='bord'>Alias</td>
                        <td class='bord'>Usage</td>
                        <td class='bord'>Exemples</td>
                        <td class='bord'>Catégorie</td>
                        <td class='bord'>VIP</td>
                    </tr>
                    <tr>
                        <td class='bord'>rank</td>
                        <td class='bord'>Donne l'exp d'une personne.</td>
                        <td class='bord'>rank, exp, uexp</td>
                        <td class='bord'>rank (user)</td>
                        <td class='bord'>rank @Smaug</td>
                        <td class='bord'>Experience</td>
                        <td class='bord'>Oui</td>
                    </tr>
                    <tr>
                        <td class='bord'>experience</td>
                        <td class='bord'>Ajoute ou enleve des points d'exp à une personne.</td>
                        <td class='bord'>experience add, experience rem</td>
                        <td class='bord'>experience [action]</td>
                        <td class='bord'>experience add @Smaug 1000</td>
                        <td class='bord'>Experience</td>
                        <td class='bord'>Oui</td>
                    </tr>
                    <tr>
                        <td class='bord'>leaderboard</td>
                        <td class='bord'>Classement du serveur.</td>
                        <td class='bord'>leaderboard</td>
                        <td class='bord'>leaderboard</td>
                        <td class='bord'>leaderboard</td>
                        <td class='bord'>Experience</td>
                        <td class='bord'>Oui</td>
                    </tr>
                </table>
                    <h3 class="souligneTitreCommandes">Commandes de manangement</h3>
                <table id="zoom">
                
                    <tr>
                        <td class='bord'>Nom</td>
                        <td class='bord'>Description</td>
                        <td class='bord'>Alias</td>
                        <td class='bord'>Usage</td>
                        <td class='bord'>Exemples</td>
                        <td class='bord'>Catégorie</td>
                        <td class='bord'>VIP</td>
                    </tr>
                    <tr>
                        <td class='bord'>channel</td>
                        <td class='bord'>Permet de gérer les channels du serveur</td>
                        <td class='bord'>channel, channels</td>
                        <td class='bord'>channel [action]</td>
                        <td class='bord'>channel create text tchat</td>
                        <td class='bord'>Manangement</td>
                        <td class='bord'>Non</td>
                    </tr>
                    <tr>
                        <td class='bord'>command</td>
                        <td class='bord'>Permet de gérer les commandes personalisées du serveur.</td>
                        <td class='bord'>command, commands, cmd, cmds</td>
                        <td class='bord'>command [action]</td>
                        <td class='bord'>command liste</td>
                        <td class='bord'>Manangement</td>
                        <td class='bord'>Non</td>
                    </tr>
                    <tr>
                        <td class='bord'>emojis</td>
                        <td class='bord'>Permet de gérer les emojis du serveur.</td>
                        <td class='bord'>emojis, emots</td>
                        <td class='bord'>emojis [action]</td>
                        <td class='bord'>emojis liste</td>
                        <td class='bord'>Manangement</td>
                        <td class='bord'>Non</td>
                    </tr>
                    <tr>
                        <td class='bord'>roles</td>
                        <td class='bord'>Permet de gérer et add/rem les roles du serveur.</td>
                        <td class='bord'>roles, role</td>
                        <td class='bord'>roles [action]</td>
                        <td class='bord'>role add @Smaug @Admin</td>
                        <td class='bord'>Manangement</td>
                        <td class='bord'>Non</td>
                    </tr>
                    <tr>
                        <td class='bord'>serveur</td>
                        <td class='bord'>Permet de gérer le serveur.</td>
                        <td class='bord'>serveur</td>
                        <td class='bord'>serveur [action]</td>
                        <td class='bord'>serveur icon</td>
                        <td class='bord'>Manangement</td>
                        <td class='bord'>Non</td>
                    </tr>
                </table>
                    <h3 class="souligneTitreCommandes">Commandes autre</h3>
                <table id="zoom">
                
                    <tr>
                        <td class='bord'>Nom</td>
                        <td class='bord'>Description</td>
                        <td class='bord'>Alias</td>
                        <td class='bord'>Usage</td>
                        <td class='bord'>Exemples</td>
                        <td class='bord'>Catégorie</td>
                        <td class='bord'>VIP</td>
                    </tr>
                    <tr>
                        <td class='bord'>dice</td>
                        <td class='bord'>Lance un ou plusieurs dés</td>
                        <td class='bord'>dice, roll</td>
                        <td class='bord'>dice [nb des] [valeur max]</td>
                        <td class='bord'>dice 7 9</td>
                        <td class='bord'>Autre</td>
                        <td class='bord'>Non</td>
                    </tr>
                    <tr>
                        <td class='bord'>help</td>
                        <td class='bord'>Renvoie une liste de commandes ou les informations sur une seule.</td>
                        <td class='bord'>help, commandes</td>
                        <td class='bord'>help (nom commande)</td>
                        <td class='bord'>help ping</td>
                        <td class='bord'>Autre</td>
                        <td class='bord'>Non</td>
                    </tr>
                    <tr>
                        <td class='bord'>message</td>
                        <td class='bord'>Envoi un message spécifié dans un channel ou en MP.</td>
                        <td class='bord'>message, msg</td>
                        <td class='bord'>message [channel/DM] (valeur)</td>
                        <td class='bord'>message #channel Message</td>
                        <td class='bord'>Autre</td>
                        <td class='bord'>Non</td>
                    </tr>
                    <tr>
                        <td class='bord'>ping</td>
                        <td class='bord'>Ping le bot et donne son temps de réaction.</td>
                        <td class='bord'>ping</td>
                        <td class='bord'>ping</td>
                        <td class='bord'>ping</td>
                        <td class='bord'>Autre</td>
                        <td class='bord'>Non</td>
                    </tr>
                </table>
                    <h3 class="souligneTitreCommandes">Commandes de modération</h3>
                <table id="zoom">
                
                    <tr>
                        <td class='bord'>Nom</td>
                        <td class='bord'>Description</td>
                        <td class='bord'>Alias</td>
                        <td class='bord'>Usage</td>
                        <td class='bord'>Exemples</td>
                        <td class='bord'>Catégorie</td>
                        <td class='bord'>VIP</td>
                    </tr>
                    <tr>
                        <td class='bord'>ban</td>
                        <td class='bord'>Ban un utilisateur.</td>
                        <td class='bord'>ban</td>
                        <td class='bord'>ban [user] (raison)</td>
                        <td class='bord'>ban @Smaug spam</td>
                        <td class='bord'>Moderation</td>
                        <td class='bord'>Non</td>
                    </tr>
                    <tr>
                        <td class='bord'>kick</td>
                        <td class='bord'>Kick un utilisateur.</td>
                        <td class='bord'>kick</td>
                        <td class='bord'>kick [user] (raison)</td>
                        <td class='bord'>kick @Smaug spam</td>
                        <td class='bord'>Moderation</td>
                        <td class='bord'>Non</td>
                    </tr>
                    <tr>
                        <td class='bord'>lock</td>
                        <td class='bord'>Lock un channel où une catégorie</td>
                        <td class='bord'>lock</td>
                        <td class='bord'>lock [channel]</td>
                        <td class='bord'>lock #channem</td>
                        <td class='bord'>Moderation</td>
                        <td class='bord'>Non</td>
                    </tr>
                    <tr>
                        <td class='bord'>mute</td>
                        <td class='bord'>Mute un utilisateur.</td>
                        <td class='bord'>mute</td>
                        <td class='bord'>mute [user] (temps)</td>
                        <td class='bord'>mute @Smaug 1h</td>
                        <td class='bord'>Moderation</td>
                        <td class='bord'>Non</td>
                    </tr>
                    <tr>
                        <td class='bord'>purge</td>
                        <td class='bord'>Permet de supprimer le nombre de messages indiqués.</td>
                        <td class='bord'>purge, clear</td>
                        <td class='bord'>purge [nombre/channel/@User + nombre]</td>
                        <td class='bord'>purge @Smaug 70</td>
                        <td class='bord'>Moderation</td>
                        <td class='bord'>Non</td>
                    </tr>
                    <tr>
                        <td class='bord'>rename</td>
                        <td class='bord'>Change le pseudo d'un utilisateur</td>
                        <td class='bord'>rename</td>
                        <td class='bord'>rename [user] [new name]</td>
                        <td class='bord'>rename @Smaug nouveau nom</td>
                        <td class='bord'>Moderation</td>
                        <td class='bord'>Non</td>
                    </tr>
                    <tr>
                        <td class='bord'>unban</td>
                        <td class='bord'>Unban un utilisateur</td>
                        <td class='bord'>unban</td>
                        <td class='bord'>unban [user ID]</td>
                        <td class='bord'>unban 611468402263064577</td>
                        <td class='bord'>Moderation</td>
                        <td class='bord'>Non</td>
                    </tr>
                    <tr>
                        <td class='bord'>unlock</td>
                        <td class='bord'>Unlock un channel ou une catégorie.</td>
                        <td class='bord'>unlock</td>
                        <td class='bord'>unlock [channel]</td>
                        <td class='bord'>unlock #tchat</td>
                        <td class='bord'>Moderation</td>
                        <td class='bord'>Non</td>
                    </tr>
                    <tr>
                        <td class='bord'>unmute</td>
                        <td class='bord'>Unmute un utilisateur.</td>
                        <td class='bord'>unmute</td>
                        <td class='bord'>unmute [@User]</td>
                        <td class='bord'>unmute @Smaug</td>
                        <td class='bord'>Moderation</td>
                        <td class='bord'>Non</td>
                    </tr>
                    <tr>
                        <td class='bord'>warn</td>
                        <td class='bord'>Warn un utilisateur.</td>
                        <td class='bord'>warn, avertissement</td>
                        <td class='bord'>warn [@User]</td>
                        <td class='bord'>warn @Smaug spam</td>
                        <td class='bord'>Moderation</td>
                        <td class='bord'>Non</td>
                    </tr>
                </table>
            </div>
        </div>    
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="public/js/script.js"></script>
    </body>
</html>
