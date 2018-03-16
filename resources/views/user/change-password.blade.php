@extends('home')
@section('content')
    {{ Form::model($user=Auth::user(), array('route' => array('endUserUpdate',$user->id),'enctype'=>"multipart/form-data",'method'=>'PUT')) }}
    {!! csrf_field() !!}
        <div class="clearfix">&nbsp;</div>
        <div class="row ">
            <div class="col-md-12 content_area">
                <h3>Change Password</h3>
                <div class="panel-body">
                    <div class="row ">
                        <div class="col-md-12 profile_setting ">

                            <div class="form-group form-inline">
                                <label for="exampleInputName2">Old Password</label>
                                {{Form::password('old_password',null, array('class'=>'form-control field_main', 'placeholder'=>"Old Password", 'maxlength'=>50))}}

                             </div>
                            <div class="form-group form-inline">
                                <label for="exampleInputName2">New Password</label>
                                {{Form::password('new_password',null, array('class'=>'form-control field_main', 'placeholder'=>"New Password", 'maxlength'=>50))}}


                            </div>
                            <div class="form-group form-inline">
                                <label for="exampleInputName2">Confirm Password</label>
                                {{Form::password('password_confirmation',null, array('class'=>'form-control field_main', 'placeholder'=>"Old Password", 'maxlength'=>50))}}

                            </div>

                            <div class="row ">

                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn_blue">Change</button>
                                </div>
                            </div>


                        </div>





                    </div>


                </div>

            </div>



            {!! Form::close() !!}

    </div>




@endsection
