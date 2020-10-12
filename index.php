<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Reservation App</title>

    <script src="https://kit.fontawesome.com/fb1f104646.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
   
    <!-- bootstrap CDNs -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    <!-- end of bootstrap CDNs -->  


  
    <meta name="google-signin-client_id" content="678866560909-q1ctrqr724pb65gjqd32e9ra3he4h741.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>

    
    <script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>
    <script
			  src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"
			  integrity="sha256-VazP97ZCwtekAsvgPBSUwPFKdrwD3unUfSGVYrahUqU="
			  crossorigin="anonymous">
    </script>

    <!-- MS Fluent UI -->
    <link rel="stylesheet" href="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-js/1.4.0/css/fabric.min.css" />
    <link rel="stylesheet" href="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-js/1.4.0/css/fabric.components.min.css" />
    <script src="https://static2.sharepointonline.com/files/fabric/office-ui-fabric-js/1.4.0/js/fabric.min.js"></script>
    <!-- <script src="https://code.jquery.com/fabric/jquery.fabric.min.js" ></script> -->
    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="style.css">

    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.6.4/picker.js"></script>  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/picker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/picker.date.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/themes/classic.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/pickadate.js/3.5.6/compressed/themes/classic.date.css" rel="stylesheet" />


</head>



<body>
<i class="fas fa-camera fa-5x">camera</i>

  
  <div id="status"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&appId=329313978401915&autoLogAppEvents=1" nonce="hBQiWZsB"></script>




  <div class="dialog__container" id="dialog-form" title="">
    <h1 class="modal__reservations-title">Reservation</h1>
  
    <form class="modal__form">
      <div class="modal__reservations-selectmenu">
            <select name="guests" id="guests">
              <optgroup>
                <option disabled selected>Number of People</option>
                <option value="1 Person">1 Person</option>
                <option value="2 People">2 People</option>
                <option value="3 People">3 People</option>
                <option value="4 People">4 People</option>
                <option value="5 People">5 People</option>
                <option value="6 People">6 People</option>
                <option value="7 People">7 People</option>
                <option value="8 People">8+ People</option>
              </optgroup>              
            </select>           
      </div>

      

      <br />
            <input type="text" id="datepicker" value="Select a Date" />
      <br />
      <br />

      <select class="time">
        <option disabled selected>Time</option>
        <option>7:00 A.M.</option>
        <option>7:30 A.M.</option>
        <option>8:00 A.M.</option>

        <option>8:30 A.M.</option>
        <option>9:00 A.M.</option>
        <option>9:30 A.M.</option>

        <option>10:00 A.M.</option>
        <option>10:30 A.M.</option>
        <option>11:00 A.M.</option>
        
        <option>11:30 A.M.</option>
        <option>12:00 P.M.</option>
        <option>12:30 P.M.</option>

        <option>1:00 P.M.</option>
        <option>1:30 P.M.</option>
        <option>2:00 P.M.</option>
      </select>

     
        <!-- dialog form2 -->
        <div class="dialog__container" id="dialog-form2" title="">
          <div class="modal__reservations-header"></div>
        
          <form class="modal__form2">
            <div class="modal__reservations-socialLogin" style="z-index:2;">
            

              <div class="modal__social-login-wrapper">
                <!-- google login api -->
                  <div class="g-signin2" data-width="300" data-height="40" data-longtitle="true" data-onsuccess="onSignIn"></div>

                  <br />
                <!-- The JS SDK Login Button -->
                <div onlogin="checkLoginState();" class="fb-login-button" data-size="large" data-button-type="login_with" data-layout="default" data-auto-logout-link="false" data-use-continue-as="false" data-width="300"></div>
                                  
            </div>

          </form>



        </div>
        

  <!-- <div id="dialog-message" title="Download complete">
  <p>
    <span class="ui-icon ui-icon-circle-check" style="float:left; margin:0 7px 50px 0;"></span>
    Your files have downloaded successfully into the My Downloads folder.
  </p>
  <p>
    Currently using <b>36% of your storage space</b>.
  </p>
</div> -->
<!-- dialog form3 -->
 <div class="dialog__container" id="dialog-form3" title="">
                  <div class="modal__reservations-header"></div>

                        <form class="modal__form3">
                              <label for="">Your Information</label>
                              <div class="modal__confirm--container" style="z-index:2;">
                              
                                  <input type="text" placeholder="First Name" value="" required />
                                  <input type="text" value="" placeholder="Last Name" required />
                                  
                              </div>

                              <div><input type="text" value="" placeholder="Emaill Address"></div>
                              <div><input type="text" value="" placeholder="Phone Number"></div>

                              <br />
                              
                              <label>Summary</label>
                              <div>
                                <input type="text" value="">
                              </div>
                              <div><input type="text" value=""></div>
                              <div><input type="text" value=""></div>

                              <div><input type="text" value=""></div>
                              <div><input type="text" value=""></div>
                              <div><input type="text" value=""></div>

                              <br />

                              <span class="disclaimer">By clicking "submit" you agree to SevenRooms' <a href="#">Terms of Service</a>, <a href="http://">Privacy Policy</a> and <a href="http://">GDPR Policy</a></span>
                              <button type="submit">Submit</button>
                        </form>
                        
                  </div>
            </div>
           

    </form>
  </div>


  <button class="reservation" type="submit">Reservation</button>


  <br />
  <br />
  <br />
  <br />
  <br />
  <div class="ms-DatePicker">
  <div class="ms-TextField">
    <label class="ms-Label">Start date</label>
    <i class="ms-DatePicker-event ms-Icon ms-Icon--Event"></i>
    <input class="ms-TextField-field" type="text" placeholder="Select a date&hellip;">
  </div>
  <div class="ms-DatePicker-monthComponents">
    <span class="ms-DatePicker-nextMonth js-nextMonth"><i class="ms-Icon ms-Icon--ChevronRight"></i></span> 
    <span class="ms-DatePicker-prevMonth js-prevMonth"><i class="ms-Icon ms-Icon--ChevronLeft"></i></span> 
    <div class="ms-DatePicker-headerToggleView js-showMonthPicker"></div>
  </div>
  <span class="ms-DatePicker-goToday js-goToday">Go to today</span> 
  <div class="ms-DatePicker-monthPicker">
    <div class="ms-DatePicker-header">
      <div class="ms-DatePicker-yearComponents">
        <span class="ms-DatePicker-nextYear js-nextYear"><i class="ms-Icon ms-Icon--ChevronRight"></i></span> 
        <span class="ms-DatePicker-prevYear js-prevYear"><i class="ms-Icon ms-Icon--ChevronLeft"></i></span> 
      </div>
      <div class="ms-DatePicker-currentYear js-showYearPicker"></div>
    </div>
    <div class="ms-DatePicker-optionGrid">
      <span class="ms-DatePicker-monthOption js-changeDate" data-month="0">Jan</span> 
      <span class="ms-DatePicker-monthOption js-changeDate" data-month="1">Feb</span> 
      <span class="ms-DatePicker-monthOption js-changeDate" data-month="2">Mar</span> 
      <span class="ms-DatePicker-monthOption js-changeDate" data-month="3">Apr</span> 
      <span class="ms-DatePicker-monthOption js-changeDate" data-month="4">May</span> 
      <span class="ms-DatePicker-monthOption js-changeDate" data-month="5">Jun</span> 
      <span class="ms-DatePicker-monthOption js-changeDate" data-month="6">Jul</span> 
      <span class="ms-DatePicker-monthOption js-changeDate" data-month="7">Aug</span> 
      <span class="ms-DatePicker-monthOption js-changeDate" data-month="8">Sep</span> 
      <span class="ms-DatePicker-monthOption js-changeDate" data-month="9">Oct</span> 
      <span class="ms-DatePicker-monthOption js-changeDate" data-month="10">Nov</span> 
      <span class="ms-DatePicker-monthOption js-changeDate" data-month="11">Dec</span> 
    </div>
  </div>
  <div class="ms-DatePicker-yearPicker">
    <div class="ms-DatePicker-decadeComponents">
      <span class="ms-DatePicker-nextDecade js-nextDecade"><i class="ms-Icon ms-Icon--ChevronRight"></i></span> 
      <span class="ms-DatePicker-prevDecade js-prevDecade"><i class="ms-Icon ms-Icon--ChevronLeft"></i></span> 
    </div>
  </div>
</div>
  
<script type="text/javascript">
  var DatePickerElements = document.querySelectorAll(".ms-DatePicker");
  for (var i = 0; i < DatePickerElements.length; i++) {
    new fabric['DatePicker'](DatePickerElements[i]);
  }
</script>







<script>

  
$( function() {
    var isVerified = false;
  
    var dialog,
        dialog2,
        dialog3,
        form,
        form2,
        form3,
                
        emailRegex = /^[a-zA-Z0-9.!#$%&'*+\/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/,
        name = $( "#name" ),
        email = $( "#email" ),
        password = $( "#password" ),
        allFields = $( [] ).add( name ).add( email ).add( password ),
        tips = $( ".validateTips" );

    // function addUser() {
    //   var valid = true;
    //   allFields.removeClass( "ui-state-error" );
 
    //   valid = valid && checkLength( name, "username", 3, 16 );
    //   valid = valid && checkLength( email, "email", 6, 80 );
    //   valid = valid && checkLength( password, "password", 5, 16 );
 
    //   valid = valid && checkRegexp( name, /^[a-z]([0-9a-z_\s])+$/i, "Username may consist of a-z, 0-9, underscores, spaces and must begin with a letter." );
    //   valid = valid && checkRegexp( email, emailRegex, "eg. ui@jquery.com" );
    //   valid = valid && checkRegexp( password, /^([0-9a-zA-Z])+$/, "Password field only allow : a-z 0-9" );
 
    //   if ( valid ) {
    //     $( "#users tbody" ).append( "<tr>" +
    //       "<td>" + name.val() + "</td>" +
    //       "<td>" + email.val() + "</td>" +
    //       "<td>" + password.val() + "</td>" +
    //     "</tr>" );
    //     dialog.dialog( "close" );
    //   }
    //   return valid;
    // }
      

    // intialize dialog component
    dialog = $( "#dialog-form" ).dialog({
      autoOpen: false,
      height: 700,
      width: 1350,
      modal: true,
      buttons: {
        "Find a table": function(){
          dialog2.dialog('open')
        },
        Cancel: function() {
          dialog.dialog( "close" );
        }
      },
      close: function() {
        form[ 0 ].reset();
        allFields.removeClass( "ui-state-error" );
      }
    });
    dialog2 = $( "#dialog-form2" ).dialog({
      autoOpen: false,
      height: 740,
      width: 700,
      modal: true,
      buttons: {
        "Find a table": function(){
          dialog3.dialog("open")
        },
        Cancel: function() {
          // once user verifies social login button, close this dialog and open new one.
          dialog2.dialog( "close" );
        }
      },
      close: function() {
        form[ 0 ].reset();
        allFields.removeClass( "ui-state-error" );
      }
    });
    dialog3 = $( "#dialog-form3" ).dialog({
      autoOpen: false,
      height: 740,
      width: 700,
      modal: true,
      buttons: {
        "Ok": function(){
          dialog3.dialog("open")
        },
        Cancel: function() {
          // once user verifies social login button, close this dialog and open new one.
          dialog3.dialog( "close" );
        }
      },
      close: function() {
        form[ 0 ].reset();
        allFields.removeClass( "ui-state-error" );
      }
    });
    // dialog3 = $( "#dialog-form3" ).dialog({
    //   modal: true,
    //   buttons: {
    //     Ok: function() {
    //       $( this ).dialog( "close" );
    //     }
    //   }
    // });

 


    form = dialog.find( "form" ).on( "submit", function( event ) {
      event.preventDefault();
      addUser();
    });

    // inner form after user clicks 'Find a Table'
    // form2 = dialog.find( ".modal__form2" ).on( "submit", function( event ) {
    //   event.preventDefault();
    //   addUser();
    // });
    // form3 = dialog.find( ".modal__form3" ).on( "submit", function( event ) {
    //   event.preventDefault();
    //   addUser();
    // });

 
    $( ".reservation" ).button().on( "click", function() {
      dialog.dialog( "open" );
    });


    $('#datepicker').datepicker();

  });


  // $('.datepicker').pickadate()
  </script>
    



    
<script>
  

  function onSignIn(googleUser) {
    if (googleUser.isSignedIn()) {
  var profile = googleUser.getBasicProfile();
  console.log(JSON.stringify({profile}))
  // console.log('ID: ' + profile.getId());
  // console.log('Full Name: ' + profile.getName());
  // console.log('Given Name: ' + profile.getGivenName());
  // console.log('Family Name: ' + profile.getFamilyName());
  // console.log('Image URL: ' + profile.getImageUrl());
  // console.log('Email: ' + profile.getEmail());
}}


// facebook log api
function statusChangeCallback(response) {  // Called with the results from FB.getLoginStatus().
    console.log('statusChangeCallback');
    console.log(response);                   // The current login status of the person.
    if (response.status === 'connected') {   // Logged into your webpage and Facebook.
      isVerified = true;
      testAPI();
    } else {                                 // Not logged into your webpage or we are unable to tell.
      document.getElementById('status').innerHTML = 'Please log ' + 'into this webpage.';
    }

    if(isVerified===true){
      $( "#dialog-form2" ).dialog('close');
      $( "#dialog-form" ).dialog('close');
      $( "#dialog-form3" ).dialog('open');
    }
  }

// * main function for calling
  function checkLoginState() {               // Called when a person is finished with the Login Button.
    FB.getLoginStatus(function(response) {   // See the onlogin handler
      statusChangeCallback(response);
    
    });
  }


  window.fbAsyncInit = function() {
    FB.init({
      appId      : '329313978401915',
      cookie     : true,                     // Enable cookies to allow the server to access the session.
      xfbml      : true,                     // Parse social plugins on this webpage.
      version    : 'v8.0'           // Use this Graph API version for this call.
    });


    FB.getLoginStatus(function(response) {   // Called after the JS SDK has been initialized.
      statusChangeCallback(response);        // Returns the login status.
    });
  };
 
  function testAPI() {                      // Testing Graph API after login.  See statusChangeCallback() for when this call is made.
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML = 'Thanks for logging in, ' + response.name + '!';
            
    });
  }
</script>
   



</body>
</html>