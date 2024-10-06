<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loan Calculator</title>
</head>
<body>
    <form action="computeloan.php" method="POST">
        <h1>LOAN CALCULATOR</h1>

        <label for="loan_amount">Loan Amount</label>
        <input type="number" name="loan_amount" id="loan_amount">

        <div>
            <label for="client_type">Client Type</label>
            <input type="radio" name="client_type" value="0"><label>New</label>
            <input type="radio" name="client_type" value="1"><label>Old</label>
        </div>

        
        <input type="submit" value="Check Loan">
    </form>
    <?php
    if(isset($_GET["loan"])){
        ?>
    
    <div> Your total loan is <?php echo number_format($_GET["loan"]);?></div>
     <?php
     }
     ?>
</body>
</html>
