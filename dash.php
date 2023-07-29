<HTML>

<head>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <script>
            $(document).ready(function() {
                  $("button").click(function() {
                        var dataId = $(this).attr("id");

                        $.post("DisplayItems.php", {
                              suggest: dataId
                        }, function(result) {
                              $("#contents").html(result);
                        });
                  });

                  $("#po").click(function() {
                        $.post("PlaceOrder.php", {
                              suggest: 3
                        }, function(result) {
                              $("#contents").html(result);
                        });
                  });
            });
      </script>
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<BODY>
      <div class="container" >

            <div class="row" style="background-color:#00699d; color:#ffffff;border-radius: 0.2em;">
                  <div class="col-8">
                        <h3 style="color: rgb(29, 29, 29);">PHARMACY BY SHREE</h3>
                  </div>
                  <div class="col-2"><a href="PlaceOrder.php" id="po" style="color: #230237; font-weight:bold">Place Order</a></div>


                  <div class="col-2"><a href="Homepage.html" style="color: #230237; font-weight:bold">Log Out <?php session_start();echo $_SESSION['Uname']; ?></a></div>
            </div>


            <div class="row" style="margin:25px;">

                  <div class="shadow-sm p-3 mb-5 bg-white rounded">
                        <div class="col-4"> </div>

                        <?php
                        $con = mysqli_connect("localhost", "root", "", "pharmacybyshree");
                        $qry = "select * from medicine";
                        $run = mysqli_query($con, $qry);
                        while ($rows = mysqli_fetch_array($run)) {

                              echo '<button id=' . $rows['Category'] . '></button><br><blockquote class="blockquote text-center">' . $rows['CatDesc'] . '</blockquote><br>';
                        }
                        ?>

                  </div>

                  <div class="col-8 shadow p-3 mb-5 bg-white rounded">
                        <div class="col-8" id="contents"x>
                              <div class="card-columns">
                                    <?php
                                    $i = 1;
                                    $qry = 'select * from medicine';
                                    $run = mysqli_query($con, $qry);
                                    while ($rows = mysqli_fetch_array($run)) {
                                    }
                                    ?>

                              </div>

                        </div>
                  </div>
            </div>
      </div>
</BODY>

</HTML>