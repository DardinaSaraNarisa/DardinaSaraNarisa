<?php


    $q=$_GET["q"];



    $con = mysqli_connect('localhost','root','','khaboi');
    if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"ajax_demo");
    
    $sql="SELECT * FROM `food` WHERE Name LIKE '%{$q}%'";
    $result = mysqli_query($con,$sql);


    echo '<table align="center" width="30%" >
    <tr>
        <th>ID</th>
        <th>Food Name</th>
        <th>Food Price</th>
    </tr>';

    while($row = mysqli_fetch_array($result)) {
        //echo "succes";
    echo "<tr>";

        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Price'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";


    mysqli_close($con);

  ?>
  


