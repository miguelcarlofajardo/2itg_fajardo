<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taxxy</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
</head>
<body>
    <p class="calculator-label"> 
        Taxxy : A Tax Calculator 
    </p> 
    <div class="grid-container">
    <div class="container">
    <div class="card">
    <form action="#" method="POST">
    <div>
        <p class="salary-label">
            Salary:
        </p>
    </div>
    <div>
        <input class="salary" type="text" name="salary">
    </div>
    <div>

    <fieldset>
        <legend> Nature of Salary </legend>
        <div class="radio-item">
        <input type="radio" id="option1" name="option" value="Bi-Monthly">
        <label for="option1"> 
            Bi-Monthly 
        </label>
        </div>
        <div class="radio-item">
        <input type="radio" id="option2" name="option" value="Monthly">
        <label for="option2"> 
            Monthly 
        </label>
        </div>
    </fieldset>
    <div>
        <button type="submit" name="submit" value="submit">
            Compute
        </button>
    </form>
    </div>
    </div>
    </div>
    </div>

    <div class="container">
    <div class="card">
    <div>
    <?php
            if (isset($_POST['submit'])) {
            $total = $_POST['salary'];
            $nature = $_POST['option'];
            echo "<p>Total Annual Salary: </p> ";
            $annualSalary = 0;
            if ($nature == 'Bi-Monthly') {
            $annualSalary = $total * 24;	
            } else {
            $annualSalary = $total * 12;
            }
            $formattedSalary = number_format($annualSalary, 2);
            echo "<div class=\"results\">₱$formattedSalary</div>";

            echo "<p>Est. Annual Tax: </p> ";
            $annualTax = 0;
            if ($annualSalary <= 250000) {
            echo "<div class=\"results\">No tax due</div>";
            } else if ($annualSalary <= 400000) {
            $annualTax = ($annualSalary - 250000) * 0.2;
            $formattedTax = number_format($annualTax, 2);
            echo "<div class=\"results\">₱$formattedTax</div>";
            } else if ($annualSalary <= 800000) {
            $annualTax = 30000 + (($annualSalary - 400000) * 0.25);
            $formattedTax = number_format($annualTax, 2);
            echo "<div class=\"results\">₱$formattedTax</div>";
            } else if ($annualSalary <= 2000000) {
            $annualTax = 130000 + (($annualSalary - 800000) * 0.3);
            $formattedTax = number_format($annualTax, 2);
            echo "<div class=\"results\">₱$formattedTax</div>";
            } else if ($annualSalary <= 8000000) {
            $annualTax = 490000 + (($annualSalary - 2000000) * 0.32);
            $formattedTax = number_format($annualTax, 2);
            echo "<div class=\"results\">₱$formattedTax</div>";
            } else {
            $annualTax = 2410000 + (($annualSalary - 8000000) * 0.35);
            $formattedTax = number_format($annualTax, 2);
            echo "<div class=\"results\">₱$formattedTax</div>";
            }

             echo "<p>Est. Monthly Tax: </p> ";
             $monthlyTax = $annualTax / 12;
             $formattedTax = number_format($monthlyTax, 2);
             echo "<div class=\"results\">₱$formattedTax</div>";
            }
        ?>
    </div>
    </div>
    </div>
    </div>
</body>
</html>