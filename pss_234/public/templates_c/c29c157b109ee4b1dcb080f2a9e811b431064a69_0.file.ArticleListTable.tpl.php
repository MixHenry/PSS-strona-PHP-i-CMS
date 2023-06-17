<?php
/* Smarty version 4.3.0, created on 2023-06-17 06:20:37
  from 'C:\xampp\htdocs\PSS-strona-PHP-i-CMS\pss_234\app\views\ArticleListTable.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648d3495ad7885_03802874',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c29c157b109ee4b1dcb080f2a9e811b431064a69' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS-strona-PHP-i-CMS\\pss_234\\app\\views\\ArticleListTable.tpl',
      1 => 1686973709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_648d3495ad7885_03802874 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>Tytuł</th>
		<th>Treść</th>
	</tr>
</thead>
<tbody>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['titles']->value, 'p');
$_smarty_tpl->tpl_vars['p']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
$_smarty_tpl->tpl_vars['p']->do_else = false;
?>
<tr><td><?php echo $_smarty_tpl->tpl_vars['p']->value["article_name"];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['p']->value["article_text"];?>
</td></tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</tbody>
</table>

<div class="container">
    <button class="button" id="startBtn" disabled>
        <i class="fa-solid fa-angles-left"></i>
    </button>
    <button class="button prevNext" id="prev" disabled>
        <i class="fa-solid fa-angle-left"></i>
    </button>
    
    <div class="links">
        <a href="#" class="link">1</a>
        <a href="#" class="link">2</a>
        <a href="#" class="link">3</a>
        <a href="#" class="link">4</a>
        <a href="#" class="link">5</a>
    </div>
    
    <button class="button prevNext" id="next">
        <i class="fa-solid fa-angle-right"></i>
    </button>
    <button class="button" id="endBtn">
        <i class="fa-solid fa-angles-right"></i>
    </button>
</div><?php }
}
