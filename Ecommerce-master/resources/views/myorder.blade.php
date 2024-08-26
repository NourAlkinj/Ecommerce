@extends('master')
@section('content')
    <div class="custom-product">
        <div class="col-sm-10">
            <div class="trending-wrapper">
                <h2>Orders List</h2>
                <br><br>
                @foreach ($orders as $order)
                <div class="row search-item cart-list-divider">
                    <div class="col-sm-3">
                        <a href="detail/{{$order->id}}">
                            <img class="trending-img" src="{{$order->gallery}}">
                        </a>
                    </div>
                    <div class="col-sm-3">
                        <h2>{{$order->name}}</h2>
                        <h5>Payment Status: {{$order->payment_status}}</h5>
                        <h5>Payment Method: {{$order->payment_method}}</h5>
                        <h5>Delivary Address: {{$order->address}}</h5>
                        <h5>Price: {{$order->price}} $ </h5>
                    </div>

                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
