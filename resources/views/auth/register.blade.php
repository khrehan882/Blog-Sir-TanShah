@extends('layouts.app')

@section('content')

<main>
            <!-- start feature-section-style-1  -->
            <section class="rt-feature-section feature-section-style-1 overflow-hidden"
               data-bg-image="media/elements/element_1.png">
               <div class="container">
                  
                  <div class="col-xl-5 col-lg-6 mx-auto wow fadeInUp" data-wow-delay="600ms" data-wow-duration="800ms">

         <form method="POST" action="{{ route('register') }}" class="contact-form-style-1 ">
                @csrf

                <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control  @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                           <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">E-mail</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control  @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

            <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

          


      

            <button type=submit class="submit-btn">Sign Up</button>

               </form>
                    <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

</div>
                  </div>
              </section>
         </main>
         <!-- End Main -->

       



                   
                



@endsection








