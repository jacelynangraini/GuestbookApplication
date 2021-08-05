@extends('layout.app')

@section('content')
<div class="row vh-100">
    <div class="container-fluid h-100 d-flex align-items-center justify-content-center">

        <div class="w-75 h-75 bg-img d-flex justify-content-between align-items-center shadow-cream h-50-r br-30-r"style="background-image: url(./assets/bg.png); border-radius: 50px;">
        <div class="container d-flex justify-content-around flex-column align-items-center" >
            <span class="h2 text-blue">Log In</span>
            <div class="form-container text-16-m ">
                <form class="d-flex flex-column justify-content-around" action="/admin/view"method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="form-group">
                        <label for="formGroupExampleInput2" class="text-pink">Email</label>
                        <input id="formGroupExampleInput" type="text" class="text-grey form-control @error('email') is-invalid @enderror" name="name" required autocomplete="email" placeholder="Enter your name">
        
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2" class="text-pink">Password</label>
                        <input id="password" type="password" class="text-grey form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Enter your password">
        
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group mb-0">
                        <button type="submit" class="btn button w-100">Log In</button>
                    </div>
                </form>
            </div>
        </div>
        </div>

    </div>

</div>
@endsection