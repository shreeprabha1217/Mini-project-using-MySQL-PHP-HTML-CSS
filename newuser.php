<HTML>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<BODY>
  <?php
  session_start();
  $_SESSION['cart'] = "";
  ?>
  <div class="container">

    <div class="row" style="height: 5%;background-color:#00699d; color:#ffffff; border-radius:0.2em;">
      <div class="col-8">
        <h3 style="color: rgb(29, 29, 29);">pharmacybyshree </h3>
      </div>
  
    </div>
    <div class="row" style="height: 10%; ">
      <div class="col-12"></div>

    </div>
    <span class="align-middle">
      <div class="row">
        <div class="col">

        </div>

        <div class="colcol-lg-2" style="background-color: #00699d; padding:30px; border-color:#230237; border-style: solid;border-width: thin;width:40%;">
          <form method="POST" Action="saveuser.php">
            <div class="form-group">
              <label for="exampleInputName" style="font-weight: bold; font-size:25px;">User Name</label>
              <input type="string" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Enter Your Name">
              <small id="emailHelp" class="form">Enter a User Name that your will remember.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" style="font-weight: bold; font-size:25px;">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
              <small id="passwordHelp" class="form">Keep it cryptic as possible.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" style="font-weight: bold; font-size:25px;">Confirm Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm Password" name="cpassword">

            </div>
            <div class="form-group">
              <label for="exampleInputPhone" style="font-weight: bold; font-size:25px;">Contact Number</label>
              <input type="String" class="form-control" id="PhoneNo" placeholder=" Contact Number" name="phoneno">

            </div>
            <div class="form-group">
              <label for="exampleInputemail" style="font-weight: bold; font-size:25px;">EmailID</label>
              <input type="String" class="form-control" id="Email" placeholder=" Email ID" name="email">

            </div>
            <div class="form-group">
              <label for="exampleInputPhone" style="font-weight: bold; font-size:25px;">Delivery Address</label>
              <input type="String" class="form-control" placeholder=" Delivery Adderess" name="DeliAdd">

            </div>
            <div class="form-group">
              <label for="exampleInputemail" style="font-weight: bold; font-size:25px;">City</label>
              <input type="String" class="form-control" id="city" placeholder=" City" name="city">

            </div>
            <button type="submit" class="btn btn-primary" style="background-color: rgb(29, 29, 29);">Submit</button>
          </form>
        </div>
        <div class="col -md-auto">

        </div>
      </div>
    </span>
    <div class="row" style="height: 10%; ">
      <div class="col-12"></div>

    </div>
  </div>
</BODY>

</HTML>