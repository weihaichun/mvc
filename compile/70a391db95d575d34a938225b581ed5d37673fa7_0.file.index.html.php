<?php
/* Smarty version 3.1.30, created on 2017-03-07 02:53:19
  from "/Users/gaoxin/Documents/www/w1610/mvc/template/index/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58be128fd50754_68881771',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70a391db95d575d34a938225b581ed5d37673fa7' => 
    array (
      0 => '/Users/gaoxin/Documents/www/w1610/mvc/template/index/index.html',
      1 => 1488851514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58be128fd50754_68881771 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index/index.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index.js"><?php echo '</script'; ?>
>
</head>
<body>

<div class="top">
    <div class="content">
        <span class="left">欢迎来到xx博客</span>

        <div class="right">
            <?php if (!empty($_smarty_tpl->tpl_vars['indexLogin']->value)) {?>
              <span>
                  欢迎 <?php echo $_smarty_tpl->tpl_vars['uname']->value;?>
回来
                  <a href="index.php?m=index&f=login&a=logout">退出</a>
              </span>
            <?php } else { ?>
            <a href="index.php?m=index&f=login&a=init">登陆</a>
            <a href="index.php?m=index&f=login&a=reg">注册</a>
            <?php }?>

            <a href="index.php?m=index&f=art&a=show">发表文章</a>
        </div>
    </div>
</div>

<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
    <li>
        <h1><?php echo $_smarty_tpl->tpl_vars['v']->value["stitle"];?>
</h1>
        <p>
            <?php echo substr($_smarty_tpl->tpl_vars['v']->value["scon"],0,9);?>

        </p>

    </li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


</ul>


</body>
</html><?php }
}
