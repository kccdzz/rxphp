<?php
/* Smarty version 3.1.30, created on 2018-02-28 11:26:04
  from "/Users/renxing/www/my_project/rxphp/app/Index/view/Index/add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a96214c27a514_14049990',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '520c02572e8ccb86fd76b8245a6cd88d71a47bb9' => 
    array (
      0 => '/Users/renxing/www/my_project/rxphp/app/Index/view/Index/add.html',
      1 => 1519788362,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.html' => 1,
    'file:../template/footer.html' => 1,
  ),
),false)) {
function content_5a96214c27a514_14049990 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../template/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div>
    当前位置：<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['url'];?>
index">返回商品列表</a>
</div>

<br>

<!-- 表单 -->
<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['common']->value['url'];?>
add_exec">
<table>
    <?php if ($_smarty_tpl->tpl_vars['info']->value['id']) {?>
    <tr>
        <th>商品ID：</th>
        <td><?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
</td>
        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['id'];?>
" />
    </tr>
    <?php }?>

    <tr>
        <th>商品分类：</th>
        <td><input type="text" name="type" placeholder="请输入商品分类" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['type'];?>
" /></td>
    </tr>
    <tr>
        <th>商品名称：</th>
        <td><input type="text" name="name" placeholder="请输入商品名称" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['name'];?>
" /></td>
    </tr>
    <tr>
        <th>商品价格：</th>
        <td><input type="text" name="price" placeholder="请输入商品价格" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['price'];?>
" /></td>
    </tr>
    <tr>
        <th>商品库存：</th>
        <td><input type="text" name="count" placeholder="请输入商品库存" value="<?php echo $_smarty_tpl->tpl_vars['info']->value['count'];?>
" /></td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" value="保存" /></td>
    </tr>
</table>
</form>
<!-- END 表单 -->



<?php $_smarty_tpl->_subTemplateRender("file:../template/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
