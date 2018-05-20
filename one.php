
<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	$email  = $_POST['email'];	
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
    if($first_name ==''){
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

 //check age is set
    if($age ==''){
        $error[] = 'Age is required';
    }
 //check address is set
    if($address ==''){
        $error[] = 'Address is required';
    }
 //check city is set
    if($city ==''){
        $error[] = 'City is required';
    }
 //check state is set
    if($state==''){
        $error[] = 'State is required';
    }
 //check post is set
    if($post ==''){
        $error[] = 'Post is required';
    }
 //check ph1 is set
    if($phone1 ==''){
        $error[] = 'Phone1is required';
    }
 //check ph2 is set
    if($phone2==''){
        $error[] = 'Phone2 is required';
    }
 //check pregnancy is set
    if($no_of_pregnancies ==''){
        $error[] = 'No_of_pregnancies is required';
    }
 //check glucose is set
    if($glucose_conc ==''){
        $error[] = 'Glucose_conc is required';
    }
//check bp is set
    if($blood_pressure ==''){
        $error[] = 'Blood_pressure is required';
    }
//check skinfold is set
    if($triceps_skinfold ==''){
        $error[] = 'Triceps_skinfold is required';
    }
//check insulin is set
    if($hour_insulin ==''){
        $error[] = '2_Hour_insulin  is required';
    }
//check bodymass is set
    if($body_mass ==''){
        $error[] = 'Body Mass is required';
    }
//check diabetes is set
    if($diabetes_func ==''){
        $error[] = 'Diabetesfunc  is required';
    }


}

if(!isset($error)){

        # Title of the CSV
       

        //set the data of the CSV
        $list= array("$first_name, $last_name,$company_name,$address,$city,$state,$post,$phone1,$phone2,$email,$no_of_pregnancies,$glucose_conc,$blood_pressure,$triceps_skinfold,$hour_insulin,$body_mass,$diabetes_func,$age");




 $fp = fopen("/home/akhil/Desktop/test.csv","a");
    
foreach ($list as $fields){
      fputcsv($fp, explode(',',$fields));

    }

    fclose($fp);

echo "Details sucessfully updated";

       
    }


//if their are errors display them
if(isset($error)){
    foreach($error as $error){
        echo "<p style='color:#ff0000'>$error</p>";
    }
}






















   
















?>
