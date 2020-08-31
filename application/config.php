<?php
return array(
    "database"=>array(
        "host"=>"localhost",
        "username"=>"root2",
        "password"=>"123456",
        "dbname"=>"wui2006",
        "port"=>"3306",
    ),
    "smarty"=>array(
        "templateDir"=>TPL_PATH,
        "compileDir"=>COMPILE_PATH,
        "cacheDir"=>CACHE_PATH,
    ),
    "code"=>array(
        "type"=>"png",
        "width"=>200,
        "height"=>50,
        "codeLen"=>4,
        "seed"=>"abcdefhjkmnprstuvwxyzABCDEFGHKMNPQRSTUVWXYZ345678",
        "fontSize"=>array("min"=>25,"max"=>35),
        "fontAngle"=>array("min"=>-15,"max"=>15),
        "lineNum"=>array("min"=>2,"max"=>4),
        "lineWidth"=>array("min"=>1,"max"=>3),
        "pixNum"=>array("min"=>80,"max"=>150),
        "fontFile"=>"/phpStudyTest/mvc2/application/static/font/demo.ttc",
        "ischeck"=>false,//true默认检查验证码类  验证码类有用  //不想检查 false
    )

);