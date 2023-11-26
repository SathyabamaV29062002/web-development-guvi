<?php 

session_start();
$USERID = $_SESSION["USERID"];

if($USERID == '')
{
    session_destroy();

    header('location:index.php');
}

// Fetch User All data using USERID

include('config.php');

$query = "SELECT USERNAME,EMAIL,PASSWORD,AGE,GENDER,DOB,CONTACT FROM users WHERE USER_ID = '$USERID'";

$result = mysqli_query($conn,$query);

if($result)
{

   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

   $USERNAME = $row["USERNAME"];
   $EMAIL = $row["EMAIL"];
   $PASSWORD = $row["PASSWORD"];
   $AGE = $row["AGE"];
   $GENDER = $row["GENDER"];
   $DOB = $row["DOB"];
   $CONTACT = $row["CONTACT"];
}
else
{
    echo "<script> alert('Unexpected Error'); </script>";
}
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User profile</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profile.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="profile_body">

    <div class="Nav">
    <h1>Welcome <?php echo $USERNAME ?></h1>
    <div class="navi_1" id="navibar">
    <button type="button" class="btn btn-link"><a href="Home.php">Home</a></button>
    <button type="button" class="btn btn-link"><a href="profile.php">Profile</a></button>
    <button type="button" class="btn btn-link"><a href="logout.php">Logout</a></button>
     <button type="button" class="btn btn-link">Logout</button> -->
    <!-- </div>
    </div> --> 
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/ae360af17e.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylee.css">
    
    <title>title</title>
</head>
<style>
body {
  background-image: url("userimage.jpg");
}
</style>
<body>
    <div class="wrapper">
        <!-- Sidebar -->
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <a href="#">DASHBOARD</a>
                </div>
                <!-- Sidebar Navigation -->
                <ul class="sidebar-nav my-1 ">

                    <li class="sidebar-item">
                        <a href="Home.php" class="sidebar-link">
                            <i class="fa-solid fa-file pe-2"></i>
                            HOME
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="profile2.php" class="sidebar-link">
                            <i class="fa-solid fa-home pe-2"></i>
                            EDIT PROFILE
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a href="logout.php" class="sidebar-link">
                            <i class="fa-solid fa-sign-out-alt pe-2"></i>
                            LOGOUT
                        </a>
                    </li>

                </ul>

            </div>
        </aside>
        <!-- Main Component -->
        <div class="main ms-5 offset-md-5">
            


            <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="viewport"
      content="width=
    , initial-scale=1.0"
    />
    <script
      src="https://kit.fontawesome.com/ae360af17e.js"
      crossorigin="anonymous"
    ></script>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <title>Document</title>

    <style>
      .profile-card {
        border: solid 50px white; 
         border-radius: 0px;
         margin:right;
      }
      .center-align {
        justify-content: center;
        align-items: center; /* Set a specific height for the container */
      }
    </style>
  </head>

  <body>
    <div class="profile-card container mt-5 p-5 flex-row d-flex me-5">
      <div class="container col-4 center-align">
        
        <div>
          <img
            src="https://th.bing.com/th/id/OIP.audMX4ZGbvT2_GJTx2c4GgHaHw?pid=ImgDet&rs=1"
            class="img-thumbnail rounded"
            alt=""
          />
        </div>
      </div>
      <div class="col-8 my-auto d-flex">
        <div class="col-2 p-3">
          <div class="text-end fs-5 fw-bold mt-3">NAME:</div>
          <div class="text-end fs-5 fw-bold mt-3">EMAIL:</div>
          <div class="text-end fs-5 fw-bold mt-3">DOB:</div>
          <div class="text-end fs-5 fw-bold mt-3">GENDER:</div>
          <div class="text-end fs-5 fw-bold mt-3">CONTACT:</div>
        </div>
        <div class="col-8 py-3">
          <div class="mt-3 fs-5"><?php echo $USERNAME ?></div>
          <div class="mt-3 fs-5"><?php echo $EMAIL ?></div>
          <div class="mt-3 fs-5"><?php echo $DOB ?></div>
          <div class="mt-3 fs-5"><?php echo $GENDER ?></div>
          <div class="mt-3 fs-5"><?php echo $CONTACT ?></div>
          <div class="mt-3 fs-5"></div>
        </div>
      </div>
    </div>
  </body>
</html>



        </div>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>

</html>

    <!-- <div class="profile_div"><h2 id="subtitle">Profile<h2></div>


   
    
    <div class="update_form">
        
        <div class="mb-3">
            <label for="FullName" class="form-label">Full Name</label>
            <input type="text" class="form-control" value="<?php echo $USERNAME ?>" id="exampleFormControlInput1" name="FullName" placeholder="Ex: Raja">
        </div>
        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" value="<?php echo $EMAIL ?>" id="exampleFormControlInput1" name="Email" placeholder="name@example.com">
        </div>
        <div class="mb-3">
            <label for="Password" class="form-label">Password</label>
            <input type="password" class="form-control" value="<?php echo $PASSWORD ?>" id="exampleFormControlInput1" name="Password" placeholder="password">
        </div>
        <div class="mb-3">
            <label for="Age" class="form-label">Age</label>
            <input type="number" class="form-control" value="<?php echo $AGE ?>" id="exampleFormControlInput1" name="Age" placeholder="Age">
        </div>
        <div class="mb-3">
            <label for="Dob" class="form-label">Date Of birth</label>
            <input type="date" class="form-control" value="<?php echo $DOB ?>" id="exampleFormControlInput1" name="Dob" >
        </div>
        <div class="mb-3">
            <label for="Gender" class="form-label">Gender</label>
            <input type="text" class="form-control"  value="<?php echo $GENDER ?>" id="exampleFormControlInput1" name="Gender" placeholder="Gender">
        </div>
        <div class="mb-3">
            <label for="Contact" class="form-label">Contact</label>
            <input type="number" class="form-control" value="<?php echo $CONTACT ?>" id="exampleFormControlInput1" name="Contact" placeholder="Mobile Number">
        </div>
        <button type="submit" class="btn btn-primary" onclick="Update()">Update</button>
    
    </div>
<script>
    function Update(){

        var FullName = $("input[name=FullName]").val();
        var Email = $("input[name=Email]").val();
        var Password = $("input[name=Password]").val();
        var Age = $("input[name=Age]").val();
        var Dob = $("input[name=Dob]").val();
        var Gender = $("input[name=Gender]").val();
        var Contact = $("input[name=Contact]").val();

        var user_info = {
            FullName : FullName,
            Email:Email,
            Password:Password,
            Age:Age,
            Dob:Dob,
            Gender:Gender,
            Contact:Contact,
            UserId:<?php echo  $USERID; ?>
        }

        $.ajax({
                type: "POST",
                url: 'update.php',
                data: user_info,
                success: function(response)
                {
                    var response = JSON.parse(response);
                    if(response)
                    {
                        console.log(response.status);

                        if(response.status == 'success')
                        {
                                alert('The Record has been Updated.....');
                                location.reload();
                        }
                        else if(response.status == 'failed')
                        {
                                alert(response.error);
                        }
                    }
                    else
                    {
                        console.log('Error');
                    }
                }
        });
    } -->
</script>
    
</body>
</html>