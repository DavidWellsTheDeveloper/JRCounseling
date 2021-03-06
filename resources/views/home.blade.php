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
        <img src="{{url('img/carousel/alex-dukhanov-MFM8ASk4XNs-unsplash.jpg')}}" alt="snowy trees">
        <div class="carousel-caption">
          <h1>John Rowe Counseling</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('img/carousel/raquel-garcia-BAiSZDx4LgE-unsplash.jpg')}}" alt="Soft mountains">
        <div class="carousel-caption">
          <h1>John Rowe Counseling</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('img/carousel/ben-karpinski-aJAfKxscG3k-unsplash.jpg')}}" alt="misty mountain">
        <div class="carousel-caption">
          <h1>John Rowe Counseling</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('img/carousel/janke-laskowski-WJyCRU1m7h8-unsplash.jpg')}}" alt="lake with rock spire">
        <div class="carousel-caption">
          <h1>John Rowe Counseling</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('img/carousel/julie-marsh-payOjEt5qYY-unsplash.jpg')}}" alt="Tall forest">
        <div class="carousel-caption">
          <h1>John Rowe Counseling</h1>
        </div>
      </div>
      <div class="carousel-item">
        <img src="{{url('img/carousel/luca-zanon-X0OoHrPvgXE-unsplash.jpg')}}" alt="Soft mountains">
        <div class="carousel-caption">
          <h1>John Rowe Counseling</h1>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
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

<div class="section" id="specialty">
  <div class="container-fluid">
    <div class="row justify-content-around">
      <div class="col-md-8">
        <h2 class="text-center">Specialties</h2>
      </div>
    </div>
    <div class="row justify-content-around">
      <div id="accordion" class="col-lg-10 col-12 justify-content-around">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                EMDR
              </button>
            </h5>
          </div>
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              Eye Movement Desensitization and Reprocessing (EMDR) therapy is an interactive psychotherapy technique used to relieve psychological stress. It is an effective treatment for trauma and post-traumatic stress disorder (PTSD).
              During EMDR therapy sessions, you relive traumatic or triggering experiences in brief doses while the therapist directs your eye movements.
              EMDR is thought to be effective because recalling distressing events is often less emotionally upsetting when your attention is diverted. This allows you to be exposed to the memories or thoughts without having a strong psychological response.
              Over time, this technique is believed to lessen the impact that the memories or thoughts have on you.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Trauma Informed Care
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              Some Text about Trauma Informed Care
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Anxiety and Depression
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Something about anxiety and depression treatments.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingFour">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                Life Transitions
              </button>
            </h5>
          </div>
          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
            <div class="card-body">
              Something about life transitions.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingFive">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                Survivors of Crime
              </button>
            </h5>
          </div>
          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
            <div class="card-body">
              Something about survivors of crime treatments.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingSix">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                Survivors of Sexual Violence
              </button>
            </h5>
          </div>
          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
            <div class="card-body">
              Something about survivors of sexual violence.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingSeven">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                Community Re-Entry
              </button>
            </h5>
          </div>
          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
            <div class="card-body">
              Something about community re-entry.
            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-header" id="headingEight">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                Co-Occurring Substance Use and Mental Health problems
              </button>
            </h5>
          </div>
          <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
            <div class="card-body">
              Something about Co-Occurring Substance Use and Mental Health problems.
            </div>
          </div>
        </div>
      </div>
    </div>

      <!-- <ul class="row justify-content-center">
        <div class="col-sm-5 col-lg-4 col-xl-3">
          <li>EMDR</li>
        </div>
        <div class="col-sm-5 col-lg-4 col-xl-3">
          <li>Trauma Informed Care</li>
        </div>
        <div class="col-sm-5 col-lg-4 col-xl-3">
          <li>Anxiety and Depression</li>
        </div>
        <div class="col-sm-5 col-lg-4 col-xl-3">
          <li>Life Transitions</li>
        </div>
        <div class="col-sm-5 col-lg-4 col-xl-3">
          <li>Survivors of Crime</li>
        </div>
        <div class="col-sm-5 col-lg-4 col-xl-3">
          <li>Survivors of Sexual Violence</li>
        </div>
        <div class="col-sm-5 col-lg-4 col-xl-3">
          <li>Community Re-Entry</li>
        </div>
        <div class="col-sm-5 col-lg-4 col-xl-3">
          <li>Co-Occurring Substance Use and Mental Health problems</li>
        </div>
      </ul>
      <ul class="row justify-content-center">
        <li class="col-sm-5 col-lg-4 col-xl-3">EMDR</li>
        <li class="col-sm-5 col-lg-4 col-xl-3">Trauma Informed Care</li>
        <li class="col-sm-5 col-lg-4 col-xl-3">Anxiety and Depression</li>
        <li class="col-sm-5 col-lg-4 col-xl-3">Life Transitions</li>
        <li class="col-sm-5 col-lg-4 col-xl-3">Survivors of Crime</li>
        <li class="col-sm-5 col-lg-4 col-xl-3">Survivors of Sexual Violence</li>
        <li class="col-sm-5 col-lg-4 col-xl-3">Community Re-Entry</li>
        <li class="col-sm-5 col-lg-4 col-xl-3">Co-Occurring Substance Use and Mental Health problems</li>
      </ul> -->
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
