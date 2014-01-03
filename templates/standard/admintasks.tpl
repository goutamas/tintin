{include file="header.tpl" jsload = "ajax"  jsload1 = "tinymce"}
{include file="tabsmenue-desk.tpl" cheftab = "active"}

<div id="content-left">
	<div id="content-left-in">
		<div class="tasks">

			<h1>{#viewalltasks#}</h1>

			{if $tasknum > 0}
				<div class="tasks">
					<div class="headline">
						<a href="javascript:void(0);" id="taskhead_toggle" class="win_block" onclick = "toggleBlock('taskhead');"></a>

						<div class="wintools">
							<div class="toolwrapper">
								<a class="filter" href="javascript:blindtoggle('filter');" id="filter_tasks" onclick="toggleClass(this,'filter-active','filter');toggleClass('filter_butn','butn_link_active','butn_link');toggleClass('sm_report','smooth','nosmooth');"><span>{#filter#}</span></a>
							</div>
						</div>

						<h2>
							<img src="./templates/standard/images/symbols/tasklist.png" alt="" />{#tasks#}
						</h2>
					</div>

					{*Filter*}
						<div id = "filter" class="addmenue" style = "display:none;">
							{include file="filtertasks.tpl" }
						</div>
					{*Filter End*}

					<div class="block" id="taskhead" style = "{$taskstyle}">
						<table id = "desktoptasks" cellpadding="0" cellspacing="0" border="0">

							<thead>
								<tr>
									<th style="cursor:pointer;" class="b" onclick = "sortBlock('desktoptasks','');">{#task#}</th>
									<th style="cursor:pointer;" class="c" onclick = "sortBlock('desktoptasks','project');">{#project#}</th>
									<th style="cursor:pointer; width:100px;" class="c" onclick = "sortBlock('desktoptasks','byuser');">{#user#}</th>
									<th class="cf" style="width:50px">{#priority#}</th>
									<th class="a" style="width: 20px;cursor:pointer;" onclick = "sortBlock('desktoptasks','daysleft');">{#daysleft#}</th>
								</tr>
							</thead>

							<tfoot>
								<tr>
									<td colspan="5"></td>
								</tr>
							</tfoot>

							{section name=task loop=$tasks}
								{*Color-Mix*}
								{if $smarty.section.task.index % 2 == 0}
								<tbody class="color-a" id="task_{$tasks[task].ID}" rel = "{$tasks[task].ID},{$tasks[task].title},{$tasks[task].daysleft},{$tasks[task].pname},{$tasks[task].user}">
								{else}
								<tbody class="color-b" id="task_{$tasks[task].ID}" rel = "{$tasks[task].ID},{$tasks[task].title},{$tasks[task].daysleft},{$tasks[task].pname},{$tasks[task].user}">
								{/if}
									<tr {if $tasks[task].daysleft < 0} class="marker-late"{elseif $tasks[task].daysleft == 0} class="marker-today"{/if}>
										<td>
											<div class="toggle-in">
											<span id = "desktoptaskstoggle{$tasks[task].ID}" onclick="javascript:accord_tasks.activate($$('#taskhead .accordion_toggle')[{$smarty.section.task.index}]);toggleAccordeon('taskhead',this);"></span>
												<a href="managetask.php?action=showtask&amp;id={$tasks[task].project}&amp;tid={$tasks[task].ID}" title="{$tasks[task].title}">
													{if $tasks[task].title != ""}
														{$tasks[task].title|truncate:35:"...":true}
													{else}
														{$tasks[task].text|truncate:35:"...":true}
													{/if}
												</a>
											</div>
										</td>
										<td>
											<a href = "managetask.php?action=showproject&amp;id={$tasks[task].project}" >{$tasks[task].pname|truncate:35:"...":true}</a>&nbsp;&nbsp;
										</td>
										<td>
											{section name=theusers loop=$tasks[task].users}
												<a href="manageuser.php?action=profile&amp;id={$tasks[task].users[theusers].ID}">{$tasks[task].users[theusers].name}</a>
											{/section}
										<td style = "text-align: center;">
											{$tasks[task].priority}&nbsp;&nbsp;
										</td>
										<td style = "text-align: right;">
											{$tasks[task].daysleft}&nbsp;&nbsp;
										</td>
									</tr>
								</tbody>
							{/section}
						</table>
						<div class="tablemenue"></div>
					</div> {*block END*}
				</div> {*tasks END*}
				<div class="content-spacer"></div>
			{/if}
			{*Tasks End*}

		</div> {*Projects END*}
	</div> {*content-left-in END*}
</div> {*content-left END*}

{include file="sidebar-a.tpl"}
{include file="footer.tpl"}