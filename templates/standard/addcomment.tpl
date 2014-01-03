<div class="block_in_wrapper">

	<form class="main" method="post" action = "javascript:void(0);" onsubmit = "tinyMCE.triggerSave();addComment({$taskId});tinyMCE.activeEditor.setContent('');return false;">
	<fieldset>

	<h2>Add comment</h2>
<div class = "row">
	<div class="editor" >
		<textarea name="text" class="text" id="commenttext{$taskId}" rows="3" cols="4" style = "width:500px;" realname="{#commenttext#}"></textarea>
	</div>
	</div>
	    <div class="clear_both_b"></div>
	<input type = "hidden" name = "thetask" id = "thetask{$taskId}" value = "{$taskId}" />
	<div class="row-butn-bottom">
		<label>&nbsp;</label>
		<button type="submit" onfocus="this.blur();">{#addbutton#}</button>
		<button type = "reset" onclick="blindtoggle('commentwrapper{$taskId}');toggleClass(this,'edit-active','edit');return false;" onfocus="this.blur();">{#cancel#}</button>
	</div>

	</fieldset>
	</form>

</div> {*block_in_wrapper end*}