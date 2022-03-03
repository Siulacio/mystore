@extends('layouts.app')

@section('content')

    @if($errors->any())
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <h4>Hay errores en los datos ingresados</h4>
                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                    <hr>
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    @endif

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-6">
                <h3>Datos producto</h3>
                <hr>
                <h4>{{$product->name}}</h4>
                <img src="{{asset('img/thumbnail.svg')}}" width="200px;" class="mb-2" alt="">
                <p>{{$product->description}}</p>
                <b>Valor: {{$product->price}}</b>

            </div>
            <div class="col-md-6">
                <h3>Datos Comprador</h3>
                <hr>
                <div class="form-group">
                    <form action="{{asset('/order/store')}}" method="POST">
                        @csrf
                        <label for="">Nombre:</label>
                        <input type="text" name="customer_name" value="{{old('customer_name')}}" class="form-control">

                        <label for="">Correo</label>
                        <input type="text" name="customer_email" value="{{old('customer_email')}}" class="form-control">

                        <label for="">Celular</label>
                        <input type="text" name="customer_mobile" value="{{old('customer_mobile')}}" class="form-control">

                        <input type="hidden" name="product_id" value="{{$product->id}}">

                        <div class="mt-3">
                            <a href="{{asset('/')}}" class="btn btn-danger">Regresar</a>
                            <input type="submit" class="btn btn-primary" value="Comprar">
                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
