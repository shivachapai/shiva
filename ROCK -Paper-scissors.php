

   <style>
 input,
.btn {
  width:25%;
  padding: 10px;
  border-bottom-color: blueviolet;
  border-radius: 35px;
  margin: 7px 0;
  opacity: 1;
  display:table-column-group;
  font-size: 10px;
  line-height: 10px;
  text-decoration: none; 
}

input:hover,
.btn:hover {
  object-position:center;}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  cursor: pointer;
    
}
 input[type=submit]:hover {
  background-color: red;}
input[type=reset]:hover {
  background-color: red;}

    .div:after {
  content: '\00200';
}
    }    
    
</style>   


<?php
echo'<a href="index.html"><input classs="button" type="submit" value="TOP"> </a>';
echo "<h1>ROCK -Paper-scissors-Game Ruslt</h1>";

'<img src="goo.jpg" style="width: 75px;height: 75px;">';
if(!empty($_POST)){
    $me=$_POST["hand"];
    if($me==1)  echo "You>>.. goo";
    else if($me==2) echo "You>>.. choki";
    else echo "You>>.. pa";
    if($me==1){
    echo'<img src="goo.jpg" style="width: 75px;height: 75px;">';   
    }elseif($me==2){
     echo'<img src="choki.jpg" style="width: 75px;height: 75px;">';   
    }else{
    echo' <img src="pa.jpg"style="width: 75px;height: 75px;">';    }
    
    
    $co= rand(1,3);
    echo"Computer>>..".$co;
     if($co==1){
    echo'<img src="goo.jpg" style="width: 75px;height: 75px;">';   
    }elseif($co==2){
     echo'<img src="choki.jpg" style="width: 75px;height: 75px;">';   
    }else{
    echo' <img src="pa.jpg"style="width: 75px;height: 75px;">';    }
    }
   echo "<br>";
   echo "<br>";
if(isset($_POST["option"])) {
$option = $_POST["option"];  
    
//random 
if($option==1){
    if($me == $co) {
    echo "***Draw***";
    } 
    elseif(
    ($me==1&&$co == 2)||($me==2&&$co==3)||($me==3&&$co==1))
    echo "***WIN****";
    else {echo "***lose***";
     }
    
}
//win  
elseif($option==2){
 if(($me == 1 && $co == 2)||($me == 2 && $co == 3)||($me ==3 && $co==1)){
  echo "***WIN***";
}
}
//lose
elseif ($option==3){
 if($me == 1 && $co == 3){
echo "***LOSE***";
 } elseif ($me == 2 && $co == 1){
echo "***LOSE***";
}else {
echo "***LOSE***";
    }
}
//draw
elseif ($option==4){     
if($me == $co ){
echo "***DRAW***";
    }
}
}
echo "<br>";
?>
<html>
<br>    
<a href="7.html">Return</a>
</html>
