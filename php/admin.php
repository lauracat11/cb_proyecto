<!-- id reserva, nombre, zona, telefono, correo.  -->

<html>
<body>
    <?php
    require ('header.php');
    $query = "SELECT  FROM reserve";

    echo '<table class="table">
        <thead class="thead-dark">
            <tr>    
<<<<<<< Updated upstream
                <th>Id</th>
                <th>Nom</th>
                <th>Zona</th>
                <th>Telf</th>
                <th>Correu</th>
                <th>Data</th>
            </tr>
        </thead>';

        if ($result = $conn->query($query)){
            while ($row = $result->fetch_assoc()){
                $filed1name = $row["ID"];
                $filed2name = $row["USERS_ID"];
                $filed3name = $row[""];
                $filed4name = $row["zzone"];
                $filed5name = $row["ddate"];
                $filed5name = $row[""];
            
                echo '<tbody>
                        <tr>    
                            <th scope="row">'.$filed1name.'</th>
=======
                <td>ID</td>
                <td>ID_USER</td>
                <td>ZONA</td>
                <td>FECHA</td>
            </tr>';

            if ($result = $conn->query($query)){
                while ($row = $result->fetch_assoc()){
                    $filed1name = $row["ID"];
                    $filed2name = $row["USERS_ID"];
                    $filed4name = $row["zzone"];
                    $filed5name = $row["ddate"];
                
                    echo '<tr>    
                            <td>'.$filed1name.'</td>
>>>>>>> Stashed changes
                            <td>'.$filed2name.'</td>
                            <td>'.$filed4name.'</td>
                            <td>'.$filed5name.'</td>
                            <td>'.$filed6name.'</td>

                        </tr>
                    </tbody>';
            };
            $result->free();
        };

    mysqli_close($conn);
    ?>