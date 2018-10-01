<!DOCTYPE html>
<html>
<title>Gatherly</title>
<head>
  <link rel="shortcut icon" type="image/jpg" href="icons/g.jpg">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Open Sans", sans-serif, background-color:#e6ffff}
.footer
{
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: grey;
    color: white;
    text-align: center;
}
</style>
<body class="w3-theme-15", background-color="#e6ffff">

<!-- Navbar -->
<div class="w3-top">
 <div class="w3-bar w3-theme-d2 w3-left-align w3-large">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4"><i class="fa fa-home w3-margin-right"></i>Gatherly</a>
  <div class="pull-right">
  <form method="post" action="server/logout.php">
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-theme-d4" type="submit" class="btn navbar-btn btn-danger" name="logout" id="logout"  value="Log Out"><i class="fa fa-sign-out w3-margin-right"></i>Log Out</a>
  </form>
</div>
  </div>
 </div>
</div>


<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1300px;margin-top:80px">    
  <!-- The Grid -->
  <div class="w3-row">
    <!-- Left Column -->
    <div class="w3-col m3">
      <!-- Accordion -->
      <div class="w3-card w3-round">
        <div class="w3-white">
          <button onclick="myFunction('Demo1')"class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i>My Profile</button>
          <div id="Demo1" class="w3-hide w3-container">
          <p>Email id: <?php  if(!isset($_SESSION)){session_start(); } echo $_SESSION['Email']; ?> </p> 
          <p>First Name: <?php echo $_SESSION['FirstName']; ?> </p>
          <p>Last Name: <?php echo $_SESSION['LastName']; ?> </p>
          <p>Phone no: <?php echo "Not yet"; ?> </p>
          </div>
          <button onclick="myFunction('Demo2')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-users fa-fw w3-margin-right"></i> My Groups</button>
          <div id="Demo2" class="w3-hide w3-container">
            <h3>Groups you belong</h3>
            <ul>
            <li>fordFanatics</li>
            <li>tesla mavericks</li>
            <li>Chevy enthusiast</li>
            </ul>
          </div>
          <button onclick="myFunction('Demo3')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-circle-o-notch fa-fw w3-margin-right"></i>Create a group</button>
          <div id="Demo3" class="w3-hide w3-container">
            <div class="modal fade" id="createChannel" role="dialog">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Create a new group</h4>
                <h6>Share a message, picture, story anything you like with the group.</h6>
              </div>
              <div class="modal-body newChannelDetails">
                <form role="form" id="createChannelForm">
                  <div class="row">
                  <div class="form-group">
                    <div class="uniqueChannel"></div>
                    <form action="/action_page.php">
                    <input type="text" name="Groupname" placeholder="Group Name"><br>
                    </form>
                  </div>
              </div>

            <div class="row">
              <span class="type">Group style</span>
              <div class="form-group">
                <label class="radio-inline">
                    <input type="radio" name="type" value="private" checked>Private
                  </label>
                  <label class="radio-inline">
                    <input type="radio" name="type" value="public">Public
                  </label>
                </div>
            </div>
              <div class="row">
                  <div class="form-group">
                    <span class='invites'>Invite your friends</span>
                    <div class="channelInvites">
                    </div>
                  </div>
              </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-default createChannelBtn" data-dismiss="modal">Create Group</button>
              </div>
            </div>
          </div>
      </div>

          </div>
          
          <button onclick="myFunction('Demo4')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-calendar-check-o fa-fw w3-margin-right"></i>My Events</button>
          <div id="Demo4"class="w3-hide w3-container">
          <p>Fall break</p>
          </div>
          <button onclick="myFunction('Demo5')" class="w3-button w3-block w3-theme-l1 w3-left-align"><i class="fa fa-picture-o fa-fw w3-margin-right"></i>My Photos</button>
          <div id="Demo5" class="w3-hide w3-container">
            <img src="icons/g.jpg" alt="Trulli" width="250" height="250">
          </div>
        </div>      
      </div>
      <br>
      

      <!-- Alert Box -->
      <div class="w3-container w3-display-container w3-round w3-theme-l4 w3-border w3-theme-border w3-margin-bottom w3-hide-small">
        <span onclick="this.parentElement.style.display='none'" class="w3-button w3-theme-l3 w3-display-topright">
          <i class="fa fa-remove"></i>
        </span>
        <p>Google Analytics who viewed your profile</p>
      </div>
    
    <!-- End Left Column -->
    </div>
    
    <!-- Middle Column -->
    <div class="w3-col m7">
  
      <div class="w3-row-padding">
        <div class="w3-col m12">
          <div class="w3-card w3-round w3-white">
            <div class="w3-container w3-padding">
              <h6 class="w3-opacity">Share something with the world</h6>
              
                <form method="POST" action="server/writePost.php">
                    <input type="text" id="postMessage" name="postMessage" placeholder="Whats on your mind" contenteditable="true" class="w3-border w3-padding">
                    <button name="postTheMessage" type="submit" class="w3-button w3-theme"><i class="fa fa-pencil"></i>Post</button> 
              </form>

            </div>
          </div>
        </div>
      </div>
  

      <?php

      
      include_once "./server/loginService.php";
      include_once "./server/loginSQL.php";

       if(!isset($_SESSION))
       {
           session_start();
       }

      $userId = $_SESSION['UserId'];

      $loginWebService = new LoginWebService();

      $login = $loginWebService -> getAllGlobalPosts();
      $var = 1;

  if(!empty($login))
  {
         foreach($login as $i => $item) {
          $getPosterDetails = $loginWebService -> getPosterDetails($login[$i]['MessageUserId']);
        // var_dump($getPosterDetails);
         echo "<div class='w3-container w3-card w3-white w3-round w3-margin'><br>";
         echo "<span class='w3-right w3-opacity'>" . $login[$i]['TimeOfPost'] . "</span>";
         echo "<h4>" . $getPosterDetails[0]['PostFirstName'] . " " . $getPosterDetails[0]['PostLastName'] . "</h4><br>";
         echo "<p>" . $login[$i]['message'] ."</p>";
         echo "<button type='button' class='w3-button w3-theme-d2 w3-margin-bottom'><i class='fa fa-Loveit'></i>love it</button>"; 
         echo "<button type='button' class='w3-button w3-theme-d2 w3-margin-bottom'><i class='fa fa-comment'></i>  Comment</button>"; 
         echo " </div>";

      }
  }
  else{
    echo "no posts to be displayed.";
  }

      ?>

    </div>
    
</div>
<br>

<!-- Footer -->
<div class="footer">
  <p>&copy;fordFanatics</p>
</div>

<script>

   document.getElementById("logout").onclick = function(){

     location.href = "http://qav2.cs.odu.edu/fordFanatics/server/logout.php";
 };

      function myFunction(id) {
          var x = document.getElementById(id);
          if (x.className.indexOf("w3-show") == -1) {
              x.className += " w3-show";
              x.previousElementSibling.className += " w3-theme-d1";
          } else { 
              x.className = x.className.replace("w3-show", "");
              x.previousElementSibling.className = 
              x.previousElementSibling.className.replace(" w3-theme-d1", "");
          }
      }

// Used to toggle the menu on smaller screens when clicking on the menu button
    function openNav() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else { 
            x.className = x.className.replace(" w3-show", "");
        }
    }

</script>

</body>
</html> 
