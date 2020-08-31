<?php
//setcookie("name","bob");
setcookie("name","bob",time()-100);//过期让他删除
echo $_COOKIE["name"];