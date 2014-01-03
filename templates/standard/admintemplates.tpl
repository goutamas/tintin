		<div class="headline">
				<a href="javascript:void(0);" id="acc-templates_toggle" class="win_none" onclick = "toggleBlock('acc-templates');"></a>
				{if $userpermissions.projects.add}
				<div class="wintools">
					<a class="add" href="javascript:blindtoggle('form_addmytemplate');" id="add_myprojects" onclick="toggleClass(this,'add-active','add');toggleClass('add_butn_mytemplate','butn_link_active','butn_link');toggleClass('sm_mytemplate','smooth','nosmooth');"><span>{#addptemplate#}</span></a>
				</div>
				{/if}

				<h2>
					<img src="./templates/standard/images/symbols/projects.png" alt="" />{#ptemplates#}
				</h2>
			</div>

			<div class="block" id="acc-templates">

				{*Add Project*}
				<div id = "form_addmytemplate" class="addmenue" style = "display:none;">
					{include file="addtemplate.tpl" }
				</div>

				<div class="nosmooth" id="sm_mytemplate">
					<table cellpadding="0" cellspacing="0" border="0">

						<thead>
							<tr>
								<th class="a"></th>
								<th class="b" style="width:600px;">{#ptemplate#}</th>
								<th class="tools"></th>
							</tr>
						</thead>

						<tfoot>
							<tr>
								<td colspan="3"></td>
							</tr>
						</tfoot>

						{section name=template loop=$templates}

							{*Color-Mix*}
							{if $smarty.section.template.index % 2 == 0}
							<tbody class="color-a" id="proj_{$templates[template].ID}">
							{else}
							<tbody class="color-b" id="proj_{$templates[template].ID}">
							{/if}
							<tr>
								<td><a class="butn_reply" href="admin.php?action=copytpl&thetpl={$templates[template].ID}" title="{#copy#}"></a></td>
								<td>
									<div class="toggle-in">
									<span class="acc-toggle" onclick="javascript:accord_templates.activate($$('#acc-templates .accordion_toggle')[{$smarty.section.template.index}]);toggleAccordeon('acc-templates',this);"></span>
										<a href="manageproject.php?action=showproject&amp;id={$templates[template].ID}" title="{$templates[template].name}">
											{$templates[template].name|truncate:95:"...":true}
										</a>
									</div>
								</td>
								<td class="tools">
									{if $userpermissions.projects.edit}
										<a class="tool_edit" href="manageproject.php?action=editform&amp;id={$templates[template].ID}" title="{#edit#}"></a>
									{/if}
									{if $userpermissions.projects.del}
										<a class="tool_del" href="javascript:confirmfunction('{#confirmdel#}','deleteElement(\'proj_{$templates[template].ID}\',\'manageproject.php?action=del&amp;id={$templates[template].ID}\')');" title="{#delete#}"></a>
									{/if}
								</td>
							</tr>

							<tr class="acc">
								<td colspan="3">
									<div class="accordion_toggle"></div>
										<div class="accordion_content">
											<div class="acc-in">
												{$templates[template].desc}
											</div>
										</div>
									</td>
								</tr>
							</tbody>
						{/section}
					</table>
					{*Projects End*}

					</div> {*smooth end*}

				<div class="tablemenue">
					<div class="tablemenue-in">
						{if $userpermissions.projects.add}
						<a class="butn_link" href="javascript:blindtoggle('form_addmytemplate');" id="add_butn_mytemplate" onclick="toggleClass('add_mytemplate','add-active','add');toggleClass(this,'butn_link_active','butn_link');toggleClass('sm_mytemplate','smooth','nosmooth');">{#addptemplate#}</a>
						{/if}

					</div>
				</div>
			</div> {*block END*}
			{*Doneprojects End*}


			{literal}
				<script type = "text/javascript">
					var accord_templates = new accordion('acc-templates');
				</script>
			{/literal}



			<div class="content-spacer"></div>