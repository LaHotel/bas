
@extends('layouts.app')
@section('content')


<center><img src="{{url('images/no.png')}}" width="150" height="150"></center>

<center><h1>Resevation Failed!!!</h1></center>

<br>
<center><div style=" width: 130px"> 
            <form id="thisone" action="{{ url('/menu') }}" method="get">
                <input type="submit" name = "Back" value="Back" class="btn btn-default">                
            </form>
        </div>
</center>

@endsection