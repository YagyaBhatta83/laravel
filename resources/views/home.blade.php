@extends('front.app')
@section('page_title')
Home
@endsection


@section('contents')
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img class="" src="{{asset('assets/images/a1.jpg')}}" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img class="" src="{{asset('assets/images/b1.jpg')}}" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img class="" src="{{asset('assets/images/c1.jpg')}}" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container">
  <div class="row">
    <div class="col">
      <div class="contentContainer">
        <!----slidder start-!-->
        <h2>Latest Products</h2>
        <div class="cententText">
          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="bg_best">
                <div class="owl-carousel">
                  @foreach($medicines as $medicine)
                  <div class="item">
                  <div class="panel-body">
                    <h3 class="infoBoxHeading">{{$medicine->name}}</h3>    
                    <a href="{{route('singleproduct',$medicine->id)}}">
                      <img class="carasoul_image" src="{{ Voyager::image( $medicine->image ) }}">
                    </a>
                    <h3 class="infoBoxHeading">Price: {{ $medicine->price}}</h3>
                    @if(Auth::guard('customer')->check())
                      <a class="btn btn-default" href="{{route('cart',$medicine->id)}}" role="button">
                        Buy Now!
                      </a>
                      @else
                      <a class="btn btn-default" href="{{route('customerlogin')}}" role="button">
                        Buy Now!
                      </a>
                      @endif
                    </div>
                  </div>
                  @endforeach
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>


      <!-- Section: Features v.1 -->
      <section class="text-center my-5">

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-md-3">

            <i class="fas fa-book fa-3x cyan-text"></i>
            <h5 class="font-weight-bold my-4">Cash on Delivery</h5>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3">

            <i class="fas fa-book fa-3x cyan-text"></i>
            <h5 class="font-weight-bold my-4">Free Shipping</h5>

          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3">

            <i class="far fa-comments fa-3x orange-text"></i>
            <h5 class="font-weight-bold my-4">Lowest Price</h5>

          </div>

          <div class="col-md-3">

            <i class="far fa-comments fa-3x orange-text"></i>
            <h5 class="font-weight-bold my-4">Return and Exchange Policy</h5>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->
      </section>

      <section>
        <div class="contentContainer">
         
          <h2>Featured Products</h2>
          <div class="cententText">
            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
               
                <div class="bg_best">
                  <div class="owl-carousel">
                    @foreach($fmedicines as $fmedicine)
                    <div class="item">
                      <h3 class="infoBoxHeading">{{ $fmedicine->name}}</h3>

                      <div class="panel-body">
                        </div>

                      <a href="{{route('singleproduct',$fmedicine->id)}}">
                          <img class="carasoul_image" src="{{ Voyager::image( $fmedicine->image ) }}">
                      </a>
                      <h3 class="infoBoxHeading">Price: {{ $fmedicine->price}}</h3>
                      @if(Auth::guard('customer')->check())
                      <a class="btn btn-default" href="{{route('cart',$fmedicine->id)}}" role="button">
                        Buy Now!
                      </a>
                      @else
                      <a class="btn btn-default" href="{{route('customerlogin')}}" role="button">
                        Buy Now!
                      </a>
                      @endif
                    </div>
                    @endforeach
                  </div>

                  <script>
                    $(document).ready(function () {
                      $('.owl-carousel').owlCarousel({
                        loop: true,
                        margin: 20,
                        responsiveClass: true,
                        responsive: {
                          0: {
                            items: 2,
                            nav: true
                          },
                          600: {
                            items: 3,
                            nav: false
                          },
                          1000: {
                            items: 5,
                            nav: true,
                            loop: false,
                            margin: 20
                          }

                        }
                      })
                    })
                  </script>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
</div>
@endsection