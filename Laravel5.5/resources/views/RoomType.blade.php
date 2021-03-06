@extends('layouts.app')
@section('content')


<div class="container">

<!-- Slide Show -->
<div class="col-lg-2"></div>
<div class="col-lg-8">
  <h2>Room Preview</h2>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators" class="col-xs-2">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
      <li data-target="#myCarousel" data-slide-to="6"></li>
      
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="images/premium1.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Single Room</h3>
          <p>Price 3,000 Baht Per night</p>
        </div>
      </div>
      <div class="item">
        <img src="images/premium2.jpg" alt="Los Angeles" style="width:100%;">
        <div class="carousel-caption">
          <h3>Single Room</h3>
          <p>Price 3,000 Baht Per night</p>
        </div>
      </div>

      <div class="item">
        <img src="images/executive1.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Duo Room</h3>
          <p>Price 3,500 Baht Per night</p>
        </div>
      </div>
      <div class="item">
        <img src="images/superior2.jpg" alt="Chicago" style="width:100%;">
        <div class="carousel-caption">
          <h3>Duo Room</h3>
          <p>Price 3,500 Baht Per night</p>
        </div>
      </div>
    
      <div class="item">
        <img src="images/suit1.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Family Room</h3>
          <p>Price 5,000 Baht Per night</p>
        </div>
      </div>
      <div class="item">
        <img src="images/suit3.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Family Room</h3>
          <p>Price 5,000 Baht Per night</p>
        </div>
      </div>

      <div class="item">
        <img src="images/executive2.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Group Room</h3>
          <p>Price 6,000 Baht Per night</p>
        </div>
      </div>
      <div class="item">
        <img src="images/suit3.jpg" alt="New York" style="width:100%;">
        <div class="carousel-caption">
          <h3>Group Room</h3>
          <p>Price 6,000 Baht Per night</p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <!-- <span class="glyphicon glyphicon-chevron-left"></span> -->
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <!-- <span class="glyphicon glyphicon-chevron-right"></span> -->
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- End Slide Show -->


</div>
<div class="container text-center">    
<h3 class="margin">Respect and leave the property as you arrived for the benefit of other guest.</h3><br>
<div class="row">
  <div class="col-sm-3">
    <p>
    <dt>Bedroom 1</dt>
  1 king bed
  <dt> Common spaces</dt>
  1 sofa bed</p>
    
  </div>
  <div class="col-sm-3"> 
    <p><dt>Amenities<br></dt>
    Family/kid friendly<br>
    Breakfast<br>
    Wireless Internet<br>
    Free parking on premises</p>
    
  </div>
  <div class="col-sm-3"> 
    <p><dt>House Rules<br></dt>
      No smoking<br>
      Not suitable for pets<br>
      Check-in is anytime after 2PM<br>
      Check out by 12PM (noon)</p>
  </div>
  <div class="col-sm-3"> 
    <p><dt>Cancellations<br></dt>
    Cancel up to 7 days before check in and get a 50% refund</p>
   
  </div>
</div>

<div class="container text-center"> 
<center><div style="width:400px;">
        <form id="thistoo" action="{{ url('check') }}" method="get">
          <div style="float: right; width: 225px"> 
                  <input type="submit" name = "Next" value="Next" class="btn btn-default" >
          </div>
        </form>
</form>

        <div style="float: left; width: 130px"> 
            <form id="thisone" action="{{ url('menu') }}" method="get">
                <input type="submit" name = "Back" value="Back" class="btn btn-default">
                
            </form>
        </div>

</center>
</div>
<footer class="container text-center">
  <p><br></p> 
</footer>


@endsection



