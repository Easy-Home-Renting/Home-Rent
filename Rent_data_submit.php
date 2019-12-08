<?php include('partials/db_connect.php'); ?>

<?php
	if(isset($_POST['crimeSubmit'])){
        $cID=$_POST['cID'];
		$crimeType=$_POST['crimeType'];
		$crimePlace=$_POST['crimePlace'];
		$crimeDate=$_POST['crimeDate'];
		$crimeTime=$_POST['crimeTime'];
	       
        $criminalID=$_POST['criminalID'];
		$criminalName=$_POST['criminalName'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$fatherName=$_POST['fatherName'];
		$motherName=$_POST['motherName'];
		$presentAddress=$_POST['presentAddress'];
		$permanentAddress=$_POST['permanentAddress'];
        
        $witnessId=$_POST['witnessId'];
		$witnessName=$_POST['witnessName'];
		$witnessAddress=$_POST['witnessAddress'];
        $phoneNo=$_POST['phoneNo'];

        
		

        $query="INSERT INTO crime2(cID,crimeType,crimePlace,crimeDate,crimeTime,criminalID,criminalName,dob,gender,fatherName,motherName,presentAddress,permanentAddress,witnessId,witnessName,witnessAddress,phoneNo) VALUES('{$cID}', '{$crimeType}', '{$crimePlace}', '{$crimeDate}', '{$crimeTime}','{$criminalID}', '{$criminalName}','{$dob}','{$gender}' ,'{$fatherName}', '{$motherName}', '{$presentAddress}', '{$permanentAddress}', '{$witnessId}', '{$witnessName}', '{$witnessAddress}', '{$phoneNo}')";
	
		$performQuery=mysqli_query($connection, $query);

		if(!$performQuery)
			echo 'Query unsuccessful';

		$insertedId=mysqli_insert_id($connection);
//header('Location:criminal_data_entry.php');
header('Location: Receipt.php?ccId='.$insertedId);
		exit();
	}
?>

<?php include('partials/db_close.php'); ?>