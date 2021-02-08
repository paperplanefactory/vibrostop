<?php
// imposto la versione del tema
global $theme_version;
$theme_version = 4.2;
// gestione caricamento css
include_once "functions/theme_stylesloader.php";
// gestione caricamento script
include_once "functions/theme_scriptsloader.php";
// gestione immagini
include_once "functions/theme_images.php";
// lazy load
include_once "functions/theme_lazyload.php";
// gestione trim testi
include_once "functions/theme_txts.php";
// gestione core WordPress
include_once "functions/theme_messages.php";
// gestione custom post type e tassonomie
include_once "functions/theme_cpt.php";
// custom menus
include_once "functions/theme_menus.php";
// custom taxonomies
include_once "functions/theme_taxonomies.php";


// gestione DetectMobile - stabilisco il device e creo le variabili globali da richiamare nei template e negli altri script del tema
require_once 'libraries/Mobile_Detect.php';
global $isMobile;
global $isTablet;
global $isDesktop;
$mobileDetect   = false;
$isMobile       = false;
$isTablet       = false;
$isDesktop      = false;
$mobileDetect   = new Mobile_Detect;
$isTablet       = $mobileDetect->isTablet();
$isMobile       = $mobileDetect->isMobile() && !$isTablet;
$isDesktop      = !$isMobile && !$isTablet;

@ini_set( 'upload_max_size' , '32M' );
@ini_set( 'post_max_size', '32M');
@ini_set( 'max_execution_time', '120' );
