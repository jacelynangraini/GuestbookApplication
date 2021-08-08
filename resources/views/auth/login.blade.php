@extends('layout.app')
<title>Login | Guest Book</title>

@section('content')
<div class="row p5 vh-100">
    <div class="container-fluid h-100 d-flex align-items-center justify-content-center">

        <div class="w-75 h-75 bg-img d-flex justify-content-between align-items-center shadow-cream h-50-r br-30-r"style="background-image: url({{ asset('assets/bg.png') }}); border-radius: 50px;">
            <div class="container d-flex justify-content-around flex-column-r p3 min-height" >
                <div class="w-40 h-100 p2 d-flex justify-content-center flex-column ml-4 w-100-r ml-0-r mt-auto mb-auto">
                    <div class="form-container text-14-m mt-3">
                        <form class="d-flex flex-column justify-content-around" method="POST" action="{{ route('login') }}">
                                @csrf
                            <div class="form-group">
                                <label for="email" class="text-pink">Email</label>
                                <input id="email" type="text" class="text-grey form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" placeholder="Enter your name">
                    
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-pink">Password</label>
                                <input id="password" type="password" class="text-grey form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password">
                    
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group mb-0 mt-3">
                                <button type="submit" class="btn button w-100">Log In</button>
                            </div>
                            <div class="form-group text-grey">
                                Don't have an account? <a href="/register" class="text-pink">Register now.</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="w-50 h-100 p2 d-flex justify-content-center flex-column ml-4 w-100-r ml-0-r mt-auto mb-auto">
                    <img src="{{asset('assets/illus3.png')}}" alt="" class="img-l">
                    <br>
                    <span class="h2 text-pink  mt-3 mb-3">Log In</span>
                    <br>
                    <span class="text-16-r text-grey">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eligendi dolorem officia, architecto quo a quae.
                    </span>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection