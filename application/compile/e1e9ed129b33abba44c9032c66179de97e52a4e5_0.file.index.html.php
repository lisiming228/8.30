<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-26 06:47:15
  from '/Users/chaimengxin/Documents/php/service/mvc2/application/template/admin/index.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f4605736b2491_79527811',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1e9ed129b33abba44c9032c66179de97e52a4e5' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc2/application/template/admin/index.html',
      1 => 1598424307,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f4605736b2491_79527811 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        html,body{
            width: 100%;height: 100%;
        }
        body{
            padding: 0;margin: 0;
        }
        .header{
            width: 100%;min-height: 20%;
            background:lightcoral;
        }
        .header h1{
            text-align: center;
            padding-top: 30px;
        }
        .logininfo{
            float: right;
            margin-right: 30px;
        }
        .main{
            width: 100%;height: 70%;
            border: 1px solid purple;
        }
        .bottom{
            width: 100%;min-height: 10%;
            position: relative;
        }
        .bottom div{
            position: absolute;
            left: 0;top: 0;bottom: 0;right: 0;margin: auto;
            text-align: center;
            line-height: 40px;
        }
        .left{
            width: 25%;height: 100%;border-right: 5px solid black;
            float: left;box-sizing: border-box;
        }
        .right{
            width: 75%;height: 100%;
            float: right;box-sizing: border-box;
        }
        iframe{
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
<!--分帧技术 分窗口技术 border是边框-->
<!--<iframe src="http://baidu.com" frameborder="0"></iframe>-->
<!--<iframe src="http://sxuek.com" frameborder="10"></iframe>-->
    <div class="header">
        <h1>欢迎来到xx管理系统</h1>
        <div class="logininfo">
            <span>用户：<?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
</span>
            <span>
                <a href="/mvc2/index.php/admin/index/logout">退出登录</a>
            </span>
        </div>
    </div>
    <div class="main">
        <div class="left">
            <ul>
                <li>
                    用户管理
                    <ul class="son">
                        <li>
                            <a href="adduser.html" target="main">查看用户</a>
                        </li>
                        <li>
                            <a href="edituser.html" target="main">修改用户</a>
                        </li>
                    </ul>
                </li>
                <li>
                    栏目管理
                    <ul class="son">
                        <li>
                            <a href="/mvc2/index.php/admin/category/addpage" target="main">添加栏目</a>
                        </li>
                        <li>
                            <a href="/mvc2/index.php/admin/category/int" target="main">查看栏目</a>
                        </li>

                    </ul>
                </li>
                <li>
                    内容管理
                    <ul class="son">
                        <li>
                            <a href="/mvc2/index.php/admin/content/add" target="main">添加内容</a>
                        </li>
                        <li>
                            <a href="/mvc2/index.php/admin/content/showList" target="main">
                                查看内容</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="right">
            <iframe src="" frameborder="0" name="main"></iframe>
        </div>
    </div>
    <div class="bottom">
       <div>xx版权信息，xxx制作 联系方式</div>
    </div>
</body>
</html><?php }
}
