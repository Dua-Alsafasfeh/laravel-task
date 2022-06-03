@extends('layout.master')
@section('title','About Us')
@section('content')
<div class="about-section text-light" style="background-color:#325288;">
  <h1>About Us</h1>
  <p>Laravel Team</p>
</div>
<main>
<h2 style="text-align:center">Our Team</h2>
<div class="container d-flex">
<div class="row">
  <div class="column">
    <div class="card">
      <img src="https://i1.wp.com/growmetachem.com/wp-content/uploads/2020/09/Business-Male-Icon-Vector-User-Icon-Avatar-PNG-and-Vector-with-Transparent-Background-for-Free-Download.jpg?ssl=1">
      <div class="container">
        <h2>{{$one}}</h2>
        <p class="title">Full Stack Web Developer</p>
        <p>anas@mail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="https://media.istockphoto.com/vectors/user-icon-vector-with-laptop-computer-female-person-profile-avatar-vector-id903044512?k=20&m=903044512&s=612x612&w=0&h=t1GW0eyq8YT2sxIJ_1qWkl_DyZZRWxduur7B1cPVCcU=" alt="Mike" style="width:100%">
      <div class="container">
        <h2>{{$two}}</h2>
        <p class="title">Full Stack Web Developer</p>
        <p>Duaa@mail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="https://media.istockphoto.com/vectors/user-icon-vector-with-laptop-computer-female-person-profile-avatar-vector-id903044512?k=20&m=903044512&s=612x612&w=0&h=t1GW0eyq8YT2sxIJ_1qWkl_DyZZRWxduur7B1cPVCcU=" alt="John" style="width:100%">
      <div class="container">
        <h2>{{$three}}</h2>
        <p class="title">Full Stack Web Developer</p>
        <p>marwa@mail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="https://media.istockphoto.com/vectors/user-icon-vector-with-laptop-computer-female-person-profile-avatar-vector-id903044512?k=20&m=903044512&s=612x612&w=0&h=t1GW0eyq8YT2sxIJ_1qWkl_DyZZRWxduur7B1cPVCcU=" alt="John" style="width:100%">
      <div class="container">
        <h2>{{$four}}</h2>
        <p class="title">Full Stack Web Developer</p>
        <p>taebah@mail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>
</div>
</main>
@endsection