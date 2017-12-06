@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<body>


<center><img src="{{url('images/user.png')}}" width="150" height="150"></center>
<br>
<br>
<center><form method="get" action="{{ url('room') }}" >
      <input type="submit" name = "Reservation" value="Reservation" class="btn btn-default">
</form></center>
<br>
<br>

<center><form method="get" action="{{ url('delete') }}" >
      <input type="submit" name = "History" value="Hisrtory" class="btn btn-default">
</form></center>



</body>
</html>

@endsection