<?php
/**
 * The header for Astra Theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?><!DOCTYPE html>
<?php 
astra_html_before(); 
?>
<html <?php language_attributes(); ?>>
<head>
<?php astra_head_top(); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">

<?php wp_head(); ?>
<?php 
astra_head_bottom(); 
?>
</head>

<body <?php astra_schema_body(); ?> <?php body_class(); ?>>
<header class="header header-light header-topbar header-topbar1 header-shadow" id="navbar-spy">
      <div class="top-bar">
        <div class="block-left">
          <div class="top-contact">
            <div class="contact-infos"><span style="margin:3px; "><img src="assets/images/icons/whatsappIcon.png"/></span>
              <div class="contact-body">
                <p> <a href="https://Wa.me/+447518274362">+447518 274362</a></p>
              </div>
            </div>
            <div class="contact-infos"><i class="energia-email--icon"></i>
              <div class="contact-body">
                <p>email: <a href="mailto:info@creditfix.co.in"><span class="__cf_email__"
                      data-cfemail="51383f373e11343f34233638307f323e3c">info@creditfix.co.in</span> </a></p>
              </div>
            </div>
            <div class="contact-infos"><i class="energia-clock-Icon"></i>
              <div class="contact-body">
                <p>hours: 24X7</p>
              </div>
            </div>
          </div>
        </div>
        <div class="block-right">

          <div class="social-links">
            <a class="share-facebook" href="https://www.facebook.com/creditfix.pvt.ltd"><i
                class="energia-facebook"></i></a>
                <a class="share-instagram"
              href="https://www.instagram.com/invites/contact/?i=1cthcdid5xtx8&utm_content=oab1ua4"><i
                class="fa-brands fa-instagram"></i></a>
                <a class="share-linkedin"
              href="https://www.linkedin.com/company/creditfix-private-limited/"><i
                class="fa-brands fa-linkedin"></i></a>
                <a class="share-twitter"
              href="https://twitter.com/CreditfixL"><i
                class="fa-brands fa-twitter"></i></a>
          </div>

          <div class="topbar-links"><a class="module-icon module-icon-search"><span>Tips & Adivce </span></a>
          </div>
          <!--//X-->
        </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-sticky" id="primary-menu">
        <a class="navbar-brand" href="index.html"><img class="logo" src="assets/images/logo/creditfix-logo.png"
            alt="Creditfix Logo" /></a>
        <div class="module-holder module-holder-phone">
          <div class="module module-search">
            <div class="module-icon module-icon-search"><span>Tips & Adivce </span></div>
          </div>
          <!--//X-->
          <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false"
            aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        </div>
        <div class="collapse navbar-collapse" id="navbarContent">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item " id="home" data-hover=""><a href="index.html" data-toggle="dropdown"><span>Home</span></a>
            </li>
            <li class="nav-item has-dropdown" data-hover=""><a class="dropdown-toggle" href="#"
                data-toggle="dropdown"><span>Company</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="page-about.html"><span>About Us</span></a></li>
                <li class="nav-item"><a href="howWeWork.html"><span>How we work</span></a></li>
                <li class="nav-item"><a href="ourMission.html"><span>Our mission and vision</span></a></li>
              </ul>
            </li>
            <li class="nav-item has-dropdown" id="departments" data-hover=""><a class="dropdown-toggle"
                href="#" data-toggle="dropdown"><span>services</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="iva.html"><span>IVA</span></a></li>
                <li class="nav-item"><a href="debt-pbs.html"><span>Debt Settlement/PBS</span></a></li>
                <li class="nav-item"><a href="Housing-repair.html"><span>Housing Disrepair Claims</span></a></li>
                <li class="nav-item"><a href="lifeInsurance.html"><span>Life Insurance</span></a></li>
                <li class="nav-item"><a href="our_services.html">Web Services</a></li>
                <li class="nav-item"><a href="it-services.html"><span>IT Services</span></a></li>
                <li class="nav-item"><a href="backend.html"><span>Backend Services</span></a></li>
                <li class="nav-item"><a href="funeralCampaign.html"><span>Funeral Services</span></a></li>
              </ul>
            </li>
            <li class="nav-item has-dropdown" data-hover=""><a class="dropdown-toggle" href="#"
                data-toggle="dropdown"><span>Policy</span></a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="company-policy.html"><span>Company Policy</span></a></li>
                <li class="nav-item"><a href="cookie-pol.html"><span>cookies Policy</span></a></li>
                <li class="nav-item"><a href="refund-pol.html"><span>refund Policy</span></a></li>
                <li class="nav-item"><a href="copyright-pol.html"><span>copyright Policy</span></a></li>
                <li class="nav-item"><a href="privacy-policy.html"><span>privacy Policy</span></a></li>
                <li class="nav-item"><a href="complaint-pol.html"><span>Complaint Policy</span></a></li>
              </ul>
            </li>
            <li class="nav-item" id="career" data-hover=""><a href="Career.html" data-toggle="dropdown"><span>Career</span></a>
            </li>
            <li class="nav-item" id="contact" data-hover=""><a href="page-contact.html"><span>contact</span></a></li>
            <li class="nav-item has-dropdown" data-hover=""><a class="dropdown-toggle" href="#"
              data-toggle="dropdown"><span>Payment</span></a>
            <ul class="dropdown-menu">
               
              <li class="nav-item"><a href="https://paypal.me/CreditfixPvtLtd?country.x=IN&locale.x=en_GB"  target="_blank"><span>PayPal</span></a></li>
            </ul>
          </li>
          </ul>
          <div class="module-holder">
            <!-- <div class="module module-search">
              <div class="module-icon module-icon-search"><span>Tips & Adivce </span></div>
            </div> -->
              <div class="module-contact"><a class="btn btn--primary " href="#contact-1">
                  request a quote<i class="energia-arrow-right"></i></a></div>
            </div>

          </div>


      </nav>

    </header>