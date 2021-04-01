<?php if($_COOKIE['user'] == ''){
setcookie('user',$user['name'],time()-480);
header('Location: /bay.php');
exit();
}
?>
