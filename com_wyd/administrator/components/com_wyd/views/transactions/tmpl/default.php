<? defined('KOOWA') or die; ?>

<style src="media://lib_koowa/css/koowa.css" />
<script src="media://lib_koowa/js/koowa.js" />

<form action="<?= @route() ?>" method="get" class="-koowa-grid">
	
	<table class="adminlist">
		<thead>
			<tr>
				<th width="10"></th>
				<th><?= @helper('grid.sort', array('column'=>'lastname')) ?></th>
				<th><?= @helper('grid.sort', array('column'=>'date', 'title'=>'Purchase Date'))?>
				<th width="20"><?= @helper('grid.sort', array('column'=>'status')) ?></th>
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
			<? foreach ($transactions as $transaction): ?>
				<tr>
					<td align="center"><?= @helper('grid.checkbox', array('row'=>$transaction)) ?></td>
					<td><a href="<?= @route('view=transaction&amp;id='. $transaction->id) ?>">
						<?= $transaction->lastname .', '. $transaction->firstname ?>
					</a></td>
					<td align="center"><?= $transaction->date ?></td>
					<td align="center"><?= $transaction->status ?></td>
					<td align="center"><?= $transaction->id ?></td>
				</tr>
			<? endforeach; ?>
			
			<? if (!count($transactions)): ?>
			<tr>
				<td align="center" colspan="99">
					<?= @text('No transactions available'); ?>
				</td>
			</tr>
			<? endif; ?>
		</tbody>
	</table>
</form>