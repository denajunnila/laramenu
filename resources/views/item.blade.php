

@extends('layout')

@section('title')
    This is the item page
@endsection

@section('content')
      <h1> Item Menu</h1>     
      @foreach($menu as $menus)
          
                <div class="col-sm-4">
                   <img class="img-responsive" src="/img/{{$menus->img}}" alt="">
                    <h1>{{ $menus->title }}</h1>
               </div>        

      @endforeach

@endsection