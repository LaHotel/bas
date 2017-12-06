@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<body>

<center><h1>Resevation Successed!!!</h1></center>


<!-- 
<center><form method="get" action="{{ url('menu') }}" >
      <input type="submit" name = "menu" value="menu" class="btn btn-default">
</form></center> -->
<div style="float: left; width: 130px" class="col-xs-6"> 
        <form id="thisone" action="{{ url('/menu') }}" method="get">
            <input type="submit" name = "Back" value="Back" class="btn btn-default">
            
        </form>
    </div>


</body>
</html>

@endsection