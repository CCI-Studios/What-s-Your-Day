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