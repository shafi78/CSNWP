<?php 

$server = "localhost" ;
$username = "root" ;
$password = "" ;
$db = 'notes' ;

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

$deletequery = "delete from sp where id='$id'" ;

$query = mysqli_query($con,$deletequery);

if($query)
{

    ?>
<script>
    alert("Deleted Successful") ;
    location.replace("sp.php") ;
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