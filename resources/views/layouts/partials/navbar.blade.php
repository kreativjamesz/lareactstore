@include('layouts.partials.topbar')
<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('', 'Defiant Media Comics') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                <li><a class="nav-link" href="/join-dmc">JOIN DMC</a></li>
                <li><a class="nav-link btn-partner" href="/partners">PARTNERS</a></li>
                <li><a class="nav-link" href="/publishing">PUBLISHING</a></li>
                <li><a class="nav-link" href="/printshop">PRINTSHOP</a></li>
                
            </ul>
        </div>
    </div>
</nav>