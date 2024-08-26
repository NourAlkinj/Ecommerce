@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-4">

        </div>
        <div class="col-sm-4">
            <div class="trending-wrapper">
                <h4>Result for Products</h4>
                @foreach ($products as $product)
                <div class="search-item">
                    <a href="detail/{{$product['id']}}">
                        <img class="trending-img" src="{{$product['gallery']}}">
                        <div class="">
                            <h2>{{$product['name']}}</h2>
                            <h5>{{$product['description']}}</h5>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
