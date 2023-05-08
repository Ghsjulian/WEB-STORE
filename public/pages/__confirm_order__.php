<section id="Dashboard" class="tab">
  <div class="product-area">
    <h2>Fill Out This Form</h2>
    <center>
      <strong>
        We deliver our products within 24 hours. To buy this product you
        must have to enter Your correct information.
      </strong>
    </center>
    <div id="login" class="login">
      <center>
        <h1>
          Enter
          <span>Address</span>
        </h1>
    <?php
session_start();
echo $_SESSION['u_id'];

?>
        <!--<img src="svg/profile-circle.svg" />--->
        <form id="myfrm" action="#" method="POST">
          <p style="display: none" class="_error"></p>
          <p style="display: none" class="_success"></p>
          <label for="username">
            <i class="fas fa-user"></i>
          </label>
          <input
          type="text"
          name="Confirm_Order"
          placeholder="Enter Full Name "
          value="Confirm_Order"
          id="action"
          autocomplete="on"
          hidden="true"
          />
        <input
        type="text"
        name="user_name"
        placeholder="Enter Full Name "
        id="user_name"
        autocomplete="on"
        onfocus="true"
        />
      <input
      type="text"
      name="user_location"
      placeholder="Enter Your Location "
      id="location"
      autocomplete="on"
      onfocus="true"
      />
    <input
    type="number"
    name="user_phone"
    placeholder="Enter Phone Number"
    id="user_phone"
    autocomplete="on"
    onfocus="true"
    />
  <button class="__confirm" type="submit" id="__btn">Send</button>
</form>
</center>
</div>
</div>
</section>