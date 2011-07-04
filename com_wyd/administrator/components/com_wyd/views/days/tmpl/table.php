<? defined('KOOWA') or die; ?>
<?= @helper('behavior.modal') ?>

<table class="admintable">
	<? foreach ($days as $day): ?>
	<tr>
		<td class="key"><?= $day->title ?></td>
		<td><?= $day->date ?></td>
		<td><a href="<?= @route('view=day&amp;id='. $day->id) ?>" class="modal" rel="{handler: iframe}">
			->
		</a></td>
	</tr>
	<? endforeach; ?>
</table>
