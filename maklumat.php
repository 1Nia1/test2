<?php
SESSION_START();
include("config.php");

?><div class="box2">
            <table border="1px">
                <tr>
                    <th>
                        Password
                    </th>
                    <th>2021</th>
                    <th>2022</th>
                    <th>2023</th>
                    <th>2024</th>
                    <th>2025</th>
                    <th>Jumlah</th>
                    <th>Tarikh Bayaran terkini</th>

                </tr>
                
<?php 

$query2=mysqli_query($conn,"SELECT * FROM duapuluhtiga");  
if(mysqli_num_rows($query2)>0){
while($row=mysqli_fetch_assoc($query2)){
$h2021=$row['h2021'];
$h2022=$row['h2022'];
$h2023=$row['h2023'];
$h2024=$row['h2024'];
$h2025=$row['h2025'];
$jum=$row['jum'];
$tarikhkini=$row['tarikhkini'];
$password=$row['password'];
// $id=$row['id'];
// $nama=$row['nama'];

?>
                <tr>
                <!-- <td><script></script></td> -->
        <!-- <td> -->
            <!-- <?php echo $nama?> -->
        <!-- <input type="submit" value="" name="submit">  -->
    <!-- </td> -->
    <td><?php echo $password?></td>
                    <td><?php echo $h2021?></td>
                    <td><?php echo $h2022?></td>
                    <td><?php echo $h2023?></td>
                    <td><?php echo $h2024?></td>
                    <td><?php echo $h2025?></td>
                    <td><?php echo $jum?></td>
                    <td><?php echo $tarikhkini?></td>
                    

                 

                </tr>
            </table>
            <?php


}


}

?>
        </div>
        