<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-28 08:07:43
  from '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/news-lists.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f48bb4f0a6fe1_01373580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75c6ac05cd390677c9c1870329b961047a66dbaa' => 
    array (
      0 => '/Users/chaimengxin/Documents/php/service/mvc2/application/template/index/news-lists.html',
      1 => 1598602060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f48bb4f0a6fe1_01373580 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body style="background: #efefef">
<style>
    .news-box{
        width: 1000px;
        margin: 10px auto;
        background: #fff;
    }
    .news-box h3{
        text-align: center;
    }
    .news-box .info {
        text-align: center;
    }
    .list-box{
        width: 800px;margin: auto;
    }
    .list{
        width: 50%;height: 200px;
        float: left;padding: 20px;
        box-sizing: border-box;
        border: 1px solid red;
    }
    .list img{
        width: 100%;
    }
    h4{
        padding-top: 0;margin: 0;
    }
    .news-info{

    }
</style>

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['header']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<div class="news-box">
    <h3>新闻中心</h3>
<!--    <div class="info">新闻中心描述</div>-->
    <div class="info"><?php echo $_smarty_tpl->tpl_vars['parentInfo']->value["info"];?>
</div>
    <h3>
<!--        <a href="">链接1</a>-->
<!--        <a href="">链接2</a>-->
<!--        <a href="">链接3</a>-->
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['silbing']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <a href="/mvc2/index.php/index/lists?cid=<?php echo $_smarty_tpl->tpl_vars['v']->value['cid'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </h3>
    <div class="list-box">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['condata']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
        <a href="/mvc2/index.php/index/show?conid=<?php echo $_smarty_tpl->tpl_vars['v']->value['conid'];?>
" class="list">
            <img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['imgurl'];?>
" alt="" height="100">
            <h4><?php echo $_smarty_tpl->tpl_vars['v']->value["ctitle"];?>
</h4>
            <div class="news-info">
                <?php echo $_smarty_tpl->tpl_vars['v']->value["info"];?>

            </div>
        </a>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <!--        <div class="list">-->
<!--            <img src="<?php echo IMG_ADD;?>
list.jpg" alt="">-->
<!--            <h4>新闻的标题</h4>-->
<!--            <div class="news-info">-->
<!--                新闻的描述-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="list">-->
<!--            <img src="<?php echo IMG_ADD;?>
list.jpg" alt="">-->
<!--            <h4>新闻的标题</h4>-->
<!--            <div class="news-info">-->
<!--                新闻的描述-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="list">-->
<!--            <img src="<?php echo IMG_ADD;?>
list.jpg" alt="">-->
<!--            <h4>新闻的标题</h4>-->
<!--            <div class="news-info">-->
<!--                新闻的描述-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="list">-->
<!--            <img src="<?php echo IMG_ADD;?>
list.jpg" alt="">-->
<!--            <h4>新闻的标题</h4>-->
<!--            <div class="news-info">-->
<!--                新闻的描述-->
<!--            </div>-->
<!--        </div>-->
        
        <div style="clear: both"></div>
    </div>
</div>

<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['footer']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</body>
</html><?php }
}
