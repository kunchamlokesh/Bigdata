
<?php
if(isset($_POST["submit"])
{
	$email  = $_POST['mail_id'];	
	$first_name =  $_POST['fname'];
	$last_name =  $_POST['lname'];
	$company_name =  $_POST['company'];
	$age =  $_POST['age'];
	$address =  $_POST['address'];
	$city =  $_POST['city'];
	$state =  $_POST['state'];
	$post =  $_POST['post'];
	$phone1 =  $_POST['ph1'];
	$phone2 =  $_POST['ph2'];
	$no_of_pregnancies =  $_POST['pregnancy'];
	$glucose_conc =  $_POST['glucose'];
	$blood_pressure =  $_POST['bp'];
	$triceps_skinfold =  $_POST['triceps'];
	$hour_insulin =  $_POST['insulin'];
	$body_mass =  $_POST['bodymass'];
	$diabetes_func =  $_POST['diabetes'];


 //check for a valid email address
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $error[] = 'Please enter a valid email address';
    }
  //check fname is set
    if($fame_name ==''){
        $error[] = 'First Name is required';
    }

 //check lname is set
    if($last_name ==''){
        $error[] = 'Last Name is required';
    }
 //check compny name is set
    if($company_name ==''){
        $error[] = 'Company Name is required';
    }

 //check compny name is set
    if($age ==''){
        $error[] = 'Age is required';
    }
 //check compny name is set
    if($address ==''){
        $error[] = 'Address is required';
    }
 //check compny name is set
    if($city ==''){
        $error[] = 'City is required';
    }
 //check compny name is set
    if($state==''){
        $error[] = 'State is required';
    }
 //check compny name is set
    if($post ==''){
        $error[] = 'Post is required';
    }
 //check compny name is set
    if($phone1 ==''){
        $error[] = 'Phone1is required';
    }
 //check compny name is set
    if($phone2==''){
        $error[] = 'Phone2 is required';
    }
 //check compny name is set
    if($no_of_pregnancies ==''){
        $error[] = 'No_of_pregnancies is required';
    }
 //check compny name is set
    if($glucose_conc ==''){
        $error[] = 'Glucose_conc is required';
    }
//check compny name is set
    if($blood_pressure ==''){
        $error[] = 'Blood_pressure is required';
    }
//check compny name is set
    if($triceps_skinfold ==''){
        $error[] = 'Triceps_skinfold is required';
    }
//check compny name is set
    if($hour_insulin ==''){
        $error[] = '2_Hour_insulin  is required';
    }
//check compny name is set
    if($body_mass ==''){
        $error[] = 'Body Mass is required';
    }
//check compny name is set
    if($diabetes_func ==''){
        $error[] = 'Diabetesfunc  is required';
    }



























   

    //if no errors carry on
    if(!isset($error)){

        # Title of the CSV
        $Content = "Name, Email\n";

        //set the data of the CSV
        $Content .= "$name, $email\n";

        # set the file name and create CSV file
        $FileName = "formdata-".date("d-m-y-h:i:s").".csv";
        header('Content-Type: application/csv'); 
        header('Content-Disposition: attachment; filename="' . $FileName . '"'); 
        echo $Content;
        exit();
    }
}

//if their are errors display them
if(isset($error)){
    foreach($error as $error){
        echo "<p style='color:#ff0000'>$error</p>";
    }
}











}
?>
