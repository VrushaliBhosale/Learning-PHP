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

</body>
</html>