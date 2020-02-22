@extends ('layout')

@section ('content')
<?php $page = "home" ?>

<div id="gallery">
  <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
      <li data-target="#myCarousel" data-slide-to="5"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{url('img/alex-dukhanov-MFM8ASk4XNs-unsplash.jpg')}}" alt="snowy trees">
        <div class="carousel-caption">
          <h1>John Rowe Counseling</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('img/raquel-garcia-BAiSZDx4LgE-unsplash.jpg')}}" alt="Soft mountains">
        <div class="carousel-caption">
          <h1>John Rowe Counseling</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('img/ben-karpinski-aJAfKxscG3k-unsplash.jpg')}}" alt="misty mountain">
        <div class="carousel-caption">
          <h1>John Rowe Counseling</h1>
        </div>
      </div>
      <!-- <div class="carousel-item">
        <img src="{{url('img/lukasz-szmigiel-2ShvY8Lf6l0-unsplash.jpg')}}" alt="forest with sunbeams">
        <div class="carousel-caption">
          <h1>John Rowe Counseling</h1>
        </div>
      </div> -->
      <div class="carousel-item">
        <img src="{{url('img/janke-laskowski-WJyCRU1m7h8-unsplash.jpg')}}" alt="lake with rock spire">
        <div class="carousel-caption">
          <h1>John Rowe Counseling</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('img/julie-marsh-payOjEt5qYY-unsplash.jpg')}}" alt="Tall forest">
        <div class="carousel-caption">
          <h1>John Rowe Counseling</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('img/luca-zanon-X0OoHrPvgXE-unsplash.jpg')}}" alt="Soft mountains">
        <div class="carousel-caption">
          <h1>John Rowe Counseling</h1>
        </div>
      </div>
    </div>
    <!-- Start Slider Controls -->
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!-- End of Carousel -->
</div>

<div class="section" id="about">
  <div class="container-fluid">
    <div class="row justify-content-around">
      <div class="col-md-8">
        <h2>About Me</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 col-xl-5">
        <img class="img img-fluid" src="img/john-portrait.jpg" alt="Photo of John Rowe">
      </div>
      <div class="col-lg-6 col-xl-7">
        <p>There is no doubt that the most important part in seeking help is the development of a strong
relationship with your provider. I feel it is important to know who is going to be in your corner, so I
would like to begin by sharing my journey with you. My career as a therapist began following many
years in Durango, Colorado where I thrived as a whitewater and mountain guide and learned the power
of mentorship, of community, and of self-love and care. After attending field school in clinical
psychology, I entered graduate studies at the University of Denver’s Four Corners School of Social Work.
While working on the street, in jails, in outpatient treatment, crises centers, and in community health
centers I came to specialize in practice with rural and tribal populations with a focus on advanced clinical
practice. After providing services in a wilderness treatment program I later moved into a position as the
primary family therapist in the long-term residential treatment setting. I later moved on to serve as a
therapist for survivors of sexual violence. My most recent projects have involved assisting in the
development of a long term residential and wilderness program, and collaboration on starting a
nonprofit for kitchen staff.</p>
      </div>
    </div>
  </div>
</div>

<div class="section parallax" id="specialty">
  <div class="container-fluid">
    <div class="row justify-content-around">
      <div class="col-md-8">
        <h2 class="text-center">Specialties</h2>
      </div>
    </div>
      <ul class="row justify-content-center">
        <li class="col-sm-5 col-lg-4 col-xl-3">EMDR</li>
        <li class="col-sm-5 col-lg-4 col-xl-3">Trauma Informed Care</li>
        <li class="col-sm-5 col-lg-4 col-xl-3">Anxiety and Depression</li>
        <li class="col-sm-5 col-lg-4 col-xl-3">Life Transitions</li>
        <li class="col-sm-5 col-lg-4 col-xl-3">Survivors of Crime</li>
        <li class="col-sm-5 col-lg-4 col-xl-3">Survivors of Sexual Violence</li>
        <li class="col-sm-5 col-lg-4 col-xl-3">Community Re-Entry</li>
        <li class="col-sm-5 col-lg-4 col-xl-3">Co-Occurring Substance Use and Mental Health problems</li>
      </ul>
    <!-- <div class="row">
      <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">EMDR</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Trauma Informed Care</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Anxiety and Depression</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Life Transitions</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Survivors of Crime</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Survivors of Sexual Violence</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Community Re-Entry</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-md-6 col-sm-12">
        <div class="card">
          <div class="card-body">
            <h6 class="card-title">Co-Occurring Substance Use and Mental Health problems</h6>
          </div>
        </div>
      </div>
    </div> -->
  </div>
</div>



<div class="section parallax-2" id="approach">
  <div class="container-fluid">
    <div class="row justify-content-around">
      <div class="col-auto">
        <h2>My Approach</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-auto">
        <p>All too often in the treatment world we have focused on this idea of “fixing the problem”. There is
another side to treatment with which I align. This is the positive, humanistic, strength based, and
solution-focused psychology which recognizes that we as humans can look at our strengths to overcome
our challenges and hardships. My approach is collaborative and emphasizes acknowledging problems in
in a non-judgmental way. Concepts of good and bad or right and wrong are thrown out the window to
focus on developing and implementing solutions. To come to solutions I utilize evidence-based
treatment techniques such as Cognitive Behavioral Therapy (CBT), Eye Movement Desensitization and
Reprocessing (EMDR), and Motivational Interviewing. I offer my sessions in person, and via tele-video.</p>
      </div>
    </div>
  </div>
</div>

<div class="section" id="services">
  <div class="container-fluid">
    <div class="row">
      <div class="col-auto">

      </div>
    </div>
  </div>
</div>

<div class="section parallax-3" id="tele-therapy">
  <div class="container-fluid">
    <div class="row justify-content-around">
      <div class="col-auto">
        <h2>What is Telemedicine?</h2>
      </div>
    </div>
    <div class="row justify-content-around">
      <div class="col-auto">
        <p>An increasingly important, easy, and flexible tool in medicine, telehealth allows providers to reach out to
clients in a convenient way by means of tele-video. Sessions via tele-video occur in real time with your
therapist and are accessed with a computer webcam, a tablet, or a smart phone. People choose sessions
via tele-video for many reasons. For example, accessing and scheduling an appointment can be easier
than making the commute, clients living rural can have easier access to care, weather won’t stop an
appointment, therapy can happen from the comfort of the home, and some clients will take the session
outdoors on a walk, on a hike, or even while fishing. All types of sessions can occur with a secure
internet connection or cell phone connection. I offer consultations, assessments, and sessions with this
modality of care.</p>
      </div>
    </div>
  </div>
</div>

<div class="section" id="contact">
  <div class="container-fluid">
    <div class="row">
      <div class="col-auto">

      </div>
    </div>
  </div>
</div>

@endsection
