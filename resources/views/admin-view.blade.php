@extends('layout.app')
<title>Guest List | Guest Book</title>

@section('content')
<div class="row vh-100">
    <div class="container-fluid w-100 d-flex align-items-center flex-column">
        <div class="w-75 text-center p3 h3 bg-img mt-7 text-pink shadow-cream" style="background-image: url({{ asset('assets/bg.png') }}); border-radius: 50px;">
            View All Guests
        </div>
        <div class="mt-4 mb-7 w-75 bg-cream br-50 p4">
            @if (isset($guests))
                <table class="text-16-r table-admin table-responsive table">
                    <tr class="text-blue text-18-b">
                        <th class="table-1 ">No.</th>
                        <th class="table-2 ">Name</th>
                        <th class="table-3 ">Email</th>
                        <th class="table-4 ">Address</th>
                        <th class="table-5 ">Actions</th>
                    </tr>
                    @foreach($guests as $key => $guest)
                    <tr class="mb-2">
                        <td>{{$key+1}}</td>
                        <td>{{$guest->name}}</td>
                        <td>{{$guest->email}}</td>
                        <td>{{$guest->address}}</td>
                        <td>
                        <div class="d-flex">
                        <form action="/admin/edit/{{$guest->id}}" method="GET">
                            
                            <div class="form-group">
                                <button type="" class="btn button action-btn text-center mr-2  d-flex justify-content-center align-items-center"><img src="{{asset('assets/logo-edit.png')}}" alt="" class="icons mr-2">Edit</button>
                            </div>
                        </form>
                        <div class="modal" id="exampleModalCentered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-18-b text-blue" id="exampleModalCenteredLabel">Deletion confirmation</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                <form method="POST" id="deleteForm">
                                @csrf
                                <div class="modal-body text-16-r text-grey">
                                    Are you sure you want to delete the guest?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn button button-white" data-dismiss="modal">No</button>
                                    <button type="submit" class="btn button bg-red del-btn">Yes</button>
                                </div>
                                </form>
                                </div>
                            </div>
                            </div>
                            <div class="form-group">
                                
                                <button type="button" class="btn button action-btn text-center bg-red del-btn btn-del  d-flex justify-content-center align-items-center" data-toggle="modal" data-guestid="{{ $guest->id }}" data-target="#exampleModalCentered"><img src="{{asset('assets/logo-delete.png')}}" alt="" class="icons mr-2">Delete</button>
                            </div>
                        </div>

                        </td>
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

@section('additional-js')
    <script>
        $('.btn-del').click(function() {
            $("#deleteForm").attr('action', '/admin/delete/'+$(this).data('guestid'));
        });
    </script>
@endsection