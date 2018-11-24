<?php
include('fpdf/fpdf.php');
require("job_seeker_incl.php");

$email = $_SESSION['email'];
if(isset($_GET['job_id']))
{
$job_id=$_GET['job_id'];
$_SESSION['job_id']=$job_id;
}	 
else  echo '<script>
            alert("Choose a applied job to print Acknowledgment slip");
            window.location.href="index";
             </script>';  
			 

$que = "select * from applied,job,job_provider,job_seeker where applied.job_id=job.job_id and job.jobprovider_email=job_provider.email and job.job_id='$job_id' and jobseeker_email='$email'";
	$run = mysqli_query($conn,$que);
	$row = mysqli_fetch_array($run);

    $fname=$row['fname'];
	$lname=$row['lname'];
	$address=$row['address'];
	$dob=$row['dob'];
	$gender=$row['gender'];
	$contact_no=$row['contact_no'];
	$company_name=$row['company_name'];
	$company_location=$row['company_location'];
	$job_name=$row['job_name'];
	$designation=$row['designation'];
	$company_location=$row['company_location'];
	$applied_on=$row['applied_on'];

	


$pdfobj = new FPDF();
$pdfobj->AddPage();
$pdfobj->SetFont("Arial","B",15);

$pdfobj->Cell(0,10,"Online Job Portal",0,1,'C');
$pdfobj->Cell(50,10,"",0,1,'R');
$pdfobj->SetFont("Arial","B",12);

$pdfobj->Cell(0,10,"Applicatin for the post of :   $designation",0,1,'C');
$pdfobj->Cell(20,5,"",0,1,'R');

$pdfobj->SetFont("Arial","B",9);

$pdfobj->Cell(0,10,"NAME of Candidate:                  $fname $lname",0,1,'C');
$pdfobj->Cell(0,10,"Date of birth:                      $dob ",0,1,'C');
$pdfobj->Cell(0,10,"Gender:                             $gender ",0,1,'C');
$pdfobj->Cell(0,10,"Contact No:                         $contact_no",0,1,'C');
$pdfobj->Cell(0,10,"Email:                       $email",0,1,'C');


$pdfobj->Cell(0,10,"Comapny Name:                          $company_name",0,1,'C');
$pdfobj->Cell(0,10,"Company Location:                          $company_location",0,1,'C');
$pdfobj->Cell(0,10,"Job Name:                          $job_name",0,1,'C');
$pdfobj->Cell(0,10,"Designation:                          $designation",0,1,'C');
$pdfobj->Cell(0,10,"Date of Apply:                          $applied_on",0,1,'C');


$pdfobj->output();
?>