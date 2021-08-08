@extends('layout.app')
<title>Home | Guest Book</title>
@section('content')
<div class="row p5 vh-100">
    <div class="container-fluid h-100 d-flex align-items-center justify-content-center h-auto-r pr-0">

        <div class="w-75 h-75 bg-img d-flex justify-content-between align-items-center shadow-cream h-auto-r br-30-r p2"style="background-image: url({{ asset('assets/bg.png') }}); border-radius: 50px;">
        <div class="container d-flex justify-content-around flex-column-r" >
            <div class="w-50 h-100 p2 d-flex justify-content-center flex-column ml-4 w-100-r ml-0-r mt-auto mb-auto">
                <img src="{{asset('assets/illus1.png')}}" alt="" class="img-l">
                <br>
                <span class="h3 text-blue mt-3">Welcome to our</span>
                <br>
                <span class="h1 text-pink">Guest Book!</span>
                <br>
                <span class="text-16-r text-grey">
                    Please fill the form to submit your information!
                </span>
            </div>
            <div class="w-40  h-75 mr-4 mt-auto mb-auto w-100-r mb-4-r mr-0-r">
                <div class="form-container text-16-m ">
                    {{-- <form class="d-flex flex-column justify-content-around" action="/success" method="POST"> --}}
                    <form class="d-flex flex-column justify-content-around" action="/success" method="POST">
                        @csrf
                            <div class="form-group">
                            <label for="name" class="text-pink">Name</label>
                            <input id="name" type="text" class="text-grey form-control @error('name') is-invalid @enderror" name="name" required autocomplete="name" placeholder="Enter your name">
        
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-pink">Email</label>
                            <input id="email" type="email" class="text-grey form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email" placeholder="Enter your email">
        
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address" class="text-pink">Address</label>
                            <input id="address" type="text" class="text-grey form-control @error('address') is-invalid @enderror" name="address" required autocomplete="email" placeholder="Enter your address">
        
                            @error('address')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group mb-0 mt-3">
                            <button type="submit" class="btn button w-100">Submit</button>
                        </div>
                        </form>
                </div>
            </div>
        </div>
        </div>

    </div>

</div>

@endsection