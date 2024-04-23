<?php
include '../common/conn.php'; // Include the database connection file

// Retrieve form data
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$specialty = $_POST['specialty'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$country = $_POST['country'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
$medical_license_number = $_POST['medical_license_number'];
$years_of_experience = $_POST['years_of_experience'];
$hospital_affiliation = $_POST['hospital_affiliation'];
$education = $_POST['education'];
$certifications = $_POST['certifications'];
$languages_spoken = $_POST['languages_spoken'];

// Prepare insert statement
$stmt = $conn->prepare("INSERT INTO doctors_details (first_name, last_name, email, phone, specialty, address, city, state, zipcode, country, gender, date_of_birth, medical_license_number, years_of_experience, hospital_affiliation, education, certifications, languages_spoken) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

// Bind parameters
$stmt->bind_param("sssssssssssssisss", $first_name, $last_name, $email, $phone, $specialty, $address, $city, $state, $zipcode, $country, $gender, $date_of_birth, $medical_license_number, $years_of_experience, $hospital_affiliation, $education, $certifications, $languages_spoken);

// Execute the statement
if ($stmt->execute()) {
    // Success
    echo '<script>
            Swal.fire({
                icon: "success",
                title: "Success!",
                text: "Doctor details saved successfully!",
                showConfirmButton: false,
                timer: 2000
            }).then(function () {
                window.location.href = "add_doctor.php";
            });
        </script>';
} else {
    // Error
    echo '<script>
            Swal.fire({
                icon: "error",
                title: "Error!",
                text: "An error occurred while saving doctor details.",
                showConfirmButton: false,
                timer: 2000
            }).then(function () {
                window.location.href = "add_doctor.php";
            });
        </script>';
}

// Close statement and connection
$stmt->close();
$conn->close();
?>
