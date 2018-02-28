<?php
/* Smarty version 3.1.30, created on 2018-02-28 11:37:32
  from "/Users/renxing/www/my_project/rxphp/app/Index/view/Index/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a9623fca1d044_92529944',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2fd7d34cd0099b8f4eaafac76b86d29f6cdbc383' => 
    array (
      0 => '/Users/renxing/www/my_project/rxphp/app/Index/view/Index/index.html',
      1 => 1519789051,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../template/header.html' => 1,
    'file:../template/footer.html' => 1,
  ),
),false)) {
function content_5a9623fca1d044_92529944 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../template/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<div>
    当前位置：<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['url'];?>
index">全部数据</a> |
    <a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['url'];?>
add">添加新数据</a>
</div>


<!-- 搜索 -->
<div>
    <form method="get" action="<?php echo $_smarty_tpl->tpl_vars['common']->value['host'];?>
">
        <input type="hidden" name="c" value="Index" />
        <input type="hidden" name="a" value="index" />
        <input type="text" name="id" placeholder="商品ID" value="<?php echo $_smarty_tpl->tpl_vars['get']->value['id'];?>
" />
        <input type="text" name="type" placeholder="商品类型" value="<?php echo $_smarty_tpl->tpl_vars['get']->value['type'];?>
" />
        <input type="text" name="name" placeholder="商品名称关键字" value="<?php echo $_smarty_tpl->tpl_vars['get']->value['name'];?>
" />
        <input type="submit" value="搜索" />
    </form>
</div>
<!-- END 搜索 -->
<br>

<!-- 列表 -->
<table border="1" rules="all">
    <tr>
        <th>序号</th>
        <th>商品ID</th>
        <th>商品分类</th>
        <th>商品名称</th>
        <th>商品价格</th>
        <th>商品库存</th>
        <th>添加时间</th>
        <th>修改时间</th>
        <th>操作</th>
    </tr>

  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'v', false, 'k');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
?>
    <tr>
        <td>[<?php echo $_smarty_tpl->tpl_vars['k']->value+1;?>
]</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['type'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['price'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['count'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['create_time'];?>
</td>
        <td><?php echo $_smarty_tpl->tpl_vars['v']->value['update_time'];?>
</td>
        <td>
            <a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['url'];?>
add&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">编辑</a> |
            <a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['url'];?>
del&id=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" onclick="return confirm('是否确认删除？')">删除</a>
        </td>
    </tr>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</table>
<!-- END 列表 -->


<!-- 分页 -->
<div>
    第 <?php echo $_smarty_tpl->tpl_vars['p']->value['page'];?>
 页,
    共 <?php echo $_smarty_tpl->tpl_vars['p']->value['page_count'];?>
 页,
    总记录 <?php echo $_smarty_tpl->tpl_vars['p']->value['count'];?>
,
    每页显示 <?php echo $_smarty_tpl->tpl_vars['p']->value['page_size'];?>
 条。
</div>
<div>
    <a class="bgs" href="<?php echo $_smarty_tpl->tpl_vars['common']->value['url'];?>
index&p=<?php echo $_smarty_tpl->tpl_vars['p']->value['front_page'];?>
">上一页</a>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['p']->value['page_list'], 'pl');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['pl']->value) {
?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['url'];?>
index&p=<?php echo $_smarty_tpl->tpl_vars['pl']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['pl']->value;?>
</a>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    <a href="<?php echo $_smarty_tpl->tpl_vars['common']->value['url'];?>
index&p=<?php echo $_smarty_tpl->tpl_vars['p']->value['next_page'];?>
">下一页</a>
</div>
<!-- END 分页 -->




<?php $_smarty_tpl->_subTemplateRender("file:../template/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
