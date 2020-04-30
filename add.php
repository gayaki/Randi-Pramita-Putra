<html>
<body>
    <a href="index.php">Penambahan anggota keluarga</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td>nokk</td>
                <td><input type="text" name="nokk"></td>
            </tr>
            <tr> 
                <td>noktp</td>
                <td><input type="text" name="noktp"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $alamat = $_POST['alamat'];
        $nokk = $_POST['nokk'];
        $noktp = $_POST ['noktp'];

        include_once("config.php");


        $result = mysqli_query($mysqli, "INSERT INTO kk(name,alamat,nokk,noktp) VALUES('$name','$alamat','$nokk','$noktp')");


        echo "User added successfully. <a href='index.php'>View kk</a>";
    }
    ?>
</body>
</html> 