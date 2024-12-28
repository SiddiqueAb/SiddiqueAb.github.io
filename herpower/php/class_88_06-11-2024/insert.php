// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputUsername = trim($_POST['username']);
    $inputPassword = trim($_POST['password']);

    // Validate input
    if (empty($inputUsername) || empty($inputPassword)) {
        echo "Please fill in both fields.";
    } else {
        // Prepare SQL query to check the username
        $query = "SELECT * FROM users WHERE username = '$inputUsername' LIMIT 1";
        $result = mysqli_query($conn, $query);

        // Check if the user exists
        if (mysqli_num_rows($result) == 1) {
            // Fetch user data
            $user = mysqli_fetch_assoc($result);

            // Verify password
            if (password_verify($inputPassword, $user['password'])) {
                // Password is correct, start session and redirect to dashboard
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                header("Location: dashboard.php"); // Redirect to dashboard page
                exit();
            } else {
                echo "Invalid username or password.";
            }
        } else {
            echo "Invalid username or password.";
        }
    }
}

// Close the database connection
mysqli_close($conn);
?>