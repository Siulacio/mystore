@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <h4>{{$order->products->name}}</h4>
                <img src="{{asset('img/thumbnail.svg')}}" width="200px;" class="mb-2" alt="">
                <p>{{$order->products->description}}</p>
                <b>Valor: {{$order->products->price}}</b>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <form action="{{asset('/payment/make')}}" method="post">
                        @csrf
                        <label for="" class="mt-2"><b>Nombre:</b></label>
                        <p>{{$order->customer_name}}</p>

                        <label for="" class="mt-2"><b>Correo</b></label>
                        <p>{{$order->customer_email}}</p>

                        <label for=""><b>Celular</b></label>
                        <p>{{$order->customer_mobile}}</p>

                        <label for=""><b>*** TOTAL COMPRA ***</b></label>
                        <p>$ {{$order->products->price}}</p>

                        <input type="hidden" name="order" value="{{$order->id}}">

                        <div class="mt-3">
                            <input type="submit" class="btn btn-lg btn-primary" value="PAGAR">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
