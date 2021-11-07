<?php

require_once('./conn.php');

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $query = $_POST['query'];
        $sql = "SELECT * FROM palabra WHERE palabra_dic LIKE '%".$query."%' AND palabra_dic = palabra_dic";
        $result = mysqli_query($con,$sql);
        $output = '<table class="table table-striped">
                        <tr>
                            <td class="text-center">Traducción</td>
                        </tr>
                    ';
        while ($row = mysqli_fetch_assoc($result)) {
           $output.='<tr>';
           $output.='<td>'.$row['descripcion'].'</td>';
           
        }
        $output.='</tr>';
        $output.='</table>';
        echo $output;
    }