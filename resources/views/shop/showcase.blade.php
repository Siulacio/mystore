@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            {{--justify-content-center--}}
            @foreach($products as $product)
            <div class="col-md-3 mb-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{asset('img/thumbnail.svg')}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <span class="card-text">{{$product->description}}.</span>
                            <p>Precio: $ {{$product->price}}</p>
                            <div class="text-align-right">
                                <a href="{{asset('/order/create/'.$product->id)}}" class="btn btn-primary">Comprar</a>
                            </div>
                        </div>
                    </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
