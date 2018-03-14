@extends('home')

@section('content')
<div class="row ">
    {{ Form::model( array('route' => array('add-post'),'enctype'=>"multipart/form-data",'method'=>'Post')) }}

    <div class="col-md-12 content_area">
        <h3>Create Post</h3>
        <div class="panel-body">
            <div class="row ">
                <div class="col-md-12">

                    <div class="row ">
                        <div class="col-md-1 form-group">Title</div>
                        <div class="col-md-4 form-group">{{Form::text('name',old('name'),array('id'=>'name','class'=>'form-control field_main','maxlength'=>'55', 'placeholder'=>"Enter first name"))}}
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    <div class="row ">
                        <div class="col-md-1 form-group">Description</div>
                        <div class="col-md-4 form-group">
                            {{Form::textarea('description',old('description'),array('id'=>'description','class'=>'form-control field_main','maxlength'=>'55', 'placeholder'=>"Enter first name"))}}
                        </div>


                    </div>

                   <div class="clearfix"></div>

                    <div class="row ">

                        <div class="col-md-12 text-center">
                            <button type="submit" class="btn_blue">Submit</button>
                        </div>
                    </div>


                </div>


            </div>


        </div>

    </div>



    {!! Form::close() !!}
</div>

@endsection
