@extends('home')
@section('content')
    <div class="row">
        <div class="col-md-12 content_area">

   <h1>Create Post</h1>
    <meta name="csrf-token" content="{{csrf_token() }}">
    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'posts')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', Input::old('name'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('subject', 'Subject') }}
        {{ Form::text('subject', Input::old('subject'), array('class' => 'form-control','maxlength'=>'55')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control','maxlength'=>'55'))}}
    </div>

    {{ Form::submit('Create Post!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
        </div>
</div>
@endsection
