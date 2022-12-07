<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- local link for bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- cnd -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="bg-light">
    <div style="height: 100vh">
    <div class="row h-100 m-0">
        <div class="card w-25 my-auto mx-auto py-3">
            <div class="card-header bg-white border-0 py-3">
                <h1 class="text-center text-uppercase">register</h1>
            </div>
            <div class="card-body">
                <form action="../actions/register.php" method="POST">
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control"
                        required autofocus placeholder="First Name">
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control"
                        required autofocus placeholder="Last Name">
                    </div>
                    <div class="mb-3 fw-bold">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control fw-bold"
                        required autofocus placeholder="Username">
                    </div>
                    <div class="mb-3 fw-bold">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" id="password" class="form-control fw-bold"
                        required placeholder="Password" aria-describedby="password-info" minlength="8">
                        <div class="form-text" id="password-info">Password must be at least 8 characters long</div>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Register</button>
                    </form>
                    <p class="text-center mt-3 small">
                        Registered Already? <a href="index.php">Log in.</a>
                    </p>
            </div>
        </div>
    </div>
    </div>

    
</body>
</html>