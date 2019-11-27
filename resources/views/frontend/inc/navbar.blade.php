<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container box_1620">
        <!-- Brand and toggle get grouped for better mobile display -->
        <a class="navbar-brand logo_h" href="index.html"><img src="{{asset('frontend/img/logo.png')}}" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item active"><a class="nav-link" href="{{route('home.main')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('home.about')}}">About</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('home.blog')}}">Blog</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('home.contact')}}">Contact</a></li>
                <li class="nav-item submenu dropdown">
                    <a href="#" style="width:30px;" class="nav-link dropdown-toggle text-center" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{\Illuminate\Support\Facades\App::getLocale()}}</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="#">EN</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">AZE</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
