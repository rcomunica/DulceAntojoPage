
<div onkeydown="onKeyDownHandler(event);" id="anuncioContainer" class="wrapper" style="background: rgba(0, 0 , 0, 0.2);">
    <div class="position-absolute top-50 start-50 translate-middle card text-center" style="width: 675px; height: 500px">
        <div class="card-header text-end">
            <button onclick="closeAd()" id="ButtonClose" style="color: black; border-color: transparent; background-color: transparent;"><i class="fa-solid fa-x"></i></button>
        </div>
        <div class="card-body" style="padding: 0px; ">
            <a href="{{ route('home') }}" class="">
            <img src="{{ asset('assets/img/especiales/NAVIDAD.png') }}" width="100%" height="100%" style=""  alt="">
            </a>
        </div>
    </div>
</div>

<script src="{{ asset('assets/js/close-ad.js') }} "></script>
