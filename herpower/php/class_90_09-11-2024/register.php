<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Bootstrap contributors">
    <meta name="generator" content="Hugo 0.122.0">
    <title>Admin Panel - Register</title>

    <link rel="stylesheet" href="css/sidebars.css">
    <link href="plugins/bootstrap-5.3.3-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="fonts/fontawesome-free-6.6.0-web/css/all.min.css">
    
    <style>
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f5f5f5;
        }

        .register-container {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .register-container h2 {
            margin-bottom: 1.5rem;
            font-weight: bold;
            color: #333;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #0062cc;
        }

        .btn-primary {
            background-color: #0062cc;
            border-color: #0062cc;
        }
    </style>
</head>

<body>
    <div class="register-container">
        <h2 class="text-center">Register</h2>
        <form action="registration_process.php" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Full Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter full name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" required>
            </div>

            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="mobile" class="form-control" id="mobile" name="mobile" placeholder="Enter mobile" required>
            </div>
          
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Enter password" required>
            </div>
            <!-- <div class="mb-3">
                <label for="confirm_password" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Confirm password" required>
            </div> -->
            <button type="submit" class="btn btn-primary w-100">Register</button>
        </form>
    </div>

    <script src="plugins/bootstrap-5.3.3-dist/js/bootstrap.bundle.js"></script>
</body>

</html>
