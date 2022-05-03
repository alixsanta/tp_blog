<?php
    // ouverture de la session
    session_start();

    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test soit l'url a une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';


    /*------------------------------------------- ROUTER -------------------------------------------*/
    //test de la valeur $path dans l'URL et import de la ressource
    switch($path){
        // route /tpblog/addCategorie  ->  ./controler/controler_add_categorie.php
        case $path === "/blog/addCategorie":
            include './controler/controler_add_categorie.php';
            break;
        // route /tpblog/showCategorie  ->  ./controler/controler_show_all_categorie.php
        case $path === "/blog/showCategorie":
            include './controler/controler_show_all_categorie.php';
            break;

            case $path === "/blog/showArticle":
                include './controler/controler_show_all_article.php';
                break;
    }
?>

