<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->
<?php 
	astra_content_after();
		
	astra_footer_before();
		
// 	astra_footer();
		
	astra_footer_after(); 
?>
	</div><!-- #page -->


<footer class="footer footer-1">
      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <div class="footer-widget widget-links">
                <div class="footer-widget-title">
                  <h5>company</h5>
                </div>
                <div class="widget-content">
                  <ul>
                    <li><a href="page-about.html">About Us</a></li>
                    <li><a href="howWeWork.html">How We Work</a></li>
                    <li><a href="ourMission.html">Our Mission And Vision</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <div class="footer-widget widget-links">
                <div class="footer-widget-title">
                  <h5>Services</h5>
                </div>
                <div class="widget-content">
                  <ul>
                    <li><a href="iva.html">IVA</a></li>
                    <li><a href="debt-pbs.html">Debt Settlement/PBS</a></li>
                    <li><a href="Housing-repair.html">Housing Disrepair Claims</a></li>
                    <li><a href="lifeInsurance.html">Life Insurance</a></li>
                    <li><a href="our_services.html">Web Services</a></li>
                    <li><a href="funeralCampaign.html">Funeral Campagian</a></li>
                    <li><a href="it-services.html">IT Services</a></li>
                    <li><a href="backend.html">Backend Services</a></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="col-12 col-sm-6 col-md-6 col-lg-3">
              <div class="footer-widget widget-links widget-icon">
                <div class="footer-widget-title">
                  <h5>support</h5>
                </div>
                <div class="widget-content">
                  <ul>
                    <li><a href="t&c.html">Terms & Conditions</a></li>
                    <li><a href="cookie-pol.html">Cookie Policy</a></li>
                    <li><a href="refund-pol.html">refund Policy</a></li>
                    <li><a href="copyright-pol.html">copyright Policy</a></li>
                    <li><a href="privacy-policy.html">privacy Policy</a></li>
                    <li><a href="company-policy.html">Company Policy</a></li>
                    <li><span style="font-size: 20px; font-family:'Times New Roman', Times, serif;">
                      ISO 9001:2015</span></li>
                     <li><img src="assets/removedbg.png" class="certifiLOGOImg" alt="certificateLogo"></li>
                  </ul>
                   
                  
                </div>
              </div>
            </div>

            <div class="col-12 col-md-6 col-lg-3">
              <div class="footer-widget widget-contact">
                <div class="widget-content">
                  <ul>
                    
                    <li class="phone" ><img src="assets/images/icons/whatsapp.png" alt="whatsappIcon"> <a href="https://Wa.me/+447518274362" style="font-size:19px ;"> +447518 274362
                      </a></li>
                    <!-- <li class="phone" ><img src="assets/images/icons/whatsapp.png" alt="whatsappIcon"> <a href=" https://Wa.me/+447519321368" style="font-size:19px ;"> +44 751 932 1368
                      </a></li>
                      <li class="phone" ><img src="assets/images/icons/phone-call.png" alt="phoneIcon"> <a href="tel:0512-3573589" style="font-size:19px ;"> 0512-3573589
                      </a></li> -->
                    <li class="email">Email: <a href="mailto:info@creditfix.co.in"><span class="__cf_email__"
                          data-cfemail="741d1a121b34111a1106131d155a171b19">info@creditfix.co.in</span></a></li>
                    <li class="address">
                      England: Manchester | Oldham 
<br/>India: Uttar Pradesh
<br/>South Africa: Caneside phoenix
<br/>Belize | Canada | Madagascar | Morocco | Mexico | Vietnam
                    </li>

                  </ul>
                </div>    
              </div>
            </div>

          </div>

        </div>

      </div>

      <style>
        .social-text{
          margin-left: 0px!important;
        }
        @media screen and (max-width: 768px) {
          .social-text
          {
            display: none;
          }
          .social-icons li{
            padding: 1vw !important;
          }
            }
        </style>

      <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="footer-copyright">
                <div class="copyright">
                  <span>Creditfix Private Limited is regulated by the government and authorised by an ISO
                    certificate.<BR />
                    Users are advised to read the terms and conditions carefully.<BR />
                    Creditfix Private Limited's Corporate Identification Number is (CIN) U72900UP2022PTC160543.<BR />
                    ©️ 2022 Creditfix Private Limited. All rights reserved.<BR />
                  </span>
                  <ul class="list-unstyled social-icons">
                    <li>
                      <a class="share-facebook" href="https://www.facebook.com/creditfix.pvt.ltd"><i
                          class="energia-facebook"></i><span class="social-text">facebook</span>
                      </a>
                    </li>
                    <li>
                      <a class="share-instagram"
                        href="https://www.instagram.com/invites/contact/?i=1cthcdid5xtx8&utm_content=oab1ua4"><i
                          class="fa-brands fa-instagram"></i><span class="social-text">Instagram</span></a>
                    </li>
                    <li>
                      <a class="share-linkedin" href="https://www.linkedin.com/company/creditfix-private-limited/"><i
                          class="fa-brands fa-linkedin"></i><span class="social-text">LinkedIN</span></a>
                    </li>
                    <li>
                      <a class="share-twitter" href="https://twitter.com/CreditfixL"><i
                          class="fa-brands fa-twitter"></i><span class="social-text">Twitter</span></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </footer>
<?php 
// 	astra_body_bottom();    
	wp_footer(); 
?>
	</body>
</html>
