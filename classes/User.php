<?php
require_once "Database.php";

class User extends Database
{
    public function store($request)
    {
        $first_name = $request['first_name'];
        $last_name = $request['last_name'];
        $username = $request['username'];
        $password = $request['password'];

        $password = password_hash($password,PASSWORD_DEFAULT);

        $sql = "INSERT INTO `users` (`first_name`,`last_name`,
        `username`,`password`)VALUES('$first_name','$last_name',
        '$username','$password')";

        // execute sql command
        if($this->conn->query($sql))
        {   //success
            header('location: ../views');
            //going to our login page
            exit;

        }else{
            die('Error Registering user: '.$this->conn->error);
        }

    }
    public function login($request)
    {
        $username = $request['username'];
        $password = $request['password'];

        // sql command
        $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
        // execute the sql
        if($result =$this->conn->query($sql))
        {//success
            //check if there is a match row 
            if($result->num_rows == 1)
            {//success
                $user = $result->fetch_assoc();
                //transform into associatibe array
                //$password = enterd | $user['password'] = database
                if(password_verify($password,$user['password']))
                {// if match

                    //creating session variables for future use
                    //session variables contain information of logged in user
                    session_start();
                    $_SESSION['id'] = $user['id'];
                    //session id = id logged in user
                    $_SESSION['username'] = $user['username'];
                    //session username = username logged in user
                    $_SESSION['fullname'] = $user['fullname']."".$user['last_name'];
                    //session id = full name logged in user
                    
                    
                    // after logging in. redirect to dashboard
                    header('location: ../views/dashboard.php');
                    exit;

                }else{
                    //do not match
                    die('Incorrect password');
                }

            }else{//fail
                die("Username not found");
            }
        }else
        {//fail
            die("Error Retrieving user".$this->conn->error);
        }
    }
    public function logout()
    {
        session_start();
        session_unset();//unset session variables
        session_destroy();//destroying session variables
        header("location: ../views");// redirect to login page
        exit;
    }
    public function getAllUsers()
    {
        //sql command
        $sql = "SELECT * FROM `users`";
        //execute
        if($result = $this->conn->query($sql))
        {
            return $result;    
        }else{
            die('Error Retrieving all Users: '.$this->conn->error);
        }
    }


public function getUser()
{
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM `users` WHERE `id` ='$id'";

    //
    if($result = $this->conn->query($sql))
    {
        return $result->fetch_assoc();
    }else{
        die('Error Retrieving User: '.$this->conn->error);
    }
}
public function update($request,$files)
{
    session_start();
    $id = $_SESSION['id'];
    $first_name = $request['first_name'];
    $last_name = $request['last_name'];
    $username = $request['username'];
    //getting the files from form
    $photo = $files['photo']['name'];
    $tmp_name = $files['photo']['tmp_name'];

    //sql command
    $sql = "UPDATE `users` SET `first_name` = '$first_name' , `last_name` = '$last_name' ,
    `username` = '$username' WHERE `id` = '$id'";

    // execute command
    if($this->conn->query($sql))
    {
        //success
        $_SESSION['username'] = $username;
        $_SESSION['fullname'] = $first_name. " " .$last_name;

        //check
        if($photo){
            //yes
            $sql2 = "UPDATE `users` SET `photo` = '$photo' WHERE `id` = '$id'";
            //setting the destination of
            $destination = "../assets/images/$photo";

            // execute the sqlw
            if($this->conn->query($sql2)){
                //success
                //moving the photo to the destination
                if(move_uploaded_file($tmp_name,$destination)){
                    header('location:../views/dashboard.php');
                    exit;
                }else{
                    die('Error moving photo');
                }
            }

        }else{
            //no
            header('location: ../views/dashboard.php');
            exit;
        }

    }else{//fail
        die("Error Updating User:".$this->conn->error);
    
    }
}

public function delete()
{
    session_start();
    $id = $_SESSION['id'];

    // sql command
    $sql = "DELETE FROM `users` WHERE `id` = '$id'";

    //execute command
    if($this->conn->query($sql)){
        //suc
        $this->logout();

    }else{
        //fail
        die('Error Deleting user'.$this->conn->error);
    }
}
}