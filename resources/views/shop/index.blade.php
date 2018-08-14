@extends('layouts.master')

@section('title')
    Grocery Store
@endsection

@section('content')
    @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif






    @foreach($products->chunk(3) as $productChunk)
        @foreach($productChunk as $product)

    <div class="col-md-3 top_brand_left">
        <div class="hover14 column">
            <div class="agile_top_brand_left_grid">
                <div class="agile_top_brand_left_grid1">
                    <figure>
                        <div class="snipcart-item block" >
                            <div class="snipcart-thumb">
                                <a href="product/{{$product->id}}"> <img src="{{ $product->imagePath }}" alt="..." class="img-responsive"></a>
                                <p>{{ $product->title }}</p>
                                <h4>${{ $product->price }}</h4>
                                    <h4>Stock&nbsp;:&nbsp;{{$product->stock}}</h4>
                            </div>
                            <div class="snipcart-details top_brand_home_details">
                                <form action="{{ route('product.addToCart', ['id' => $product->id]) }}">
                                    <fieldset>

                                      @if($product->stock > 0) <input type="submit" name="submit" value="Add to cart" class="button" />
                                          @else
                                            <h5>Out Of Stock</h5>
                                          @endif
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
    </div>
                @endforeach

    @endforeach
@endsection