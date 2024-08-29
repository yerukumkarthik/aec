<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
    <style>
        .container {
            max-width: 800px;
            margin: 40px auto;
            padding: 20px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .form-group {
            margin-bottom: 10px;
        }
        .form-group label{
            margin-left: 15%;
            width: 50%;
            font-weight: bold;
        }
        .form-group label ,.form-group p{
            font-size: large;
            display: inline-block;
            margin-bottom: 10px;
        }
        .logo{
            margin-left: 21px;
            width: 750px
        }
    </style>
</head>
<body>
    <div class="container">
    <?php  session_start(); ?>
        <img src="https://aec.edu.in/adityanew/images/100.png" class="logo"><hr>
        <h1 style="margin-left: 30%;">Remuniration Bill</h1><hr>
        <div class="form-group">
            <label for="facultyname">Name of the faculty</label><p id="p1"><?php echo $_SESSION['facultyname']; ?></p>
        </div>
        <div class="form-group">
            <label>Designation</label><p id="p2"><?php echo $_SESSION['designation']; ?></p>
        </div>
        <div class="form-group">
            <label>Name of the college </label><p id="p3"><?php echo $_SESSION['college']; ?></p>
        </div>
        <div class="form-group">
            <label>Purpose</label><p id="p4">  <?php echo $_SESSION['purpose']; ?></p>
        </div>
        <div class="form-group">
            <label for="telephone">Telephone</label><p id="p5"><?php echo $_SESSION['telephone']; ?> </p>   
        </div>
        <div class="form-group">
            <label for="DateofDuty">Date of Duty</label><p id="p6"><?php echo $_SESSION['DateofDuty']; ?></p>
        </div>
        <div class="form-group">
            <label for="DateofRelieving">Date of Relieving</label><p id="p7"><?php echo $_SESSION['DateofRelieving']; ?> </p>
        </div>
        <div class="form-group">
            <label for="nodays">Number of Days</label><p id="p9"> <?php echo $_SESSION['day']; ?></p>
        </div>
        <div class="form-group">
            <label for="nostudents">Number of Students</label><p id="p8"> <?php echo $_SESSION['nostudents']; ?></p>
        </div>
        <div class="form-group">
            <label for="bankacc">Bank Account</label><p id="p10"><?php echo $_SESSION['bankacc']; ?> </p>
        </div>
        <div class="form-group">
            <label for="ifsc">IFSC code</label><p id="p11"><?php echo $_SESSION['ifsc']; ?> </p>
        </div><hr>
        <footer><p style="width: 70%;font-size: large;margin-bottom: 20px;">Signature of Faculty: </label><p style="width: 14%;font-size: large;display: inline-block;">Total amount: </p><p id="printCost"style="display: inline-block;font-weight:bold;"><?php echo $_SESSION['cost']; ?></p></footer>
    </div>
    <center><button value="Print" style="width: 100px;height: 30px;" onclick="window.print()">Print</button></center>   
</body>
<script type="text/javascript" src="printPage.js"></script>
</html>