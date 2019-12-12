@extends('layouts.app')

@section('content')
<h1 class="myp">Who am I_</h1>
<div class="hicontainer">
  <p class="hitext">I am a student and I am still studying at the Erasmus University College Brussels of applied sciences.
    at school I have generated enough practical knowledge I would like to apply all that knowledge
    in real projects that I would use with certain companies. Independently I am actively involved in
    designing websites, business cards, logos, posters and much more.</p>
</div>

<div class="hicontainer">
  <p class="hitext">
  That makes me stay active in the creative way.
I am also someone who learns and executes a lot independently.
I have previously done studies in the office sector so I also have that knowledge that I can apply in my projects. It helps to look and interpret in a different way from some situations.
As a student I have seen a lot and I am actively involved in all areas of art and design.
I would like to combine all that knowledge and creativity from school with the experience you can offer me.
I have a car where I am easily accessible also for outdoor brussels.
</p>
</div>

<div class="containertitle">
  <div class="titleleft">
    <h6 class="titeleducation">EDUCATION</h6>
  </div>

  <div class="titleright">
    <h6 class="titeleducation">INTERNSHIP &amp; EXPERIENCE</h6>
  </div>
</div>

<div class="educationcontainer">
  <div class="educleft">
    <img src="{{URL::asset('/img/educationbar.png')}}" class="educationbar" alt="educationbar">
    <h5 class="school">Erasmus University College, Brussels</h5>
    <p class="year">2015 - Present day</p>
    <h6 class="diplome">Mobile Application &amp; web</h6>

    <h5 class="school2">Regina Pacis Instituut, Brussels</h5>
    <p class="year">2010 - 2015</p>
    <h6 class="diplome">Administration &amp; office</h6>

    <h5 class="school3">Lyceum Martha Somers, Brussels</h5>
    <p class="year">2007 - 2010</p>
    <h6 class="diplome">Economy</h6>

  </div>

  <div class="educright">
    <img src="{{URL::asset('/img/educationbar.png')}}" class="educationbar" alt="educationbar">
    <h5 class="school">AZ Jan Portaels Vilvoorde</h5>
    <p class="year">2014 - 2015</p>
    <h6 class="diplome">Bookkeeping</h6>

    <h5 class="school2">Indigo Parking Royale</h5>
    <p class="year">2017 - Present day</p>
    <h6 class="diplome">Camera surveillance</h6>

    <h5 class="school3">Mind Of Wellness Brussels</h5>
    <p class="year">2018/06 - 2018/07</p>
    <h6 class="diplome">Website developped; <a href="https://mindofwellness.be/" target="_blank">Check the website</a></h6>
  </div>
</div>

<div class="containertitle">
  <div class="titleleft">
    <h6 class="titeleducation">GENERAL SKILLS</h6>
    <br>

    <h5>Html/css</h5>
    <div class="line line1"> 90%</div>

    <h5>Javascript / Json / Ajax / Jquery</h5>
    <div class="line line2"> 70%</div>

    <h5>Java</h5>
    <div class="line line3"> 60%</div>

    <h5>Mysql</h5>
    <div class="line line1"> 90%</div>

    <h5>Angular</h5>
    <div class="line line4"> 50%</div>

    <h5>Php</h5>
    <div class="line line5"> 80%</div>

    <h5>Ios / Android</h5>
    <div class="line line2"> 70%</div>

    <h5>C#</h5>
    <div class="line line3"> 60%</div>

  </div>


  <div class="educright">
  <br></br>
  <h5>Laravel</h5>
    <div class="line line2"> 70%</div>

    <h5>React</h5>
    <div class="line line6"> 40%</div>

    <h5>React-Native</h5>
    <div class="line line2"> 70%</div>

    <h5>Illustrator / Photoshop / Adobe xd / In design</h5>
    <div class="line line4"> 80%</div>

    <h5>After effects / Premiere pro</h5>
    <div class="line line2"> 70%</div>

    <h5>Microsoft producten</h5>
    <div class="line line1"> 90%</div>


  </div>
</div>
</div>


@include('partials.footer')
@endsection
