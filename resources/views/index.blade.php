 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url("../images/sepnas_logo.png") }}" />
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
    <link rel="stylesheet" href="{{ url('css/js/calendar.css') }}">
    <title>Speaker Eugenio Perez National Agricultural School</title>
</head>
@extends('Components.Molecule.header')
@section('footer')
@endsection
<body>
    <div class="container_carousel">
        <!-- CAROUSEL START -->
        <div id="myCarousel" class="carousel slide" data-interval="5000" data-ride="carousel">
           <!-- Carousel items -->
           <div class="carousel-inner">
               <div class="item active">
                   <img src="{{ url("../images/sepnas.jpg") }}" alt="First Slide">
                   <div class="carousel-caption">
                       <h3>SEPNAS is a home of every SEPNASIAN! Once a SEPNASIAN,  always a SEPNASIAN!</h3>
                   </div>
               </div>
               <div class="item">
                 <img src="{{ url("../images/academic.jpg") }}" alt="First Slide">
                 <div class="carousel-caption">
                     <h3>Academic Excellence Awards for Grades 7 to 9 and Grade 11</h3>
                 </div>
             </div>
               <div class="item">
                   <img src="{{ url("../images/brigada.jpg") }}" alt="Second Slide">
                   <div class="carousel-caption">
                       <h3>DAY 1 of Brigada Eskwela :Parade</h3>
                       </div>
                   </div>
                   <div class="item">
                       <img src="{{ url("../images/soiree.jpg") }}" alt="Third Slide">
                       <div class="carousel-caption">
                           <h3>Soiree 2K20</h3>
                       </div>
                   </div>
                   <div class="item">
                     <img src="{{ url("../images/sosa.jpg") }}" alt="Third Slide">
                     <div class="carousel-caption">
                         <h3>SOSA 2019 - State of the School Address</h3>
                     </div>
                 </div>
               </div>
               <!--Carousel nav -->
               <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                   <span class="glyphicon glyphicon-chevron-left"></span>
               </a>
               <a class="carousel-control right" href="#myCarousel" data-slide="next">
                   <span class="glyphicon glyphicon-chevron-right"></span>
               </a>
        </div>
    </div> 

    <div class="container2"> 
        <div class="container2_box">
          <span class="title">Announcement</span>
          <img src="{{ URL::asset('images/Admin/Bulletin/Announcements/'.$announcement->thumbnailImage) }}" alt="">
          <h3>Title: {{ $announcement->title }}</h3>
          <p>Description: {{ $announcement->shortDescription }}</p>
          <p>Date Uploaded:{{ date('F j, Y, g:i a', strtotime($announcement->created_at)) }}</p>
          <a href="{{ route('bulletin' , 'announcements') }}" title="See Announcements">See All</a>
        </div>
        <div class="container2_box">
        <span class="title">Achievement</span>
          <img src="{{ URL::asset('images/Admin/Bulletin/Achievements/'.$achievement->thumbnailImage) }}" alt="">
          <h3>Title: {{ $achievement->title }}</h3>
          <p>Description: {{ $achievement->shortDescription }}</p>
          <p>Date Uploaded: {{ date('F j, Y, g:i a', strtotime($achievement->created_at)) }}</p>
        <a href="{{ route('bulletin' , 'achievements') }}" title="See Achievements">See All</a>
          </div>
          <div class="container2_box">
            <span class="title">Upcoming Events</span>
            <img src="{{ URL::asset('images/Admin/Bulletin/Upcoming_events/'.$event->thumbnailImage) }}" alt="">
            <h3>Title: {{ $event->title }}</h3>
            <p>Description: {{ $event->shortDescription }}</p>
            <p>Date Uploaded: {{ date('F j, Y, g:i a', strtotime($event->created_at)) }}</p>
          <a href="{{ route('bulletin' , 'upcoming_events') }}" title="See Achievements">See All</a>
      </div>
    </div> 
    <!--End Container2-->
    <div class="container_vmgo" style="display: grid;
    grid-template-columns: repeat(auto-fit, minmax(500px, 1fr)); padding: 1%; margin: 2% 0;
">       
           
              <div class="single_sidebar">
                  <h2 class="title_vmgo">THE DEPED VISION</h2>
              
              <!----><span></span>
                  
                <p>
                    We dream of Filipinos
                    who passionately love their country
                    and whose values and competencies
                    enable them to realize their full potential
                    and contribute meaningfully to building the nation.
                    
                    As a learner-centered public institution,
                    the Department of Education
                    continuously improves itself
                    to better serve its stakeholders.
                </p>
                <h2 class="title_vmgo">THE DEPED MISSION</h2>
              <!----><span></span>
                  
                <p>To protect and promote the right of every Filipino to quality, equitable, culture-based, and complete basic education where:

                    Students learn in a child-friendly, gender-sensitive, safe, and motivating environment.
                    
                    Teachers facilitate learning and constantly nurture every learner.
                    
                    Administrators and staff, as stewards of the institution, ensure an enabling and supportive environment for effective learning to happen.
                    
                    Family, community, and other stakeholders are actively engaged and share responsibility for developing life-long learners.
                
                </p>
                 <h2 class="title_vmgo">OUR CORE VALUES</h2>
              <!----><span></span>
                  
                <p>
                    <li>Maka-Diyos</li>
                    <li>Maka-tao</li>
                    <li>Makakalikasan</li>
                    <li>Makabansa</li>
                </p>
              <!----><span></span>
              <h2 class="title_vmgo">QUALITY POLICY</h2>
                <p>The Sepnas
  is committed to provide
  relevant programs and responsive
  services pursuant to statutory and
  regulatory requirements for the
  satisfaction of its stakeholders  through continuous improvement
  of its quality management system.
                </p>
              </div>
              

      
          
            <div class="news">
            <span>News</span>
            @foreach ($news as $news)
                     <div class="data_feedback" > 
                      <img src="{{ URL::asset('images/Admin/Bulletin/News/'.$news->thumbnailImage) }}" alt="">
                      <div style="">
                        <h3>Title: {{ $news->title }}</h3>
                        <p>Description: {{ $news->shortDescription }}</p>
                        <p>Date Uploaded: {{ date('F j, Y, g:i a', strtotime($news->created_at)) }}</p>
                        <a href="{{ route('bulletin' , 'news') }}">See More >></a>
                      </div>         
                 </div>
                 @endforeach
              <!-- <span> See All >> </span> -->
            </div>       
      <!--	  <a class="slider_btn" href="AboutUs-single.html">Read More</a>-->  
    </div>

    <img src="{{ url("../images/front.png") }}" alt="" style="width:100%; height:300px;">
    <div class="container_choose">
        <!-- Why us top titile -->
            <div class="title_area">
              <p>Choose SEPNAS!</p>
              <span></span> 
            </div>
        <!-- End Why us top titile -->
        <!-- Start Why us top content  -->
        <div class="choose_sepnas">
          
                  <div class="col-lg-3 col-md-3 col-sm-3" style="width: 100%;">
            <div class="container_icon">
              <div class="whyus_icon">
                <span class="icon fa fa-group"></span>
              </div>
              <h3>Qualified Educators</h3>
              <p>Education comes at an equally good cost for our stakeholders with qualified educators giving the best knowledge to students.</p>
            </div>
          </div>
    
          <div class="col-lg-3 col-md-3 col-sm-3"style="width: 100%;">
            <div class="container_icon">
              <div class="whyus_icon">
                <span class="icon fa fa-desktop">
              </span></div>
              <h3>Technology and Innovation</h3>
              <p>Provides advanced tools and equipment which allow students to learn at their own pace.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3" style="width: 100%;">
            <div class="container_icon">
              <div class="whyus_icon">
                <span class="icon fa fa-plane">
              </span></div>
              <h3>A World of Opportunity</h3>
              <p>Broaden your horizons by joining diverse organizations and competitions inside and outside the university.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-sm-3" style="width: 100%;">
            <div class="container_icon">
              <div class="whyus_icon">
                <span class="icon fa fa-book">
              </span></div>
              <h3>Knowledge for Life</h3>
              <p>More than education, SEPNAS gives you the skills, confidence and a culture of Lifelong Learning experience to help you make your world better.</p>
            </div>
          </div>
    
        </div>
        <!-- End Why us top content  -->
      </div>
      <div class="container_form" id="contactUs" style="display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));">
          <body class="light">
            <div class="calendar" style="margin:auto;">
              <h2 class="title">Calendar</h2>
                <div class="calendar-header">
                    <span class="month-picker" id="month-picker">February</span>
                    <div class="year-picker">
                        <span class="year-change" id="prev-year">
                            <pre><</pre>
                        </span>
                        <span id="year">2021</span>
                        <span class="year-change" id="next-year">
                            <pre>></pre>
                        </span>
                    </div>
                </div>
                <div class="calendar-body">
                    <div class="calendar-week-day">
                        <div>Sun</div>
                        <div>Mon</div>
                        <div>Tue</div>
                        <div>Wed</div>
                        <div>Thu</div>
                        <div>Fri</div>
                        <div>Sat</div>
                    </div>
                    <div class="calendar-days"></div>
                </div>
                <div class="calendar-footer">
                    <div class="toggle">
                        <span>Dark Mode</span>
                        <div class="dark-mode-switch">
                            <div class="dark-mode-switch-ident"></div>
                        </div>
                    </div>
                </div>
  <a href="{{ route('aboutus' , 'calendar') }}"> <i class="fa fa-search"></i>&nbsp;See Complete Calendar</a>
    
                <div class="month-list"></div>
            </div>
            <div class="form" style="margin: 5%; padding: 2%;">
                <fieldset class="pure-group">
                  <div class="row">
                         <div class="col-lg-12 col-md-12"> 
                           <div class="title_area">
                           <form action="" id="form">
                            <input type="hidden" id="csrf" value={{ csrf_token() }}>
                     <h2 class="title">Contact us</h2>
                     <span></span>
                             <h5>We are eager to discuss and answer any questions you have. Enter your details and we'll get back to you shortly.</h5>
                           </div>
                         </div>
                      </div>
                     <label for="name">Name: </label>
                     <input id="name" name="name" required="" placeholder="Full Name">
                   
                         <label for="name">Subject: </label>
                     <input id="subject" name="subject" required="" placeholder="Subject">
                   </fieldset>
                   <fieldset class="pure-group">
                     <label for="message">Message: </label>
                     <textarea id="message" name="message" rows="10" required="" placeholder="Tell us what's on your mind..."></textarea>
                   </fieldset>
               
                   <fieldset class="pure-group">
                     <label for="email"><em>Your</em> Email Address:</label>
                     <input id="email" name="email" type="email" value="" required="" placeholder="example@email.com">
                     <span id="email-invalid" style="display:none">
                       Must be a valid email address</span>
                   </fieldset>
                 
                 <fieldset class="pure-group">
                     <label for="recipient">Recipient: <em>(choose the right recipient)<em></em></em></label><em><em>
                   <select id="recipient" name="recipient" required="">
                   <option value=""></option>
                  
                   <option value="admin">Administration</option>
                   <option value="registrar">Registrar</option>
                   <option value="BO">Business Office</option>
                   </select>
                   </em></em></fieldset><em><em>
               
                   <button class="button-success pure-button button-xlarge">
                     <i class="fa fa-paper-plane"></i>&nbsp;Send</button>
               
                   <!--=========== END CONTACT SECTION ================-->
                   <div class="alert alert-success" role="alert" id="successMsg" style="display: none ; margin-top : 5px;" >
                    Thank you for getting in touch! 
                  </div>
                   </em></em></form>
        </div>
    </div>      
      <div class="location">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="400px" id="gmap_canvas" src="https://maps.google.com/maps?q=Speaker%20Eugenio%20Perez%20National%20Agricultural%20School%20roxas%20san%20carlos%20&t=k&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:100%;}
        </style><a href="https://www.embedgooglemap.net"></a>
        <style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:100%;}</style></div></div>
      </div>
                        {{-- <span class="icon"><i class="fa fa-bar-chart"></i></span> --}}
      <button class='open-button' onclick="document.location='{{ route('poll.show', [$polls->id]) }}'"><h4>Poll</h4><i class="fa fa-bar-chart"></i></button>
      <script type="text/javascript" src="js/calendar.js"></script>
      <script>
               function validateForm()
{
              var name = $("input[name=name]").val();
              var subject = $("input[name=subject]").val();
              var message = $("textarea[name=message]").val();
              var email = $("input[name=email]").val();
              var recipient = $("select[name=recipient]").val();
              var url = '{{ url('contactus/store') }}';
    if (name==null || name=="",subject==null || subject=="",message==null || message=="",email==null || email=="")
    {
        alert("Please Fill All Required Field");
        return false;
    }
    else{

      $.ajax({
                      url: "/admin/contact",
                      type: "POST",
            data:{
                _token: $("#csrf").val(),
                name:name, 
                subject:subject,
                message:message,
                email:email,
                recipient:recipient
                },
                      cache: false,
                      success: function(dataResult){
                          var dataResponse = JSON.stringify(dataResult);
                          if(dataResult.success == true){
                            $('#successMsg').show();	
                          }
                          else if(dataResult.success != true){
                              alert("Error occured !");
                          }     
                      }
                  });

    }
}

  $(function () {
    $('#form').on('submit', function (e) {
      e.preventDefault();
      validateForm();
    });
  });
      </script>
      @extends('Components.Molecule.footer')
      @section('footer')
      @endsection
</body>
</html>