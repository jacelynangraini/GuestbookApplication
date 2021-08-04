@extends('layout.app')

@section('content')
<div class="row vh-100">
    <div class="container-fluid h-100 d-flex align-items-center justify-content-center h-auto-r pr-0">

        <div class="w-75 h-75 bg-img d-flex justify-content-between align-items-center shadow-cream h-auto-r br-30-r"style="background-image: url(./assets/bg.png); border-radius: 50px;">
        <div class="container d-flex justify-content-around flex-column-r" >
            <div class="w-50 h-100 p2 d-flex justify-content-center flex-column ml-4 w-100-r ml-0-r">
                <span class="h2 text-blue">Welcome to our</span>
                <br>
                <span class="h1 text-pink">Guest Book!</span>
                <br>
                <span class="text-18-m text-grey">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                </span>
            </div>
            <div class="w-40  h-75 mr-4 mt-auto mb-auto w-100-r mb-4-r mr-0-r">
                <div class="form-container text-16-m ">
                    {{-- <form class="d-flex flex-column justify-content-around" action="/success" method="POST"> --}}
                    <form class="d-flex flex-column justify-content-around" action="/success" >
                            <div class="form-group">
                            <label for="formGroupExampleInput" class="text-pink">Name</label>
                            <input type="text" class="form-control text-grey" id="formGroupExampleInput" placeholder="Enter your name" name="name">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2" class="text-pink">Email</label>
                            <input type="email" class="form-control text-grey" id="formGroupExampleInput2" placeholder="Enter your email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="formGroupExampleInput2" class="text-pink">Address</label>
                            <input type="text" class="form-control text-grey" id="formGroupExampleInput2" placeholder="Enter your address" name="address">
                        </div>
                        <div class="form-group mb-0">
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