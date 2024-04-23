<html>
    <head>
        <title>Medical Record Management System</title>
        <link href="assets/css/style.css" rel="stylesheet">
        
        

    </head>
    <body>
        <h1>Add Doctor Details</h1>
        <form action="saveDoctorDetails.php" method="post" onsubmit="return validateForm()">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name" required>

            <label for="last_name">Last Name:</label>
            <input type="text" id="last_name" name="last_name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email">

            <label for="phone">Phone:</label>
            <input type="text" id="phone" name="phone">

            <label for="specialty">Specialty:</label>
            <input type="text" id="specialty" name="specialty" required>

            <label for="address">Address:</label>
            <input type="text" id="address" name="address">

            <label for="city">City:</label>
            <input type="text" id="city" name="city">

            <label for="state">State:</label>
            <input type="text" id="state" name="state">

            <label for="zipcode">Zipcode:</label>
            <input type="text" id="zipcode" name="zipcode">

            <label for="country">Country:</label>
            <input type="text" id="country" name="country">

            <label for="gender">Gender:</label>
            <select id="gender" name="gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Other">Other</option>
            </select>

            <label for="date_of_birth">Date of Birth:</label>
            <input type="date" id="date_of_birth" name="date_of_birth">

            <label for="medical_license_number">Medical License Number:</label>
            <input type="text" id="medical_license_number" name="medical_license_number">

            <label for="years_of_experience">Years of Experience:</label>
            <input type="number" id="years_of_experience" name="years_of_experience">

            <label for="hospital_affiliation">Hospital Affiliation:</label>
            <input type="text" id="hospital_affiliation" name="hospital_affiliation">

            <label for="education">Education:</label>
            <input type="text" id="education" name="education">

            <label for="certifications">Certifications:</label>
            <input type="text" id="certifications" name="certifications">

            <label for="languages_spoken">Languages Spoken:</label>
            <input type="text" id="languages_spoken" name="languages_spoken">

            <input type="submit" value="Submit">
        </form>
    </body>
</html>