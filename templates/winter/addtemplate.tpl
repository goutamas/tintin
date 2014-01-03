<div class="block_in_wrapper">
<h2>{#addptemplate#}</h2>

	<form  class="main" method="post" action="admin.php?action=addtpl" {literal}onsubmit="return validateCompleteForm(this);"{/literal} >
	<fieldset>
		<div class="row"><label for="name">{#name#}:</label><input type="text" class="text" name="name" id="name" required="1" realname="{#name#}" /></div>
		<div class="row"><label for="desc">{#description#}:</label><div class="editor"><textarea name="desc" id="tpl_desc" rows="3" cols="1" ></textarea></div></div>

	    <div class="clear_both_b"></div>

		<div class="row">
		<label for="end">{#due#}:</label>
		<input type="text" class="text" name="end" id="end_tpl" realname="{#due#}" regexp="{literal}\d{2}.\d{2}.\d{4}{/literal}" />
		</div>

		<div class="datepick">
			<div id = "add_tpl" class="picker" style = "display:none;"></div>
		</div>

		<script type="text/javascript">
		  	theCal = new calendar({$theM},{$theY});
			theCal.dayNames = ["{#monday#}","{#tuesday#}","{#wednesday#}","{#thursday#}","{#friday#}","{#saturday#}","{#sunday#}"];
			theCal.monthNames = ["{#january#}","{#february#}","{#march#}","{#april#}","{#may#}","{#june#}","{#july#}","{#august#}","{#september#}","{#october#}","{#november#}","{#december#}"];
			theCal.relateTo = "end_tpl";
			theCal.dateFormat = "{$settings.dateformat}";
			theCal.getDatepicker("add_tpl");
		</script>

		<div class="row">
			<label for="priority" >{#priority#}:</label>
			<select name = "priority" id="priority" required = "0" realname = "{#priority#}">
				<option value="">{#chooseone#}</option>
				<option value="{#low#}">{#low#}</option>
				<option value="{#medium#}" selected>{#medium#}</option>
				<option value="{#high#}">{#high#}</option>
			</select>
		</div>

		<input type="hidden" name="assignme" value="0" />

	    <div class="clear_both_b"></div>

		<div class="row-butn-bottom">
		<label>&nbsp;</label>
		<button type="submit" onfocus="this.blur();">{#addbutton#}</button>
		{if $myprojects == "1"}
			<button onclick="blindtoggle('form_addmytemplate');toggleClass('add_myprojects','add-active','add');toggleClass('add_butn_mytemplate','butn_link_active','butn_link');toggleClass('sm_mytemplate','smooth','nosmooth');return false;" onfocus="this.blur();">{#cancel#}</button>
		{/if}
		</div>


	</fieldset>
	</form>

</div> {*block_in_wrapper end*}