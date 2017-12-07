@extends('layouts.app')
@section('content')

<div class="container">
<img class="img-responsive" src="images/top.jpg" alt="Chania" style="width:150%;">
</div>

<form action="{{url('/insertdate')}}" method ='get'>
<div class row>
  <center>
  <div class="container">
    <h2>Select Room Type</h2>
          <select class="selectpicker" name = 'RoomType'>
          <option value="Single">Single</option>
          <option value="Duo">Duo</option>
          <option value="Family">Family</option>
          <option value="Group">Group</option>
      </select>    
  </div>
  </center>
<div class="col-xs-4"></div>
    <div class="col-xs-2">
             Enter a Start Date:
             <input class="form-control" id="ex3" type="date" name="StartDate" min="2000-01-02" required><br><br>
            
            Enter an End Date:<br>
            <input class="form-control" id="ex3" type="date" name="EndDate" min="StartDate" required><br><br>
       
    </div> 
    <div class = "col-xs-4">
        <h2>Optional</h2>
            <input type="checkbox" name="Breakfast" value="200"> Breakfast 200฿ Per Person<br>
            <input type="checkbox" name="Dinner" value="300" > Dinner 300฿ Per Person<br>
            <input type="checkbox" name="Bed" value="100" > Bed 100฿<br>
            <input type="checkbox" name="Wifi" value="150" > Wifi 150฿<br>
    </div>
</div>
    
<div class="container text-center"> 
    <center><div style="width:400px;">

        <div style="float: right; width: 225px"> 
                <input type="submit" name = "Next" value="Next" class="btn btn-default" >
        </div>

</form>

        <div style="float: left; width: 130px"> 
            <form id="thisone" action="{{ url('room') }}" method="get">
                <input type="submit" name = "Back" value="Back" class="btn btn-default">
                
            </form>
        </div>

    </center>
    </div>
    <footer class="container text-center">
            <p> <br>    </p> 
        </footer>

@endsection