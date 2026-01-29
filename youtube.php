<?php
  include 'config.php';
  if (isset($_SESSION["login_status"]) && $_SESSION["login_status"] == "false") header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="youtube.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
  <header style="margin-left:0">
    <div class="display">
      <div>
        <img src="https://uxwing.com/wp-content/themes/uxwing/download/brands-and-social-media/youtube-logo-icon.png"
          class="logo">
      </div>
      <div class="input-group" id="search-group" style="position: inherit; width: 480px;">
        <input type="text" class="form-control" placeholder="Search" id="search">
        <button onclick="searchyoutube()"><i class="fa-solid fa-magnifying-glass" id="butt"></i></button>
      </div>
      <div id="microphone" class="input-group-text dropdown">
        <button onclick="startListening()" class="dropdown-toggle" data-bs-toggle="dropdown"><i
            class="fa-solid fa-microphone"></i>
        </button>
        <ul class="dropdown-menu notification-dropdown">
          <li><a class="dropdown-item" href="#">
              <p id="output">Say something...</p>
            </a></li>
          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-microphone" id="miccro"></i></a></li>
        </ul>
      </div>
      <div class="dropdown">
        <button class="d-flex justify-content-around align-items-center" style="width: 7rem" data-bs-toggle="dropdown"
          id="create">
          <i class="fa-solid fa-plus"></i><span class="space">Create</span>
        </button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="upload.php"><i class="fa-solid fa-video"></i><span class="upload">Upload
                Video</span></a></li>
          <li><a class="dropdown-item" href="#"><i class="fa-solid fa-wave-square"></i><span class="upload">Go
                Live</span></a></li>
        </ul>
      </div>
      <div class="bell">
        <i class="fa-regular fa-bell"></i>
      </div>
      <div class="dropdown" style="background-color: whitesmoke">
        <button data-bs-toggle="dropdown">
          <i class="fa-solid fa-circle-user"></i>
        </button>
        <ul class="dropdown-menu home-dropdown">
          <li><a class="dropdown-item" href="youtube.php"><i class="fa-brands fa-google"></i>
              <span class="upload">Google Account</span></a></li>
          <li><a class="dropdown-item" href="index.php?logoutButton=true"><i
                class="fa-solid fa-right-from-bracket"></i><span class="upload">Sign Out</span></a></li>
        </ul>
      </div>
    </div>
  </header>

  <section>
    <div class="column">
      <div class="icon">
        <a href="youtube.php" class="nav-link"><i class="fa-solid fa-house"></i>
          <div class="iconn">Home</div>
        </a>
      </div>
      <div class="icon">
        <a href="#" class="nav-link"><button onclick="shorts()"><i class="fa-solid fa-circle-play"></i></button>
          <div class="iconn">Shorts</div>
        </a>
      </div>
      <div class="icon">
        <a href="history.php" class="nav-link"><i class="fa-solid fa-history"></i>
          <div class="iconn">History</div>
        </a>
      </div>
      <div class="icon" style="text-decoration: none; color: black;">
          <img
            src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=170667a&w=0&k=20&c=bsbD0qLFJ6fSUCXG_iyo7JBnmKi6T-uUblC8FNZFJoU=">
          <div class="iconn">Account</div>
        </a>
      </div>
    </div>
    <div class="videos">
      <div class="choose">
        <div class="input-group-text"><button onclick="openMusic()">Music</button></div>
        <div class="input-group-text"><button onclick="game()"> Gaming</button></div>
        <div class="input-group-text"><button onclick="stories()"> Stories</button></div>
        <div class="input-group-text"><button onclick="podcast()">Podcast </button></div>
        <div class="input-group-text"><button onclick="movies()">Movies </button></div>
        <div class="input-group-text"><button onclick="el()">English Learing</button></div>
        <div class="input-group-text"><button onclick="web()"> Web Series</button></div>
        <div class="input-group-text"><button onclick="food()"> Food Challenges</button></div>
        <div class="input-group-text"><button onclick="live()">Live </button></div>
      </div>
      <?php
        $username = $_SESSION['login_name'];
        $result = $connection->query("SELECT username, file_path, description, title FROM uploads WHERE username = '$username' ORDER BY id DESC LIMIT 9");
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
            $path = $row['file_path'];
            $description = $row['description'];
            $title = $row['title'];
            $user_id = $row['username'];
            echo "<div class='box'><div class='box1'><video width='320' height='240' controls><source src='$path'>Your browser does not support video tag.</video><p class='name'>$title</p><p class='name'>$user_id</p><p class='desc'>$description</p></div></div>";
          }
        } else {
          echo "<div style='margin-top: 8%; width: 100%'><center>No videos uploaded yet.</center></div>";
        }
      ?>
    </div>
  </section>
  <script src="youtube.js"></script>
</body>

</html>