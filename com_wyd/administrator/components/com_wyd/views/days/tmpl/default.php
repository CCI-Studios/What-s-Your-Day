<? defined('KOOWA') or die; ?>

<style src="media://lib_koowa/css/koowa.css" />
<script src="media://lib_koowa/js/koowa.js" />

<!-- recent purchases -->

<form action="<?= @route() ?>" method="get" class="-koowa-grid">
	<!-- filter -->
	
	<table class="adminlist">
		<thead>
			<tr>
				<th width="10"></th>
				<th><?= @helper('grid.sort', array('column'=>'title')) ?></th>
				<th width="60"><?= @helper('grid.sort', array('column'=>'date')) ?></th>
				<th width="60"><?= @helper('grid.sort', array('column'=>'enabled')) ?></th>
				<th align="center" width="30"><?= @text('Transaction') ?></th>
				<th width="10"><?= @helper('grid.sort', array('column'=>'id')) ?></th>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<td colspan="99">
					<?= @helper('paginator.pagination', array('total'=>$total)) ?>
				</td>
			</tr>
		</tfoot>
		
		<tbody>
			<? foreach ($days as $day): ?>
				<tr>
					<td align="center"><?= @helper('grid.checkbox', array('row'=>$day)) ?></td>
					<td><a href="<?= @route('view=day&amp;id='. $day->id) ?>">
						<?= @escape($day->title) ?>
					</a></td>
					<td align="center"><?= @escape($day->date)?></td>
					<td align="center"><?= @helper('grid.enable', array('row'=>$day)) ?></td>
					<td><a href="<?= @route('view=transaction&amp;id='. $day->transaction->id); ?>">
						<?= $day->transaction->date; ?>
					</a></td>
					<td align="center"><?= $day->id ?></td>
				</tr>
			<? endforeach; ?>
			
			<? if (!count($days)): ?>
			<tr>
				<td align="center" colspan="99">
					<?= @text('No days available'); ?>
				</td>
			</tr>
			<? endif; ?>
		</tbody>
	</table>
</form>