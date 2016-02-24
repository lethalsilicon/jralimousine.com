<!--START form.php-->

<div id="dialog" title="Trip Reservation Form">
  <!-- Form -->
    <form id="contact-form" class="clearfix" action="send_form_email.php" method="post">
      <div class="columns clearfix">
        <div>
          <label>
            <span>Pickup Location: (required)</span>
            <input placeholder="Please enter the location of pickup" type="text" tabindex="1" name="pickup" required>
          </label>
        </div>
        <div>
          <label>
            <span>Drop-off Location: (required)</span>
            <input placeholder="Please enter the location of dropoff" type="text" tabindex="2" name="dropoff" required>
          </label>
        </div>
      </div><!--END: columns-->


      <div class="columns clearfix">  
        <div>
          <label>
            <span>Date: (required)</span>
            <input placeholder="Please enter the date of your trip" type="text" tabindex="3" name="date" id="datepicker" required>
          </label>
        </div>
        <div>
          <label>
            <span>Time: (required)</span>
            <input placeholder="Please enter the time of your trip" type="text" tabindex="4" name="time" required>
          </label>
        </div>
      </div><!--END: columns-->
 
      <div class="columns clearfix">  
        <div>
          <label>
            <span>Name: (required)</span>
            <input placeholder="Please enter your name" type="text" tabindex="5" name="name" required>
          </label>
        </div>
        <div>
          <label>
            <span>Car Type: (required)</span>
            <!--<input placeholder="What car model would you like to pick you up?" type="text" tabindex="6" name="car_type" required>-->
            <select tabindex="6" name="car_type" required>
              <option value="Lincoln Town Car">Lincoln Town Car</option>
              <option value="Ford Expedition">Ford Expedition</option>
              <option value="Lincoln MKT">Lincoln MKT</option>
            </select>
          </label>
        </div>
      </div><!--END: columns-->

      <div class="columns clearfix">  
        <div>
          <label>
            <span>Email: (required)</span>
            <input placeholder="Please enter your email address" type="email" tabindex="7" name="email" required>
          </label>
        </div>
        <div>
          <label>
            <span>Telephone: (required)</span>
            <input placeholder="Please enter your number" type="tel" tabindex="8" name="telephone" required>
          </label>
        </div> 
      </div><!--END: columns-->

      <div class="columns clearfix">
        <div>
          <label>
            <span>Company: (optional)</span>
            <input placeholder="Please enter your company name" type="text" tabindex="9" name="company" required>
          </label>
        </div>
        <div>
          <label>
            <span>Special Instructions: (optional)</span>
            <textarea placeholder="Include all the details you can" tabindex="10" name="message" required></textarea>
          </label>
        </div>
      </div><!--END: columns-->

      <div>
        <button name="submit" type="submit" name="contact-submit">Send Email</button>
            <!--<a href="http://www.jralimousine.com.com/email_form.php">Email Form</a>-->
      </div>
    </form>
    <!-- /Form -->
</div><!--END: dialog-->

<!--END: form.php-->