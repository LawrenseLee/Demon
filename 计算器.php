<?php
// $count="+";
if(!empty($_POST)){
  if(isset($_POST["num1"])&& isset($_POST["num2"])){
    if(empty($_POST["num1"])){
        echo "<font color=#FF0000>第一个操作数不能为空</font><br>";
        unset($_POST["sub"]);
    }
    if(empty($_POST["num2"])){
        echo "<font color=#FF0000>第一个操作数不能为空</font><br>";
        unset($_POST["sub"]);
    }
 
  $num1=$_POST['num1'];
  $num2=$_POST['num2'];
  $count=$_POST['count'];
 
    if($count=="/" || $count=="%"){
        if($num2==0){
            echo "<font color=#FF0000>0不能作为除数！</font><br>";
            unset($_POST["sub"]);  
        }
    }
}
 
  switch($count){
    case "+";
      $result=$num1+$num2;break;
    case "-";
      $result=$num1-$num2;break;
    case "*";
      $result=$num1*$num2;break;
    case "/";
      $result=$num1/$num2;break;  
    case "%";
      $result=$num1%$num2;break;      
    }
 
}
?>
 
<html>
  <head>
    <title>计算器1.0</title>
    <meta charset='utf-8'>
  </head>
  <body>
    <h1 align="center">计算器</h1>
<form class="form-inline" role="form" align="center" action="" method="post">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail2">Num1</label>
    <input type="text" class="form-control"  placeholder="请输入数字" value="<?php  echo isset($num1)?$num1:"";?>" name="num1">
  </div>
  <div class="form-group">
    <select class="form-control" name="count">
      <option <?php if ($count == "+"){echo "selected='selected'";} ?> value="+" >+</option>
      <option <?php if ($count == "-"){echo "selected='selected'";} ?> value="-" >-</option>
      <option <?php if ($count == "*"){echo "selected='selected'";} ?> value="*" >*</option>
      <option <?php if ($count == "/"){echo "selected='selected'";} ?> value="/" >/</option>
      <option <?php if ($count == "%"){echo "selected='selected'";} ?> value="%" >%</option>
    </select>
  </div>  
  <div class="form-group">
    <label class="sr-only" for="exampleInputPassword2">Num1</label>
    <input type="text" class="form-control"  placeholder="请输入数字" value="<?php  echo isset($num2)?$num2:"";?>" name="num2">
  </div>
  <button type="submit" class="btn btn-default"  name="sub">计算</button>
  <div><br/></div>
    <div class="clearfix" />
  <div class="form-group clearfix" style="width:485px";>
  <textarea class="form-control"  rows="2" style="font-size:30px;">
      <?php 
        echo isset($result)?$num1."&nbsp".$count."&nbsp".$num2."&nbsp"."="."&nbsp".$result:"";
      ?>
  </textarea>
  </div>
</form>
  </body>
</html>