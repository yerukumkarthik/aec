<?php
// Form handler script

// Get the form data

session_start();
$designationList = [
    "asc" => "Associate Professor",
    "pro" => "Professor",
    "assist" => "Assistant Professor"
];

$purposeList = [
    "paper" => "Paper Valuation",
    "viva" => "Project Viva",
    "lab" => "Lab External"
];

$collegeList = [
    "prag" => "Pragathi Eng. College",
    "bvc" => "BVC Eng. College",
    "vishnu" => "Vishnu Eng. College",
    "srkr" => "SRKR Eng. College",
    "kl" => "KL University"
];

$collnames = [
    "prag" => 100,
    "bvc" => 100,
    "vishnu" => 100,
    "srkr" => 100,
    "kl" => 150
];

$purp = [
    "paper" => 20,
    "viva" => 100,
    "lab" => 20
];

$des = [
    "asc" => 150,
    "pro" => 200,
    "assist" => 100
];
$_SESSION['facultyname']=$_POST['facultyname'];
$_SESSION['designation'] = $designationList[$_POST['designation']];
$_SESSION['college'] = $collegeList[$_POST['college']];
$_SESSION['purpose'] = $purposeList[$_POST['purpose']];
$_SESSION['telephone'] = $_POST['telephone'];
$_SESSION['DateofDuty'] = $_POST['DateofDuty'];
$_SESSION['DateofRelieving'] = $_POST['DateofRelieving'];
$_SESSION['nostudents'] = $_POST['nostudents'];
$_SESSION['bankacc'] = $_POST['bankacc'];
$_SESSION['ifsc'] = $_POST['ifsc'];
$_SESSION['des']=$_POST['designation'];
$_SESSION['col']=$_POST['college'];
$_SESSION['pur']=$_POST['purpose'];

// Convert dates to DateTime objects
$start = new DateTime($_SESSION['DateofDuty']);
$end = new DateTime($_SESSION['DateofRelieving']);

// Calculate the difference in days
$interval = $start->diff($end);
$_SESSION['day'] = $interval->days;

// Calculate the cost
$_SESSION['cost'] = $des[$_SESSION['des']] + $collnames[$_SESSION['col']] + $purp[$_SESSION['pur']] * $_SESSION['nostudents'];
$facultyname=$_SESSION['facultyname'];
$designation=$_SESSION['designation'];
$college=$_SESSION['college'];
$purpose=$_SESSION['purpose'];
$telephone=$_SESSION['telephone'];
$DateofDuty=$_SESSION['DateofDuty'];
$DateofRelieving=$_SESSION['DateofRelieving'];
$nostudents=$_SESSION['nostudents'];
$bankacc=$_SESSION['bankacc'];
$ifsc=$_SESSION['ifsc'];
// Open the CSV file in append mode
$fp = fopen('data.csv', 'a');

// Write the header row if the file is empty
if (filesize('data.csv') == 0) {
    fputcsv($fp, array('Faculty Name', 'Designation', 'College', 'Purpose', 'Telephone', 'Date of Duty', 'Date of Relieving', 'Number of Students', 'Bank Account', 'IFSC Code'));
}

// Write the form data to the CSV file
fputcsv($fp, array($facultyname, $designation, $college, $purpose, $telephone, $DateofDuty, $DateofRelieving, $nostudents, $bankacc, $ifsc));

// Close the file
fclose($fp);

// Define arrays similar to your JavaScript objects

// Redirect the user to a thank-you page or display a success message
header('Location: printPage.php');
exit;
?>