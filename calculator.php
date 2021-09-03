<html> 
<head>
    <style type="text/css">
    body {
        text-align: center;
        background-color: #000039;
    }
    form {
        position:absolute;
        margin:0;
        top:50%;
        left:50%;
        transform: translate(-50%, -50%);
        width:75%;
        height:65%;
        background-color: #BBBBBB;
    }
    .box {
        border:none;
        border-bottom: 6px solid #1FA8DA;
        border-radius: 5px;
        background-color: lightgrey;
        text-align: center;
        color: black;
        font-size: 42px;
        width:520px;
        height:120px;
    }
    h2{
        font-size: 72px;
        color:#003345;
        font-family: century gothic;
    }
    h4{
        font-size: 32px;
        font-family: century gothic;
        color:#003345;
    }
    .placeholder{
        text-align: center;
    }
    .button{
        border:none;
        display:inline-block;
        border-radius:5px;
        box-shadow: 0 10px #999;
        width:120px;
        height:120px;
        outline:none;
        font-size: 40px;
        line-height: 120px;
        font-family:century gothic;
        color:#003345;
    }
    .button:active{
        box-shadow: 0 7px #848484;
        transform: translateY(5px);
}
    }
    </style>
</head>
<body><h1>
   <form action="" method="post">
       <h2>PHP Calculator</h2> <hr> <br>

       <input class="box" type="number" name="n1" placeholder="First number"> <br> <br>
       <input class="box" type="number" name="n2" placeholder="Second number"> <br> <br>
       <input class="button" type="submit" name="add" value="+">
       <input class="button" type="submit" name="minus" value="-">
       <input class="button" type="submit" name="times" value="x">
       <input class="button" type="submit" name="divide" value="/"> <br> 
       
   <?php
      $result="";
      $num1 = $_POST["n1"];
      $num2 = $_POST["n2"];
      
      if(isset($_POST["add"]))
      {
          $result = $num1 + $num2;
      }
      elseif(isset($_POST["minus"]))
      {
          $result=$num1 - $num2;
      }
      else if(isset($_POST["times"]))
      {
          $result=$num1 * $num2;
      }
      else if(isset($_POST["divide"]))
      {
          $result = $num1/$num2;
      }
      echo "<br>";
   ?>
      <input class="box" type="text" name="result" placeholder="Total" value="<?php echo $result;
          ?>"> <br>
      <h4> Made by Angelito XD </h4>
      </form>
      
</h1>
</body>
</html>