





<?php

    $con = mysqli_connect('localhost','root','','khaboi');
    if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
    }

    mysqli_select_db($con,"ajax_demo");
    $sql="SELECT * FROM `cart_list` ";
    $result = mysqli_query($con,$sql);


    echo '<table align="center" id="cartTable" >
    <tr>
        <th>Food Name</th>
        <th>Food Price</th>
        <th>Action</th>
    </tr>';

    while($row = mysqli_fetch_array($result)) {
        //echo "succes";
    echo "<tr>";
        echo "<td>" . $row['Name'] . "</td>";
        echo "<td>" . $row['Price'] . "</td>";
        $id=$row['ID'];
        echo '<td><button onclick="deleteCart(\''.$id.'\')">Delete</button></td>';
        echo "</tr>";
    }
    echo "</table>";


    mysqli_close($con);

  ?>


  


