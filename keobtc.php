<!DOCTYPE html>
<html>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<body>
<?php
$link = mysqli_connect("localhost", "root", "", "k9cntt");

if (!$link) {
    echo "Error";
  
}
mysqli_query($link,'set names utf8');
$sql = "SELECT * FROM sanpham";
$result = $link->query($sql);
?>
<table>
  <tr>
    <th>id</th>
    <th>ten sp</th>
    <th>gia sp</th>

    <th>sale</th>

    <th>mota</th>
  </tr>
<?php
while($row = mysqli_fetch_array($result))
{
    ?>


  <tr>
    <td><?php echo  $row['id'] ; ?></td>

    <td><?php echo  $row['tensp'] ; ?></td>
    <td><?php echo  $row['giasp'] ; ?></td>

    <td><?php echo  $row['sale'] ; ?></td>

    <td><?php echo  $row['mota'] ; ?></td>
  </tr>


    <?php
}
?>
 
</table>
</body>
</html>