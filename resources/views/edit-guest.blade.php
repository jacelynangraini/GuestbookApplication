@extends('layout.app')
<title>{{$guests->name}} | Edit Profile</title>
@section('content')
<div class="row p5">
    <div class="container-fluid w-100 d-flex align-items-center b flex-column">

        <div class="w-75 text-center p3 h3 bg-img text-pink shadow-cream br-50" style="background-image: url({{ asset('assets/bg.png') }});">
            Edit Guest
        </div>
        
        <div class="w-75 bg-cream shadow-cream br-50 mt-3 p4">
            <div class="mt-auto mb-auto mr-auto ml-auto w-75 bg-cream br-50 p4 form-container text-16-m p2-r">
                        
                <form class="d-flex flex-column justify-content-around" action="/admin/edit/{{$guests->id}}" method="POST">
                    @csrf
                    <input type="hidden" name="index" value="">
                    <div class="form-group">
                            <label for="name" class="text-pink">Name</label>
                            <input type="text" class="form-control text-grey" id="name" placeholder="Enter your name" name="name" value="{{$guests->name}}">
                        </div>
                        <div class="form-group">
                            <label for="email" class="text-pink">Email</label>
                            <input type="email" class="form-control text-grey" id="email" placeholder="Enter your email" name="email" value="{{$guests->email}}">
                        </div>
                        <div class="form-group">
                            <label for="address" class="text-pink">Address</label>
                            <input type="text" class="form-control text-grey" id="address" placeholder="Enter your address" name="address" value="{{$guests->address}}">
                        </div>
                        <div class="form-group mb-0 mt-3">
                            <button type="submit" class="btn button w-100">Update</button>
                        </div>
                    </form>    
                </div>
    
        </div>
    </div>



</div>
@endsection