<?php include "configure.php";?>
<?php
    if($_GET["name"])
    {
        $deleteid=$_GET["name"];

    
$sql="delete from register_form where name='$deletename'";
if($conn->query($sql))
        {
          echo "deleted";
        }
        else{
            echo "not deleted";
        }


    }?>