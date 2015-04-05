<?php
    require_once($_SERVER['DOCUMENT_ROOT']."/includes/mysql-connect.php");
    require_once($_SERVER['DOCUMENT_ROOT']."/includes/php-get-array.php");
    //global variables
    $galleryPage = "gallery_main";
    $imgSRC = 'images/pieces/';
    $DOCUMENT_ROOT = '/';


    //Main elements for templates:
    $template_bootstrap =   $_SERVER['DOCUMENT_ROOT'] ."/includes/php-bootstrap.php";
    $template_header =      $_SERVER['DOCUMENT_ROOT'] ."/includes/template-header-content.php";
    $template_footer =      $_SERVER['DOCUMENT_ROOT'] ."/includes/template-footer-content.php";
    //$site_header = $_SERVER['DOCUMENT_ROOT'] . "/_templates/header.php";
    $site_nav =             $_SERVER['DOCUMENT_ROOT'] ."/includes/html-site-nav.php";

    $site_footer_js = "includes/html-footer-js-utils.php";;
    $site_footer_legal = "includes/html-footer-rights.php";
    $site_template =0;

    //Build Path prefix
    function imgSrcBuilder($pieceTitle) {
        $pieceSRC = strtolower(preg_replace("/[^a-z]+/i", "-", $pieceTitle));
        return $pieceSRC;
    }
?>

