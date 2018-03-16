
@extends('home')
@include('layouts.include.header')
@section('content')
<div class="row">
    <div class="col-md-12 content_area">
        <h3>Posts History</h3>
        <div class="panel-body">
            <table class="table history table-striped ">
                <thead>
                <tr>
                    <td>ID</td>
                    <td>Name</td>
                    <td>Subject</td>
                    <td>Description</td>
                    <td>Status</td>
                    <td>City</td>
                    <td>State</td>
                    <td>Country</td>
                    <td>ssss</td>
                </tr>
                </thead>
                <tbody>
                @foreach($posts as $key => $value)
                    <tr>
                        <td>{{ $value->id }}</td>
                        <td>{{ $value->name }}</td>
                        <td>{{ $value->subject }}</td>
                        <td>{{ $value->description }}</td>
                        <td>{{ $value->status }}</td>
                        <td>{{ $value->user->city }}</td>
                        <td>{{ $value->user->state }}</td>
                        <td>{{ $value->user->country }}</td>
                        <td>
                            <a class="btn btn-small btn-success" href="{{ URL::to('posts/' . $value->id) }}">Show</a>
                            <a class="btn btn-small btn-info" href="{{ URL::to('posts/' . $value->id . '/edit') }}">Edit</a>

                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

    </div>

</div>
@endsection