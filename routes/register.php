
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <title>Registration</title>

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <a class="navbar-brand" href="uploads/index.php" style="font-size:30px;"><strong>Voting system-Registration</strong></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="uploads/index.php">Home <span class="sr-only"></span></a>
      </li>

    
    </ul>
    <form class="form-inline my-2 my-lg-0">
  
 <a href="../" class="btn btn-warning my-2 my-sm-0" type="submit">Already have an account?</a>
    </form>
  </div>
</nav>

    <div class="container my-4">

    <div class="card mx-auto" style="width: 20rem;"><br>
  <img class="card-img-top mx-auto" src="6496_-_Voting-512.webp" style="width: 60%; " alt="Card image cap">
  <div class="card-body">
 <form action="../api/register.php" method="POST" enctype="multipart/form-data">
     <strong> Name:</strong> <input type="text" name="name" placeholder="Name" required>&nbsp
                   <strong> Phone:</strong> <input type="number" name="mob" placeholder="Mobile" required><br><br>
                   <strong> Password:</strong><input type="password" name="pass" placeholder="Password" required>&nbsp
                    &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;<input type="password" name="cpass" placeholder="Confirm Password" required><br><br>
                    <strong>Address:</strong><input style="width: 50%" type="text" name="add" placeholder="Address" required><br><br>
                    <div id="upload" style="width: 30%">
       <strong> Upload image:</strong><input type="file" id="profile" name="image" required>
                    </div><br>
                    <div id="upload" style="width: 30%">
   <strong> Select role:</strong><br>
<select name="role" > <option value="1">Voter</option> <option value="2">Candidate</option>
                        </select><br>                   
                    </div><br>
            
 &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp;<button id="loginbtn" type="submit" name="loginbtn" class="btn btn-primary" style="width:30%"> Register</button><br><br> 
        
         
        </form>
  </div>
 
</div>
    </div>

  </form>
</body>
</html>
