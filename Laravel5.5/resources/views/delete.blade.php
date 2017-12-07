@extends('layouts.app')
@section('content')

<meta charset="utf-8">


<div class="container">
  <h2>History Table</h2>

  
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Name</th>
        <th>Room Type</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Breakfast</th>
        <th>Dinner</th>
        <th>Bed</th>
        <th>Wifi</th>
        <th>Status</th>
        <th>Cancle</th>
      </tr>
    </thead>
    
    <?php
  
          foreach($booking as $booking){
            ?>
           <tr>
            <td><?php echo $booking->Name ?></td>
            <td><?php echo $booking->RoomType ?></td>
            <td><?php echo $booking->DateEnd ?></td>
            <td><?php echo $booking->DateStart ?></td>
            <td><?php echo $booking->Optional1 ?></td>
            <td><?php echo $booking->Optional2 ?></td>
            <td><?php echo $booking->Optional3 ?></td>
            <td><?php echo $booking->Optional4 ?></td>
            <td><?php echo $booking->Price ?></td>
            
                <td><a type="button" onclick="delete()" class="btn btn-default" href='{{url("/delete/{$booking->Booking_id}/{$booking->DateStart}/{$booking->DateEnd}/{$booking->RoomType}")}}'> X </a></td>            
          </tr>
          <?php
          
      }
   ?>
            

  </table>
</div>

<center><div style=" width: 130px"> 
<form id="thisone" action="{{ url('/menu') }}" method="get">
    <input type="submit" name = "Back" value="Back" class="btn btn-default">                
</form>
</div>
</center>



@endsection