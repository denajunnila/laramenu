

@extends('layout')

@section('title')
    Applebee's
@endsection

@section('content')
      <h1> Applebee's</h1>  
   
      @foreach($menu as $menus) 

           
                <div class="col-sm-4">
                   <img class="img-responsive" src="/img/{{$menus->img}}" alt="">
                    <h1><a href=" /subcat/{{$menus->id}} ">{{ $menus->title }}</a></h1>
                    {{-- <h1>    <a href="{{ action('DatabaseController@subcat', ['cat_id'=>$menu->cat_id] )}}">{{ $menus->title }}</a> </h1> --}}
               </div>

          
            

      @endforeach

@endsection