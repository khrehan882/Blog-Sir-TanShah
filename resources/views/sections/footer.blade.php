 <!-- Start Footer -->
         <footer class="footer">

            <div class="footer-top footer-style-1">
               <div class="container">
                  <div class="row gutter-30">

                     <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                        <div class="footer-widget">
                           <div class="logo footer-logo">
                              <a class="dark-logo" href="index-2.html">
                                 <img width="162" height="52" src="media/logo/logo-light.svg" alt="neeon">
                              </a>
                           </div>
                           <p class="text">
                              When an unknown printer took a galley
                              and scrambled it to make specimen
                              book not only five centurie.
                           </p>
                           <ul class="footer-social gutter-15">
                              <li class="social-item">
                                 <a href="https://www.facebook.com/" class="social-link fb" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                 </a>
                              </li>
                              <li class="social-item">
                                 <a href="https://twitter.com/" class="social-link tw" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                 </a>
                              </li>
                              <li class="social-item">
                                 <a href="https://vimeo.com/" class="social-link vm" target="_blank">
                                    <i class="fab fa-vimeo-v"></i>
                                 </a>
                              </li>
                              <li class="social-item">
                                 <a href="https://www.pinterest.com/" class="social-link pn" target="_blank">
                                    <i class="fab fa-pinterest-p"></i>
                                 </a>
                              </li>
                              <li class="social-item">
                                 <a href="https://www.whatsapp.com/" class="social-link wh" target="_blank">
                                    <i class="fab fa-whatsapp"></i>
                                 </a>
                              </li>
                           </ul>
                        </div>
                     </div>
                     <!-- end col -->

                     <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="800ms">
                        <div class="footer-widget">
                           <h3 class="footer-widget-title">Recent Posts</h3>

                           <!--  start footer-post-list -->
                           <div class="footer-post-list">
                              <div class="item mb--30">
                                 <div class="rt-post post-sm white-style">
                                    <div class="post-img">
                                       <a href="single-post1.html">
                                          <img src="media/gallery/post-sm_1.jpg" alt="post" width="100" height="100">
                                       </a>
                                    </div>
                                    <div class="ms-3 post-content">
                                       <h4 class="post-title">
                                          <a href="single-post1.html">
                                             Top Beste ampute are
                                             Speak Market.
                                          </a>
                                       </h4>
                                       <span class="rt-meta">
                                          <i class="far fa-calendar-alt icon"></i>
                                          DECEMBER 9, 2022
                                       </span>
                                    </div>
                                 </div>
                              </div>

                              <div class="item">
                                 <div class="rt-post post-sm white-style">
                                    <div class="post-img">
                                       <a href="single-post1.html">
                                          <img src="media/gallery/post-sm_2.jpg" alt="post" width="100" height="100">
                                       </a>
                                    </div>
                                    <div class="ms-3 post-content">
                                       <h4 class="post-title">
                                          <a href="single-post1.html">
                                             Top Beste ampute are
                                             Speak Market.
                                          </a>
                                       </h4>
                                       <span class="rt-meta">
                                          <i class="far fa-calendar-alt icon"></i>
                                          DECEMBER 9, 2022
                                       </span>
                                    </div>
                                 </div>
                              </div>

                           </div>
                           <!--  end footer-post-list -->

                        </div>
                     </div>
                     <!-- end col -->

                     <div class="col-xl-3 col-md-6 wow fadeInUp d-flex justify-content-xl-center justify-content-start"
                        data-wow-delay="400ms" data-wow-duration="800ms">
                        <div class="footer-widget">
                           <h3 class="footer-widget-title">Categories</h3>
                           <ul class="widget-list cat-list">
                        
                        @foreach(\App\Models\Category::all()->take(5) as $category)
                              <li class="widget-list-item">
                                 <a href="politics.html" class="widget-list-link">
                                    {{$category->name}}
                                 </a>
                              </li>
                              @endforeach
                            

                           </ul>
                        </div>
                     </div>
                     <!-- end col -->

                     <div class="col-xl-3 col-md-6 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="800ms">
                        <div class="footer-widget">
                           <h3 class="footer-widget-title">Instagram</h3>
                           <div class="insta-gallery">
                              <div class="galleryitem">
                                 <a href="https://www.instagram.com/">
                                    <img src="media/gallery/ins-gallery_1.jpg" width="100" height="90" alt="gallery1">
                                 </a>
                              </div>
                              <div class="galleryitem">
                                 <a href="https://www.instagram.com/">
                                    <img src="media/gallery/ins-gallery_2.jpg" width="100" height="90" alt="gallery2">
                                 </a>
                              </div>
                              <div class="galleryitem">
                                 <a href="https://www.instagram.com/">
                                    <img src="media/gallery/ins-gallery_3.jpg" width="100" height="90" alt="gallery3">
                                 </a>
                              </div>
                              <div class="galleryitem">
                                 <a href="https://www.instagram.com/">
                                    <img src="media/gallery/ins-gallery_4.jpg" width="100" height="90" alt="gallery4">
                                 </a>
                              </div>
                              <div class="galleryitem">
                                 <a href="https://www.instagram.com/">
                                    <img src="media/gallery/ins-gallery_5.jpg" width="100" height="90" alt="gallery5">
                                 </a>
                              </div>
                              <div class="galleryitem">
                                 <a href="https://www.instagram.com/">
                                    <img src="media/gallery/ins-gallery_6.jpg" width="100" height="90" alt="gallery6">
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end col -->

                  </div>
               </div>
            </div>
            <!-- End footer top -->

            <div class="footer-bottom">
               <div class="container">
                  <div class="footer-bottom-area d-flex align-items-center justify-content-center">
                     <p class="copyright-text mb-0 wow fadeInUp" data-wow-delay="200ms" data-wow-duration="800ms">
                        <span class="currentYear"></span> © neeon all right reserved by
                        <a href="https://www.radiustheme.com/" rel="nofollow">RadiusTheme</a>
                     </p>
                  </div>
               </div>
            </div>
            <!-- End footer bottom -->

         </footer>
         <!-- End  Footer -->

      </div>
      <!-- End main-content -->

      <!-- Start  offcanvas menu -->
      <div class="offcanvas-menu-wrap" id="offcanvas-wrap" data-position="left">

         <div class="offcanvas-content">
            <div class="offcanvas-header">
               <div class="offcanvas-logo">
                  <div class="site-branding">
                     <a class="dark-logo" href="index-2.html"><img width="162" height="52" src="media/logo/logo-dark.svg"
                           alt="neeon"></a>
                     <a class="light-logo" href="index-2.html"><img width="162" height="52"
                           src="media/logo/logo-light.svg" alt="neeon"></a>
                  </div>
               </div>
               <div class="close-btn offcanvas-close">
                  <a href="javascript:void(0)">
                     <i class="fas fa-times"></i>
                  </a>
               </div>
            </div>

            <div class="offcanvas-widget">
               <h3 class="offcanvas-widget-title">About Us</h3>
               <p>
                  The argument in favor of using filler text
                  goes something like this: If you use arey
                  real content in the Consulting Process
                  anytime you reachtent.
               </p>
            </div>

            <div class="offcanvas-widget">
               <h3 class="offcanvas-widget-title">Instagram</h3>
               <div class="insta-gallery">
                  <div class="galleryitem">
                     <a href="https://www.instagram.com/">
                        <img src="media/gallery/ins-gallery_1.jpg" width="100" height="90" alt="gallery1">
                     </a>
                  </div>
                  <div class="galleryitem">
                     <a href="https://www.instagram.com/">
                        <img src="media/gallery/ins-gallery_2.jpg" width="100" height="90" alt="gallery2">
                     </a>
                  </div>
                  <div class="galleryitem">
                     <a href="https://www.instagram.com/">
                        <img src="media/gallery/ins-gallery_3.jpg" width="100" height="90" alt="gallery3">
                     </a>
                  </div>
                  <div class="galleryitem">
                     <a href="https://www.instagram.com/">
                        <img src="media/gallery/ins-gallery_4.jpg" width="100" height="90" alt="gallery4">
                     </a>
                  </div>
                  <div class="galleryitem">
                     <a href="https://www.instagram.com/">
                        <img src="media/gallery/ins-gallery_5.jpg" width="100" height="90" alt="gallery5">
                     </a>
                  </div>
                  <div class="galleryitem">
                     <a href="https://www.instagram.com/">
                        <img src="media/gallery/ins-gallery_6.jpg" width="100" height="90" alt="gallery6">
                     </a>
                  </div>
               </div>
            </div>

            <div class="offcanvas-widget footer-widget">
               <h3 class="offcanvas-widget-title">Contact Info</h3>
               <ul class="contact-info-list widget-list">
                  <li class="widget-list-item">
                     <i class="fas fa-map-marker-alt list-icon"></i>
                     Chicago 12, Melborne City, USA
                  </li>
                  <li class="widget-list-item">
                     <i class="fas fa-phone-alt list-icon"></i>
                     <a href="tel:123333000999" class="widget-list-link">
                        (123) 333-000-999
                     </a>
                  </li>
                  <li class="widget-list-item">
                     <i class="fas fa-envelope list-icon"></i>
                     <a href="mailto:info@example.com" class="widget-list-link">
                        neeon@gmail.com
                     </a>
                  </li>
               </ul>
               <ul class="footer-social style-2 gutter-15">
                  <li class="social-item">
                     <a href="https://www.facebook.com/" class="social-link fb" target="_blank">
                        <i class="fab fa-facebook-f"></i>
                     </a>
                  </li>
                  <li class="social-item">
                     <a href="https://twitter.com/" class="social-link tw" target="_blank">
                        <i class="fab fa-twitter"></i>
                     </a>
                  </li>
                  <li class="social-item">
                     <a href="https://vimeo.com/" class="social-link vm" target="_blank">
                        <i class="fab fa-vimeo-v"></i>
                     </a>
                  </li>
                  <li class="social-item">
                     <a href="https://www.pinterest.com/" class="social-link pn" target="_blank">
                        <i class="fab fa-pinterest-p"></i>
                     </a>
                  </li>
                  <li class="social-item">
                     <a href="https://www.whatsapp.com/" class="social-link wh" target="_blank">
                        <i class="fab fa-whatsapp"></i>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <!-- End  offcanvas menu -->

      <!-- Start Cart Wrap -->
      <div class="cart-wrap" id="cart-wrap" data-position="left">
         <div class="cart-content">
            <div class="cart-header">
               <span class="cart-title d-inlie-block">Cart</span>
               <button type="button" class="cart-menu-btn menu-close-btn">
                  <span class="menu-btn-icon">
                     <i class="fas fa-times"></i>
                  </span>
               </button>
            </div>
            <ul class="cart-items ">
               <li class="d-flex ">
                  <div class="item-figure">
                     <a href="#">
                        <img src="media/gallery/ins-gallery_1.jpg" alt="Cart" width="100" height="90">
                     </a>
                     <div class="item-dismiss">
                        <a href="#"><i class="fas fa-times"></i></a>
                     </div>
                  </div>
                  <div class="item-description">
                     <span class="item-main-title"><a href="#">Animal</a></span>
                     <span class="item-amount d-flex align-items-center"><span class="item-quantity">1</span>X<span
                           class="item-price">$12.00</span></span>
                  </div>
               </li>
               <li class="d-flex">
                  <div class="item-figure">
                     <a href="#">
                        <img src="media/gallery/ins-gallery_2.jpg" alt="Cart" width="100" height="90">
                     </a>
                     <div class="item-dismiss">
                        <a href="#"><i class="fas fa-times"></i></a>
                     </div>
                  </div>
                  <div class="item-description">
                     <span class="item-main-title"><a href="#">Sports</a></span>
                     <span class="item-amount d-flex align-items-center"><span class="item-quantity">1</span>X<span
                           class="item-price">$18.00</span></span>
                  </div>
               </li>
               <li class="d-flex">
                  <div class="item-figure">
                     <a href="#">
                        <img src="media/gallery/ins-gallery_3.jpg" alt="Cart" width="100" height="90">
                     </a>
                     <div class="item-dismiss">
                        <a href="#"><i class="fas fa-times"></i></a>
                     </div>
                  </div>
                  <div class="item-description">
                     <span class="item-main-title"><a href="#">Fashion</a></span>
                     <span class="item-amount d-flex align-items-center"><span class="item-quantity">1</span>X<span
                           class="item-price">$20.00</span></span>
                  </div>

               </li>
            </ul>
            <div class="cart-footer">
               <ul class="total-amount">
                  <li class="title">Subtotal:</li>
                  <li class="amount">$50.00</li>
               </ul>
               <ul class="action-buttons">
                  <li><a href="#" class="rt-submit-btn">VIEW CART</a></li>
                  <li><a href="#" class="rt-submit-btn">CHECKOUT</a></li>
               </ul>
            </div>
         </div>
      </div>
      <!-- End Cart Wrap -->

      <!-- Start Search  -->
      <div id="template-search" class="template-search">
         <button type="button" class="close">×</button>
         <form class="search-form">
            <input type="search" value="" placeholder="Search" />
            <button type="submit" class="search-btn btn-ghost style-1">
               <i class="flaticon-search"></i>
            </button>
         </form>
      </div>
      <!-- End Search -->

      <!-- theme-switch-box -->
      <div class="theme-switch-box-wrap">
         <div class="theme-switch-box">
            <span class="theme-switch-box__theme-status"><i class="fas fa-cog"></i></span>
            <label class="theme-switch-box__label" for="themeSwitchCheckbox">
               <input class="theme-switch-box__input" type="checkbox" name="themeSwitchCheckbox"
                  id="themeSwitchCheckbox">
               <span class="theme-switch-box__main"></span>
            </label>
            <span class="theme-switch-box__theme-status"><i class="fas fa-moon"></i></span>
         </div>
      </div>
      <!-- end theme-switch-box -->

      <!-- start back to top -->
      <a href="javascript:void(0)" id="back-to-top">
         <i class="fas fa-angle-double-up"></i>
      </a>
      <!-- End back to top -->

   </div>
   <!-- End wrapper -->