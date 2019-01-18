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
  Name: <input type="text" name="fname"><span>*<?php echo $nameErr?></span><br><br>
  Email:<input type="text" name="email"><span>*<?php echo $emailErr?></span><br><br>
  <input type="submit"><br><br>
</form>



<?php
$nameErr=$emilErr="";

function test_input($data)
{
 $data=trim($data);
 $data=stripcslashes($data);
 $data=htmlspecialchars($data);
 return $data;
}

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    if(empty($_POST('fname')))
    {
        $nameErr="Name is Required";
    }
    else{
        $name=test_input($_POST('fname'));
        if(!preg_match("/^[a-zA-Z ]*$/",$name))
        {
            $nameErr="letters and whitespces re allowed";
        }
    }

    if(empty($_POST('email')))
    {
        $emailErr="Emiail is Required";
    }   
    else
     {
         $email = test_input($_POST["email"]);
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format"; 
            }
    } 
}

echo "<h2>Inputs:</h2>";
echo $name."<br>";
echo $email;


?>
</body>
</html>