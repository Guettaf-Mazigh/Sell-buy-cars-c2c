<div class="content">
  <h1 class="title"><a href="{{route('index')}}">SemsaR</a></h1>
</div>
<div class="b">
    <div><a href="{{ route('about.semsar') }}">about</a></div>
    @if (request()->routeIs('edit.profile'))
      <div><a href="{{ route('add.car') }}">addCar</a></div>
    @elseif (request()->routeIs('add.car'))
      <div><a href="{{ route('edit.profile') }}">editProfile</a></div>
    @else
      <div><a href="{{ route('search.car') }}">search</a></div>
    @endif
    <div><a href="{{ route('about.semsar') }}">contact</a></div>
    @auth  
      <div><a href="{{ route('logout') }}">Log Out</a></div>
    @endauth  
    @guest
      <div><a href="{{ route('login') }}" target="_blank">login</a></div>
    @endguest

</div>
<div class="barss">
  <i style="font-size: 25px" class="fa-solid fa-bars"></i>
</div>