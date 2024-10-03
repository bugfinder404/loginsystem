<!doctype html>
<html>
<head>
<title>Document</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
list-style:none;
text-decoration:none;
}
body{
min-height:100vh;
}
.header{
height:80px;
background:#00ffff;
width:100%;
}
.logo{
font-size:35px;
padding: 0 30px;
font-weight:bold;
color:#000000;
line-height:80px;
}
.navbar{
float:right;
padding:5px;
margin-left:10px;
line-height:70px;
word-spacing:15px;
}
#check{
display:none;
}
.checkbtn{
float:right;
margin-top:38px;
font-size:30px;
display:none;
cursor:pointer;
transform:translate(-50%, -50%);
}
.navbar ul li{
display:inline-block;
font-weight:500;
}
.navbar ul li a{
text-decoration:none;
background:#00ffff;
font-size:21px;
padding:5px;
border-radius:7%;
color:black;

}
.navbar ul li a:hover{
background:black;
color:white;
padding:7px;
}
@media only screen and (max-width:1045px){
.navbar ul li a{
font-size:17px;}
.logo{
font-size:30px;
padding-left:20px;
}

}
@media only screen and (max-width:968px){
.navbar ul {
position:fixed;
height:100vh;
background:#2c3e50;
top:80px;
left:-100%;
text-align:center;
width:100%;
transition: all .5s;
}
.navbar ul li{
display:block;
margin:25px;
line-height: 30px;
margin-bottom:30px;
}

.navbar ul li a{
font-size:25px;
margin:15px;
}
.checkbtn{
display:block;

}
#check:checked ~ .navbar ul{
left:0;
}


}
.menu{
width:30px;
height: 5px;
background:#000000;
margin:6px 0;
}
</style>
</head>
<body>
<header class="header">
<input type="checkbox" id="check">

<label for="check" class="checkbtn">
<div class="menu"></div>
<div class="menu"></div>
<div class="menu"></div>
</label>
<label class="logo"><span style="color:yellow;">i</span>Educate</label>


<nav class="navbar">
<ul>
<li><a href="index.php">Logout</a></li>
<li><a href="signup.php">Signup</a></li>
<li><a href="welcome.php">Home</a></li>
<li><a href="#">Services</a></li>
<li><a href="#">About</a></li>
<li><a href="#">Contact</a></li>



</ul>



</nav>



</header>



</body>

</html>