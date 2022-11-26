@extends('app')
@section('title', __('Postre De Limón'))

@section('content')
    @include('nav')
    <div class="container-fluid position-relative" style="padding-left: 0rem; padding-right: 0rem; height: 100vh;">

        <div class="row position-absolute top-50 start-50 translate-middle" style="width: 80%; justify-content: center;">
            <div class="col-sm-5">
                <img src="{{ asset('assets\img\1021x1021\navidad\PostreLimon.jpg')}}" width="440px" class="img-thumbnail" alt="">
            </div>

            <div class="col-sm-4 text-start">
                <h3 class="text-center">Postre de limon y/o Maracuya</h3>
                <h6 >
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum, nesciunt inventore omnis 
                    fugiat dolores vitae similique minus quisquam, maxime cupiditate, non molestiae quae ad repudiandae! Culpa corporis adipisci aperiam numquam.
                </h6>
                <div class="producto-info">
                    <ul>
                      <li><strong>Precio</strong>: $10.000 <small>COP</small></li>
                      <li><strong>Calorias</strong>: N/A</li>
                    </ul>
                  </div>
                <button class="btn btn-primary"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Comprar</button>
            </div>
        </div>
    </div>
@endsection 