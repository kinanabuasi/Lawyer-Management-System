<!-- <?php
	include("db_con/dbCon.php");
	$conn = connect();
    if ($row['IsAccepted'] == '0') {
        // Copy the data to legal_service_accept table
        // $service_id = $row['service_id'];
        $service_name = $row['service_name'];
        $service_type = $row['service_type'];
        $service_description = $row['service_description'];
        $service_price = $row['service_price'];
        $service_photo = $row['service_photo'];
    
        // $service_id = mysqli_real_escape_string($connection, $service_id);
    $service_name = mysqli_real_escape_string($connection, $service_name);
    $service_type = mysqli_real_escape_string($connection, $service_type);
    $service_description = mysqli_real_escape_string($connection, $service_description);
    $service_price = mysqli_real_escape_string($connection, $service_price);
    $service_photo = mysqli_real_escape_string($connection, $service_photo);

    // Insert the values into the legal_service_accept table
    $query = " INSERT INTO legal_service_accept (service_name, service_type,service_description,service_price,service_photo) ;
    SELECT service_name, service_type,service_description,service_price,service_photo
    FROM legal_service
              VALUES ('$service_name', '$service_type', $service_description,$service_price,$service_photo)";
    mysqli_query($connection, $query);

    $query1 = " INSERT INTO legal_service_accept (IsAccepted);
     VALUES ('1')";
    ?>
<td>
    <a class="btn btn-sm btn-warning" href="accept_lawyer.php?NotAccepted=<?=$row['IsAccepted']?>">
        <i class="fas fa-hourglass"></i>&nbsp; NotActive
    </a>
</td>
<?php
} else {
    ?>
<td>
    <a class="btn btn-sm btn-warning" href="accept_lawyer.php?Accepted=<?=$row['IsAccepted']?>">
        <i class="fas fa-hourglass"></i>&nbsp; Accept
    </a>
</td>
<?php
}
?>
 -->
