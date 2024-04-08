<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SVS</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;
        
      }
      
      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>

  </head>
  <body>
    
  <div class="container">
    <nav class="navbar navbar-default navbar-fixed-top navbar-inverse
    " role="navigation">
      <div class="container">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-header">
          <a href="cpanel.php" class="navbar-brand headerFont text-lg">Simple Voting System</a>
        </div>
      
        <div class="collapse navbar-collapse" id="example-nav-collapse">
          <ul class="nav navbar-nav">
            
             <li><a href="nomination.html"><span class="subFont"><strong>Nominations</strong></span></a></li>
            <li><a href="changePassword.php"><span class="subFont"><strong>Change Password</strong></span></a></li>
            <li><a href="users.php"><span class="subFont"><strong>Voters</strong></span></a></li> 
            <!-- <li><a href="feedbackReport.php"><span class="subFont"><strong>Feedback Report</strong></span></a></li>  -->
          
          </ul>
          
          
          <span class="normalFont"><a href="index.html" class="btn btn-danger navbar-right navbar-btn" style="border-radius:0%">Logout</a></span></button>
        </div>

      </div> <!-- end of container -->
    </nav>

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px outset gray;">
          
          <div class="page-header text-center">
            <h2 class="specialHead">ADMIN PANEL</h2>
            <p class="normalFont">Displaying all voting results</p>
          </div>
          
          <div class="col-sm-12">
            <?php
              require 'config.php';

              $AAP=0;
              $BSP=0;
              $BJP=0;
              $CPI=0;
              $INC=0;
              $NPP=0;

              $conn = mysqli_connect($hostname, $username, $password, $database);
              if(!$conn)
              {
                echo "Error While Connecting.";
              }
              else
              {

                //AAP
                $sql ="SELECT * FROM tbl_users WHERE voted_for='AAP'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $AAP++;
                  }

                  $aap_value= $AAP*10;

                  echo "<strong>AAP</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-danger' role='progressbar' aria-valuenow=\"$aap_value\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$aap_value."%'>
                      <span class='sr-only'>AAP</span>
                    </div>
                  </div>
                  ";
                }

                // BSP
                $sql ="SELECT * FROM tbl_users WHERE voted_for='BSP'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $BSP++;
                  }


                  $bsp_value= $BSP*10;

                  echo "<strong>BSP</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-info' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$bsp_value."%'>
                      <span class='sr-only'>BSP</span>
                    </div>
                  </div>
                  ";
                }

                // BJP
                $sql ="SELECT * FROM tbl_users WHERE voted_for='BJP'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $BJP++;
                  }


                  $bjp_value= $BJP*10;

                  echo "<strong>BJP</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-warning' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$bjp_value."%'>
                      <span class='sr-only'>BJP</span>
                    </div>
                  </div>
                  ";
                }

                // CPI
                $sql ="SELECT * FROM tbl_users WHERE voted_for='CPI'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $CPI++;
                  }


                  $cpi_value= $CPI*10;

                  echo "<strong>CPI</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-success' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$cpi_value."%'>
                      <span class='sr-only'>CPI</span>
                    </div>
                  </div>
                  ";
                }

                // INC
                $sql ="SELECT * FROM tbl_users WHERE voted_for='INC'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $INC++;
                  }


                  $inc_value= $INC*10;

                  echo "<strong>INC</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$inc_value."%'>
                      <span class='sr-only'>INC</span>
                    </div>
                  </div>
                  ";
                }


                //NPP
                $sql ="SELECT * FROM tbl_users WHERE voted_for='NPP'";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $NPP++;
                  }


                  $npp_value= $NPP*10;

                  echo "<strong>NPP</strong><br>";
                  echo "
                  <div class='progress'>
                    <div class='progress-bar progress-bar-primary' role='progressbar' aria-valuenow=\"70\" aria-valuemin=\"0\" aria-valuemax=\"100\" style='width: ".$npp_value."%'>
                      <span class='sr-only'>NPP</span>
                    </div>
                  </div>
                  ";
                }


               echo "<hr>";

                $total=0;

                // Total
                $sql ="SELECT * FROM tbl_users";
                $result= mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0)
                {
                  while($row= mysqli_fetch_assoc($result))
                  {
                    if($row['voted_for'])
                      $total++;
                  }


                  $tptal= $total*10;

                  
                  echo "
                  <div class='text-primary text-center'>
                    <h3 class='normalFont'>TOTAL VOTES : $total </h3>
                  </div>
                  ";
                }

              }
            ?>
          </div>

        </div>
      </div>
    </div>
  </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
