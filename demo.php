<!DOCTYPE html>
<html>
<body>

<?php
//List of existing accounts
class Account
{
    function isThere($newaccount)
    {
       $length=count($account_list);
        for($x=0;$x<$length;$x++)
        {
            if($newaccount == $account_list[$x]) 
                echo "Account exist";
        }
        echo "Account is not in list";
    }
}
$account_list=array("abc","pqr","xyz");
$obj=new Account();
$obj->isThere("meena");
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
  Name: <input type="text" name="fname"><br><br>
  Email:<input type="text" name="email"><br><br>
  <input type="submit"><br><br>
</form>



<?php

function test_input($data)
{
 $data=trim($data);
 $data=stripcslashes($data);
 $data=htmlspecialchars($data);
 return $data;
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
  $name= $_REQUEST['fname'];
  $email=$_REQUEST['email'];
  if(empty($name))
  {
      echo "name is empty"."<br>";
  }
  else{
    $name=test_input($name);
  }
  if(empty($email))
  {
    echo "email is empty";
  }
  else{
    $name=test_input($name);
  }
echo "<h2>Inputs:</h2>";
echo $name."<br>";
echo $email;
}

?>
</body>
</html>