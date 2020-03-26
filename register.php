<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.container {
    float: left;
    padding: 10px;
}
/* Left and right column */
.container.side {
  width: 25%;
}

/* Middle column */
.container.middle {
  width: 50%;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<h2 style= "text-align: center;">Register </h2>
<form action="addregister.php" method="get">

<div class="row">
  <div class="container side">
  </div>

    <div class="container middle">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder=" Username" name="uname" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder=" Password" name="psw" required>

        <button type="submit" name="register">Register</button>
    </div>
    
    <div class="container side">
    </div>
</div>


</body>
</html>
