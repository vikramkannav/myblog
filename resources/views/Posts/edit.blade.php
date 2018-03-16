@extends('home')
@section('content')

    <h1>Edit {{ $post->name }}</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::model($post, array('route' => array('posts.update', $post->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('subject', 'Subject') }}
        {{ Form::text('subject', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', null, array('class' => 'form-control')) }}
    </div>


    <div class="form-group">
        {{ Form::label('status', 'Status') }}
        {{ Form::select('status',['publish'=>"publish",'unpublish'=>"unpublish"],null ,array('placeholder'=>'Select Status','class' => 'form-control','maxlength'=>'55')) }}
    </div>
    {{ Form::submit('Edit the Post!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@endsection

