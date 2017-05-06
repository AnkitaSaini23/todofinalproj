d>
<title>Registeration Page</title>
<style type="text/css">
div.container {
border: 3px solid #01f1f1;
padding: 6px;
width:350px;
margin:20px auto;
text-align:center;  
}
.login { 
background:#f9f9f9; 
}
.login div {
border:2px solid #fff;
padding:3px;
}
.register { 
background:#f9f9f9; 
}
.register div {
border:2px solid #fff;
padding:3px;
}
input[type=text], input[type=password] {
padding: 6px 15px;
margin: 8px 0;
border: 1px solid #ccc;
}
button {
background-color: #4CAF50;
color: white;
padding: 6px 15px;
margin: 8px 0;
width: 50%;
}
</style>
</head>

<body>
<div class='container' align="center">
<form method = "post" action="index.php" class="login">
<div>
<label><b>First Name</b></label>
<input type="text" name="reg_fname" placeholder="Enter First Name" required>
</div>
<div>
<label><b>Last Name</b></label>
<input type="text" name="reg_lname" placeholder="Enter Last Name" required>
</div>
<div>
<label><b>Email ID (User ID)</b></label>
<input type="text" name="reg_emailid" placeholder="Enter Email ID" required>
</div>
<div>
<label><b>Phone Number</b></label>
<input type="text" name="reg_phonenumber" placeholder="Enter Email ID"
required>
</div>
<div>
<label><b>Birth Day</b></label>
<input type="text" name="reg_bday" placeholder="Enter BirthDay" required>
</div>
<div>
<label><b>Gender</b></label>
<input type="text" name="reg_gender" placeholder="Enter Gender" required>
</div>
<div>
<button type="submit">Sign Up !</button>     
</div>
</form>
</div>
</body>

</html>

