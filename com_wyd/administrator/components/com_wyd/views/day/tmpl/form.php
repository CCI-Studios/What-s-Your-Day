<? defined('KOOWA') or die; ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />
<style src="media://com_wyd/css/com_wyd.admin.css" />

<?= @helper('behavior.keepalive') ?>
<?//= @helper('behavior.validator') ?>
<? JHtml::_('behavior.calendar') ?>

<form action="<?= @route('id='.$day->id) ?>" method="post" class="-koowa-form" id="edit-form">
	<div class="grid_8" id="mainform">
		<div class="panel">
			<input class="title required" type="text" name="title" width="100%	" maxlength="250" placeholder="Title" value="<?= $day->title ?>"><br/>
			<label for="date">
				<input class="inputbox" type="text" name="date" id="date" value="<?= $day->date ?>" placeholder="<?= @text('Date') ?>" />
				<input type="reset" class="button" value="..." onclick="return showCalendar('date', '%Y-%m-%d');" />
			</label>
		
			<?= @editor( array('name' => 'description',
			                            'editor' => null,
			                            'width' => '100%',
			                            'height' => '300',
			                            'cols' => '60',
			                            'rows' => '20',
			                            'buttons' => false)); ?>
		</div>
	</div>
		
	<div class="grid_4"><div class="inner">
		<?= @helper('accordion.startPane') ?>
			<?= @helper('accordion.startPanel', array('title'=>'Settings')); ?>
				<table class="admintable">		
					<tr>
						<td class="key"><?= @text('Link')?>:</td>
						<td><input type="text" name="link" value="<?= $day->link ?>" /></td>
					</tr>
			
					<tr>
						<td class="key"><?= @text('Link Target')?>:</td>
						<td><input type="text" name="target" value="<?= $day->target ?>" /></td>
					</tr>
			
					<tr>
						<td class="key"><?= @text('Dedication')?>:</td>
						<td><input type="text" name="dedication" value="<?= $day->dedication ?>" /></td>
					</tr>
				</table>
			<?= @helper('accordion.endPanel') ?>
			
			<?= @helper('accordion.startPanel', array('title'=>'Image')); ?>
				<table class="admintable">
					<? if ($day->filename): ?>
						<tr>
							<td class="key"><?= @text('Preview') ?>:</td>
							<td>IMAGE HERE <?= $day->filename ?></td>
						</tr>
					
						<tr>
							<td class="key"><?= @text('Edit Image') ?>:</td>
							<td><button>Edit</button></td>
						</tr>
					
						<tr>
							<td class="key"><?= @text('Delete Image') ?>:</td>
							<td><input type="checkbox" name="filename_delete" /></td>
						</tr>
					<? else: ?>
						<tr>
							<td class="key"><?= @text('Upload Image') ?>:</td>
							<td><input type="file" name="filename_upload" /></td>
						</tr>
					<? endif; ?>
				</table>
			<?= @helper('accordion.endPanel')?>

			<?= @helper('accordion.startPanel', array('title'=>'Social')); ?>
				<table class="admintable">
					<tr>
						<td class="key"><?= @text('Added to Facebook') ?>:</td>
						<td><?= ($day->facebook)? @text('Yes'): @text('No') ?></td>
					</tr>
					
					<tr>
						<td class="key"><?= @text('Added to Flickr') ?>:</td>
						<td><?= ($day->flickr)? @text('Yes'): @text('No') ?></td>
					</tr>
					
					<tr>
						<td class="key"><?= @text('Sent Daily Email') ?>:</td>
						<td><?= ($day->email)? @text('Yes'): @text('No') ?></td>
					</tr>
					
					<tr>
						<td class="key"><?= @text('Sent Weekly Radio') ?>:</td>
						<td><?= ($day->radio)? @text('Yes'): @text('No') ?></td>
					</tr>
				</table>
			<?= @helper('accordion.endPanel') ?>
			
			<?= @helper('accordion.startPanel', array('title'=>'Misc')); ?>
				<table class="admintable">
					<tr>
						<td class="key"><?= @text('Enabled') ?>:</td>
						<td><?= @helper('select.booleanlist', array('name'=>'enabled', 'selected'=>$day->enabled))?></td>
					</tr>
					
					<tr>
						<td class="key"><?= @text('User ID') ?>:</td>
						<td><input type="text" name="user_id" value="<?= $day->user_id ?>" /></td>
					</tr>
					
					<tr>
						<td class="key"><?= @text('Locked at') ?>:</td>
						<td><?= $day->locked_at ?></td>
					</tr>
				</table>
			<?= @helper('accordion.endPanel') ?>
		
		<?= @helper('accordion.endPane')?>
	</div></div>
</form>
