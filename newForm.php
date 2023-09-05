<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Your Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        form {
            background-color: #ffffff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            margin: 20px auto;
            max-width: 600px;
            padding: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="date"],
        input[type="tel"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="file"] {
            margin-top: 5px;
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #007bff;
            border: none;
            color: #fff;
            padding: 10px 20px;
            margin-top: 20px;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="checkbox"] {
            margin-right: 5px;
        }
        select {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }

    /* select::after {
        content: "\25BC"; /* Unicode character for down arrow */
        position: absolute;
        top: 50%;
        right: 10px;
        transform: translateY(-50%);
    } */
    </style>
</head>
<body>
    <form method="POST" enctype="multipart/form-data">
        <!-- Add your form fields here -->
        <label for="accountType">Account Type:</label>
        <select id="accountType" name="accountType" required>
            <option value="">Select Account Type</option>
            <option value="Savings">Savings</option>
            <option value="Current">Current</option>
            <!-- Add more account types as needed -->
        </select>
        
        <label for="clientCode">Client Code:</label>
        <input type="text" name="clientCode" id="clientCode">
        
        <label for="cashMargin">Date:</label>
        <input type="date" name="cashMargin" id="cashMargin">

        <label for="linkCode">Link Code:</label>
        <input type="text" name="linkCode" id="linkCode">

        <!-- Fields for First Account Holder Signature and Picture -->
        <label for="firstAccountSignature">First Account Holder Signature:</label>
        <input type="file" name="firstAccountSignature" id="firstAccountSignature">
        
        <label for="firstAccountPicture">First Account Holder Picture:</label>
        <input type="file" name="firstAccountPicture" id="firstAccountPicture">

        <!-- Fields for First Account Holder -->
        <label for="firstName">Name of the Customer:</label>
        <input type="text" name="firstName" id="firstName">

        <label for="fatherName">Father's/Husband's Name:</label>
        <input type="text" name="fatherName" id="fatherName">

        <label for="motherName">Mother's Name:</label>
        <input type="text" name="motherName" id="motherName">

        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id="dob">

        <label>Gender:</label>
        <input type="radio" name="sex" value="Male" id="male">
        <label for="male">Male</label>
        <input type="radio" name="sex" value="Female" id="female">
        <label for="female">Female</label>

        <label for="presentAddress">Present Address:</label>
        <textarea name="presentAddress" id="presentAddress" rows="4"></textarea>

        <label for="nationality">Nationality:</label>
        <input type="text" name="nationality" id="nationality">

        <label for="mobile">Mobile:</label>
        <input type="tel" name="mobile" id="mobile">

        <label for="telephone">Tel #:</label>
        <input type="tel" name="telephone" id="telephone">

        <label for="permanentAddress">Permanent Address:</label>
        <textarea name="permanentAddress" id="permanentAddress" rows="4"></textarea>

        <label for="permanentTelephone">Tel:</label>
        <input type="tel" name="permanentTelephone" id="permanentTelephone">

        <label for="email">E-mail ID:</label>
        <input type="email" name="email" id="email">

        <label for="occupation">Occupation:</label>
        <input type="text" name="occupation" id="occupation">

        <label for="eTin">E-Tin #:</label>
        <input type="text" name="eTin" id="eTin">

        <!-- Fields for Joint Account Holder -->
        <label for="jointFirstName">Name of Joint Account Holder:</label>
        <input type="text" name="jointFirstName" id="jointFirstName">
        
        <label for="jointFatherName">Father's/Husband's Name:</label>
        <input type="text" name="jointFatherName" id="jointFatherName">
        
        <label for="jointMotherName">Mother's Name:</label>
        <input type="text" name="jointMotherName" id="jointMotherName">
        
        <label for="jointDob">Date of Birth:</label>
        <input type="date" name="jointDob" id="jointDob">
        
        <label>Gender:</label>
        <input type="radio" name="jointSex" value="Male" id="jointMale">
        <label for="jointMale">Male</label>
        <input type="radio" name="jointSex" value="Female" id="jointFemale">
        <label for="jointFemale">Female</label>
        
        <label for="jointPresentAddress">Present Address:</label>
        <textarea name="jointPresentAddress" id="jointPresentAddress" rows="4"></textarea>
        
        <label for="jointNationality">Nationality:</label>
        <input type="text" name="jointNationality" id="jointNationality">
        
        <label for="jointMobile">Mobile:</label>
        <input type="tel" name="jointMobile" id="jointMobile">
        
        <label for="jointTelephone">Tel #:</label>
        <input type="tel" name="jointTelephone" id="jointTelephone">
        
        <label for="jointPermanentAddress">Permanent Address:</label>
        <textarea name="jointPermanentAddress" id="jointPermanentAddress" rows="4"></textarea>
        
        <label for="jointPermanentTelephone">Tel:</label>
        <input type="tel" name="jointPermanentTelephone" id="jointPermanentTelephone">
        
        <label for="jointEmail">E-mail ID:</label>
        <input type="email" name="jointEmail" id="jointEmail">
        
        <label for="jointOccupation">Occupation:</label>
        <input type="text" name="jointOccupation" id="jointOccupation">
        
        <label for="jointETin">E-Tin #:</label>
        <input type="text" name="jointETin" id="jointETin">
        
        <!-- Fields for Authorized Person -->
        <label for="authorizedName">Name of Authorized Person:</label>
        <input type="text" name="authorizedName" id="authorizedName">
        
        <label for="authorizedFatherName">Father's/Husband's Name:</label>
        <input type="text" name="authorizedFatherName" id="authorizedFatherName">
        
        <label for="authorizedDob">Date of Birth:</label>
        <input type="date" name="authorizedDob" id="authorizedDob">
        
        <label>Gender:</label>
        <input type="radio" name="authorizedSex" value="Male" id="authorizedMale">
        <label for="authorizedMale">Male</label>
        <input type="radio" name="authorizedSex" value="Female" id="authorizedFemale">
        <label for="authorizedFemale">Female</label>
        
        <label for="authorizedAddress">Present Address:</label>
        <textarea name="authorizedAddress" id="authorizedAddress" rows="4"></textarea>
        
        <label for="authorizedNationality">Nationality:</label>
        <input type="text" name="authorizedNationality" id="authorizedNationality">
        
        <label for="authorizedMobile">Mobile:</label>
        <input type="tel" name="authorizedMobile" id="authorizedMobile">
        
        <label for="authorizedTelephone">Tel #:</label>
        <input type="tel" name="authorizedTelephone" id="authorizedTelephone">
        
        <label for="authorizedPermanentAddress">Permanent Address:</label>
        <textarea name="authorizedPermanentAddress" id="authorizedPermanentAddress" rows="4"></textarea>
        
        <label for="authorizedPermanentTelephone">Tel:</label>
        <input type="tel" name="authorizedPermanentTelephone" id="authorizedPermanentTelephone">
        
        <label for="authorizedEmail">E-mail ID:</label>
        <input type="email" name="authorizedEmail" id="authorizedEmail">
        
        <label for="authorizedOccupation">Occupation:</label>
        <input type="text" name="authorizedOccupation" id="authorizedOccupation">
        
        <label for="authorizedETin">E-Tin #:</label>
        <input type="text" name="authorizedETin" id="authorizedETin">
        
        <label for="authorizedBranchName">Branch Name:</label>
        <input type="text" name="authorizedBranchName" id="authorizedBranchName">
        
        <label for="authorizedRoutingNo">Routing No:</label>
        <input type="text" name="authorizedRoutingNo" id="authorizedRoutingNo">
        
        <!-- Field for Authorized Person Signature -->
        <label for="authorizedSignature">Authorized Person Signature:</label>
        <input type="file" name="authorizedSignature" id="authorizedSignature">
        
        <!-- Fields for Stock Exchange Information -->
        <label for="isStockExchange">Is Stock Exchange:</label>
        <input type="checkbox" name="isStockExchange" id="isStockExchange" value="yes">
        
        <label for="stockExchangeName">Stock Exchange Name:</label>
        <input type="text" name="stockExchangeName" id="stockExchangeName">
        
        <!-- Fields for Branch Information -->
        <label for="branchName">Branch Name:</label>
        <input type="text" name="branchName" id="branchName">
        
        <label for="accountNumber">Account Number:</label>
        <input type="text" name="accountNumber" id="accountNumber">
        
        <!-- Fields for Officer/Manager/Branch In-charge Signature -->
        <label for="officerSignature">Officer/Manager/Branch In-charge Signature:</label>
        <input type="file" name="officerSignature" id="officerSignature">
        
        <!-- Submit Button -->
        <input type="submit" value="Submit">
    </form>

    <?php
    // Database connection information
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'laBangla';

    // Create a database connection
    $conn = new mysqli($host, $username, $password, $database);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the form has been submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // Get data from the form fields
$accountType = $_POST["accountType"];
$clientCode = $_POST["clientCode"];
$cashMargin = $_POST["cashMargin"];
$linkCode = $_POST["linkCode"];
$firstName = $_POST["firstName"];
$fatherName = $_POST["fatherName"];
$motherName = $_POST["motherName"];
$dob = $_POST["dob"];
$sex = $_POST["sex"];
$presentAddress = $_POST["presentAddress"];
$nationality = $_POST["nationality"];
$mobile = $_POST["mobile"];
$telephone = $_POST["telephone"];
$permanentAddress = $_POST["permanentAddress"];
$permanentTelephone = $_POST["permanentTelephone"];
$email = $_POST["email"];
$occupation = $_POST["occupation"];
$eTin = $_POST["eTin"];

// Fields for First Account Holder Signature and Picture
$firstAccountSignaturePath = "path_to_store_first_signature"; // You need to handle file uploads and store the path
$firstAccountPicturePath = "path_to_store_first_picture"; // You need to handle file uploads and store the path

// Fields for Joint Account Holder
$jointFirstName = $_POST["jointFirstName"];
$jointFatherName = $_POST["jointFatherName"];
$jointMotherName = $_POST["jointMotherName"];
$jointDob = $_POST["jointDob"];
$jointSex = $_POST["jointSex"];
$jointPresentAddress = $_POST["jointPresentAddress"];
$jointNationality = $_POST["jointNationality"];
$jointMobile = $_POST["jointMobile"];
$jointTelephone = $_POST["jointTelephone"];
$jointPermanentAddress = $_POST["jointPermanentAddress"];
$jointPermanentTelephone = $_POST["jointPermanentTelephone"];
$jointEmail = $_POST["jointEmail"];
$jointOccupation = $_POST["jointOccupation"];
$jointETin = $_POST["jointETin"];

// Fields for Joint Account Holder Signature and Picture
$jointAccountSignaturePath = "path_to_store_joint_signature"; // You need to handle file uploads and store the path
$jointAccountPicturePath = "path_to_store_joint_picture"; // You need to handle file uploads and store the path

// Fields for Authorized Person
$authorizedName = $_POST["authorizedName"];
$authorizedFatherName = $_POST["authorizedFatherName"];
$authorizedDob = $_POST["authorizedDob"];
$authorizedSex = $_POST["authorizedSex"];
$authorizedAddress = $_POST["authorizedAddress"];
$authorizedNationality = $_POST["authorizedNationality"];
$authorizedMobile = $_POST["authorizedMobile"];
$authorizedTelephone = $_POST["authorizedTelephone"];
$authorizedPermanentAddress = $_POST["authorizedPermanentAddress"];
$authorizedPermanentTelephone = $_POST["authorizedPermanentTelephone"];
$authorizedEmail = $_POST["authorizedEmail"];
$authorizedOccupation = $_POST["authorizedOccupation"];
$authorizedETin = $_POST["authorizedETin"];
$authorizedBranchName = $_POST["authorizedBranchName"];
$authorizedRoutingNo = $_POST["authorizedRoutingNo"];

// Field for Authorized Person SignatureAC
$authorizedSignaturePath = "path_to_store_authorized_signature"; // You need to handle file uploads and store the path

// Fields for Stock Exchange Information
$isStockExchange = isset($_POST["isStockExchange"]) ? $_POST["isStockExchange"] : "no";
$stockExchangeName = $_POST["stockExchangeName"];

// Fields for Branch Information
$branchName = $_POST["branchName"];
$accountNumber = $_POST["accountNumber"];

// Fields for Officer/Manager/Branch In-charge Signature
$officerSignaturePath = "path_to_store_officer_signature"; 

        // Modify the SQL query to insert data into the database
        $sql = "INSERT INTO CustomerAccountInformation (accountType, clientCode, cashMargin, linkCode, firstName, fatherName, motherName, dob, sex, presentAddress, nationality, mobile, telephone, permanentAddress, permanentTelephone, email, occupation, eTin, firstAccountSignaturePath, firstAccountPicturePath, jointFirstName, jointFatherName, jointMotherName, jointDob, jointSex, jointPresentAddress, jointNationality, jointMobile, jointTelephone, jointPermanentAddress, jointPermanentTelephone, jointEmail, jointOccupation, jointETin, jointAccountSignaturePath, jointAccountPicturePath, authorizedName, authorizedFatherName, authorizedDob, authorizedSex, authorizedAddress, authorizedNationality, authorizedMobile, authorizedTelephone, authorizedPermanentAddress, authorizedPermanentTelephone, authorizedEmail, authorizedOccupation, authorizedETin, authorizedBranchName, authorizedRoutingNo, authorizedSignaturePath, isStockExchange, stockExchangeName, branchName, accountNumber, officerSignaturePath) 
        VALUES ('$accountType', '$clientCode', '$cashMargin', '$linkCode', '$firstName', '$fatherName', '$motherName', '$dob', '$sex', '$presentAddress', '$nationality', '$mobile', '$telephone', '$permanentAddress', '$permanentTelephone', '$email', '$occupation', '$eTin', '$firstAccountSignaturePath', '$firstAccountPicturePath', '$jointFirstName', '$jointFatherName', '$jointMotherName', '$jointDob', '$jointSex', '$jointPresentAddress', '$jointNationality', '$jointMobile', '$jointTelephone', '$jointPermanentAddress', '$jointPermanentTelephone', '$jointEmail', '$jointOccupation', '$jointETin', '$jointAccountSignaturePath', '$jointAccountPicturePath', '$authorizedName', '$authorizedFatherName', '$authorizedDob', '$authorizedSex', '$authorizedAddress', '$authorizedNationality', '$authorizedMobile', '$authorizedTelephone', '$authorizedPermanentAddress', '$authorizedPermanentTelephone', '$authorizedEmail', '$authorizedOccupation', '$authorizedETin', '$authorizedBranchName', '$authorizedRoutingNo', '$authorizedSignaturePath', '$isStockExchange', '$stockExchangeName', '$branchName', '$accountNumber', '$officerSignaturePath')";

        // Execute the SQL query to insert data into the database
        if (mysqli_query($conn, $sql)) {
            // Data inserted successfully
            echo "Data inserted successfully!";
        } else {
            // Error inserting data
            echo "Error: " . mysqli_error($conn);
        }

        // Close the database connection
        $conn->close();
    }
    ?>
</body>
</html>
