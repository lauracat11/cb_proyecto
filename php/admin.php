<html>
<body>
    <?php
    require ('header.php');
    $query = "SELECT * FROM reserve";

    echo '<table border="1" cellspacing="0" cellpadding="0">
        <tr>    
            <td>ID</td>
            <td>ID_USER</td>
            <td>SERVICIO</td>
            <td>ZONA</td>
            <td>FECHA</td>
        </tr>';

        if ($result = $conn->query($query)){
            while ($row = $result->fetch_assoc()){
                $filed1name = $row["ID"];
                $filed2name = $row["USERS_ID"];
                $filed3name = $row["servicio"];
                $filed4name = $row["zzone"];
                $filed5name = $row["ddate"];
            
                echo '<tr>    
                        <td>'.$filed1name.'</td>
                        <td>'.$filed2name.'</td>
                        <td>'.$filed3name.'</td>
                        <td>'.$filed4name.'</td>
                        <td>'.$filed5name.'</td>
                    </tr>';
            };
            $result->free();
        };

    mysqli_close($conn);
    ?>