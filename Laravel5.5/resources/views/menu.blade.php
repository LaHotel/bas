<!DOCTYPE html>
<html>
<body>

<style>
input.backbutton{
  width: auto;
  padding: 10px 18px;
  border: none;
  background-color: #f44336;
}
input.reservationbut{
  background-color: #3090C7;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}
input.bookingbut{
  background-color: #3090C7;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
}
button {
    background-color: #3090C7;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
}
.backbutton{
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}
</style>

<h1 style="font-family:verdana;">Welcome to LaHotel</h1>
<img src="user.png" alt="user.jpg" width="150" height="150">
<br>
<br>
<br>
<br>
<div class="container" style="text-align:center;">
  <input class="reservationbut" type="button" value="Reservation" onclick="window.location.href='{{url('/login')}}'" />
<br>
<br>
  <input class="bookingbut" type="button" value="Booking history" onclick="window.location.href='file:///D:/Web%20app/Lahotel.html'" />
</div>

<div class="container" style="text-align:right;">
  <br>
  <br>
<input class="backbutton" type="button" value="log out" onclick="window.location.href='http://localhost:8000/login'" />
</div>


</body>
</html>
