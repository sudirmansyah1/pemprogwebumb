<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/pensiswa.css">
  <link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<div class="menu" style="z-index: 1;">
  <div>
        <a href="index.php"><img class="log" width="200px" src="img/sme.png"></a>
  </div>
  <div>
    <ul>
      <li><a href="utama.php">Profil</a></li>
      <li><a href="prestasi.php">Prestasi</a></li>
      <li><a href="#">Kegiatan</a></li>
      <li><a href="#">Fasilitas</a></li>
      <li><a href="#">Pendaftaran</a></li>
      <li><a href="#">Berita</a></li>
      <li><a href="login.php">Login</a></li>
    </ul>    
  </div>
</div>
<div class="postop">
<div class="container"style="z-index: 2;">
	<center><h1><font color="#3178d6">Stundent</font> Register</h1></center>
  <form action="">
    <div class="row">
      <div class="col-25">
        <label for="fname">Full Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fullname" placeholder="Your name" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="dateobird">Date of Birth</label>
      </div>
      <div class="col-75">
        <input type="text" id="dateobirth" name="dateobirth" placeholder="Your date of birth" required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="gander">Gender</label>
      </div>
      <div class="col-75">
        <select id="gander" name="gander" required>
          <option value="male">Male</option>
          <option value="female">Female</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Address</label>
      </div>
      <div class="col-75">
        <textarea id="address" name="address" placeholder="Your Address" style="height:100px" required></textarea>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="lname">Parent Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="pname" name="parentname" placeholder="Your parent name" required>
      </div>
    </div>
<br>
    <div class="row">
      <input type="submit" value="Submit">
    </div>
  </form>
</div>
</div>
</body>
</html>
