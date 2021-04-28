<?php
include_once 'connection.php';
if (isset($_POST['save'])) {
    $name = $_POST['name'];
    $entrytime = $_POST['entrytime'];
    $reason = $_POST['reason'];
    $personvisited = $_POST['personvisited'];
    $exittime = $_POST['exittime'];
    $sql = "INSERT INTO visitors (name,entrytime,reason,personvisited,exittime)
	 VALUES ('$name','$entrytime','$reason','$personvisited','$exittime')";
    if (mysqli_query($conn, $sql)) {
        echo 'New record created successfully !';
    } else {
        echo 'Error: ' .
            $sql .
            "
" .
            mysqli_error($conn);
    }
    mysqli_close($conn);
}
?>
