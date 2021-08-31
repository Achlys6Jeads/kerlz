@extends('welcome')

@section('title', 'Page Title')

@section('bannier')
  @include('template/header')
@stop


@section('content')
<div class="pt-5 pb-3 text-center">
    <div class="container">
      <div class="row">

          @foreach($categories as $key => $value)
          <div class="col-md-3 col-6 p-4"> <img class="img-fluid d-block" src="{{ $value->image}}" width="1500">
            <h4 class="mt-3 mb-0"> <a href="{{ url('') }}/categorie/{{ $value->id }}">{{ $value->nom }}&nbsp;</a></h4>
          </div>
          @endforeach
     
      </div>
    </div>
  </div>
@stop

@section('footer')
<div class="py-5 bg-warning" style="display:none">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="list-group">
            <a href="#" class="list-group-item list-group-item-action active list-group-item-info">Ils sont impatients !</a>
            <a href="#" class="list-group-item list-group-item-action">Julien**@gmail.com</a>
            <a href="#" class="list-group-item list-group-item-action">thoma23***@gmail.com</a>
            <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
          </div>
        </div>
        <div class="col-md-8 text-center d-flex flex-column justify-content-center align-items-center">
          <form class="form-inline">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Your e-mail">
              <div class="input-group-append"><button class="btn btn-dark" type="button">Soyez impatient !</button></div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  @stop