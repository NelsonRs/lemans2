<?php $url = $_SERVER['DOCUMENT_ROOT']; require $url.'/php/models/db.php';

// USER - EXIST
function login($user,$pass){ global $mysqli;
    $pass_verify = verify($user,$pass);
    $query = $mysqli->query("SELECT * FROM user WHERE user='$user' AND pass='$pass_verify'");
    if ($query->num_rows>0) {
        session_start();
        $_SESSION['user'] = $user;
        return true;
    }
    else {
        return false;
    }
    
}
function verify($user,$pass){ global $mysqli;
    $query = $mysqli->query("SELECT pass FROM user WHERE user='$user'");
    while ($row = $query->fetch_assoc()) {
        $pass_verify = password_verify($pass, $row['pass']);
        if ($pass_verify==true) {
            $pass=$row['pass'];
            return $pass;
            break;
        }
    }
}