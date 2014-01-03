{section name = "comment" loop = $comments}
<div class = "block_in_wrapper" id = "thecomment{$comments[comment].id}">
<strong>{$comments[comment].username}</strong> said on {$comments[comment].posted}
<a class = "tool_del" style = "margin-right:55%;float:right;height:18px;" href = "javascript:confirmfunction('{$langfile.confirmdel}','deleteElement(\'thecomment{$comments[comment].id}\',\'managecomments.php?action=del&id={$comments[comment].id}&tid={$comments[comment].task}\')');"></a>
<br />{$comments[comment].text}
</div>

{/section}