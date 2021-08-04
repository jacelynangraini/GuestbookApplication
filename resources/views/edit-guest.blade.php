@extends('layout.app')

@section('content')
<div class="row vh-100">
    <div class="container-fluid w-100 d-flex align-items-center b flex-column">

        <div class="w-75 text-center p3 h3 bg-img mt-7 text-pink shadow-cream" style="background-image: url(./assets/bg.png); border-radius: 50px;">
            Edit Guest
        </div>
        
        <div class="mt-4 mb-7 w-75 bg-cream br-50 p4 form-container text-16-m p2-r">
            {{-- <form class="d-flex flex-column justify-content-around" action="admin-view.php" method="POST"> --}}
            <form class="d-flex flex-column justify-content-around" action="/admin/view" method="">
                    {{-- <input type="hidden" name="index" value="<?php echo $_POST["index"]; ?>"> --}}
                <input type="hidden" name="index" value="">
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
@endsection