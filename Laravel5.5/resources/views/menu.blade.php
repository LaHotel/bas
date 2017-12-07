@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<body>

<!-- <div class="container">
<img class="img-responsive" src="images/2.jpg" alt="Chania" style="width:100%;">
</div> -->

<center><img src="{{url('images/user.png')}}" width="150" height="150"></center>
<br>
<br>
<center><form method="get" action="{{ url('room') }}" >
      <input type="submit" name = "Reservation" value="Reservation" class="btn btn-default">
</form></center>
<br>
<br>

<center><form method="get" action="{{ url('delete') }}" >
      <input type="submit" name = "History" value="History" class="btn btn-default">
</form></center>
  </div>
 
</div>
<footer class="container text-center">
            <p> <br>    </p> 
        </footer>

</body>
</html>

@endsection