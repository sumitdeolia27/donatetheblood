<?php 
include ('include/config.php');
		if ( isset($_GET['city'], $_GET['blood_group']) &&!empty($_GET['city']) && !empty($_GET['blood_group']) ) {
			$city = $_GET['city'];
			$blood_group = $_GET['blood_group'];
$sql = "SELECT * FROM donor WHERE city = '$city' OR blood_group = '$blood_group'";
        $result = mysqli_query($connection, $sql);
        if(mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            if($row['save_life_date'] == '0') {
 		    echo '
            <div class="col-md-3 col-sm-12 col-lg-3 donors_data">
                <span class="name">' . $row['name'] . '</span>
                <span>' . $row['city'] . '</span>
                <span>' . $row['blood_group'] . '</span>
                <span>' . $row['gender'] . '</span>
                <span>' . $row['email'] . '</span>
                <span>' . $row['contact_no'] . '</span>
            </div>
              ';

        } else {

            echo '
            <div class="col-md-3 col-sm-12 col-lg-3 donors_data">
                <span class="name">' . $row['name'] . '</span>
                <span>' . $row['city'] . '</span>
                <span>' . $row['blood_group'] . '</span>
                <span>' . $row['gender'] . '</span>
                <h4 class="name text-center">Donated</h4>
            </div>
            ';
        }
    }

}


       }

		?>