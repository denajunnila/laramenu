
<!-- links the layout.blade.php -->
@extends('layout')
<!-- link layout to title here -->
@section('title')
    <!-- display in the tab -->
    Applebee's
@endsection
<!-- link layout to content here -->
@section('content')
      <!-- Display title on page -->
      <h1> Applebee's</h1>  
      <!-- loop through current database that was given -->
      @foreach($menu as $menus) 
                <!-- Divide page into 3 columns shift into line when page is small-->
                <div class="col-sm-4">
                    <!-- Delete item -->
                    <a href="{{ url('deletecat', $menus->id)  }}">DELETE</a>

                   
                    <!-- <a href=" /subcat/{{$menus->id}} ">DELETE</a> -->
                   <!-- Display current mage from image folder -->
                   <img class="img-responsive" src="/img/{{$menus->img}}" alt="">
                   <!-- create link using current id from menu item
                    to the next Subcat page 
                    and display title -->
                    <!-- <h1><a href=" /subcat/{{$menus->id}} ">Delete</a></h1> -->
                    <h1><a href=" /subcat/{{$menus->id}} ">{{ $menus->title }}</a></h1>
                    
               </div>

          
            

      @endforeach

@endsection