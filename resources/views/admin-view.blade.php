@extends('layout.app')
@section('content')
<div class="row vh-100">
    <div class="container-fluid w-100 d-flex align-items-center flex-column">

    <div class="w-75 text-center p3 h3 bg-img mt-7 text-pink shadow-cream" style="background-image: url(./assets/bg.png); border-radius: 50px;">
        View All Guests
    </div>
    <div class="mt-4 mb-7 w-75 bg-cream br-50 p4">
        <table class="text-16-r table-admin table-responsive table">
            <tr class="text-blue text-18-b">
                <th class="table-1 ">No.</th>
                <th class="table-2 ">Name</th>
                <th class="table-3 ">Email</th>
                <th class="table-4 ">Address</th>
                <th class="table-5 ">Actions</th>
            </tr>
            @foreach($guests as $guest)
            <tr class="mb-2">
                <td>{{$guest->id}}</td>
                <td>{{$guest->name}}</td>
                <td>{{$guest->email}}</td>
                <td>{{$guest->address}}</td>
                <td>
                    <div class="d-flex">
                    <form action="admin/edit">
                        <div class="form-group">
                            <button type="" class="btn button action-btn text-center mr-2">Edit</button>
                        </div>
                    </form>
                    <form action="/">
                    <div class="modal" id="exampleModalCentered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title text-18-b text-blue" id="exampleModalCenteredLabel">Deletion confirmation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body text-16-r text-grey">
                                Are you sure you want to delete the guest?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn button button-white" data-dismiss="modal">No</button>
                                <button type="submit" class="btn button bg-red del-btn">Yes</button>
                            </div>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn button action-btn text-center bg-red del-btn" data-toggle="modal" data-target="#exampleModalCentered">Delete</button>
                        </div>
                    </form>
                    </div>

                </td>
            </tr>
            @endforeach

            {{-- <?php

                $result = mysqli_query($connection, "SELECT * FROM GUESTS");
                $index = 1;
                while($query_data = mysqli_fetch_row($result)){
                    echo '<tr class="mb-2">';
                        echo '<td>',$index,'</td>';
                        echo '<td>',$query_data[1],'</td>';
                        echo '<td>',$query_data[2],'</td>';
                        echo '<td>',$query_data[3],'</td>';
                        echo '<td>';
                            echo '<div class="d-flex">';
                            echo '<form action="edit-guest.php" method="POST">';
                                echo '<div class="form-group">';
                                    echo '<input type="hidden" name="index" value=',$query_data[0],'>';
                                    echo '<button type="" class="btn button action-btn text-center mr-2">Edit</button>';
                                echo '</div>';
                            echo '</form>';
                            echo '<form action="admin-view.php" method="POST">';
                            echo '<input type="hidden" name="is_delete" value="1">';
                            echo '<input type="hidden" name="index" value=',$query_data[0],'>';
                            echo '<div class="modal" id="exampleModalCentered" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">';
                                echo '<div class="modal-dialog modal-dialog-centered" role="document">';
                                    echo '<div class="modal-content">';
                                    echo '<div class="modal-header">';
                                        echo '<h5 class="modal-title text-18-b text-blue" id="exampleModalCenteredLabel">Deletion confirmation</h5>';
                                        echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                                        echo '<span aria-hidden="true">&times</span>';
                                        echo '</button>';
                                    echo '</div>';
                                    echo '<div class="modal-body text-16-r text-grey">';
                                        echo 'Are you sure you want to delete the guest?';
                                    echo '</div>';
                                    echo '<div class="modal-footer">';
                                        echo '<button type="button" class="btn button button-white" data-dismiss="modal">No</button>';
                                        echo '<button type="submit" class="btn button bg-red del-btn">Yes</button>';
                                    echo '</div>';
                                    echo '</div>';
                                echo '</div>';
                                echo '</div>';
                                echo '<div class="form-group">';
                                    echo '<button type="button" class="btn button action-btn text-center bg-red del-btn" data-toggle="modal" data-target="#exampleModalCentered">Delete</button>';
                                echo '</div>';
                            echo '</form>';
                            echo '</div>';

                        echo '</td>';
                    echo '</tr>';
                    $index++; 
                }
            ?> --}}
        </table>
    </div>

    </div>

</div>
@endsection