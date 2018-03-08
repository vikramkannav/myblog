@extends('user.userHome')
@section('content')
<div class="row ">
    <div class="col-md-12 content_area">
        <h3>Messages</h3>
        <div class="panel-body">
            <div class="row ">
                <div class="col-md-12">

                    <div class="row ">
                        <div class="col-md-1 form-group">Name</div>
                        <div class="col-md-4 form-group"><input type="text" class="form-control field_main"
                                                                placeholder="Enter first name"></div>
                        <div class="col-md-4 form-group"><input type="text" class="form-control field_main"
                                                                placeholder="Enter last name"></div>

                    </div>
                    <div class="clearfix"></div>
                    <div class="row ">
                        <div class="col-md-1 form-group">Email</div>
                        <div class="col-md-4 form-group"><input type="email" class="form-control field_main"
                                                                placeholder="Enter Email"></div>


                    </div>
                    <div class="clearfix"></div>
                    <div class="row ">
                        <div class="col-md-1 form-group">Password</div>
                        <div class="col-md-4 form-group"><input type="email" class="form-control field_main"
                                                                placeholder="Enter password"></div>
                        <div class="col-md-4 form-group"><input type="email" class="form-control field_main"
                                                                placeholder="Confirm password"></div>


                    </div>
                    <div class="clearfix"></div>
                    <div class="row ">
                        <div class="col-md-1 form-group">Contact</div>
                        <div class="col-md-4 form-group"><input type="email" class="form-control field_main"
                                                                placeholder="Enter number"></div>


                    </div>
                    <div class="clearfix"></div>


                    <div class="row ">
                        <div class="col-md-1 form-group">Address</div>
                        <div class="col-md-4 form-group"><input type="email" class="form-control field_main"
                                                                placeholder="Enter Address"></div>
                    </div>

                    <div class="clearfix"></div>


                    <div class="row ">
                        <div class="col-md-1 form-group">City</div>
                        <div class="col-md-4 form-group"><input type="email" class="form-control field_main"
                                                                placeholder="Enter City"></div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="row ">
                        <div class="col-md-1 form-group">State</div>
                        <div class="col-md-4 adv_center form-group"><select class="form-control field_main">
                                <option>Select Satte</option>
                                <option>One</option>
                                <option>Two</option>
                                <option>Three</option>
                            </select>
                            <i class="icon-arrow-down icons blue_color-text "></i></div>
                    </div>
                    <div class="clearfix"></div>


                    <div class="row ">
                        <div class="col-md-1 form-group">Zip code</div>
                        <div class="col-md-4 form-group"><input type="email" class="form-control field_main"
                                                                placeholder="Enter breed"></div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="row ">

                        <div class="col-md-12 text-center">
                            <button type="button" class="btn_blue">Submit</button>
                        </div>
                    </div>


                </div>


            </div>


        </div>

    </div>


    </form>

</div>

   @endsection
