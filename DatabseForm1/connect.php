
<!--Patient Information Form-->

<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <script src = "script.js" defer></script>
	<title>Patient Information Form</title>
	<style>
		label {
			display: block;
			margin-top: 10px;
		}
		input[type="text"], input[type="tel"], select {
			margin-top: 5px;
			padding: 5px;
			font-size: 16px;
			border-radius: 5px;
			border: none;
			border-bottom: 2px solid gray;
		}
		input[type="radio"] {
			margin-top: 5px;
			margin-right: 5px;
		}
		input[type="submit"] {
			margin-top: 20px;
			padding: 10px;
			font-size: 16px;
			color: white;
			border: none;
			border-radius: 5px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<h1>Patient Information Form</h1>
	<form action = "connect.php" method="post">
		<label for="first-name">First Name:</label>
		<input type="text" id="first-name" name="first-name" required>
		
		<label for="middle-initial">Middle Initial:</label>
		<input type="text" id="middle-initial" name="middle-initial">
		
		<label for="last-name">Last Name:</label>
		<input type="text" id="last-name" name="last-name" required>
		
        
        
		<label for="gender">Gender:</label>
        <label for= "gender-male"><input type="radio" id="gender-male" name="gender" value="M" required >Male</label>
        <label for= "gender-female"><input type="radio" id="gender-female" name="gender" value="F" required >Female</label>
        <label for= "gender-other"><input type="radio" id="gender-other" name="gender" value="O" required >Other</label>
		
        <label for="date-input">Date of Birth:</label>
        <input type="text" id="date-input" name="date-input" placeholder="MM/DD/YYYY"  pattern="\d{2}/\d{2}/\d{4}" required>
        <p id="error-message"></p>
        

        <label for="phone">Phone number:</label>
        <input type="text" id="patientphone" name="phone" placeholder="123-456-7890" pattern = "\d{3}-\d{3}-\d{4}" required>
        <span id="phone-error"></span>

		
		<h2>Patient Address</h2>
		<label for="street">Street:</label>
		<input type="text" id="street" name="street" required>
		
		<label for="city">City:</label>
		<input type="text" id="city" name="city" required>
		
        <label for="state">State:</label>
        <select id="state" name="state" required>
            <option value=""></option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select>
        <label for="zipcode">Zip Code:</label>
        <input type="text" id="zipcode" name="zipcode" placeholder="12345" pattern="[0-9]{5}" required>

        <h1>Emergency Contact</h1>

        <label for="Emergencyfirst-name">First Name:</label>
		<input type="text" id="Emergencyfirst-name" name="Emergencyfirst-name" required>
		
		
		
		<label for="Emergencylast-name">Last Name:</label>
		<input type="text" id="Emergencylast-name" name="Emergencylast-name" required>

        <label for="Relationship">Relationship</label>
		<input type="text" id="Relationship" name="Relationship" required>

        <label for="emergencyContactPhone">Emergency Contact Phone Number:</label>
        <input type="text" id="emergencyContactPhone" name="emergencyContactPhone" pattern="\d{3}-\d{3}-\d{4}" placeholder="123-234-2334" required>
        <div id="emergencyContactPhoneError"></div>

        <h1>Medical Health Information</h1>

        <label for="primary-physician">Primary Physician:</label>

        <label for="physician1"><input type="radio" id="physician1" name="primary-physician" value="Dr. John Doe" required>Dr. John Doe</label>

        <label for="physician2"><input type="radio" id="physician2" name="primary-physician" value="Dr. Jane Smith" required>Dr. Jane Smith</label>

        <label for="physician3"><input type="radio" id="physician3" name="primary-physician" value="Dr. Bob Johnson" required>Dr. Bob Johnson</label>
        

        <label for="physician-street">Street Address of Physician or Clinic/Hospital:</label>
        <input type="text" id="physician-street" name="physician-street" required>

        <label for="physician-city">City of Physician or Clinic/Hospital:</label>
        <input type="text" id="physician-city" name="physician-city" required>

        <label for="physician-state">State of Physician or Clinic/Hospital:</label>
        <select id="physician-state" name="physician-state" required>
            <option value=""></option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select>
        <label for="allergies">Allergies:</label>
        <input type="text" id="allergies" name="allergies" >
        <input type="submit" value="Submit" href = "thankyouForm.php">
    </form>
</body>

</html>
        


<?php
    
    ob_start();
    //require_once 'dbh-inc.php';

    //$servername = "127.0.0.1";
    //$username = "root";
    //$password = "Leonardo7!";
    //$dbname = "testing"; // change this to the correct database name

    // PHP Data Objects(PDO) Sample Code:


    
    //$conn = mysqli_init();
//mysqli_ssl_set($conn,NULL,NULL, "DigiCertGlobalRootCA.crt.pem", NULL, NULL);
//mysqli_real_connect($conn, "libraryprojserv.mysql.database.azure.com", "adminuser", "22TYRRL8A8V31810$", "library", 3306, MYSQLI_CLIENT_SSL);
    // Check connection
    $servername = "discountclinic.mysql.database.azure.com";
    $username = "adminLogin";
    $password = "1234567c!";
    $dbname = "discount_clinic";

    // Create connection
    $conn = mysqli_init();
    mysqli_ssl_set($conn,NULL,NULL,"./DigiCertGlobalRootCA.crt.pem", NULL, NULL);
    mysqli_real_connect($conn, $servername, $username, $password, $dbname, 3306, MYSQLI_CLIENT_SSL);

    // Check connection
  

    
    
    
    
/*
    
    // Get values from form
    $firstname = $_POST['first-name'];
    $middleInitial = $_POST['middle-initial'];
    $lastName = $_POST['last-name'];
    $gender = $_POST['gender'];
    $dob = $_POST['date-input'];
    $dob = date('Y-m-d', strtotime($dob));
    $phone = $_POST['phone'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $zip = $_POST['zipcode'];
    $emergencyFirstName = $_POST['Emergencyfirst-name'];
    $emergencyLastName = $_POST['Emergencylast-name'];
    $relationship = $_POST['Relationship'];
    $emergencyPhone = $_POST['emergencyContactPhone'];
    $primaryPhysician = $_POST['primary-physician'];
    $physicianStreet = $_POST['physician-street'];
    $physicianCity = $_POST['physician-city'];
    $physicianState = $_POST['physician-state'];
    $allergies = $_POST['allergies'];

    // Insert values into patients table
    //

    
   //insert name last name and gender into friends table
   
    // Insert name, last name, and gender into friends table
    $sql = "INSERT INTO friends (firstname, last_name, gender) VALUES ('$firstname', '$lastName', '$gender')";
    //mysqli_stmt_bind_param($stmt, "ssssssssss", $firstname, $middleInitial, $lastName, $gender, $dob, $phone, $street, $city, $state, $zip);

    $conn->query($sql);

    
    // Close the statement and the database connection
    mysqli_close($conn);
*/
    if (!$conn) {
        //die("Connection failed: " . mysqli_connect_error());
    }

    // Get input values
    $firstname =  $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $gender = $_POST['gender'];

    // Insert values into friends table
    $sql = "INSERT INTO friends (firstname, last_name, gender) VALUES ('$firstname', '$lastName', '$gender')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        //echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
    header("Location: http://yourdomain.com/thankyouForm.php");
    exit();

    ob_end_flush();



    

?>