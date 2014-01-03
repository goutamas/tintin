<div class = "clear_both"></div>
<br />
<h1 style = "font-size:18px;padding-bottom:5px;padding-left:0px;">Comments</h1>
<div id = "comments{$taskId}" style = "width:90%;">

</div>
{literal}
<script type = "text/javascript">
	getComments('{/literal}{$taskId}{literal}');
</script>
{/literal}
<div id = "commentwrapper{$taskId}" style = "display:none;width:90%;">
<br />
	{include file = "addcomment.tpl" taskId = $taskId}
</div>
<div class="row-butn-bottom" style = "margin-top:5px;"><button onclick = "blindtoggle('commentwrapper{$taskId}');">Add comment</button></div>
<div class = "clear_both"></div>
<br />