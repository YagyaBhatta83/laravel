@extends('front.app')
@section('page_title')
Non-Prescription
@endsection

@section('css')
<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    /* Float four columns side by side */
    .column {
        float: left;
        width: 25%;
        padding: 0 10px;
        margin-bottom: 20px;
    }

    /* Remove extra left and right margins, due to padding */
    .row {
        margin: 0 -5px;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive columns */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
            margin-bottom: 20px;
        }
    }

    /* Style the counter cards */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        text-align: center;
        background-color: #f1f1f1;
    }
</style>
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