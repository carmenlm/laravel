@extends('layout')
@section('content')

    <h1>create a note</h1>
    <form method="post" action="{{url('notes')}}" class="form">
        {!! csrf_field() !!}
        <textarea name="note" id="note" cols="30" rows="10" class="form-control"></textarea>
        <button type="submit" class="btn btn-primary">Create a note</button>

    </form>
@endsection