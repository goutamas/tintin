{include file="header.tpl" jsload = "ajax" jsload1 = "tinymce"}
{include file="tabsmenue-project.tpl" taskstab = "active"}

<script type = "text/javascript" src = "include/js/taskcomments.js"></script>

<div id="content-left">
<div id="content-left-in">
<div class="tasks">





<div class="breadcrumb">
<a href="manageproject.php?action=showproject&amp;id={$project.ID}"><img src="./templates/standard/images/symbols/projects.png" alt="" />{$projectname|truncate:40:"...":true}</a>
<a href="managetask.php?action=showproject&amp;id={$project.ID}"><img src="./templates/standard/images/symbols/tasklist.png" alt="" />{#tasklists#}</a>
<a href="managetasklist.php?action=showtasklist&id={$project.ID}&tlid={$task.liste}" title="{#tasklist#} / {$task.list}"><img src="./templates/standard/images/symbols/tasklist.png" alt="" />{$task.list|truncate:50:"...":true}</a>
<span>&nbsp;/...</span>
</div>

<h1 class="second"><img src="./templates/standard/images/symbols/task.png" alt="" />{$task.title|truncate:40:"...":true}</h1>

	<div class="statuswrapper">
			<ul>
				{if $userpermissions.tasks.close}
					<li class="link" id = "closetoggle">
					{if $task.status == 1}
						<a class="close" href="javascript:closeElement('closetoggle','managetask.php?action=close&amp;tid={$task.ID}&amp;id={$project.ID}');" title="{#close#}"></a>
					</li>
					{else}
						<a class="close" href="javascript:closeElement('closetoggle','managetask.php?action=open&amp;tid={$task.ID}&amp;id={$project.ID}');" title="{#open#}"></a>
					</li>
					{/if}
				{/if}
				{if $userpermissions.tasks.edit}
					<li class="link">
						<a class="edit" href="javascript:void(0);" id="edit_butn" onclick="blindtoggle('form_edit');toggleClass(this,'edit-active','edit');toggleClass('sm_task','smooth','nosmooth');" title="{#edit#}"></a>
					</li>
				{/if}

				<li><a>{#user#}: {$task.user|truncate:25:"...":true}</a></li>
				{if $task.priority}
					<li><a>{#priority#}: {$task.priority}</a></li>
				{/if}
				<li><a>{#end#}: {$task.endstring}</a></li>
			</ul>
	</div>



			{*Edit Task*}
			{if $userpermissions.tasks.edit}
				<div id = "form_edit" class="addmenue" style = "display:none;clear:both;">
					<div class="content-spacer"></div>
					{include file="edittask.tpl" showhtml="no" }
				</div>
			{/if}

<div class="content-spacer"></div>

	<div class="nosmooth" id="sm_task">
		<div id="descript" class="descript">
			<h2>{#task#}</h2>
			{$task.text}
			<div class="content-spacer"></div>
		</div>
	</div>

<br />
<h1 style = "font-size:18px;padding-bottom:5px;padding-left:0px;">Comments</h1>
<div id = "comments{$task.ID}" style = "width:90%;">

</div>
{literal}
<script type = "text/javascript">
getComments('{/literal}{$task.ID}{literal}');
</script>
{/literal}
<div id = "commentwrapper{$task.ID}" style = "display:none;width:90%;">
<br />
	{include file = "addcomment.tpl" taskId = $task.ID}
</div>

<div class="row-butn-bottom" style = "margin-top:5px;"><button onclick = "blindtoggle('commentwrapper{$task.ID}');">Add comment</button></div>
<div class = "clear_both"></div>
<br />

</div> {*Tasks END*}
</div> {*content-left-in END*}
</div> {*content-left END*}

{include file="sidebar-a.tpl"}
{include file="footer.tpl"}