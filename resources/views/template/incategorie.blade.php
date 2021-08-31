@extends('welcome')

@section('title', 'Page Title')

@section('bannier')
    @include('template/header')
@stop


@section('content')
<div class="pt-5 pb-3 text-center" style="">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"> <a href="{{url('')}}">Accueil</a> </li>
          </ul>
      <div class="row">

          @foreach($resources as $key => $value)
          
                @if($value->unlock_date < time())
                <div class="col-md-3 col-6 p-4"> <img class="img-fluid d-block" src="..//{{$value['url']}}" alt="image non disponible" width="1500">
                    <h4 class="mt-3 mb-0"> 
                <a href="../{{ $value->url }}">{{ $value->nom }}&nbsp;</a>
            </h4>
        </div>
                @else
                <div class="col-md-3 col-6 p-4" style="position:relative;"> 
                    <span class="badge badge-danger" style="position:absolute;z-index:10;top:50px;left:10px;">
                        Débloqué le {{ date('Y-m-d H:i:s',$value->unlock_date) }}
                    </span>
                    <img style="filter: grayscale(0.8);" class="img-fluid d-block"  src="{{url('')}}/{{$value['image']}}" width="1500">
                    <h4 class="mt-3 mb-0"> 
                <a>{{ $value->nom }}&nbsp; 🔒</a>
            </h4>
        </div>
                @endif
                
          
          @endforeach
     
      </div>
    </div>
  </div>
@stop

@section('footer')

@stop