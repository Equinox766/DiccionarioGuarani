<?php

require_once('./conn.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $Search = $_POST['search'];
        $sql = "SELECT * FROM palabra WHERE palabra_dic LIKE '%".$Search."%'";
        $result = mysqli_query($con,$sql);
        if (mysqli_num_rows($result)) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<a href="#" class="list-group-item list-group-item-action p-2 border text-decoration-none">'.$row['palabra_dic'].'</a>';
            }
        } else {
            echo '<a href="#" class="list-group list-group-item-action p-2 border text-center text-decoration-none">No se ha encontrado la palabra</a>';
        }
    }