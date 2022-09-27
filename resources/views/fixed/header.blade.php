<!-- Header -->
<header class="">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="/"><h2>GM:<em>S</em></h2></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link @if(request()->routeIs('index')) active @endif" href="{{route('index')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->routeIs('products')) active @endif" href="{{route('products')}}">Our Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->routeIs('contact')) active @endif" href="{{route('contact')}}">Contact Us</a>
                    </li>
                    @if(session()->get('user')||session()->get('admin'))
                        <li class="nav-item @if(request()->routeIs('login')) active @endif">
                            <form action="{{route('logout')}}" method="POST">
                                @csrf
                                <button class="btn btn-danger">Logout</button>
                            </form>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link @if(request()->routeIs('register')) active @endif" href="{{route('register')}}">Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link @if(request()->routeIs('login')) active @endif" href="{{route('login')}}">Login</a>
                        </li>
                    @endif
                    @if(session()->get('admin'))
                        <li class="nav-item">
                            <a class="nav-link @if(request()->routeIs('admin')) active @endif" href="{{route('admin')}}">Admin</a>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
