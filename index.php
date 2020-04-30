<?php

include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM kk ORDER BY id DESC");
?>

<html>
<body>
<a href="add.php">Penambahan Anggota Keluarga</a><br/><br/>

    <table width='80%' border=1>

    <tr>
        <th>Name</th> <th>alamat</th> <th>nokk</th> <th>noktp</th> <th>Update</th>
    </tr>
    <?php  
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$user_data['name']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['nokk']."</td>";
        echo "<td>".$user_data['noktp']."</td>";    
        echo "<td><a href='edit.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";        
    }
    ?>
    </table>
</body>
</html> 