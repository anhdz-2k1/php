<html>
<head>
    <title>Assignment2</title>
</head>
<body>
<?php
$lastname = $_GET['lastname'];
$firstname = $_GET['firstname'];
$address = $_GET['address'];
$phone = $_GET['phone'];
$qualifications = $_GET['qualifications'];
$experience = $_GET['experience'];
$department = $_GET['department'];
echo "<br>";
echo "Full name: " .$lastname . " " .$firstname. "<br>";
echo "Address: " .$address . "<br>" ;
echo "Phone: " .$phone . "<br>";
echo "Qualifications:" .$qualifications. "<br>";
echo "Experience: " .$experience. "<br>";
switch ($department){
    case "IT":
        echo "Post Available: ";
        echo "Sofware Developer, Graphic Designer, Web Designer, and Technical Support";
        break;
    case "Finance":
        echo "Post Available: ";
        echo "Cost Analyst, Chartered Accountant, Company Secretary, Accountant, and Auditor";
        break;
    case "Sales":
        echo "Post Available: ";
        echo "Sales Executive, Sales Manager, and Sales Analyst";
        break;
}
?>

</body>
</html>

