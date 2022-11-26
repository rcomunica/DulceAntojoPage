@extends('app')
@section('title', __('Login'))

@section('content')
    
    @include('nav')
    <div class="position-relative container-fluid" style="padding-left: 0rem; padding-right: 0rem; height: 100vh;">
        <div class="position-absolute top-50 start-50 translate-middle container-input" style="width: 25%;">
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
            <form action="" method="POST" style="justify-content: center">
                @csrf
                <div class="form-floating input-group-lg mb-3" style="">
                    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>

                <div class="form-floating mb-3">                    
                    <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="row form-floating" style="justify-content: space-around">
                    <button class="btn btn-primary btn-confirm_login" type="submit" value="" style="justify-content: space-around">
                        Login
                    </button>
                </div>
            </form>
        </div>    
    </div>
@endsection