@extends('layouts.master')
@section('content')

    <div class="agileinfo_single">
        <h5>{{$product->name}}</h5>
        <div class="col-md-4 agileinfo_single_left">
            <a href="/product/{{$product->id}}"> <img src="{{ $product->imagePath }}" alt="..." class="img-responsive"></a>
        </div>

        <div class="col-md-8 agileinfo_single_right">

            <div class="w3agile_description">
                <h4>Stock:&nbsp;{{$product->stock}}<br>Description :</h4>
                <p>{{$product->description}}</p>
            </div>
            <div class="snipcart-item block">
                <div class="snipcart-thumb agileinfo_single_right_snipcart">
                    <h4>${{$product->price}}</h4>
                </div>
                <div class="snipcart-details agileinfo_single_right_details">
                    <form action="{{ route('product.addToCart', ['id' => $product->id]) }}" >
                        <fieldset>
                           @if($product->stock) <input type="submit" name="submit" value="Add to cart" class="button" />
                               @else
                            <h5>Out of Stock</h5>
                               @endif
                        </fieldset>
                    </form>
                </div>
            </div>
        </div><hr>
        <div class="card card-outline-secondary my-5">
            <div class="card-header">
                Product Reviews
            </div>
            <div class="card-block">
                @if($product->reviews->count('review'))
                    @foreach($product->reviews as $review)

                        <h6>{{$review->user->name}}</h6>

                        <p>{{$review->review}} </p>

                        <small class="text-muted">{{$review->created_at->toFormattedDateString()}}</small>
                        <hr>
                    @endforeach
                @endif
                <div class="form-group">

                    <form method="post" action="/review/{{$product->id}}">
                        {{csrf_field()}}
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Review</span>
                            <input type="text" class="form-control" placeholder="review" name="review" id="review" aria-describedby="basic-addon1">
                        </div>
                </div>
                <input type="submit" class="btn btn-success" value="Leave a Review">
                </form>

                @if(Session::get('errors'))
                    <div class="alert alert-danger">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5>There were errors while submitting this review:</h5>
                        <ul>
                            @foreach($errors->all() as $message)
                                <li>  {{$message}}  </li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>
        <!-- /.card -->
        <div class="clearfix"> </div>
    </div>
    </div>
    <div class="clearfix"></div>
    </div>
    <!-- //banner -->

    @endsection