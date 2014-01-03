<div class="block_in_wrapper">

	<h2>{#filter#}</h2>

	<form class="main" method="get" action="admin.php" {literal}onsubmit="return validateCompleteForm(this);"{/literal} >
		<fieldset>
		
			<div class="row">
				<label for="usr">{#user#}:</label>
				<select name="usr" id="usr"  realname="{#user#}">
					<option value = "">{#chooseone#}</option>
					{section name = usi loop=$users}
						<option value = "{$users[usi].ID}" {if $users[usi].ID == $usr}selected="selected"{/if}>{$users[usi].name}</option>
					{/section}
				</select>
			</div>
			
			<div class="row">
				<label for="project">{#project#}:</label>
				<select name="project" id="project"  realname="{#project#}">
					<option value = "">{#chooseone#}</option>
					{section name = opro loop=$opros}
						<option value = "{$opros[opro].ID}">{$opros[opro].name}</option>
					{/section}
					{section name = clopro loop=$clopros}
						<option value = "{$clopros[clopro].ID}">{$clopros[clopro].name}</option>
					{/section}
				</select>
			</div>
			
			<input type = "hidden" name = "action" value = "tasks" />
			
			<div class="row-butn-bottom">
				<label>&nbsp;</label>
				<button type="submit" onfocus="this.blur();">{#filter#}</button>
			</div>
			
		</fieldset>
	</form>

</div> {*block_in_wrapper end*}