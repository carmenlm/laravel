@extends('layout')
@section('content')
    <h2>Notes</h2>

    <ul>
        @foreach($notes as $note)
            <li>

                {{--{!! escapar las etiquetas html !!}}--}}
                {{$note -> note}}

            </li>
        @endforeach
    </ul>
@endsection
