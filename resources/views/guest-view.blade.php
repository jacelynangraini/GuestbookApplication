@extends('layout.app')
@section('content')
<div class="row vh-100">
    <div class="container-fluid w-100 d-flex align-items-center flex-column">

    <div class="w-75 text-center p3 h3 bg-img mt-7 text-pink shadow-cream" style="background-image: url(./assets/bg.png); border-radius: 50px;">
        View All Guests
    </div>
    <div class="mt-4 mb-7 w-75 bg-cream br-50 p4">
        <table class="text-16-r table-responsive table">
            <tr class="text-blue text-18-b">
                <th class="table-1">No.</th>
                <th class="table-2">Name</th>
                <th class="table-3">Email</th>
                <th class="table-4">Address</th>
            </tr>

            
            {{-- <?php 
                $result = mysqli_query($connection, "SELECT * FROM GUESTS"); 
                
                $index = 1;
        

                while($query_data = mysqli_fetch_row($result)){
                    echo '<tr class="mb-2">';
                        echo '<td>',$index,'</td>';
                        echo '<td>',$query_data[1],'</td>';
                        echo '<td>',$query_data[2],'</td>';
                        echo '<td>',$query_data[3],'</td>';
                    echo '</tr>';
                    $index++; 
                }
            
            ?> --}}
        </table>
    </div>

    </div>

</div>
@endsection