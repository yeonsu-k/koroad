<?php
// UserProfile.php
$con = mysqli_connect("localhost", "koroad", "road1212!", "koroad");
$userImg = $_POST["userImg"];
$statement = mysqli_prepare($con, "INSERT INTO TB_CLASS_USER VALUES (?)");
mysqli_stmt_bind_param($statement, "s", $userImg);
$response = array();
$response["success"] = mysqli_stmt_execute($statement);
echo json_encode($response);
mysqli_close($con);
# https://sql-factory.tistory.com/1131
?>
