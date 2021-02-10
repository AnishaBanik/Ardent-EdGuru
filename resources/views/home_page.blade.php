<!DOCTYPE html>
<html lang="en">
<head>
  <title>{!!@$title!!}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Gayathri' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Happy Monkey' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=La Belle Aurore' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Amita' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Charm' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Architects Daughter' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Average Sans' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class="container-fluid">

  <header class="nav-header">
    <a href="/" class="logo">
      <img src="https://edguruindia.com/images/Edguru%20India%20logo%20jpeg%20png/Edguru%20India%20Logo%20PNG/Edguru%20India%20H.png" alt="main-heading" class="main-heading" style="width: 200px;">
    </a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
      <li><a href="#home">Home</a></li>
      <li><a href="#switch">Switch here</a></li>
      <li><a href="#offer">Our offerings</a></li>
      <li><a href="#register">Register</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>
  </header>

<div style="background-color: white;padding-top:150px; width: 99%">
<section class="banner-section" id="home">
  <div class="row">
    <div class="col-md-7 col-sm-12">
      <p class="header">
        {{$setting[0]->heading}}
        <p class="for-all">
          for all!
        </p>
      </p>
      <p class="desc">
       {{$setting[0]->description}}
      </p>
      <button class="learn-btn">
        Learn More
      </button>
    </div>
    <div class="col-md-5 d-none d-lg-block">
      <img src="{{ Voyager::image( $setting[0]->logo ) }}" alt="image1" class="image1">
    </div>
  </div>
</section>

<section id="switch">
  <div class="row switch-to">
    <div class="col-md-4 col-sm-4 ">
      <img src="{{ Voyager::image( $setting[1]->logo ) }}" alt="image2" class="image2">
    </div>
    <div class="col-md-8 col-sm-12 switch-to-desc">
      <h4 class="scnd_head">
        {{$setting[1]->heading}}
      </h4>
      <p class="scnd_desc">
         {!!$setting[1]->description!!}
      </p>
      <div class="row">
        <div class="col-sm-12">
          <div class="col-md-4 col-sm-12">
            <img src="{{ Voyager::image( $slider[0]->logo ) }}" alt="image10" class="image10">
            <p class="scnd-img-desc">{!!$slider[0]->description!!}</p>
          </div>
          <div class="col-md-4 col-sm-12">
            <img src="{{ Voyager::image( $slider[1]->logo ) }}" alt="image11" class="image10">
            <p class="scnd-img-desc">{!!$slider[1]->description!!}</p>
          </div>
          <div class="col-md-4 col-sm-12">
            <img src="{{ Voyager::image( $slider[2]->logo ) }}" alt="image12" class="image10">
            <p class="scnd-img-desc">{!!$slider[2]->description!!}</p>
          </div>
        </div>
       
      </div>
    </div>
  </div>
</section>

<section id="offer">
  <div class="row">
    <div class="col-sm-12" style="background: white">
      <p class="third_head">
        {{$setting[2]->heading}}
      </p>
      <p class="third_desc">
        {!!$setting[2]->description!!}
      </p>
            
    </div>
    <div class="row_change col-sm-12" >
      <div class="row">
        <div class="col-md-4 col-sm-12 cardboard-parent ">
          <div class="cards cardboard card">
            <div class="card-body">
              <img src="{{ Voyager::image( $slider[3]->logo ) }}" alt="image4" class="image4">
              <p class="board-name-footer"> <b> {!!$slider[3]->description!!} </b>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 cardboard-parent">
          <div class="cards cardboard card">
            <div class="card-body" >
              <img src="{{ Voyager::image( $slider[4]->logo ) }}" alt="image5" class="image5">
              <p class="board-name-footer"> <b> {!!$slider[4]->description!!} </b>
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-12 cardboard-parent">
          <div class="cards cardboard card">
            <div class="card-body">
              <img src="{{ Voyager::image( $slider[5]->logo ) }}" alt="image6" class="image6">
              <p class="board-name-footer"> <b>{!!$slider[5]->description!!} </b>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="register">
  <div class="row">
    <div class="forth_row_up col-sm-12">
      <p class="forth_head">
        {{$setting[3]->heading}}
      </p>
      <p class="forth_desc">
         {{$setting[3]->description}}
      </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 col-sm-12">
      <div class="card join-card">
        <img src="{{ Voyager::image( $slider[6]->logo ) }}" alt="image7" class="image7">
        <a href="/student_register">
          <button class="stu-teach">
            {!!$slider[6]->description!!}
          </button>
        </a>
      </div>
    </div>
    <div class="col-md-6 col-sm-12">
      <div class="card join-card">
        <img src="{{ Voyager::image( $slider[7]->logo ) }}" alt="image8" class="image7">
        <a href="/teacher_register">
          <button class="stu-teach">
          {!!$slider[7]->description!!}
          </button> 
        </a>
        
      </div>
    </div>
  </div>
</section>
<section class="contacts-page" id="contact">
  <div class="row">
    <div class="last_page col-md-2 col-lg-3">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.2783499034595!2d88.4294156144339!3d22.568690438802893!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0275ad93c8289b%3A0xc099131033eb5917!2sSDF%20Building%2C%20GP%20Block%2C%20Sector%20V%2C%20Bidhannagar%2C%20Kolkata%2C%20West%20Bengal%20700091!5e0!3m2!1sen!2sin!4v1612178879383!5m2!1sen!2sin" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" class="map"></iframe>
    </div>
    <div class="col-md-5 col-lg-5">
      <p class="last_head">
        {{$setting[4]->heading}}
      </p>
      <div class="row">
        
        <div class="col-md-12 col-sm-12" style="text-align: center; !important; ">
          <p class="email">
            <b>{{$contact[0]->head}}</b>
          </p>
          <p class="email_id">
            {{$contact[0]->description}}
          </p> 
          <p class="mail">
            <b>{{$contact[1]->head}}</b>
          </p>
          <p class="mail_id">
             {{$contact[1]->description}}
          </p>
          <p class="phn">
            <b>{{$contact[2]->head}}</b>
          </p>
          <p class="phn_no">
             {{$contact[2]->description}}
          </p>
        </div>  
      </div>
      
    </div>
    <div class="col-sm-12 col-md-5 col-lg-4">
      <p class="last_head">
        Query form
      </p>
      <form>
        <div class="row form-group query-text">
          <label class="col-md-5">Email address</label>
          <input type="email" class="col-md-7 form-control query-input" placeholder="Enter email">
        </div>
      <div class="row form-group query-text">
        <label class="col-md-5">Query Description</label>
        <textarea class="col-md-7 form-control query-input"></textarea>
      </div>
      <div class="row">
        <div class="col-md-5"></div>
        <div class="col-md-7">
          <button type="submit" class="btn submit-btn">Submit</button>
        </div>
      </div>
      
    </form>
    </div>
</section>
</body>
<hr>
<footer class="footer">
  <a href="#">© 2021 Edguru India</a>
  <a href="/terms">Terms of use</a> 
  <a href="/privacy_policy">Privacy Policy</a>
</footer>
</html>
