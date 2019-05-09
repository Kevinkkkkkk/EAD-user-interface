<?php
require_once('includes/db.php');
require_once('includes/header.php');



                $query = "SELECT * ";
                $query .= "FROM user_information WHERE u_id = '$_SESSION[login_id]' ";
                $result = mysqli_query($connection, $query);
                                if (!$result) {
                                    die("query is wrong");
                                                }


if(isset($_POST['submit'])) {
    $u_id = $_POST['u_id'];
    $u_name = $_POST['u_name'];
    $u_password = $_POST['u_password'];
    $u_telephone = $_POST['u_telephone'];
    
    
    
    


//2. do a query (Select all staff)
$query = "UPDATE user_information SET u_id = '$u_id' , u_name = '$u_name', u_password = '$u_password', u_telephone = '$u_telephone' ";
$query .= "WHERE u_id = '$u_id'";
//echo $query;


$result = mysqli_query($connection, $query);

header('location: index.php');    
}

if (isset($_GET['u_id'])) {
$u_id = $_GET['u_id'];
$query  = "SELECT u_id, u_name, u_password, u_telephone  ";
$query.= "FROM user_information WHERE u_id = '$u_id'" ;
                 

 //echo $query;
                 


$result = mysqli_query($connection, $query); 
if (!$result) {
        die("query is wrong");
    } 

    $row = mysqli_fetch_array($result);
}



?>

<!DOCTYPE html>

                        <h1 class="page-header">
                            Update Page <small>Update Your information.</small>
                        </h1>
                 



<form action="updateCustomer.php" method="post">
    <input type=hidden name="u_id" value="<?php echo $row['u_id']; ?>">
    u_name:<br>
    <input type="varchar" name="u_name" value="<?php echo $row['u_name']; ?>"><br>
    u_password:<br>
    <input type="varchar" name="u_password" value="<?php echo $row['u_password'] ?>"><br>
    u_telephone:<br>
    <input type="varchar" name="u_telephone" value="<?php echo $row['u_telephone']; ?>"><br>
    
    <br><input type="submit" name="submit" value="Submit">
    
</form>

<?php
    require_once('includes/footer.php');


   
//5. close db connection
mysqli_close($connection);

?>
