

@extends('layout')

@section('title')
    This is the submenu page
@endsection

@section('content')
      <h1> Sub Menu</h1>  
   
      @foreach($menu as $menus) 

           
                <div class="col-sm-4">
      
                   <img class="img-responsive" src="/img/{{$menus->img}}" alt="">
                    <h1><a href=" /item/{{$menus->id}} ">{{ $menus->title }}</a></h1>

               </div>

          
            

      @endforeach

@endsection