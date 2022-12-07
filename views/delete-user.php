
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- local link for bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- cnd -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/css/style.css">
    <title>Delete user</title>
</head>
<body>
    
<?php include "user-menu.php" ?>

<main class="row justify-content-center gx-0">
    <div class="col-4 text-center">
        <i class="fa-solid fa-triangle-exclamation  text-warning display-1 d-block mb-2"></i>
        <h2 class="text-danger mb-5">Delete Account</h2>
        <p class="fw-bold">Are you sure you want to delete your account?</p>

        <div class="row">
            <div class="col">
                <a href="dashboard.php" class="btn btn-secondary w-100">Cancel</a>
            </div>
            <div class="col">
                <form action="../actions/delete-user.php" method="POST">
                    <button type="submit" class="btn btn-outline-danger w-100">Delete</button>
                </form>
            </div>
        </div>
    </div>
</main>

</body>
</html>