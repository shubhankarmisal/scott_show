
<?php include("header_1.php"); ?>

  <!-- Contact Us Form -->
  <div class="container">
    <div class="contact_us py-3 mt-5">
      <h4>Contact Us</h4>

    </div>
    <h3>Leave a Message</h3>
    <p>If you have a question regarding our services,
      feel free to contact us using the form below.</p>

    <form id="add_feedback_form" method="post" action="engine1.php">
      <!-- <input type="hidden" name="mode" value="addfeedback"> -->
      <div class="row100" id="">
        <div class="col">
          <div class="inputBox" id="fname-inputBox">
            <input type="text" name="fnametxt">
            <span class="text">First Name</span>
            <span class="line" id="fname-line"></span>
          </div>
        </div>
        <div class="col">
          <div class="inputBox" id="lname-inputBox">
            <input type="text" name="lnametxt">
            <span class="text">Last Name</span>
            <span class="line" id="lname-line"></span>
          </div>
        </div>
      </div>
      <div class="row100" id="email-row100">
        <div class="col">
          <div class="inputBox" id="email-inputBox">
            <input type="email" name="emailtxt" pattern="[^ @]*@[^ @]*" >
            <span class="text">Email ID</span>
            <span class="line" id="email-line"></span>
          </div>
      </div>
        <div class="col">
          <div class="inputBox" id="tel-inputBox">
            <input type="number" name="m_numtxt">
            <span class="text">Mobile Number</span>
            <span class="line" id="tel-line"></span>
          </div>
      </div>
      </div>
      <div class="row100">
        <div class="col">
          <div class="inputBox textarea">
            <textarea name="msgtxt"></textarea>
            <span class="text">Type your message Here...</span>
            <span class="line"></span>
          </div>
        </div>
      </div>
      <div class="row100">
        <div class="col">
          <div class="submitbutton">
            <button class="btn submitbtn" type="submit">Submit</button>
          </div>
        </div>
      </div>
      
    </form>
  </div>
  
  <?php include("footer_1.php"); ?>

  <script>

$( "#add_feedback_form" ).submit(function( event ) {
 
 // Stop form from submitting normally
 event.preventDefault();

 // Get some values from elements on the page:
 var $form = $( this ),
   f_fnametxt = $form.find( "input[name='fnametxt']" ).val(),
   f_lnametxt = $form.find( "input[name='lnametxt']" ).val(),
   f_emailtxt = $form.find( "input[name='emailtxt']" ).val(),
   f_m_numtxt = $form.find( "input[name='m_numtxt']" ).val(),
   f_msgtxt = $form.find( "textarea[name='msgtxt']" ).val(),
   url = $form.attr( "action" );

 // Send the data using post
 var posting = $.post( url, { 'fnametxt': f_fnametxt,
                              'lnametxt': f_lnametxt, 
                              'emailtxt': f_emailtxt, 
                              'm_numtxt': f_m_numtxt, 
                              'msgtxt': f_msgtxt, 
                              'mode': 'add_feedback' } );

 // Put the results in a div
 posting.done(function( data ) {
   alert(data);
   location.reload(true);
 });
});

  </script>

      