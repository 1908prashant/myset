<?php
 $n=$_POST[name];
 $email=$_POST[mail];
 $pass=$_POST[pass];
 $sub=$_POST[submit];

 if($sub==true)
 {
    echo "Login successfully";
    echo "Welcome mr".$n."in our Techintelify";
 }
 ?>
