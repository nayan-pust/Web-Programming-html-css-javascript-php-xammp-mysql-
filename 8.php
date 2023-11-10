

<?php
    $sum = null;
    $opa = null;
    $x   = 0;
    $y   = 0;

    if ( isset( $_POST["ADD"] ) ) {
        $x   = $_POST['fnum'];
        $y   = $_POST['snum'];
        $opa = $_POST["ADD"];
        $sum = $x + $y;
    } else if ( isset( $_POST["SUB"] ) ) {
        $x   = $_POST['fnum'];
        $y   = $_POST['snum'];
        $opa = $_POST["SUB"];
        $sum = $x - $y;
    } else if ( isset( $_POST["MUL"] ) ) {
        $x   = $_POST['fnum'];
        $y   = $_POST['snum'];
        $opa = $_POST["MUL"];
        $sum = $x * $y;
    } else if ( isset( $_POST["DIV"] ) ) {
        $x   = $_POST['fnum'];
        $y   = $_POST['snum'];
        $opa = $_POST["DIV"];
        $sum = $x / $y;
        $sum = number_format( $sum, 3 ); //this method will show only 3 number after float point
    }
?>
<html>
<head>
<style>
    body {
        background-color: #f4f4f4;
        font-family: Arial, sans-serif;
        margin: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .calculator-container {
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        text-align: center;
        padding: 20px;
        width: 400px;
    }

    h1 {
        color: #0077b6;
        font-size: 28px;
        margin: 0;
    }

    #result {
        font-size: 24px;
        margin: 20px 0;
    }

    .input-group {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 10px 0;
    }

    .input-group label {
        font-size: 18px;
        width: 45%;
        text-align: right;
        margin-right: 10px;
    }

    .input-group input[type="text"] {
        font-size: 18px;
        width: 50%;
        padding: 8px;
    }

    .buttons {
        display: flex;
        justify-content: center;
        margin: 20px 0;
    }

    .buttons button {
        font-size: 20px;
        padding: 10px 20px;
        margin: 0 10px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        background-color: #0077b6;
        color: #fff;
    }

    .buttons button:hover {
        background-color: #005a8d;
    }
</style>
 
</head>
<body>
<div class="cal">
<center>
    Calculator
</center>
<hr/>
</div>
<div class="div1">

  <label>Result </label> <hr/>

  <textarea rows="3"cols="33">
  <?php
      if ( $sum == null ) {
          echo "$sum";
      } else {
          echo " $x $opa $y=$sum";
      }

  ?>
  </textarea>
 </div>
 <div class="div2">
 <div class="vl">
<form method="post" action="">
<label>Input </label> <hr/>
Enter 1st number <input type="text" name="fnum" required/><br/><br/>
Enter 2nd number <input type="text" name="snum" required/><hr/>
<input type="submit" name="ADD" value="+"/>
<input type="submit" name="SUB" value="-"/>
<input type="submit" name="MUL" value="*"/>
<input type="submit" name="DIV" value="/"/>
</form>
</div>
</div>
</body>
</html>