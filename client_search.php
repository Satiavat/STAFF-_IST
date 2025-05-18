<?php
    include "conn.php";
    $searchTerm = $_POST['searchTerm'];
    $sql = mysqli_query($conn, "SELECT * FROM `data`
    WHERE (
        `name` LIKE '%{$searchTerm}%' OR
        `email` LIKE '%{$searchTerm}%' OR
        `number` LIKE '%{$searchTerm}%' OR
        `address` LIKE '%{$searchTerm}%' OR
        `birth` LIKE '%{$searchTerm}%' OR
        `gender` LIKE '%{$searchTerm}%' OR
        `time_created` LIKE '%{$searchTerm}%'
    )");
    $output = "";
    if(mysqli_num_rows($sql) > 0){
        while($fecth = mysqli_fetch_assoc($sql)){
            $output .= '<tr>
            <td>'.$fecth['id'].'</td>
            <td>'.$fecth['name'].'</td>
            <td>'.$fecth['email'].'</td>
            <td>'.$fecth['number'].'</td>
            <td>'.$fecth['address'].'</td>
            <td>'.$fecth['birth'].'</td>
            <td>'.$fecth['gender'].'</td>
            <td>'.$fecth['time_created'].'</td>
            <td>
                <a href="edit.php?client='.$fecth['crud_id'].'" class="btn btn-primary btn-sm">Edit</a>
                <a href="php/delete.php?client='.$fecth['crud_id'].'" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>';
        }
    }else{
        $output .= 'No Client Are Available From Your Search Term';
    }

    echo $output;

?>