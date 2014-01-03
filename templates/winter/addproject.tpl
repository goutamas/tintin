{literal}
<script type = "text/javascript">
function noduetoggle()
{
		var feld = $('end');
		if(feld.disabled)
		{
			feld.disabled = false;
			feld.required = 1;
		}
		else
		{
			feld.disabled = true;
			feld.required = 0;
		}
		feld.value = "";
}
</script>
{/literal}
<div class="block_in_wrapper">
<h2>{#addproject#}</h2>

	<form class="main" method="post" action="admin.php?action=addpro" {literal}onsubmit="return validateCompleteForm(this);"{/literal} >
	<fieldset>
		<div class = "row"><label for = "thetpl">{#fromptemplate#}:</label>
			<select name = "thetpl" id = "thetpl" onchange = "$('name').value=this.options[this.selectedIndex].text;$('name').focus();$('neverdue').disabled=true;$('end').required=1;$('noduerow').hide();">
				<option value = "-1">{#chooseone#}</option>
				{section name = tpl loop = $templates}
				<option value = "{$templates[tpl].ID}">{$templates[tpl].name}</option>
				{/section}
			</select>
		</div>
		<div class="row"><label for="name">{#name#}:</label><input type="text" class="text" name="name" id="name" required="1" realname="{#name#}" /></div>
		
		<div class="row"><label for="desc">{#description#}:</label><div class="editor"><textarea name="desc" id="desc"  rows="3" cols="1" ></textarea></div></div>

	    <div class="clear_both_b"></div>

		<div class="row">
		<label for="end">{#due#}:</label>
		<input type="text" class="text" name="end"  id="end"  realname="{#due#}" regexp="{literal}\d{2}.\d{2}.\d{4}{/literal}" />
		<br /><br />
		<span id = "noduerow"><label for = "neverdue"></label><input type = "checkbox" class = "checkbox" value = "neverdue" name = "neverdue" id = "neverdue" onclick = "noduetoggle();">{#neverdue#}</span>
		</div>

		<div class="datepick">
			<div id = "add_project" class="picker" style = "display:none;"></div>
		</div>

		<script type="text/javascript">
		  	theCal = new calendar({$theM},{$theY});
			theCal.dayNames = ["{#monday#}","{#tuesday#}","{#wednesday#}","{#thursday#}","{#friday#}","{#saturday#}","{#sunday#}"];
			theCal.monthNames = ["{#january#}","{#february#}","{#march#}","{#april#}","{#may#}","{#june#}","{#july#}","{#august#}","{#september#}","{#october#}","{#november#}","{#december#}"];
			theCal.relateTo = "end";
			theCal.dateFormat = "{$settings.dateformat}";
			theCal.getDatepicker("add_project");
		</script>
		
		<div class="row">
			<label for="priority" >{#priority#}:</label>
			<select name = "priority" id="priority" required = "0" realname = "{#priority#}">
				<option value="">{#chooseone#}</option>
				<option value="{#low#}">{#low#}</option>
				<option value="{#medium#}" selected="selected">{#medium#}</option>
				<option value="{#high#}">{#high#}</option>
			</select>
		</div>
		
		<div class = "row">
		<label for = "budget">{#budget#}:</label>
		<input type = "text" class="text" name = "budget" id = "budget" />
		</div>

		<div class="row"><label>{#members#}:</label>
		<div style="float:left;">
        {section name=user loop=$users}
	        <div class="row">
	        <input type="checkbox" class="checkbox" value="{$users[user].ID}" name="assignto[]" id="{$users[user].ID}"  {if $users[user].ID == $userid} checked="checked"{/if} /><label for="{$users[user].ID}">{$users[user].name}</label><br />
	      	</div>
	    {/section}
	    </div>
		</div>

		<input type="hidden" name="assignme" value="1" />

	    <div class="clear_both_b"></div>

		<div class="row-butn-bottom">
		<label>&nbsp;</label>
		<button type="submit" onfocus="this.blur();">{#addbutton#}</button>
		{if $myprojects == "1"}
		<button onclick="blindtoggle('form_addmyproject');toggleClass('add_myprojects','add-active','add');toggleClass('add_butn_myprojects','butn_link_active','butn_link');toggleClass('sm_myprojects','smooth','nosmooth');return false;" onfocus="this.blur();">{#cancel#}</button>
		{else}
		<button onclick="blindtoggle('form_{$myprojects[project].ID}');return false;">{#cancel#}</button>
		{/if}
		</div>


	</fieldset>
	</form>

</div> {*block_in_wrapper end*}