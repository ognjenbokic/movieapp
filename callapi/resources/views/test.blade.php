@extends('layouts.mainLayout')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-sm-3">
    <a href="#">
        <img src="{{asset('/img/testimg.jpg')}}" alt="image">
    </a>  
    </div>
    <div class="col-sm-3">
    <img src="{{asset('/img/testimg.jpg')}}" alt="image">
    </div>
    <div class="col-sm-3">
    <img src="{{asset('/img/testimg.jpg')}}" alt="image">
    </div>
  </div>
</div>
@endsection
