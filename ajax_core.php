<?php




// $servervalue="mamun";

// $name=$_GET["text"];

// $myarra=array("manun","light","kkr","lyon");

// if(in_array($name,$myarra)){
//     echo "it's true";
// }else{
//     echo "it 's not true";
// }





$name = "hkr";
$password = "123";

$pname = $_POST['uname'];
$ppas = $_POST['upass'];

if($pname == $name && $ppas == $password){
	echo "login successfull";
}else{
	echo "login fail";
}

?>