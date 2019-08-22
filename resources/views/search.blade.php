@extends('front.app')
@section('page_title')
Search-Product
@endsection
@section('contents')


<div id="site_content">
    <div class="container">
        @foreach($data as $product)
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12" id="content">


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
                                <a class="btn btn-primary btn-lg reg_button" href="{{route('cart',$product->id)}}"><i class="fa fa-shopping-cart"></i> BUY NOW!</a>
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

            </div>
        </div>
        @endforeach
        {{$data->links()}}
    </div>
</div>

@endsection