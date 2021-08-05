@extends('layout.app')

@section('content')
<div class="row">
    <div class="container-fluid h-100 d-flex align-items-center justify-content-center">
        <div class="w-75 bg-img d-flex justify-content-between align-items-center shadow-cream h-50-r br-30-r"style="background-image: url(./assets/bg.png); border-radius: 50px;">
        <div class="container d-flex justify-content-around flex-column align-items-center" >
            <span class="h2 text-blue">Register</span>
            <div class="form-container text-16-m ">
                {{-- <form class="d-flex flex-column justify-content-around" action="login.php" method="POST"> --}}
                    <form class="d-flex flex-column justify-content-around" method="POST" action="{{ route('register') }}">
                        <div class="form-group">
                        <label for="formGroupExampleInput2" class="text-pink">Username</label>
                        <input type="text" class="form-control text-grey" id="formGroupExampleInput2" placeholder="Enter your username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2" class="text-pink">Email</label>
                        <input type="email" class="form-control text-grey" id="formGroupExampleInput2" placeholder="Enter your email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2" class="text-pink">Password</label>
                        <input type="password" class="form-control text-grey" id="formGroupExampleInput2" placeholder="Enter your password" name="password">
                    </div>
                    <div class="form-group mb-0">
                        <button type="submit" class="btn button w-100">Register</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    </div>
</div>
@endsection