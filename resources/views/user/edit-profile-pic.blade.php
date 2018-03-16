@extends('home')
@section('content')

     {{ Form::model($user=Auth::user(), array('route' => array('endUserUpdate',$user->id),'enctype'=>"multipart/form-data",'method'=>'PUT')) }}
    {!! csrf_field() !!}
        <div class="clearfix">&nbsp;</div>
        <div class="row ">
            <div class="col-md-12 content_area">
                <h3>Profile Pic</h3>
                <div class="panel-body">
                    <div class="row ">
                        <div class="col-md-12 profile_setting ">

                            <div class="media form-group">
                                <div class="media-left">
                                    <a href="#" class="">
                                        <i>
                                            <img src="{{Auth::user()->picture?:'/img/cam-icon.png'}}" id="picture_img"   height="200" width="200">
                                            <input type="file" id="picture"  name="picture" class="image_class" required/>
                                        </i>
                                    </a>
                                </div>
                            </div>
                            <!--/media-->
                            <div class="row ">
                                <div class="col-md-12 text-center">
                                    <button type="submit" class="btn_blue">Upload</button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            {!! Form::close() !!}

    </div>



@endsection
