@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <td><b>Orden</b></td>
                        <td><b>Nombre</b></td>
                        <td><b>Email</b></td>
                        <td><b>Celular</b></td>
                        <td><b>Total</b></td>
                        <td><b>Fecha</b></td>
                        <td><b>Estado</b></td>
                    </thead>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->customer_name}}</td>
                            <td>{{$order->customer_email}}</td>
                            <td>{{$order->customer_mobile}}</td>
                            <td>{{$order->products->price}}</td>
                            <td>{{$order->created_at}}</td>
                            <td>{{$order->status}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
