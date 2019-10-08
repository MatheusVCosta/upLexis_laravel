<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img src="{{ asset('media/logo/logo_color.png')}}" alt="logo" class="p-1">

    <button class="navbar-toggler text-orange" type="button" data-toggle="collapse" data-target="#navbarMobile">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarMobile">
        <ul class="navbar-nav mr-auto ">
            <li class="nav-item ml-2 mr-2">
                <a class="nav-link" href="{{ route('admin.exibir')}}">ARTIGOS</a>
            </li>
            <li class="nav-item ml-2 mr-2" >
                <a class="nav-link" href="{{ route('admin.buscar')}}">BUSCAR ARTIGOS</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto ">
            <li class="nav-item" >
            <a class="nav-link ml-2 mr-2" href="{{ route('login.sair') }}">LOGOUT</a>
            </li>
        </ul>
    </div>
</nav>