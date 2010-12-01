<?php defined('KOOWA') or die; ?>

<form action="<?=@route()?>" method="get">
<table class="adminlist">
	<thead>
		<tr>
			<th width="5">#</th>
			<th width="20" align="center">&nbsp;</th>
			<th width="20" align="center"><?=@helper('grid.sort', array('column'=>'date'))?></th>
			<th width="150" align="center"><?= @text('Preview')?></th>
			<th><?=@helper('grid.sort', array('column'=>'title'))?></th>
			<th><?=@helper('grid.sort', array('column'=>'link'))?></th>
			<th width="20" align="center"><?=@helper('grid.sort', array('column'=>'id'))?></th>
		</tr>
	</thead>
	
	<tfoot>
		<tr>
			<td colspan="20" align="center">
				<?=@helper('paginator.pagination', array('total'=>$total))?>
			</td>
	</tfoot>
	
	<tbody>
		<? $i = 1;
		foreach($sponsors as $sponsor): ?>
		<tr>
			<td align="center"><?=$i?></td>
			<td align="center"><input type="checkbox" /></td>
			<td align="center"><?=$sponsor->date?></td>
			<td align="center">
				<? if ($sponsor->filename): ?>
				<img src="/media/com_calendar/uploads/sponsors/<?=$sponsor->filename?>" width="100" />
				<? endif; ?>
			</td>
			<td>
				<a href="<?=@route('view=sponsor&id='.$sponsor->id)?>">
					<?=$sponsor->title?>
				</a>
			</td>
			<td><?=$sponsor->link?></td>
			<td align="center"><?=$sponsor->id?></td>
		</tr>
		<? $i++;
		endforeach; ?>
		
		<? if (!count($sponsors)):?>
		<tr>
			<td colspan="20" align="center">
				<?=@text('No sponsors')?>
			</td>
		<? endif; ?>
	</tbody>
</table>
</form>

<style src="media://com_default/css/admin.css" /> 