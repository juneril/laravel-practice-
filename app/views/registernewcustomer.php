<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <!-- Bootstrap -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-slide-dropdown">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Customer App</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-slide-dropdown">
          <ul class="nav navbar-nav">
            <li><a href="/home">Home</a></li>
            <li><a href="customers">Customers</a></li>
            <li><a href="/manage">Manage</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Categories <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="#">Separated link</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Link</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Action</a></li>
                <li><a href="#">Another action</a></li>
                <li><a href="#">Something else here</a></li>
                <li class="divider"></li>
                <li><a href="/jun">Log out</a></li>
              </ul>
            </li>
          </ul>
          </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="container">
          <div class="container" id="wrap">
            <div class="row">
              <div class="col-md-6 col-md-offset-3">
                <form action="r" method="post" accept-charset="utf-8" class="form" role="form">   <div class="legend">Register Customers</div>
                
                <div class="row">
                  <div class="col-xs-6 col-md-6">
                    <input type="text" name="firstname" value="" class="form-control input-lg" id="firstname" placeholder="First Name"  />                        </div>
                    <div class="col-xs-6 col-md-6">
                      <input type="text" name="lastname" value="" class="form-control input-lg" id="lastname"placeholder="Last Name"  />                        </div>
                    </div>
                    <input type="text" name="address" value="" class="form-control input-lg" id="address" placeholder="Address"  />
                    <input type="text" name="faname" value="" class="form-control input-lg" id="fathersname" placeholder="Fathers Name"  />
                    <input type="text" name="maname" value="" class="form-control input-lg" id= "mothersname" placeholder="Mothers Name"  />                    <label>Birth Date</label>                    <div class="row">
                    <div class="col-xs-4 col-md-4">
                      <select name="month" id="month" class = "form-control input-lg">
                        <option >Jan</option>
                        <option >Feb</option>
                        <option >Mar</option>
                        <option >Apr</option>
                        <option >May</option>
                        <option >Jun</option>
                        <option >Jul</option>
                        <option >Aug</option>
                        <option >Sep</option>
                        <option >Oct</option>
                        <option >Nov</option>
                        <option >Dec</option>
                      </select>                        </div>
                      <div class="col-xs-4 col-md-4">
                        <select name="day" id="day" class = "form-control input-lg">
                          <?php
                          for($i=1;$i<=31;$i++){
                          echo  "<option >$i</option>";}
                          ?>
                        </select>                        </div>
                        <div class="col-xs-4 col-md-4">
                          <select name="year" id = "year" class = "form-control input-lg">
                            <?php
                            for($i=1935;$i<=date("Y");$i++){
                            echo  "<option>$i</option>";}
                            ?>
                          </select>                        </div>
                        </div>
                        <label>Gender : </label>   <label class="radio-inline">
                        <input type="radio" id="genderMale" name="sex" value="Male" checked>Male
                      </label><label class="radio-inline">
                      <input type="radio" id= "genderFemale" name="sex" value="Female">Female
                    </label>
                    
                    <br />
                    
                    <a href="javascript:insertcustomers()"  id="btn-signup" class="btn btn-lg btn-primary btn-block signup-btn" ></i> &nbsp Submit</a>
                    <p style="text-align:center;" id="test1"></p>
                 
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="bower_components/jquery/dist/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
      <script src="js/insertcustomer.js"></script>
      <script>
      
      $(document).ready(function(){
  $("#btn-signup").click(function(){
    $("#test1").text("Succesfully Save!");
  });});
  </script>
    </body>
  </html>