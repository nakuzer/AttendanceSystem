<?php
// Include the Database class
include_once '../API/database.php';

// Create a new Database instance
$database = new Database();
$conn = $database->getConnection();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Sanitize form data
    $role = htmlspecialchars($_POST['role']);
    $email = htmlspecialchars($_POST['email']);
    $schoolId = htmlspecialchars($_POST['schoolId']);
    $course = htmlspecialchars($_POST['Course']);
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $password = htmlspecialchars($_POST['password']);
    $confirmPassword = htmlspecialchars($_POST['confirmPassword']);

    // Check if passwords match
    if ($password !== $confirmPassword) {
        echo "Passwords do not match.";
        exit;
    }

    // Hash the password for storage
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare the SQL query based on role
    if ($role === 'student') {
        $sql = "INSERT INTO students (email, school_id, course, first_name, last_name, password)
                VALUES (:email, :schoolId, :course, :firstName, :lastName, :password)";
    } elseif ($role === 'teacher') {
        $sql = "INSERT INTO teachers (email, school_id, course, first_name, last_name, password)
                VALUES (:email, :schoolId, :course, :firstName, :lastName, :password)";
    } else {
        echo "Invalid role selected.";
        exit;
    }

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':schoolId', $schoolId);
    $stmt->bindParam(':course', $course);
    $stmt->bindParam(':firstName', $firstName);
    $stmt->bindParam(':lastName', $lastName);
    $stmt->bindParam(':password', $hashedPassword);

    // Execute the query and check if it was successful
    if ($stmt->execute()) {
        echo "Account created successfully!";
    } else {
        echo "Error: Could not insert the record.";
    }
}
?>
