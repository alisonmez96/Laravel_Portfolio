@extends('layouts.app')

@section('content')

<div class="page1">

  @if(Session()->has('flash_message'))
  <div class="container">
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <strong>Email Send:</strong>
        {{Session()->get('flash_message')}}
      </div>
    </div>
  @endif

<div class="banner">
    <img src="{{URL::asset('/img/banner.png')}}" class="bannerImg" alt="banner">
    <img src="{{URL::asset('/img/foto.png')}}" class="foto" alt="alisonmez">

    <h1 class="name">Ali Sönmez</h1>
    <p class="section">Developper, web designer</p>

  <div class="infoPersonal">
    <h6 class="age">AGE:</h6>
    <h6 class="phone">PHONE:</h6>
    <h6 class="email">EMAIL:</h6>
    <h6 class="address">ADDRESS:</h6>
  </div>

  <div class="infoPersonalres">
    <h6 class="ageres">22</h6>
    <h6 class="phoneres">0486.81.78.69</h6>
    <h6 class="emailres">ali.sonmez@outlook.com</h6>
    <h6 class="addressres">Scheldestraat 118, 1080 Brussel</h6>
  </div>

  <div class="socialmedia">
    <a href="https://twitter.com/1907_snmez" target="_blank"><img src="{{URL::asset('/img/twitter.png')}}" class="twitter" alt="twitter"></a>
    <a href="https://www.facebook.com/Asnmz7" target="_blank"><img src="{{URL::asset('/img/facebook.png')}}" class="facebook" alt="facebook"></a>
    <a href="https://www.linkedin.com/in/ali-s%C3%B6nmez-14175b140/" target="_blank"><img src="{{URL::asset('/img/linkedin.png')}}" class="linkedin" alt="linkedin"></a>
  </div>

</div>

  <h1 class="hi">Hi_</h1>
  <div class="hicontainer">
    <p class="hitext">I am Ali Sönmez. I am 22 years old. I study Multimedia and
Communication technology at the Erasmus University College Brussels. More
specifically I am currently following 'Mobile App &amp; Web'. Here we go deeper
in multimedia applications for mobile devices such as
smartphones and tablets. </p>
  </div>

  <div class="cvcontainer">
    <a href="{{URL::asset('/img/cv.pdf')}}" download>
      <img src="{{URL::asset('/img/download.png')}}" alt="cv" class="cv">
    </a>
  </div>

  <hr class="hr">
</div>

<div class="page2">
  <h1 class="hi">Who am I_</h1>
  <div class="hicontainer">
    <p class="hitext">I am a student and I am still studying at the Erasmus University College Brussels of applied sciences.
    at school I have generated enough practical knowledge I would like to apply all that knowledge
    in real projects that I would use with certain companies. Independently I am actively involved in
    designing websites, business cards, logos, posters and much more. </p>
  </div>

<div class="buttoncontainer">
  <a href="{{ route('who') }}">
    <img src="{{URL::asset('/img/button.png')}}" alt="info" class="info">
  </a>
</div>
  <hr class="hr">
</div>

<div class="page3">
  <h1 class="myp">My projects_</h1>
  @foreach($projects as $project)
  <div class="projects">
    <div class="project">
      <div class="imgproject">

        <img src="{{URL::asset('/storage/project_images/'.$project->project_image)}}" alt="project" class="pro">
      </div>
      <div class="containerproject">
        <h3 class="titelproject">{{$project['titel']}}</h3>
        <p class="textproject">{{$project['beschrijving']}}</p>
        <h5 class="stackproject">USED STACK:</h5>
        <span class="tagproject">{{$project['gebruikteTaal']}}</span>
        <a class="infoprojectcontent" href="{{ route('project', ['id' => $project['id']]) }}">
          More info
        </a>
      </div>
    </div>
    <div class="countercontainer">
      <div class="likesdiv">
        <img src="{{URL::asset('/img/like.png')}}" alt="like" class="likeimg">
        <p class="countp">{{count($project->likes) }}</p>
      </div>

      <div class="commentsdiv">
        <img src="{{URL::asset('/img/comments.png')}}" alt="comment" class="commentimg">
        <p class="countp">{{ $project->comments()->count() }}</p>
      </div>
    </div>
  </div>

  @endforeach
<div class="bottomlinks">
  {{$projects->links()}}
</div>


  <div class="cvcontainer">
    <a href="{{ route('what-i-do') }}">
      <img src="{{URL::asset('/img/projectsbutton.png')}}" alt="info" class="cv">
    </a>
  </div>

</div>

@include('partials.footer')
@endsection
