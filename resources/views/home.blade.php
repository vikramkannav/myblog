@extends('layouts.app')

@include('.layouts.include.header')

@section('content')
    <div id="wrapper">
         @include('.layouts.include.sidebar')
         @include('.layouts.include.content')
         @include('.layouts.include.footer');
    </div>
@endsection
