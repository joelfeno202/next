<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;

  }
</style>


<div class="container">
  <h2>Carousel Methods</h2>
  <p>The <strong>cycle</strong> method goes through the carousel items from left to right (slides automatically).</p>
  <p>The <strong>pause</strong> method stops the carousel from going through items.</p>

  <button type="button" id="myBtn" class="btn btn-success">Slide through items (cycle)</button>
  <button type="button" id="myBtn2" class="btn btn-danger">Stop slide (pause)</button>

  <!-- The carousel -->
  <div id="myCarousel" class="carousel slide mt-4" data-interval="500">

    <!-- Indicators -->
    <ul class="carousel-indicators">
      <li class="item1 active"></li>
      <li class="item2"></li>
      <li class="item3"></li>
    </ul>

    <!-- The slideshow -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{asset('images/solution-e-commerce.jpg')}}" alt="Los Angeles" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/solution-e-commerce.jpg')}}" alt="Chicago" width="1100" height="500">
      </div>
      <div class="carousel-item">
        <img src="{{asset('images/ilndex.jpg')}}" width="1100" height="500">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="carousel-control-prev">
      <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next">
      <span class="carousel-control-next-icon"></span>
    </a>
  </div>
</div>

<script>
  $(document).ready(function() {
    // Activate the Carousel, but pause it from the start
    $("#myCarousel").carousel("pause");

    // Click on the button to start sliding 
    $("#myBtn").click(function() {
      $("#myCarousel").carousel("cycle");
    });

    // Click on the button to stop sliding 
    $("#myBtn2").click(function() {
      $("#myCarousel").carousel("pause");
    });

    // Enable Carousel Indicators
    $(".item1").click(function() {
      $("#myCarousel").carousel(0);
    });
    $(".item2").click(function() {
      $("#myCarousel").carousel(1);
    });
    $(".item3").click(function() {
      $("#myCarousel").carousel(2);
    });

    // Enable Carousel Controls
    $(".carousel-control-prev").click(function() {
      $("#myCarousel").carousel("prev");
    });
    $(".carousel-control-next").click(function() {
      $("#myCarousel").carousel("next");
    });
  });
</script>