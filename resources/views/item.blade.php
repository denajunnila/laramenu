
<!-- links the layout.blade.php -->
@extends('layout')
<!-- link layout to title here -->
@section('title')
    <!-- display in the tab -->
    This is the item page
@endsection

@section('content')
	  <!-- display title on page-->
      <h1> Item Menu</h1>  
      <!-- Go thru the given database  -->
      @foreach($menu as $menus)
          		<!-- separate screen to 3 sections -->
                <div class="col-sm-4">
                  <!-- Delete item button-->
                    <a href="{{ url('deletecat', $menus->id)  }}">DELETE</a>
                	<!-- display current image from menu database-->
                   <img class="img-responsive" src="/img/{{$menus->img}}" alt="">
                   <!-- display the item title -->
                    <h1>{{ $menus->title }}</h1>
               </div>        

      @endforeach

@endsection