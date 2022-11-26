        <!-- Header-->
        <header class="masthead text-center text-white"  style="padding-left: 0rem; padding-right: 0rem; height: 100vh;">
        @guest
            @include('christmas')
        @endguest
            
        <div class="masthead-content">
                <div class="container px-5">
                    <h2 class="masthead-subheading mb-0"><br></h2>
                    <h1 class="masthead-heading mb-0">Dulce Antojo</h1>
                    <a class="btn btn-primary btn-xl rounded-pill mt-5" href="#scroll">Ver mas</a>
                </div>
            </div>
            <div class="bg-circle-1 bg-circle"></div>
            <div class="bg-circle-2 bg-circle"></div>
            <div class="bg-circle-3 bg-circle"></div>
            <div class="bg-circle-4 bg-circle"></div>
        </header>