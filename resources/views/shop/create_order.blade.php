@extends('layouts.app')

@section('content')
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
                    <form action="">
                        @csrf
                        <label for="">Nombre:</label>
                        <input type="text" name="" id="" class="form-control">

                        <label for="">Correo</label>
                        <input type="text" name="" id="" class="form-control">

                        <label for="">Celular</label>
                        <input type="text" name="" id="" class="form-control">

                        <div class="mt-3">
                            <a href="" class="btn btn-danger">Regresar</a>
                            <input type="submit" class="btn btn-primary" value="Comprar">

                        </div>

                    </form>
                </div>

            </div>

        </div>
    </div>
@endsection
