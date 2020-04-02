<?php
    session_start();
    function DayToVal($day){
      if($day=="Monday"){
        return 0;
      }
      else if($day=="Tuesday"){
        return 1;
      }
      else if($day=="Wednesday"){
        return 2;
      }
      else if($day=="Thursday"){
        return 3;
      }
      else if($day=="Friday"){
        return 4;
      }
      else if($day=="Saturday"){
        return 5;
      }
      else{
        return -1;
      }

    }

    $output="";
    $inputTime=$_POST['setTime'];
    $inputDay=$_POST['day'];
    // echo $inputDay;
    if (isset($_POST['subTime'])) { 
      $handle=fopen("assets/timeTable.txt","r");
      $Not="absent";
      if(strcmp(chop(fgets($handle)),$Not)==0)
      {
        $output="Mriganka is Not in Kanpur.";
      } 
      else{
        $a=chop(fgets($handle));
        while(DayToVal($a)!=$inputDay){
          $a=chop(fgets($handle));
        }
        $a=chop(fgets($handle));
        while(DayToVal($a)!=$inputDay+1 && !feof($handle)){
          $b=chop(fgets($handle));
          if(strtotime($a)<=strtotime($inputTime) && strtotime($b)>=strtotime($inputTime)){
            $output=fgets($handle);
            break;
          }
          fgets($handle);
          $a=chop(fgets($handle));
        }
      }
    } 
    
    if($_POST['user']=="mriganka" && hash('sha256',$_POST['pass'])=='34f4c338652669ecfd1e7362bb7ecf34a0a3470a3fc5bfb726c89f0fac3068e4')
    {
       $_SESSION['validity']=1;
       header('Location: admin.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="myscripts.js"></script>
    <link rel="stylesheet" href="css/stylesubjects.css">
</head>

<body style="background-color: rgb(62, 146, 62);">
  

  <header>
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="https://www.cse.iitk.ac.in/">Dept. Of CSE, IIT Kanpur</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarText">
          <div class="mr-auto"></div>
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.html">About Me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="education.html">My Education</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="subjects.html">Subjects Studied</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="#">Where am I?<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact <span class="sr-only">(current)</span></a>
            </li>
          </ul>
          <span class="navbar-text">
            <a href= "https://en.wikipedia.org/wiki/List_of_Indian_independence_activists" style="color:orange">Jai Hind.</a><a href= "https://en.wikipedia.org/wiki/List_of_Indian_independence_activists"> Vande</a> <a href= "https://en.wikipedia.org/wiki/List_of_Indian_independence_activists" style="color:green">Mataram</a>.
          </span>
        </div>
      </nav>
  </header>
  <div class="container" style="background-color: rgb(230, 187, 130);">
    <div class="row">
      <div class="col-md-1"></div>
      <div class="col-md-3 text-center">
        <br>
        <h4>Check where Mriganka is</h4>
          <p><strong>If you find him free at your time, call and setup a meeting.</strong></p>
          <div class="container">
            <form method="POST">
              <div class="form-group">
                <label>Day:</label>
                <select name="day" class="browser-default custom-select" required>
                  <option value="0">Monday</option>
                  <option value="1">Tuesday</option>
                  <option value="2">Wednesday</option>
                  <option value="3">Thursday</option>
                  <option value="4">Friday</option>
                  <option value="5">Saturday</option>
                </select>
              </div>
              <div class="form-group">
                <label>Time(Military Time if on desktop):</label>
                <div>
                  <input type="time" name="setTime" id="inputMDEx1" class="form-control" required>
                </div>
              </div>
              <button type="submit" name="subTime" class="btn btn-primary">Check</button>
            </form>
          </div>

      </div>

      <div class="col-md-4 text-center">
        
          <?php
          if (isset($_POST['subTime'])) { 
            echo "<br><br><br><br><br><br><h2>MRIGANKA IS</h2>";
            echo "<div class=\"container\">";
            if(chop($output)==""){
            echo "<h3>a free soul. Call him to know where he is. :P</h3>";
            } 
            else
            {
              echo "<h3>";
              echo $output;
              echo "</h3>";
            }
            echo "</div>";
          }
          ?>
        
        
      </div>
      <div class="col-md-3 text-center">
        <br>
        <h4>LOGIN AS AN ADMIN</h4>
        <p style="color: rgb(102, 6, 25);"><strong>Be a good visitor. Dont bother brute forcing. ATITHI DEVO BHAVA.</p>
        <div class="container">
          <form method="POST">
            <div class="form-group">
              <label>Username:</label>
              <input type="text" name="user" class="form-control" required/>
            </div>
            <div class="form-group">
              <label>Password:</label>
              <input type="password" name="pass" class="form-control" required/>
            </div>
            <button type="submit" class="btn btn-primary">Verify</button>
          </form>
        </div>
      </div>
      <div class="col-md-1"></div>




    </div>
    </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>