<?php
$loamAmount = $_POST["loan_amount"];
$clientType = $_POST["client_type"];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $interestRate = 0;

    if($loamAmount < 100000){
        $interestRate = 10;
    }else {
            $interestRate = 5;
        }

        if ($clientType == "1"){
            $interestRate = $interestRate - 2;

        }
    
    $interestAmount = $loamAmount * ($interestRate / 100);
    $totalLoan = $loamAmount+$interestAmount;

    header("location: loancalculator.php?loan=".$totalLoan);
}