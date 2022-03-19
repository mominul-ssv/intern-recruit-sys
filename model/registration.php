<?php
include('../connection/db_connection.php');
/**
 * [1] stripslashes function can be used to clean up data retrieved from
 *     a database or from an HTML form. 
 * 
 * [2] php://input - This is a read-only stream that allows us to read raw 
 *     data from the request body. It returns all the new raw data after the 
 *     HTTP-headers of the request, regardless of the content type.
 * 
 * [3] json_decode - It takes JSON string and converts it into a PHP object or 
 *     array, if true then associative array.
 */

$data = stripslashes(file_get_contents("php://input"));
$myData = json_decode($data, true);

$firstName = $myData['dataFirstName'];
$lastName = $myData['dataLastName'];
$email = $myData['dataEmail'];
$phone = $myData['dataPhone'];
$dob = $myData['dataDob'];
$country = $myData['dataCountry'];
$address = $myData['dataAddress'];
$universityName = $myData['dataUniversityName'];
$studentId = $myData['dataStudentId'];
$password = $myData['dataPassword'];

$sql = "INSERT INTO student_reg(first_name, last_name, email, phone, dob, country, address, university_name, student_id, password) 
  VALUES(
    '$firstName', 
    '$lastName', 
    '$email', 
    '$phone', 
    '$dob', 
    '$country', 
    '$address', 
    '$universityName',
    '$studentId',
    '$password'
    )";

if ($conn->query($sql) == TRUE) {
  echo "Student saved successfully";
} else {
  echo "Unable to save student";
}