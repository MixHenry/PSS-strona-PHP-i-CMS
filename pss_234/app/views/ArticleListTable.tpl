<table class="pure-table pure-table-bordered">
<thead>
	<tr>
		<th>Tytuł</th>
		<th>Treść</th>
	</tr>
</thead>
<tbody>
{foreach $titles as $p}
{strip}
	<tr>
		<td>{$p["article_name"]}</td>
		<td>{$p["article_text"]}</td>
	</tr>
{/strip}
{/foreach}
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
</div>