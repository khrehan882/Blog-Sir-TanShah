@extends('layouts.app')

@section('content')

<main>

   <!-- start feature-section-style-1  -->

   <section class="rt-feature-section feature-section-style-1 overflow-hidden"

      data-bg-image="media/elements/element_1.png">

      <div class="container">

         <div class="col-md-12 mx-auto wow fadeInUp" data-wow-delay="600ms" data-wow-duration="800ms">

<form method="POST" action="{{ route('updateprofile') }}" class="contact-form-style-1 " enctype="multipart/form-data">

               @csrf

               <div class="row mb-3">

                  <label for="name" class="col-md-4 col-form-label text-md-end">Display Name</label>

                  <div class="col-md-6">

                     <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}"  autocomplete="name" autofocus>

                     @error('name')

                     <span class="invalid-feedback" role="alert">

                        <strong>{{ $message }}</strong>

                     </span>

                     @enderror

                  </div>

               </div>

               <div class="row mb-3">

                  <label for="bio" class="col-md-4 col-form-label text-md-end">Bio</label>

                  <div class="col-md-6">

      <textarea name=bio class="form-control  @error('bio') is-invalid @enderror" >{{$user->bio}}</textarea>

 @error('bio')

                     <span class="invalid-feedback" role="alert">

                        <strong>{{ $message }}</strong>

                     </span>

                     @enderror

                  </div>

               </div>





       <div class="row mx-5">



                  <label for="file" class="col-md-4 col-form-label text-md-end">Profile Image</label>

                  <div class="col-md-6">

                     <input name="file" type="file" class="form-control  @error('file') is-invalid @enderror" name="file" >

                     @error('file')

                     <span class="invalid-feedback" role="alert">

                        <strong>{{ $message }}</strong>

                     </span>

                     @enderror

                    



                     @if($user->photo)

                     <img src="storage/{{$user->photo}}" class="w-50">

                     @endif

                  </div>

               </div>

                    

                   

              

               

               

               <button type=submit class="submit-btn">Update Profile</button>

            </form>

            <p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>

         </div>

         

      </div>

   </section>

</main>

<!-- End Main -->

@include("sections.footer")

@endsection

