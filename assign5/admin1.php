
<html>

<head>
<link rel="stylesheet" href="stylesheet.css">
  <style>
  input.c5{
    width:70%;
    float:right;

       border-radius: 5px;
      outline:0;
      line-height:25px;
  }
  div.c1{
    border-style: ridge;
     border-radius: 5px;

     line-height:30px;
  }
  textarea{
    width:80%;
    float:right;
    border-style: inset;
    border-width: medium;

       border-radius: 5px;
      outline:0;
  }
  div.c2{
    padding-left: 10px;
  }
  input.c6{
      width:25%;
      float:right;
      margin-right:50%;
      border-radius: 5px;
     outline:0;
     line-height:25px;
  }

  div.heading1{
  width:100%;
  text-align:center;

  padding-top: 15px;
  line-height:wrapText;

  }
  button.c2{
    height:140px;
  	width:120px;
    border-radius: 5px;
    border-style:ridge;
    margin-left: 10px;
    background-color: transparent;
    margin-top: 5px;
    color: white;
    border:0px;

  }
  img.c3{
    height:100px;
    width:100px;
  }

  div.heading{
  width:100%;
  padding-left: 20px;
  line-height:wrapText;
   background-color:#abb7cc;
  }
  div.heading2{
  width:100%;

  line-height:wrapText;
   background-color:#abb7cc;
   text-align:right;
  }
  div.part1{
    width:17%;
    height:50%;
    float:left;

  }
  div.part2{
    width:75%;
    float:right;
    height:50%;

  }
  div.part3{
    width:100%;
    height:20%;

    position: fixed;

  bottom: 0;

  }


  </style>
  <script type="text/javascript">
  function setURL(url){

    window.location.href=(url);
  }
  </script>
</head>
<body>
  <div class="heading1"><h1>ADMIN VERIFICATION</h1></div>

<hr>
 <br>
  <br>


  <form method="POST">
    <div >
      <div class="part1">
      </div>
      <div class="part1">
      </div>
    <div class="part1" id="div1" name="div1">

    <button class="c2"  TYPE="BUTTON" onclick="setURL('adm_login.php')"><img class="c3" src="admin.png"><h2>LOGIN</button>


    </DIV>
    <div class="part1" id="div2" name="div2">

      <button class="c2" TYPE="BUTTON"  onclick="setURL('admin_signup.php')"><img class="c3" src="signup1.png"><h2>SIGNUP</button>
    </DIV>

  </DIV>


</form>
</body>
</html>
<?php



?>
