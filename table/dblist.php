<?php
require_once "connection.php";
$sql="SELECT * FROM tasks1 ORDER BY Created_at DESC LIMIT 10";
$data=$conn->query($sql);
$i=1;

if ($data === FALSE) {
    echo "ERROR: " . $con->error;
} else if ($data->num_rows > 0) {
    foreach ($data as $user) {
        $string = $user['tdescriptive'];
        echo "
        <tr>
            <td>".$i."</td>
            <td>".$user['tname']."</td>
            <td>";
        
        // Conditionally display the string
        if (strlen($string) <= 10) {
            echo $string;
        } else {
            echo substr($string, 0, 20) . '...';
        }

        echo "</td>

             
            <td>".$user['tstatus']."</td>
            <td>".$user['Created_at']."</td>
        </tr>";
        
        $i++;
    }
} else {
    echo "Record not found";
}

$conn->close();