@extends ('../../base')

@section('contenido')
    <div class="container">

        {!! Form::open(['url' => ['/coche/'.$coche->id], 'method'=>'PUT', 'class'=>'col-sm-9 form-horizontal', 'role'=>'form', 'enctype'=>"multipart/form-data"]) !!}

        <div class="form-group">

            {!! Form::label( 'marca','Marca', ['class'=>'control-label col-sm-3'] ) !!}

            <div class="col-sm-8">
                {!! Form::text ( 'marca', $coche->marca, ['placeholder'=>'marca', 'class'=>'form-control'] ) !!}
            </div>

        </div>

        <div class="form-group">

            {!! Form::label( 'modelo','Modelo', ['class'=>'control-label col-sm-3'] ) !!}

            <div class="col-sm-8">
                {!! Form::text ( 'modelo', $coche->modelo, ['placeholder'=>'modelo', 'class'=>'form-control'] ) !!}
            </div>

        </div>

        <div class="form-group">

            {!! Form::label( 'color','Color', ['class'=>'control-label col-sm-3'] ) !!}

            <div class="col-sm-8">
                {!! Form::text ( 'color', $coche->color, ['placeholder'=>'color', 'class'=>'form-control'] ) !!}
            </div>

        </div>

        <div class="form-group">

            {!! Form::label( 'matricula','Matricula', ['class'=>'control-label col-sm-3'] ) !!}

            <div class="col-sm-8">
                {!! Form::text ( 'matricula', $coche->matricula, ['placeholder'=>'matricula', 'class'=>'form-control'] ) !!}
            </div>

        </div>

        <div class="form-group">

            {!! Form::label( 'puertas','Número De Puertas', ['class'=>'control-label col-sm-3'] ) !!}

            <div class="col-sm-8">
                {!! Form::number ( 'puertas', $coche->numeroPuertas, ['placeholder'=>'numero de puertas', 'class'=>'form-control'] ) !!}
            </div>

        </div>

        <div class="form-group">

            {!! Form::label( 'precio','Precio', ['class'=>'control-label col-sm-3'] ) !!}

            <div class="col-sm-8">
                {!! Form::number ( 'precio',$coche->precio, ['placeholder'=>'precio', 'class'=>'form-control', 'step' => 'any'] ) !!}
            </div>

        </div>

        <div class="form-group">
            {!! Form::label( 'ifile1','Imagen1', ['class'=>'control-label col-sm-3'] ) !!}

            <div class="col-sm-8">

                {!! Form::input ( 'file', 'ifile1', null, ['placeholder'=>'imagen1'] ) !!}

            </div>

        </div>

        <div class="form-group">
            {!! Form::label( 'ifile2','Imagen2', ['class'=>'control-label col-sm-3'] ) !!}

            <div class="col-sm-8">

                {!! Form::input ( 'file', 'ifile2', null, ['placeholder'=>'imagen2'] ) !!}

            </div>

        </div>

        <!--Boton Enviar-->
        <div class="row">
            <div class="col-sm-11 text-right">
                {!! Form::button('modificar', array('id' => 'envSeccion', 'type' => 'submit', 'class' => 'btn btn-success input-sm enviar')) !!}
            </div>
        </div>


        {!! Form::close() !!} <!--Fin Formulario-->
    </div>
@endsection