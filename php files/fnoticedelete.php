<?php 

$server = "localhost" ;
$username = "root" ;
$password = "" ;
$db = 'csnwp' ;

$con = mysqli_connect($server,$username,$password,$db);

if($con)
{
    ?>
    <script>
    // alert('Connection Successful')
    </script>
    <?php
}

else{
    echo "No Connection" ;
}

?>

<?php

$id = $_GET['Aid'];

$deletequery = "delete from anotice where id='$id'" ;

$query = mysqli_query($con,$deletequery);

if($query)
{

    ?>
<script>
    alert("Deleted Successful") ;
    location.replace("fviewnotice.php") ;
</script>

<?php
}

else
{
    ?>

    <script>
        alert("Delete Failed") ;
    </script>

    <?php
}


?>