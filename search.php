<?php 

	//include header file
	include ('include/header.php');

?>
<style>
	.size{
		min-height: 0px;
		padding: 60px 0 40px 0;

	}
	.loader{
		display:none;
		width:69px;
		height:89px;
		position:absolute;
		top:25%;
		left:50%;
		padding:2px;
		z-index: 1;
	}
	.loader .fa{
		color: #e74c3c;
		font-size: 52px !important;
	}
	.form-group{
		text-align: left;
	}
	h1{
		color: white;
	}
	h3{
		color: #e74c3c;
		text-align: center;
	}
	.red-bar{
		width: 25%;
	}
	span{
		display: block;
	}
	.name{
		color: #e74c3c;
		font-size: 22px;
		font-weight: 700;
	}
	.donors_data{
		background-color: white;
		border-radius: 5px;
		margin: 25px;
		-webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		-moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
		padding: 20px 10px 20px 30px;
	}
</style>
<div class="container-fluid red-background size">
	<div class="row">
		<div class="ccol-md-6 offset-md-3">
			<h1 class="text-center">Search Donors</h1>
			<hr class="white-bar">
			<br>
			<div class="form-inline text-center" style="padding: 40px 0px 0px 5px;">
							<div class="form-group text-center center-aligned">
								<select style="width: 220px; height: 45px;" name="city" id="city" class="form-control demo-default" required>
	<option value="">-- Select --<optgroup title="Andhra Pradesh" label="&raquo; Andhra Pradesh"></optgroup>
<option value="Anantapur">Anantapur</option>
<option value="Chittoor">Chittoor</option>
<option value="East Godavari">East Godavari</option>
<option value="Guntur">Guntur</option>
<option value="Krishna">Krishna</option>
<option value="Kurnool">Kurnool</option>
<option value="Nellore">Nellore</option>
<option value="Prakasam">Prakasam</option>
<option value="Srikakulam">Srikakulam</option>
<option value="Visakhapatnam">Visakhapatnam</option>
<option value="Vizianagaram">Vizianagaram</option>
<option value="West Godavari">West Godavari</option>

<optgroup title="Arunachal Pradesh" label="&raquo; Arunachal Pradesh"></optgroup>
<option value="Tawang">Tawang</option>
<option value="West Kameng">West Kameng</option>
<option value="East Kameng">East Kameng</option>
<option value="Papum Pare">Papum Pare</option>
<option value="Kurung Kumey">Kurung Kumey</option>
<option value="Kra Daadi">Kra Daadi</option>
<option value="Lower Subansiri">Lower Subansiri</option>
<option value="Upper Subansiri">Upper Subansiri</option>

<optgroup title="Assam" label="&raquo; Assam"></optgroup>
<option value="Baksa">Baksa</option>
<option value="Barpeta">Barpeta</option>
<option value="Bongaigaon">Bongaigaon</option>
<option value="Cachar">Cachar</option>
<option value="Charaideo">Charaideo</option>
<option value="Darrang">Darrang</option>
<option value="Dhemaji">Dhemaji</option>
<option value="Dhubri">Dhubri</option>
<option value="Dibrugarh">Dibrugarh</option>
<option value="Goalpara">Goalpara</option>
<option value="Golaghat">Golaghat</option>
<option value="Hailakandi">Hailakandi</option>
<option value="Jorhat">Jorhat</option>
<option value="Kamrup">Kamrup</option>
<option value="Karbi Anglong">Karbi Anglong</option>
<option value="Kokrajhar">Kokrajhar</option>

<optgroup title="Bihar" label="&raquo; Bihar"></optgroup>
<option value="Araria">Araria</option>
<option value="Arwal">Arwal</option>
<option value="Aurangabad">Aurangabad</option>
<option value="Banka">Banka</option>
<option value="Begusarai">Begusarai</option>
<option value="Bhagalpur">Bhagalpur</option>
<option value="Bhojpur">Bhojpur</option>
<option value="Darbhanga">Darbhanga</option>
<option value="Gaya">Gaya</option>
<option value="Muzaffarpur">Muzaffarpur</option>
<option value="Nalanda">Nalanda</option>
<option value="Patna">Patna</option>
<option value="Purnia">Purnia</option>
<option value="Rohtas">Rohtas</option>

<optgroup title="Delhi" label="&raquo; Delhi"></optgroup>
<option value="Central Delhi">Central Delhi</option>
<option value="East Delhi">East Delhi</option>
<option value="New Delhi">New Delhi</option>
<option value="North Delhi">North Delhi</option>
<option value="North East Delhi">North East Delhi</option>
<option value="South Delhi">South Delhi</option>
<option value="West Delhi">West Delhi</option>

<optgroup title="Uttarakhand" label="&raquo; Uttarakhand"></optgroup>
<option value="Almora">Almora</option>
<option value="Bageshwar">Bageshwar</option>
<option value="Chamoli">Chamoli</option>
<option value="Champawat">Champawat</option>
<option value="Dehradun">Dehradun</option>
<option value="Haridwar">Haridwar</option>
<option value="Nainital">Nainital</option>
<option value="Pauri Garhwal">Pauri Garhwal</option>
<option value="Pithoragarh">Pithoragarh</option>
<option value="Rudraprayag">Rudraprayag</option>
<option value="Tehri Garhwal">Tehri Garhwal</option>
<option value="Udham Singh Nagar">Udham Singh Nagar</option>
<option value="Uttarkashi">Uttarkashi</option>

<optgroup title="West Bengal" label="&raquo; West Bengal"></optgroup>
<option value="Alipurduar">Alipurduar</option>
<option value="Bankura">Bankura</option>
<option value="Birbhum">Birbhum</option>
<option value="Cooch Behar">Cooch Behar</option>
<option value="Darjeeling">Darjeeling</option>
<option value="Hooghly">Hooghly</option>
<option value="Howrah">Howrah</option>
<option value="Jalpaiguri">Jalpaiguri</option>
<option value="Kolkata">Kolkata</option>
<option value="Murshidabad">Murshidabad</option>
<option value="Nadia">Nadia</option>
<option value="Purba Medinipur">Purba Medinipur</option>
<option value="South 24 Parganas">South 24 Parganas</option>
<option value="West Medinipur">West Medinipur</option>
</select>
							</div>
							<div class="form-group center-aligned">
								<select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

									<option value="A+">A+</option>
									<option value="A-">A-</option>
									<option value="B+">B+</option>
									<option value="B-">B-</option>
									<option value="AB+">AB+</option>
									<option value="AB-">AB-</option>
									<option value="O+">O+</option>
									<option value="O-">O-</option>

								</select>
							</div>
							<div class="form-group center-aligned">
								<button type="button" class="btn btn-lg btn-default" id="search">Search</button>
							</div>
						</div>
		</div>
	</div>
</div>
<div class="container" style="padding: 60px 0 60px 0;">
	<div class="row " id="data">

		<!-- Display The Search Result -->
		<?php 
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
</div>
</div>
<div class="loader" id="wait">
	<i class="fa fa-circle-o-notch fa-spin" aria-hidden="true"></i>
</div>
<?php 

	//include footer file
	include ('include/footer.php');

?>
<script type="text/javascript">
	$("#search").on('click', function(){

    var city = $("#city").val();
    var blood_group = $("#blood_group").val();

    $.ajax({
        type: 'GET',
        url: 'ajaxsearch.php',
        data: {city: city, blood_group: blood_group},
        success: function(data){
            if(!data.error){
                $("#data").html(data);
            }
        }
    });

});

	</script>