{extends file="main.tpl"}

{block name=top}

<div class="bottom-margin">
<form id="search-form" class="pure-form pure-form-stacked">
	<legend>Opcje wyszukiwania</legend>
	<fieldset>
		<input type="text" placeholder="Tytuł artykułu" name="sf_article_name" value="{$searchForm->article_name}" /><br />
		
	</fieldset>
</form>
                <button class="pure-button pure-button-primary" onclick="ajaxPostForm('search-form','{$conf->action_root}articleListPart','table')">Filtruj</button>
</div>	

{/block}

{block name=bottom}

<div class="bottom-margin">

</div>	

<div id="table">
{include file="ArticleListTable.tpl"}
</div>

{/block}
