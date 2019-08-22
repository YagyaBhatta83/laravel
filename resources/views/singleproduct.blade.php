@extends('front.app')
@section('page_title')
Single-Product
@endsection
@section('contents')
<div id="site_content">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" id="content">
                <div class="breadcrumbs">
                    <a href="{{route('home')}}"><i class="fa fa-home"></i></a>
                    <a href="">Single Product</a>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <ul class="thumbnails">
                            <li><a href="#" class="thumbnail fix-box"><img class="changeimg" src="{{ Voyager::image( $product->image ) }}"></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6">

                        <h1 style="color: #39baf0">{{$product->name}}</h1>
                        <ul class="list-unstyled">
                            <li>
                                <h2>Price: Rs. {{$product->price}}</h2>
                            </li>
                        </ul>
                        <div id="product">
                            <div class="form-group">
                                <h4 for="input-quantity" class="control-label">Avilable</h4>
                                <br>
                                @if(Auth::guard('customer')->check())
                                <a class="btn btn-primary btn-lg reg_button" href="{{route('cart',$product->id)}}" role="button"><i class="fa fa-shopping-cart"></i> BUY NOW!</a>
                                @else
                                <a class="btn btn-default" href="{{route('customerlogin')}}" role="button">
                                    Buy Now!
                                </a>
                                @endif
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row container">
                    <h3>Description</h3>
                    <hr>
                    <p>{!!$product->description!!}</p>
                </div>
                <hr>
                <div class="rel-product">
                    <div class="infoBoxHeading">
                        <a>Related Product</a>
                    </div>
                    <div class="container-fluid">
                        <div class="row">
                            @foreach($medicines as $medicine)
                            <div class="column">
                                <div class="card">
                                    <h3 style="color:green;">{{$medicine->name}}</h3>
                                    <a href="{{route('singleproduct',$medicine->id)}}"><img src="{{ Voyager::image( $medicine->image )}}" alt="product-image"></a>
                                    <hr>
                                    <h5>Price: {{$medicine->price}}</h5>
                                    <a class="btn btn-default" href="{{route('cart',$product->id)}}" role="button">
                                        Buy Now!
                                    </a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection