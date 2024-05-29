<?php
SESSION_START();
?>


<table border="2px">
    <tr>
        <th>Bil</th>
        <th>Nama</th>

    </tr>
<?php 
include("config.php");
        $query=mysqli_query($conn,"SELECT * FROM valerie");  
if(mysqli_num_rows($query)>0){
    while($row=mysqli_fetch_assoc($query)){
        $nama=$row['nama'];
        $id=$row['id'];

        ?>
    <tr>
        <td><script></script></td>
        <td>
            <button onclick="passw()"><?php echo $nama?></button>
        <!-- <input type="submit" value="" name="submit">  -->
    </td>
    </tr>
    <?php

        }
    }
    ?>

</table>
<form action="" method="post">
<div class="box" style="display: none;">
Password: <input type="password" name="password">
<input type="submit" value="submit" name="submit">

</div>

</form>
<script>
    function passw(){
        document.querySelector('.box').style.display="block";
    }
</script>

<?php
if(isset($_POST['submit'])){
    $pass=$_POST['password'];
    $query1=mysqli_query($conn,"SELECT * FROM valerie where password='$pass'");  

    if(mysqli_num_rows($query1)>0){
        $_SESSION['password']=$pass;

      header("location:maklumat.php");


}
else{
    echo "<script>alert('password salah')</script>";
}


}

?>