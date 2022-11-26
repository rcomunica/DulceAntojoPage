@extends('app')
@section('title', __('Bienvenido!'))

@if (session('status'))
<div class="alert alert-success alert-dismissible fade show" style="z-index: 9999" role="alert">
  <strong>{{ session('status') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
@section('content')
    
    @include('nav')
    @include('header')
    <div class="position-relative" style="padding-left: 2rem; padding-top: 5rem; padding-right: 2rem; height: 80vh;">

        @include('shop/outstanding')

    </div>

    <div class="container-fluid" style="padding-left: 2rem; padding-top: 5rem; padding-right: 2rem; height: 300vh;">
        <!-- Content section 1-->
        <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/1021x1021/PostreLimon.jpg')}}" alt="..." /></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Llamanos!</h2>
                            <p>Necesitas mas informacion o simplemente te han gustado nuestros productos
                                porque no llamas? 
                            </p>
                            <ul>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+573103097845">310 3097845</a></li>
                                <li><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:+573014004370">301 4004370</a></li>
                                <li><i class="fa-brands fa-instagram"></i> <span>dulceantojo.bog</span></li>
                                <li><i class="fa-brands fa-facebook"></i> Dulce Antojo</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content section 2-->

        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/1021x1021/LecheAsada.jpg')}} " alt="..." /></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">¿No sabes como llegar?</h2>
                            <div id="map"></div>
                            <script
                              src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn6LjR7oGeGJNwkY1L9Ku67-doGYIZBY&libraries=places&callback=initMap&v=weekly"
                              defer
                            ></script>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Content section 3-->
        
        <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid rounded-circle" src="{{ asset('assets/img/1021x1021/TortaCiruelas.jpg')}}" alt="..." /></div>
                    </div>
                  <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            @include('contactus')
                        </div>

                </div>
            </div>
        </section>
    </div>
<!--    
<div class="alert alert-success d-flex align-items-center" role="alert">
    <div><i class="fa-solid fa-check"></i>
      <span> 
        Dentro de poco te contactaremos!
      </span>
    </div>
  </div>
-->
@endsection

