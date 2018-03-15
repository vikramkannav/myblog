@extends('layouts.app')

@include('layouts.include.header')

  <div id="page-content-wrapper">
    <div id="wrapper">

      @include('layouts.include.sidebar')
      @include('layouts.include.content')
      @include('layouts.include.footer');
    </div>
  </div>


