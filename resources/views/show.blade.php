

@extends('layouts.app')



@section('content')



  <main>



            <!-- Start inner page Banner -->

            <div class="banner inner-banner">

               <div class="container">

                  <nav class="rt-breadcrumb-wrap" aria-label="breadcrumb">

                     <ol class="breadcrumb">

                        <li class="breadcrumb-item">

                           <a href="index-2.html">

                              <i class="fas fa-home"></i>

                              Home

                           </a>

                        </li>

                        <li class="breadcrumb-item">

                           <a href="index-2.html">

                              {{$post->category->name}}

                           </a>

                        </li>

                        

                     </ol>

                  </nav>

               </div>

            </div>

            <!-- End inner page Banner -->



            <!-- Start single-post-banner -->

            <div class="single-post-banner rt-gradient-overaly" data-bg-image="{{$post->photo}}">

               <div class="container">

                  <div class="row">

                     <div class="col-xl-9 col-lg-10 mx-auto">

                        <div class="single-post-content">

                           <span class="fashion">{{$post->category->name}}</span>

                           <h2 class="post-title">

                              {{$post->title}}

                           </h2>

                           <div class="post-meta">

                              <ul>

                                 <li>

                                    <span class="rt-meta">

                                       by <a href="author.html" class="name">{{$post->user->username}}</a>

                                    </span>

                                 </li>

                                 <li>

                                    <span class="rt-meta">

                                       <i class="far fa-calendar-alt icon"></i>

                                       {{$post->date}}

                                    </span>

                                 </li>

                                 

                                

                                 <li>

                                    <span class="rt-meta">

                                       <i class="fas fa-signal icon"></i>

                                       3,250 Views

                                    </span>

                                 </li>

                              </ul>

                           </div>

                        </div>

                     </div>

                  </div>

               </div>

            </div>

            <!-- End single-post-banner -->



            <!-- start rt-sidebar-section-layout-2 -->

            <section class="rt-sidebar-section-layout-3 section-padding">

               <div class="container">

                  <div class="row gutter-40">

                     <div class="col-xl-9 col-lg-10 mx-auto">



                        <div class="rt-main-post-single layout-2">



                           <div class="post-share-style-1">

                              <div class="inner">



                                 <div class="share-text">

                                    <i class="fas fa-share-alt"></i>

                                    <span>share</span>

                                 </div>



                                 <ul class="social-share-style-7">

                                    <li>

                                       <a class="fb" target="_blank" href="https://www.facebook.com/">

                                          <i class="social-icon fab fa-facebook-f"></i>

                                       </a>

                                    </li>

                                    <li>

                                       <a class="tw" target="_blank" href="https://twitter.com/">

                                          <i class="social-icon fab fa-twitter"></i>

                                       </a>

                                    </li>

                                    <li>

                                       <a class="yu" target="_blank" href="https://www.youtube.com/">

                                          <i class="social-icon fab fa-youtube"></i>

                                       </a>

                                    </li>

                                    <li>

                                       <a class="dr" target="_blank" href="https://dribbble.com/">

                                          <i class="social-icon fab fa-dribbble"></i>

                                       </a>

                                    </li>

                                    <li>

                                       <a class="dw" target="_blank" href="https://cloud.google.com/">

                                          <i class="social-icon fas fa-cloud"></i>

                                       </a>

                                    </li>

                                 </ul>

                              </div>

                           </div>



                           <!-- strat psot body -->

                           <div class="post-body">

                              <p class="rt-dropcap-style-2">

                                  {{$post->content}}

                              </p>

                            

                             

                                      

                              </div>





                              <!-- end post -->

                             

                           <!-- start social-share-box-2 -->

                           <div class="social-share-box-2 mb--40">

                              <div class="row gutter-30">

                                 <div class="col-xl-7 col-lg-6">

                                    <div class="conent-block">

                                       <h3 class="block-tile mb--20">Popular Tags:</h3>

                                       <div class="tag-list">

                                          <a href="#" class="tag-link">beautiful</a>

                                          <a href="#" class="tag-link">travel</a>

                                          <a href="#" class="tag-link">technology</a>

                                          <a href="#" class="tag-link">politics</a>

                                       </div>

                                    </div>

                                 </div>

                                 <div class="col-xl-5 col-lg-6 d-flex justify-content-start justify-content-lg-end">

                                    <div class="conent-block">

                                       <h4 class="block-tile mb--20">Share This Post:</h4>

                                       <ul class="social-share-style-1 ">

                                          <li>

                                             <a class="fb" target="_blank" href="https://www.facebook.com/">

                                                <i class="social-icon fab fa-facebook-f"></i>

                                             </a>

                                          </li>

                                          <li>

                                             <a class="tw" target="_blank" href="https://twitter.com/">

                                                <i class="social-icon fab fa-twitter"></i>

                                             </a>

                                          </li>

                                          <li>

                                             <a class="yu" target="_blank" href="https://www.youtube.com/">

                                                <i class="social-icon fab fa-youtube"></i>

                                             </a>

                                          </li>

                                          <li>

                                             <a class="dr" target="_blank" href="https://dribbble.com/">

                                                <i class="social-icon fab fa-dribbble"></i>

                                             </a>

                                          </li>

                                          <li>

                                             <a class="dw" target="_blank" href="https://cloud.google.com/">

                                                <i class="social-icon fas fa-cloud"></i>

                                             </a>

                                          </li>



                                          <li>

                                             <a class="wh" target="_blank" href="https://www.whatsapp.com/">

                                                <i class="social-icon fab fa-whatsapp"></i>

                                             </a>

                                          </li>

                                       </ul>

                                    </div>

                                 </div>

                              </div>

                           </div>

                           <!-- end social-share-box-2 -->



                           <!-- start author box -->

                           <div class="author-box-style-1 mb--50">

                              <div class="author-img">

                                 <a  href="/profile/{{$post->user->username}}">

      <img src="{{asset($post->user->dp)}}" alt="author-img_1" width="170" height="170">

   </a>

                              </div>

                              <div class="author-content">

                                 <h3 class="author-name">{{$post->user->profile->name}}</h3>

                                 <span class="author-role">Admin</span>

                                 <p class="user-desc">

                                     {{$post->user->profile->bio}}

                                 </p>

                                 <ul class="social-style-5">



                                    <li>

                                       <a target="_blank" href="https://www.facebook.com/">

                                          <i class="social-icon fab fa-facebook-f"></i>

                                       </a>

                                    </li>

                                    <li>

                                       <a target="_blank" href="https://twitter.com/">

                                          <i class="social-icon fab fa-twitter"></i>

                                       </a>

                                    </li>

                                    <li>

                                       <a target="_blank" href="https://www.pinterest.com/">

                                          <i class="fab fa-pinterest-p"></i>

                                       </a>

                                    </li>

                                    <li>

                                       <a target="_blank" href="https://www.instagram.com/">

                                          <i class="fab fa-instagram"></i>

                                       </a>

                                    </li>



                                 </ul>

                              </div>

                           </div>

                           <!-- end author box -->



                           <!-- start post-pagination-box -->

                           <div class="post-pagination-box mb--40">



                              <div class="row gutter-30">

                                 <div class="col-lg-6">

                                    <div class="next-prev-wrap">

                                       <div class="item-icon">

                                          <a href="#">

                                             <i class="fas fa-chevron-left"></i>

                                             Previous Article

                                          </a>

                                       </div>

                                       <div class="content">

                                          <h4 class="title">

                                             <a href="#">

                                                Top Best Compu follower career games are

                                                Speak Market Reseach.

                                             </a>

                                          </h4>

                                          <span class="rt-meta">

                                             <i class="far fa-calendar-alt icon"></i>

                                             DECEMBER 9, 2022

                                          </span>

                                       </div>

                                    </div>

                                 </div>



                                 <div class="col-lg-6">

                                    <div class="next-prev-wrap next-wrap">

                                       <div class="item-icon">

                                          <a href="#">

                                             Next Article

                                             <i class="fas fa-chevron-right"></i>

                                          </a>

                                       </div>

                                       <div class="content">

                                          <h4 class="title">

                                             <a href="#">

                                                Best Technology Compu follower Career

                                                Speak Market Reseach

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



                           </div>

                           <!-- end pagination box -->



                           <!-- start blog-post-comment -->

                           <div class="blog-post-comment">

                              <form action="#" class="rt-contact-form comments-form-style-1">

                                 <div class="row">

                                    <div class="col-xl-4">

                                       <div class="rt-form-group">

                                          <label for="name">Your Name *</label>

                                          <input type="text" name="name" id="name" class="form-control"

                                             data-error="Name field is required" required>

                                          <div class="help-block with-errors"></div>

                                       </div>

                                    </div>

                                    <div class="col-xl-4">

                                       <div class="rt-form-group">

                                          <label for="email">E-mail *</label>

                                          <input type="text" name="email" id="email" class="form-control"

                                             data-error="Email field is required" required>

                                          <div class="help-block with-errors"></div>

                                       </div>

                                    </div>

                                    <div class="col-xl-4">

                                       <div class="rt-form-group">

                                          <label for="website">Website *</label>

                                          <input type="text" name="website" id="website" class="form-control"

                                             data-error="Web Url field is required" required>

                                          <div class="help-block with-errors"></div>

                                       </div>

                                    </div>

                                    <div class="col-12">

                                       <div class="rt-form-group">

                                          <label for="comment">Comments *</label>

                                          <textarea name="comment" id="comment" class="form-control text-area"

                                             data-error="Comment field is required" required></textarea>

                                          <div class="help-block with-errors"></div>

                                       </div>

                                    </div>

                                    <div class="col-12">

                                       <div class="rt-form-group">

                                          <div class="form-check">

                                             <input class="form-check-input" type="checkbox" value=""

                                                id="comment-form-check1">

                                             <label class="form-check-label" for="comment-form-check1">

                                                Save my name, email, and website in this browser for the next time I

                                                comment.

                                             </label>

                                          </div>

                                       </div>

                                    </div>

                                    <div class="col-12">

                                       <button type="submit" class="submit-btn">

                                          Post Comment

                                       </button>

                                    </div>

                                    <div class="form-response"></div>

                                 </div>

                              </form>

                           </div>

                           <!-- end blog-post-comment -->



                        </div>

                     </div>

                     <!-- end col-->



                  </div>

                  <!-- end row  -->

               </div>

               <!-- end container -->

            </section>

            <!-- end rt-sidebar-section-layout-2 -->



            <!-- editor-choice-section-style-1 -->

            <section class="editor-choice-section-style-1 section-padding overflow-hidden">



               <div class="container">

                  <div class="row">

                     <div class="col-12">

                        <div class="titile-wrapper mb--30">



                           <h2 class="rt-section-heading mb-0 flex-grow-1 me-3">

                              <span class="rt-section-text">Related Post </span>

                              <span class="rt-section-dot"></span>

                              <span class="rt-section-line"></span>

                           </h2>



                           <div class="slider-navigation style-2">

                              <i class="fas fa-chevron-left slider-btn btn-prev"></i>

                              <i class="fas fa-chevron-right slider-btn btn-next"></i>

                           </div>

                        </div>



                     </div>

                  </div>



                  <div class="swiper-container rt-post-slider-style-3">

                     <div class="swiper-wrapper">



                        <div class="swiper-slide">

                           <div class="slide-item">

                              <div class="rt-post-grid grid-meta">

                                 <div class="post-img">

                                    <a href="single-post1.html">

                                       <img src="media/gallery/post-md_3.jpg" alt="post" width="551" height="431">

                                    </a>

                                 </div>

                                 <div class="post-content">

                                    <a href="graphics.html" class="rt-post-cat-normal">Design</a>

                                    <h3 class="post-title">

                                       <a href="single-post1.html">

                                          After The Moon How Close gea

                                          Is Space Travel Reall.

                                       </a>

                                    </h3>

                                    <div class="post-meta">

                                       <ul>

                                          <li>

                                             <span class="rt-meta">

                                                by <a href="author.html" class="name">Willum Skeem</a>

                                             </span>

                                          </li>

                                          <li>

                                             <span class="rt-meta">

                                                <i class="far fa-calendar-alt icon"></i>

                                                DECEMBER 9, 2022

                                             </span>

                                          </li>

                                       </ul>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                        <!-- end swiper slide -->



                        <div class="swiper-slide">

                           <div class="slide-item">

                              <div class="rt-post-grid grid-meta">

                                 <div class="post-img">

                                    <a href="single-post1.html">

                                       <img src="media/gallery/post-md_50.jpg" alt="post" width="551" height="431">

                                    </a>

                                 </div>

                                 <div class="post-content">

                                    <a href="graphics.html" class="rt-post-cat-normal">Design</a>

                                    <h3 class="post-title">

                                       <a href="single-post1.html">

                                          After The Moon How Close gea

                                          Is Space Travel Reall.

                                       </a>

                                    </h3>

                                    <div class="post-meta">

                                       <ul>

                                          <li>

                                             <span class="rt-meta">

                                                by <a href="author.html" class="name">Willum Skeem</a>

                                             </span>

                                          </li>

                                          <li>

                                             <span class="rt-meta">

                                                <i class="far fa-calendar-alt icon"></i>

                                                DECEMBER 9, 2022

                                             </span>

                                          </li>

                                       </ul>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                        <!-- end swiper slide -->



                        <div class="swiper-slide">

                           <div class="slide-item">

                              <div class="rt-post-grid grid-meta">

                                 <div class="post-img">

                                    <a href="single-post1.html">

                                       <img src="media/gallery/post-md_51.jpg" alt="post" width="551" height="431">

                                    </a>

                                 </div>

                                 <div class="post-content">

                                    <a href="graphics.html" class="rt-post-cat-normal">Design</a>

                                    <h3 class="post-title">

                                       <a href="single-post1.html">

                                          After The Moon How Close gea

                                          Is Space Travel Reall.

                                       </a>

                                    </h3>

                                    <div class="post-meta">

                                       <ul>

                                          <li>

                                             <span class="rt-meta">

                                                by <a href="author.html" class="name">Willum Skeem</a>

                                             </span>

                                          </li>

                                          <li>

                                             <span class="rt-meta">

                                                <i class="far fa-calendar-alt icon"></i>

                                                DECEMBER 9, 2022

                                             </span>

                                          </li>

                                       </ul>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                        <!-- end swiper slide -->



                        <div class="swiper-slide">

                           <div class="slide-item">

                              <div class="rt-post-grid grid-meta">

                                 <div class="post-img">

                                    <a href="single-post1.html">

                                       <img src="media/gallery/post-md_52.jpg" alt="post" width="551" height="431">

                                    </a>

                                 </div>

                                 <div class="post-content">

                                    <a href="graphics.html" class="rt-post-cat-normal">Design</a>

                                    <h3 class="post-title">

                                       <a href="single-post1.html">

                                          After The Moon How Close gea

                                          Is Space Travel Reall.

                                       </a>

                                    </h3>

                                    <div class="post-meta">

                                       <ul>

                                          <li>

                                             <span class="rt-meta">

                                                by <a href="author.html" class="name">Willum Skeem</a>

                                             </span>

                                          </li>

                                          <li>

                                             <span class="rt-meta">

                                                <i class="far fa-calendar-alt icon"></i>

                                                DECEMBER 9, 2022

                                             </span>

                                          </li>

                                       </ul>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                        <!-- end swiper slide -->



                        <div class="swiper-slide">

                           <div class="slide-item">

                              <div class="rt-post-grid grid-meta">

                                 <div class="post-img">

                                    <a href="single-post1.html">

                                       <img src="media/gallery/post-md_50.jpg" alt="post" width="551" height="431">

                                    </a>

                                 </div>

                                 <div class="post-content">

                                    <a href="graphics.html" class="rt-post-cat-normal">Design</a>

                                    <h3 class="post-title">

                                       <a href="single-post1.html">

                                          After The Moon How Close gea

                                          Is Space Travel Reall.

                                       </a>

                                    </h3>

                                    <div class="post-meta">

                                       <ul>

                                          <li>

                                             <span class="rt-meta">

                                                by <a href="author.html" class="name">Willum Skeem</a>

                                             </span>

                                          </li>

                                          <li>

                                             <span class="rt-meta">

                                                <i class="far fa-calendar-alt icon"></i>

                                                DECEMBER 9, 2022

                                             </span>

                                          </li>

                                       </ul>

                                    </div>

                                 </div>

                              </div>

                           </div>

                        </div>

                        <!-- end swiper slide -->



                     </div>

                     <!-- end swiper wrapper -->

                  </div>

                  <!-- end swiper container + editor-choice-slider-style-1  -->

               </div>

               <!-- end container -->

            </section>

            <!-- end editor-choice-section-style-1 -->



            <!-- start subscribe-area-style-1 -->

            <div class="subscribe-section-area-style-2">

               <div class="container">

                  <div class="row">

                     <div class="col-xl-10 mx-auto">

                        <div class="subscribe-wrap-style-6" data-bg-image="media/elements/element_16.png">

                           <div class="subscribe-box-style-6" data-bg-image="media/elements/element_15.png">

                              <form action="#" class="subscribe-form-style-6 gutter-15">

                                 <div class="subscrible-heading">

                                    <h3 class="title">

                                       Newsletter SingUp

                                    </h3>

                                    <p class="mb-0">

                                       Don’t worry, we don’t spam

                                    </p>

                                 </div>

                                 <div class="rt-subs-form">

                                    <input type="email" name="email" id="email_2" class="subscribe-form"

                                       placeholder="enter e-mail">

                                 </div>

                                 <div class="btn-wrap">

                                    <button type="submit" class="subscribe-btn">Subscribe Now </button>

                                 </div>

                              </form>

                           </div>

                        </div>

                        <!-- end subscribe-wrap-style-6-->

                     </div>

                  </div>

               </div>

            </div>

            <!-- end subscribe-area-style-1 -->



         </main>

         <!-- End Main -->



@endsection

