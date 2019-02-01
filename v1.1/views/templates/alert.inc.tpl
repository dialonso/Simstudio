{if isset($alerts)}
{block name="alerts"}
{foreach from=$alerts key=type item=infos}
{foreach from=$infos item=info}
<div class="alert alert-{$type} alert-dismissible fade show my-2" role="alert">
	<strong>{$alerts_labels.$type}</strong> : {$info}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
{/foreach}
{/foreach}
{/block}
{/if}