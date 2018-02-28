<?php
/* Smarty version 3.1.30, created on 2018-02-27 18:23:07
  from "/Users/renxing/www/my_project/rxphp/app/Index/view/template/sidebar.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a95318be7e696_13209104',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '240cb79e72607478aea7175c23f7ef1ce8356972' => 
    array (
      0 => '/Users/renxing/www/my_project/rxphp/app/Index/view/template/sidebar.html',
      1 => 1519720954,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a95318be7e696_13209104 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="sidebar-nav">
    <a href="#dashboard-menu" class="nav-header" data-toggle="collapse">
        <i class="icon-dashboard"></i>Dashboard
    </a>
    <ul id="dashboard-menu" class="nav nav-list collapse in">
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['webhost'];?>
" target="_blank">前台首页</a></li>
        <li><a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['host'];?>
">后台首页</a></li>
        <li ><a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['host'];?>
?c=Common&a=index">公共信息</a></li>
        <li ><a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['host'];?>
?c=Article&a=index&f=1">原创文章列表</a></li>
        <li ><a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['host'];?>
?c=Article&a=index&f=2">原创随笔列表</a></li>
        <li ><a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['host'];?>
?c=Article&a=index&f=3">转载文章列表</a></li>
        <li ><a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['host'];?>
?c=ArticleType&a=index">文章分类</a></li>
        <li ><a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['host'];?>
?c=ArticleTag&a=index">文章标签</a></li>
        <li ><a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['host'];?>
?c=Comment&a=index" style="color: blue">评论列表</a></li>
        <li ><a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['host'];?>
?c=User&a=index" style="color:#dd3c10">用户列表</a></li>
        <li ><a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['host'];?>
?c=User&a=verifyUser" style="color:orange">用户资料审核</a></li>
        <li ><a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['host'];?>
?c=Single&a=index">单页管理</a></li>
    </ul>

    <a href="" class="nav-header" ><i class="icon-question-sign"></i>Help</a>
    <a href="" class="nav-header" ><i class="icon-comment"></i>Faq</a>
</div><?php }
}
