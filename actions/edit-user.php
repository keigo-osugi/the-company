<?php

include "../classes/User.php";

// instantiate
$useer_obj = new User;

// calling the method update
$useer_obj->update($_POST,$_FILES);