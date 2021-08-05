<nav class="navbar navbar-expand-md navbar-fixed-top">
    <img src={{ asset('assets/logo.png') }} alt="" class="logo mr-2">
    <a class="navbar-brand text-pink text-16-m" href="/">Guest Book</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
    
    <div class="my-2 my-lg-0 ml-auto">
        <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
            <a class="nav-link text-pink text-14-b" href="/">Add Guest <span class="sr-only">(current)</span></a>
        </li>

                @guest
                <li class="nav-item">
                    <a class="nav-link text-pink text-14-b" href="/view">View All Guest</a>
                </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link btn btn-2 ml-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif --}}
                @else
                <li class="nav-item">
                    <a class="nav-link text-pink text-14-b" href="/admin/view">View All Guest</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-pink text-14-b logout" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>
                    {{-- <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->last_name }},&nbsp;{{ Auth::user()->first_name}}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right transparent no-border" aria-labelledby="navbarDropdown">
                            
                        </div>
                    </li> --}}
                @endguest
        </ul>
    </div>
    </div>
</nav>