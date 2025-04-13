<div class="content">
  <h1 class="title"><a href="{{route('index')}}">SemsaR</a></h1>
</div>
<div class="b">
    <div><a href="{{route('about.semsar')}}" target="_blank">about</a></div>
    @if (request()->routeIs('edit.profile'))
      <div><a href="#" target="_blank">addCar</a></div>
    @endif
    @if (request()->routeIs('index'))
      <div><a href="{{route('search.car')}}" target="_blank">search</a></div>
    @endif
    <div><a href="{{route('about.semsar')}}" target="_blank">contact</a></div>
  <div>
    <a href="{{route('login')}}" target="_blank">login</a>
  </div>
</div>
<div class="barss">
  <i style="font-size: 25px" class="fa-solid fa-bars"></i>
</div>