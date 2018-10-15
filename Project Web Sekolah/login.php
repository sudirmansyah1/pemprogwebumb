<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="css/login.css">
<link rel="stylesheet" type="text/css" href="css/index.css">
</head>
<body>
<form action="">
  <div class="imgcontainer">
    <img src="img/sme.png" width="50%">
  </div>

  <div class="container">
    <label for="nisn"><b>NISN/NIGN</b></label>
    <input type="text" placeholder="Masukkan NISN/NIGN kamu" name="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Masukkan kata sandi" name="psw" required>
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="javascript:history.back()"><button type="button" class="cancelbtn">Cancel</button></a>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
</body>
</html>
