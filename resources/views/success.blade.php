@extends('layout.app')
<title>Guest added! | Guest Book</title>
@section('content')
<div class="row vh-100">
    <div class="container-fluid h-100 d-flex align-items-center justify-content-center">

        <div class="w-75 h-75 bg-img d-flex justify-content-between align-items-center shadow-cream h-50-r  br-30-r"style="background-image:  url({{ asset('assets/bg.png') }}); border-radius: 50px;">
        <div class="container d-flex justify-content-center align-items-center flex-column" >
            <img src="./assets/success.png" alt="" class="img-square">
            <br>
            <span class="h2 text-blue mt-3 text-center">Thank You!</span>
            <br>
            <span class="text-16-r text-grey">Thank you for attending the event! See you next time!</span>
        </div>
        </div>
    </div>
</div>
@endsection

@section('additional-js')
    <script>
        $(document).ready(function(){
            setTimeout(function() {
                window.location.href = "{{route('index')}}"
            }, 5000);
        });
    </script>
@endsection