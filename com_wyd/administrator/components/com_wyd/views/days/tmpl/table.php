<? defined('KOOWA') or die; ?>
<?= @helper('behavior.modal') ?>

<table class="admintable">
	<? foreach ($days as $day): ?>
	<tr>
		<td class="key"><?= $day->title ?></td>
		<td><a href="<?= @route('view=day&amp;id='. $day->id .'&amp;tmpl=component') ?>" class="modal" rel="{handler: 'iframe'}">
			<?= date('D, F jS, Y', strtotime($day->date)) ?>
		</a></td>
	</tr>
	<? endforeach; ?>
</table>
