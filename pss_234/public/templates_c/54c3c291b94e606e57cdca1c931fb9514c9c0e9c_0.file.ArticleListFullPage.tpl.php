<?php
/* Smarty version 4.3.0, created on 2023-06-17 05:29:24
  from 'C:\xampp\htdocs\PSS-strona-PHP-i-CMS\pss_234\app\views\ArticleListFullPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_648d2894677393_26552637',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54c3c291b94e606e57cdca1c931fb9514c9c0e9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\PSS-strona-PHP-i-CMS\\pss_234\\app\\views\\ArticleListFullPage.tpl',
      1 => 1686972421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:ArticleListTable.tpl' => 1,
  ),
),false)) {
function content_648d2894677393_26552637 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1407208649648d2894672ae2_19122251', 'top');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1489792500648d2894675426_98516901', 'bottom');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'top'} */
class Block_1407208649648d2894672ae2_19122251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'top' => 
  array (
    0 => 'Block_1407208649648d2894672ae2_19122251',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">
<form id="search-form" class="pure-form pure-form-stacked">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="Tytuł artykułu" name="sf_article_name" value="<?php echo $_smarty_tpl->tpl_vars['searchForm']->value->article_name;?>
" /><br />
		
	</fieldset>
</form>
                <button class="pure-button pure-button-primary" onclick="ajaxPostForm('search-form','<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
articleListPart','table')">Filtruj</button>
</div>	

<?php
}
}
/* {/block 'top'} */
/* {block 'bottom'} */
class Block_1489792500648d2894675426_98516901 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bottom' => 
  array (
    0 => 'Block_1489792500648d2894675426_98516901',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="bottom-margin">

</div>	

<div id="table">
<?php $_smarty_tpl->_subTemplateRender("file:ArticleListTable.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<?php
}
}
/* {/block 'bottom'} */
}
