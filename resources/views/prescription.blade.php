@extends('front.app')
@section('page_title')
Prescription
@endsection





@section('contents')
<div class="container">
    <div class="row">
        <div class="col">
            <h2>Latest Products</h2>
            <div class="cententText">
                <div class="row">

                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="bg_best">
                            <div class="owl-carousel">
                                @foreach($lmedicines as $lmedicine)
                                <div class="item">
                                    <div class="panel-body">
                                        <h3 class="infoBoxHeading">{{$lmedicine->name}}</h3>
                                        <a href="{{route('singleproduct',$lmedicine->id)}}">
                                            <img class="carasoul_image" src="{{ Voyager::image( $lmedicine->image ) }}">
                                        </a>
                                        <h3 class="infoBoxHeading">Price: {{ $lmedicine->price}}</h3>
                                        @if(Auth::guard('customer')->check())
                                        <a class="btn btn-default" href="{{route('cart',$lmedicine->id)}}" role="button">
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

        <script>
            $(document).ready(function() {
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

        <div class="container-fluid">
            <div class="row">
                @foreach($medicines as $medicine)
                <div class="column">
                    <div class="card">
                        <h3 style="color:green;">{{$medicine->name}}</h3>
                        <a href="{{route('singleproduct',$medicine->id)}}"><img src="{{ Voyager::image( $medicine->image )}}" alt="product-image"></a>
                        <hr>
                        <h5>Price: {{$medicine->price}}</h5>
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

@endsection