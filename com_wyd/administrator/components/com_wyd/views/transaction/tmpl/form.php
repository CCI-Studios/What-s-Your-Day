<? defined('KOOWA') or die; ?>
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />
<style src="media://com_wyd/css/com_wyd.admin.css" />

<?= @helper('behavior.keepalive') ?>
<?//= @helper('behavior.validator') ?>

<form action="<?= @route('id='.$transaction->id) ?>" method="post" class="-koowa-form" id="edit-form">
	<div class="grid_8" id="mainform">
		<div class="panel">
			<table class="admintable">
				<tr>
					<td class="key"><?= @text('Last Name') ?>:</td>
					<td><?= $transaction->lastname ?></td>
				</tr>
				
				<tr>
					<td class="key"><?= @text('First Name') ?>:</td>
					<td><?= $transaction->firstname ?></td>
				</tr>
				
				<tr>
					<td class="key"><?= @text('Purchase Date') ?>:</td>
					<td><?= $transaction->date ?></td>
				</tr>
				
				<tr>
					<td class="key"><?= @text('Status') ?>:</td>
					<td><?= $transaction->status ?></td>
				</tr>
				
				<tr>
					<td class="key"><?= @text('Amount') ?>:</td>
					<td><?= $transaction->amt .' '. $transaction->currencycode ?></td>
				</tr>
			</table>
		</div>
	</div>
		
	<div class="grid_4"><div class="inner">
		<?= @helper('accordion.startPane') ?>			
			<?= @helper('accordion.startPanel', array('title'=>'Days')); ?>
				<?= $transaction->wyd_day_ids?>
			<?= @helper('accordion.endPanel') ?>

			<?= @helper('accordion.startPanel', array('title'=>'Address')); ?>
				<table class="admintable">
					<tr>
						<td class="key"><?= @text('Street') ?>:</td>
						<td><?= $transaction->street1 ?></td>
					</tr>
					<tr>
						<td class="key"><?= @text('Street') ?>:</td>
						<td><?= $transaction->street2 ?></td>
					</tr>
					<tr>
						<td class="key"><?= @text('City') ?>:</td>
						<td><?= $transaction->city ?></td>
					</tr>
					<tr>
						<td class="key"><?= @text('Province') ?>:</td>
						<td><?= $transaction->state ?></td>
					</tr>
					<tr>
						<td class="key"><?= @text('Postal Code') ?>:</td>
						<td><?= $transaction->zip ?></td>
					</tr>
					<tr>
						<td class="key"><?= @text('Country') ?>:</td>
						<td><?= $transaction->country ?></td>
					</tr>
				</table>
			<?= @helper('accordion.endPanel') ?>
				
			<?= @helper('accordion.startPanel', array('title'=>'Payment Details')); ?>
				<table class="admintable">
					<tr>
						<td class="key"><?= @text('Card Type') ?>:</td>
						<td><?= $transaction->card ?></td>
					</tr>
				
					<tr>
						<td class="key"><?= @text('Card Number') ?>:</td>
						<td><?= $transaction->number ?></td>
					</tr>
				
					<tr>
						<td class="key"><?= @text('Transaction Time') ?>:</td>
						<td><?= $transaction->timestamp ?></td>
					</tr>
				
					<tr>
						<td class="key"><?= @text('Correlation ID') ?>:</td>
						<td><?= $transaction->correlationid ?></td>
					</tr>
				
					<tr>
						<td class="key"><?= @text('ACK') ?>:</td>
						<td><?= $transaction->ack ?></td>
					</tr>
				
					<tr>
						<td class="key"><?= @text('Version') ?>:</td>
						<td><?= $transaction->version ?></td>
					</tr>
				
					<tr>
						<td class="key"><?= @text('Build') ?>:</td>
						<td><?= $transaction->build ?></td>
					</tr>
				
					<tr>
						<td class="key"><?= @text('AVS Code') ?>:</td>
						<td><?= $transaction->avscode ?></td>
					</tr>
				
					<tr>
						<td class="key"><?= @text('CVV2 Result') ?>:</td>
						<td><?= $transaction->cvv2 ?></td>
					</tr>
				
					<tr>
						<td class="key"><?= @text('Transaction ID') ?>:</td>
						<td><?= $transaction->transactionid ?></td>
					</tr>
				
					<tr>
						<td class="key"><?= @text('IP Address') ?>:</td>
						<td><?= $transaction->ip ?></td>
					</tr>
				</table>
			<?= @helper('accordion.endPanel') ?>
		
			<?= @helper('accordion.startPanel', array('title'=>'Misc')); ?>
				<table class="admintable">
					<tr>
						<td class="key"><?= @text('User ID') ?>:</td>
						<td><?= $transaction->user_id ?></td>
					</tr>
					
					<tr>
						<td class="key"><?= @text('UUID') ?></td>
						<td><?= $transaction->uuis ?></td>
					</tr>
				</table>
			<?= @helper('accordion.endPanel') ?>
		<?= @helper('accordion.endPane')?>
	</div></div>
</form>
