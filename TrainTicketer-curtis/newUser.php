<!DOCTYPE html>
<html lang="en">
<head>
<title>Train Ticket System</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the content */
.content {
  background-color: #ddd;
  padding: 10px;
  height: 200px; /* Should be removed. Only for demonstration */
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
}


h1 {
  text-align: center;
  color: Black;
  font-family: verdana;
  font-size: 180%;
}

h2 {
  text-align: center;
  color: Black;
  font-family: verdana;
  font-size: 150%;
}

p  {
  text-align: center;
  color: black;
  font-family: verdana;
  font-size: 100%;
}

div {
  text-align: center;
}

</style>
</head>
<body>

<div class="topnav">
  <a href="#">About</a>
  <a href="#">Contact</a>
  <a href="#">Help</a>
</div>

<form action="insert.php" method="post"></form>
<input type="submit">

  <h1>Please register</h1>
	<div class="container">
    <div class="form-group">
      <label for="first_name">First Name:</label>
      <input type="text" class="form-control" id="first_name" placeholder="Enter first name" name="firstname">
    </div>


    <div class="form-group">
      <label for="last_name">Last Name:</label>
      <input type="text" class="form-control" id="last_name" placeholder="Enter last name" name="lastname">
    </div>

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>

    <div class="form-group">
      <label for="password">Password:</label>
      <input type="text" class="form-control" id="password" placeholder="Enter password" name="password">
    </div>

    <div class="form-group">
      <label for="password">Re-enter password:</label>
      <input type="text" class="form-control" id="password_confirm" placeholder="Enter password again" name="password_confirm">
    </div>
  </div>


<p>
	<button onclick="window.location.replace('firstPage.html');">ENTER</button>
</p>

<p>
  <button onclick="window.location.replace('index.html');">BACK</button>
</p>

</form>
</body>
</html>
