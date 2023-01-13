<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" type="image/x-icon" href="{{ url("../images/sepnas_logo.png") }}" />
    <link rel="stylesheet" href="{{ url('css/index.css') }}">
    <title>Sepnas Contact Us</title>
    @extends('Components.Molecule.header')
    @section('header')
    @endsection
    <body>
    <div class="contact_us" style="display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); margin-top:50px;">
        <div class="form" style="margin: 5%; padding: 2%;">
            <fieldset class="pure-group">
              <div class="row">
                     <div class="col-lg-12 col-md-12"> 
                       <div class="title_area">
                 <h3 class="title">Contact us</h3>
                 <span></span>
                         <h5>We are eager to discuss and answer any questions you have. Enter your details and we'll get back to you shortly.</h5>
                       </div>
                     </div>
                  </div>
                  <form action="" id="form">
                    <input type="hidden" id="csrf" value={{ csrf_token() }}>
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
              
                  <button class="button-success pure-button button-xlarge btn-submit " id="save">
                    <i class="fa fa-paper-plane"></i>&nbsp;Send</button>
                
              
              
                  <!--=========== END CONTACT SECTION ================-->
                   
                  </em></em>
                  <div class="alert alert-success" role="alert" id="successMsg" style="display: none ; margin-top : 5px;" >
                   Thank you for getting in touch! 
                 </div>
                  </form>
                  
    </div>
    <div class="contact_address" >
        <div class="col-lg-4 col-md-4 col-sm-4" style="width: 60%; padding: 8%;">
            <div class="contact_address wow fadeInRight">
              <h3 class="title">Address</h3>
              <div class="address_group">
                <p>Roxas Boulevard, San Carlos City, 2420, Pangasinan</p>
                <p>Tel nos. (075) 523 0562  
                  (075) 955 5258
                  <br> Fax No.: (+6375) 203 – 0333</p>
                <p>Email:&nbsp; 300388@deped.gov.ph<br>
                          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; registrar@vmuf.edu.ph<br>
                          &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; businessoffice@vmuf.edu.ph
                </p>
              </div>
              <div class="address_group">
               <ul class="footer_social" style= "display: flex; list-style-type: none; gap: 1em; font-size: 1.5em;color:black;">
                <li><a data-toggle="tooltip" data-placement="top" title="Facebook" class="soc_tooltip" target="_blank" href="https://www.facebook.com/VMUFOfficial/"><i class="fa fa-facebook"></i></a></li>
                   <li><a data-toggle="tooltip" data-placement="top" title="Twitter" class="soc_tooltip" target="_blank" href="https://twitter.com/vmuf?lang=en"><i class="fa fa-twitter"></i></a></li>
                   <li><a data-toggle="tooltip" data-placement="top" title="Google+" class="soc_tooltip" target="_blank" href="https://mail.google.com/mail/u/0/#inbox"><i class="fa fa-google-plus"></i></a></li>
                   <li><a data-toggle="tooltip" data-placement="top" title="Youtube" class="soc_tooltip" target="_blank" href="https://www.youtube.com/channel/UCJhB4f0TjAfRRVtxadgFjSg"><i class="fa fa-youtube"></i></a></li>
                 </ul>
              </div>
            </div>
          </div>
    </div>
    </div>
    <div class="location">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="400px" id="gmap_canvas" src="https://maps.google.com/maps?q=Speaker%20Eugenio%20Perez%20National%20Agricultural%20School%20roxas%20san%20carlos%20&t=k&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
        </iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:400px;width:100%;}
        </style><a href="https://www.embedgooglemap.net"></a>
        <style>.gmap_canvas {overflow:hidden;background:none!important;height:400px;width:100%;}</style></div></div>
      </div>
      
      <script>
        //   $(document).ready(function() {
            
        //     $('#save').on('click', function() {
        //       var name = $("input[name=name]").val();
        //       var subject = $("input[name=subject]").val();
        //       var message = $("textarea[name=message]").val();
        //       var email = $("input[name=email]").val();
        //       var recipient = $("select[name=recipient]").val();
        //       var url = '{{ url('contactus/store') }}';
        //           $.ajax({
        //               url: "/admin/contact",
        //               type: "POST",
        //     data:{
        //         _token: $("#csrf").val(),
        //         name:name, 
        //         subject:subject,
        //         message:message,
        //         email:email,
        //         recipient:recipient
        //         },
        //               cache: false,
        //               success: function(dataResult){
        //                   var dataResponse = JSON.stringify(dataResult);
        //                   if(dataResult.success == true){
        //                     $('#successMsg').show();	
        //                   }
        //                   else if(dataResult.success != true){
        //                       alert("Error occured !");
        //                   }     
        //               }
        //           });
        //   })
        // });

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
    </body>
</html>
     @extends('Components.Molecule.footer')
      @section('footer')
      @endsection