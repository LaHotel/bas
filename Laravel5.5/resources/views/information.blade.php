@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<body>
<center><img src="{{url('images/ok.png')}}" width="150" height="150"></center>
<center><h1>Resevation Successed!!!</h1></center>

<center><div style=" width: 130px"> 
            <form id="thisone" action="{{ url('/menu') }}" method="get">
                <input type="submit" name = "Back" value="Back" class="btn btn-default">                
            </form>
        </div>
</center>

</body>
</html>

@endsection