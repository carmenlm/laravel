@extends('layout')
@section('content')
    <div class="row">
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
            <h2>Create a note</h2>

            @include('errors/errors')

            <form method="post" action="{{url('notes')}}" class="form">
                {!! csrf_field() !!}

                {{-- Input Text : Note --}}
                <div class="form-group">
                    <label for="note" class="col-sm-2 control-label">Note</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="note" id="note"
                                  placeholder="Write your note here...">{{old('note')}}</textarea>
                    </div>
                </div>


                {{-- Submit --}}
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">Create a note</button>
                    </div>
                </div>


            </form>
        </div>


    </div>
@endsection