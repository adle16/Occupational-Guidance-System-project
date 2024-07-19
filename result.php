<!DOCTYPE html>
<html>
<head>
  <title>Form Submission</title>
</head>
<body>

<h2>Submitted Form Data</h2>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data from Google Form submission
  $scienceQ1 = $_POST['scienceQ1'];
  $scienceQ2 = $_POST['scienceQ2'];
  $scienceQ3 = $_POST['scienceQ3'];
  $scienceQ4 = $_POST['scienceQ4'];
  // Retrieve other science questions as needed
  $commerceQ1 = $_POST['commerceQ1'];
  $commerceQ2 = $_POST['commerceQ2'];
  // Retrieve other commerce questions as needed
  $artsQ1 = $_POST['artsQ1'];
  $artsQ2 = $_POST['artsQ2'];
  // Retrieve other arts questions as needed

  // Output form data in HTML
  echo "<h3>Science Field:</h3>";
  echo "<p>Question 1: $scienceQ1</p>";
  echo "<p>Question 2: $scienceQ2</p>";
  // Output other science questions as needed
  echo "<h3>Commerce Field:</h3>";
  echo "<p>Question 1: $commerceQ1</p>";
  echo "<p>Question 2: $commerceQ2</p>";
  // Output other commerce questions as needed
  echo "<h3>Arts Field:</h3>";
  echo "<p>Question 1: $artsQ1</p>";
  echo "<p>Question 2: $artsQ2</p>";
  // Output other arts questions as needed
}
?>

</body>
</html>
