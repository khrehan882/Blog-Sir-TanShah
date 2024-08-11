

@extends('layouts.app')



@section('content')



   <main>

            <!-- start feature-section-style-1  -->

            <section class="rt-feature-section feature-section-style-1 overflow-hidden"

               data-bg-image="{{asset('media/elements/element_1.png')}}">

               

<div class="banner author-banner" data-bg-image="{{asset('media/banner/banner_4.jpg')}}">

               <div class="container">

                  <div class="row">

                     <div class="col-12">

                        <div class="author-big-box-style-1">

   <div class="author-img">

   @if(auth()->user()->username==$user->username)

   <a href="{{url('/editprofile')}}" >

   <img src="{{asset($photo)}}" alt="author-img_1" width="170" height="170">

</a>

@else

<img src="{{asset($photo)}}" alt="author-img_1" width="170" height="170">

@endif



                           </div>

                           <div class="author-content">

      <h2 class="title text-capitalize">{{$user->profile->name}}</h2>

                              <span class="designation">Senior Author</span>

                              <p>

                                 {{$user->profile->bio}}

                              </p>

                           </div>

                           <div class="author-social-area">

                              <ul class="author-social-1 footer-social">

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

                                    <a href="https://youtube.com/" class="social-link yu" target="_blank">

                                       <i class="fab fa-youtube"></i>

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

                  </div>

               </div>

            </div>







              </section>

         </main>

         <!-- End Main -->



        @include("sections.footer")



@endsection

