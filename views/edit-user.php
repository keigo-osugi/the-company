<?php
session_start();
include "../classes/User.php";
//
$user_obj = new User;
//
$user = $user_obj->getUser();

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit User</title>
</head>
<body>
    <?php include "user-menu.php" ?>
    <div class="maim row justify-content-center gx-0">
        <div class="col-4">
            <h2 class="text-center text-uppercase">Edit User</h2>
            <form action="../actions/edit-user.php" method="POST" enctype="multipart/form-data">
                <div class="row justify-content-center mb-3">
                    <div class="col-6 text-center">
                        <?php if($user['photo']){?>
                        <img src="../assets/images/<?= $user['photo'] ?>" alt="<?= $user['photo'] ?>"
                        class="d-block mx-auto edit-photo">
                        <?php }else{ ?>
                            <i class="fa-solid fa-user text-secondary text-center edit-icon"></i>
                            <?php } ?>
                            <input type="file" name="photo" accept="image/*" class="form-control mt-2">
                    </div>
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First Name</label>
                        <input type="text" name="first_name" id="first_name" class="form-control"
                        value="<?= $user['first_name'] ?>" placeholder="First Name" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Last Name</label>
                        <input type="text" name="last_name" id="last_name" class="form-control"
                        value="<?= $user['last_name'] ?>" placeholder="Last Name" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" id="username" class="form-control"
                        value="<?= $user['username'] ?>" placeholder="Username" required autofocus>
                    </div>
                    <div class="text-end mt-2">
                        <a href="dashboard.php" class="btn btn-secondary bn-sm px-5">Cancel</a>
                        <button type="submit" class="btn btn-warning btn-sm px-5">Save</button>
                    </div>
                
                </div>
            </form>
        </div>
    </div>
</body>
</html>