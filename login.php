
<?php
include("confige.php");

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    // Check if fields are empty
    if (empty($email) || empty($password)) {
        echo "<script>alert('Email and Password are required!'); window.location.href='index.html';</script>";
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<script>alert('Invalid email format!'); window.location.href='index.html';</script>";
        exit();
    }

    // Check user in the database
    $sql = "SELECT id, password FROM registration_user WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_store_result($stmt);

        if (mysqli_stmt_num_rows($stmt) > 0) {
            mysqli_stmt_bind_result($stmt, $id, $hashed_password);
            mysqli_stmt_fetch($stmt);

            // Verify the password
            if (password_verify($password, $hashed_password)) {
                session_start();
                $_SESSION['user_id'] = $id;
                echo "<script>alert('Login Successful!'); window.location.href='dashboard.php';</script>";
            } else {
                echo "<script>alert('Incorrect Password!'); window.location.href='index.html';</script>";
            }
        } else {
            echo "<script>alert('User not found! Please register first.'); window.location.href='index.html';</script>";
        }

        mysqli_stmt_close($stmt);
    } else {
        echo "<script>alert('Database error: " . mysqli_error($conn) . "');</script>";
    }
}

mysqli_close($conn);
?>
