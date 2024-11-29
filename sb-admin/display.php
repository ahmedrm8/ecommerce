<?php
    include ('premision.php');


    if(isset($_POST['displaySend'])) {
        $table = '<table class="table">
        <thead class="thead-dark">
        <tr>
            <th scop="col">ID</th>
            <th scop="col">Name</th>
            <th scop="col">Email</th>
            <th scop="col">Phone</th>
            <th scop="col">Course</th>
            <th scop="col">Actions</th>
        </tr>
        </thead>';

        $sql = "SELECT * FROM courses";
        $result = mysqli_query($conn, $sql);
        $number=1;
        while ($row = mysqli_fetch_assoc($result)) {
            $id=$row['id'];
            $name=$row['name'];
            $email=$row['email'];
            $phone=$row['phone'];
            $course=$row['course'];
            $table.=
            '<tr>
            <th scope="row">'.$number.'</th>
            <td>'.$name.'</td>
            <td>'.$email.'</td>
            <td>'.$phone.'</td>
            <td>'.$course.'</td>
            <td>
                <button class="btn btn-dark" onclick="UpdateCourses('.$id.')">Update</button>
                <button class="btn btn-danger" onclick="DeleteCourse('.$id.')">Delete</button>
            </td>
            </tr>';
            $number++;
        }
        $table.= '</table>';
        echo $table;
    }
?>

