@extends('layout.app')
<title>Guest List | Guest Book</title>
@section('content')
<div class="row vh-100">
    <div class="container-fluid w-100 d-flex align-items-center flex-column">

    <div class="w-75 text-center p3 h3 bg-img mt-7 text-pink shadow-cream" style="background-image:  url({{ asset('assets/bg.png') }}); border-radius: 50px;">
        View All Guests
    </div>
    <div class="mt-4 mb-7 w-75 bg-cream br-50 p4">
        @if (isset($guests))
            <table class="text-16-r table-responsive table">
                <tr class="text-blue text-18-b">
                    <th class="table-1">No.</th>
                    <th class="table-2">Name</th>
                    <th class="table-3">Email</th>
                    <th class="table-4">Address</th>
                </tr>
                @foreach($guests as $key => $guest)
                    <tr class="mb-2">
                        <td>{{$key+1}}</td>
                        <td>{{$guest->name}}</td>
                        <td>{{$guest->email}}</td>
                        <td>{{$guest->address}}</td>
                    </tr>
                @endforeach
            </table>
        @else  
            <p class="text-18-m text-center text-grey">There are no guests yet!</p>
        @endif

    </div>

    </div>

</div>
@endsection