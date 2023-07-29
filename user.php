
<HTML>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
  integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
  integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<BODY>
  <div class="container ">
    <div class="row" style="background-color: #00699d; color:#ffffff;border-radius: 0.2em  ;">
      <div class="col-8">
        <h3 style="color: rgb(29, 29, 29);">pharmacybyshree</h3>
      </div>
      
     
    </div>
    <div class="row" style="height:20%;">
    </div>
    <span class="align-middle">
      <div class="row">
        <div class="col">

        </div>

        <div class="colcol-lg-2"
          style="background-color:#00699d; padding: 35px; border-color:#230237; border-style: solid;border-width: 5%;width: 45%;">
          <form method="POST" action="userverify.php?utype=user">
            <div class="form-group">
              <label for="exampleInputName" style="font-weight: bold; font-size: 27px;">User Name</label>
              <input type="string" class="form-control" id="username" aria-describedby="emailHelp"
                placeholder="Enter Your Name" name="username" >
              <small id="emailHelp" class="form" style="color: #230237; font-size: 15px">Enter A User Name That Your Will Remember.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" style="font-weight: bold; font-size: 27px;">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password"
                name="password">
              <small id="passwordHelp" class="form" style="color: #230237; font-size: 15px">Keep It Cryptic As Possible.</small>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

            <a class="btn btn-primary" data-toggle="collapse" href="NewUser.php" role="button" aria-expanded="false"
              aria-controls="collapseExample">
              New User
            </a>
          </form>
        </div>
        <div class="col -md-auto">

        </div>
      </div>
    </span>
</BODY>

</HTML>