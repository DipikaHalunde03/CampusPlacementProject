
<?php
// Assume $companyName is the variable that holds the company name
$company_name = "IBM";
?>

<!-- Link to the application form with the company name as a query parameter -->
<a href="application_form.php?company_name=<?= urlencode($company_name) ?>">Apply Now</a>


