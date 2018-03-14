@extends('home')

@section('content')
<div class="row ">
    {{ Form::model($user=Auth::user(), array('route' => array('endUserUpdate',$user->id),'enctype'=>"multipart/form-data",'method'=>'PUT')) }}

    <div class="col-md-12 content_area">
        <h3>Update Profile</h3>
        <div class="panel-body">
            <div class="row ">
                <div class="col-md-12">

                    <div class="row ">
                        <div class="col-md-1 form-group">Name</div>
                        <div class="col-md-4 form-group">{{Form::text('name',old('name'),array('id'=>'name','class'=>'form-control field_main','maxlength'=>'55', 'placeholder'=>"Enter first name","required"=>"required"))}}
                        </div>

                    </div>
                    <div class="clearfix"></div>
                    <div class="row ">
                        <div class="col-md-1 form-group">Email</div>
                        <div class="col-md-4 form-group">
                            {{Form::text('email',old('email'),array('id'=>'email','class'=>'form-control field_main','maxlength'=>'55', 'placeholder'=>"Enter first name","required"=>"required"))}}
                        </div>


                    </div>

                    <div class="clearfix"></div>
                    <div class="row ">
                        <div class="col-md-1 form-group">Contact</div>
                        <div class="col-md-4 form-group">{{Form::text('phone',old('phone'),array('id'=>'phone','class'=>'form-control field_main','maxlength'=>'55', 'placeholder'=>"Enter first name"))}}
                        </div>


                    </div>
                    <div class="clearfix"></div>


                    <div class="row ">
                        <div class="col-md-1 form-group">Address</div>
                        <div class="col-md-4 form-group">{{Form::text('address',old('address'),array('id'=>'address','class'=>'form-control field_main','maxlength'=>'55', 'placeholder'=>"Enter first name"))}}
                        </div>
                        </div>
                        <div class="clearfix"></div>


                        <div class="row ">
                            <div class="col-md-1 form-group">City</div>
                            <div class="col-md-4 form-group">{{Form::text('city',old('city'),array('id'=>'city','class'=>'form-control field_main','maxlength'=>'55', 'placeholder'=>"Enter first name"))}}
                            </div>
                       </div>
                            <div class="clearfix"></div>


                    <div class="row ">
                        <div class="col-md-1 form-group">State</div>
                        <div class="col-md-4 form-group">{{Form::text('state',old('state'),array('id'=>'state','class'=>'form-control field_main','maxlength'=>'55', 'placeholder'=>"Enter first name"))}}
                        </div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="row ">
                        <div class="col-md-1 form-group">Zip code</div>
                        <div class="col-md-4 form-group">{{Form::text('zip',old('zip'),array('id'=>'zip','class'=>'form-control field_main','maxlength'=>'55', 'placeholder'=>"Enter first name"))}}
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
