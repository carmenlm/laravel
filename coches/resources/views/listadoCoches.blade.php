@extends ('../../base')

@section('contenido')

    <div class="container">
        @foreach($coches as $coche)

            <div class="row">
                <div class="col-xs-4">
                    <p>Marca: {{$coche->marca}}</p>
                    <p>Modelo : {{$coche->modelo}}</p>
                    <p>Color : {{$coche->color}}</p>
                    <p>Matricula : {{$coche->matricula}}</p>
                    <p>Numero Puertas : {{$coche->numeroPuertas}}</p>
                    <p>Precio : {{$coche->precio}}</p>
                </div>


                @foreach( $coche->imagenes as $im)
                    <div class="col-xs-4">
                        <img src="{{ asset('/fotografias/'.$im->nombre) }}" alt="">
                    </div>
                @endforeach
            </div>

            <br>
            <a href="/coche/{{$coche->id}}/edit">Editar</a>
            <hr>
            <br>

        @endforeach

    </div>

@endsection