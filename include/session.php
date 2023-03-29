<?php
// Start the session
session_start();

// Function to create a new session when user logs in
function create_session($user_id, $username, $name, $user_avatar, $user_coin, $permission, $user_email) {
  $_SESSION['user_id'] = $user_id;
  $_SESSION['username'] = $username;
  if(isset($user_avatar))
  $_SESSION['user_avatar'] = $user_avatar;
  else{
    $_SESSION['user_avatar'] = './img/user.png';
  }
  $_SESSION['user_coin'] = $user_coin;
  $_SESSION['name'] = $name;
  $_SESSION['user_email'] = $user_email;
  $_SESSION['start_time'] = time();
  if($permission != 0){
    $_SESSION['permission'] = $permission;
  }
}
function is_admin(){
  if( is_logged_in() && isset($_SESSION['permission'])){
    return true;
  }
  return false;
}
function is_logged_in() {
  if(isset($_SESSION['username'])) {
    if(time() - $_SESSION['start_time'] > 7200) //Kiem tra session tu dang xuat sau 2h
     {
      session_destroy();
      return false;
    }
    else {
      $_SESSION['start_time'] = time();
      return true;
    }
  }
  else {
    return false;
  }
}
function destroy_session() {
  session_destroy();
}
?>