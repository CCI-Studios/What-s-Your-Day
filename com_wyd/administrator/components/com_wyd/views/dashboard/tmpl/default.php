<? defined('KOOWA') or die; ?>

<script src="media://lib_koowa/js/koowa.js" />
<style src="media://lib_koowa/css/koowa.css" />
<style src="media://com_wyd/css/com_wyd.admin.css" />

<div class="-koowa-flex">
	<div style="width: 200px;">
		<h3><?= @text('WYD Shortcuts') ?></h3>

		<ul>
			<li><a href="<?= @route('view=day') ?>">
				<?= @text('Add Day')?>
			</a></li>
			<li><a href="<?= @route('view=sponsorship') ?>">
				<?= @text('Add Sponsor')?>
			</a></li>
		</ul>
	</div>
	
	<div style="-moz-box-flex: 1; -webkit-box-flex: 1; box-flex: 1;">
		<?= @helper('tabs.startPane')?>
			<?= @helper('tabs.startPanel', array('title'=>@text('Recent Stats'))) ?>
				stats
			<?= @helper('tabs.endPanel')?>
			
			<?= @helper('tabs.startPanel', array('title'=>@text('Year to Date'))) ?>
				YTD
			<?= @helper('tabs.endPanel')?>
			
			<?= @helper('tabs.startPanel', array('title'=>@text('Other Details'))) ?>
				<?= @helper('admin::com.cci.template.helper.chart.display', array(
					'type'		=> 'PieChart',
					'columns'	=> array(
						array('label'=>'Topping', 'type'=>'string'),
						array('label'=>'Slices', 'type'=>'number')),
					'data'		=> array(
						array('Mushrooms', 3),
						array('Onions', 1),
						array('Olives', 1),
						array('Zucchini', 1),
						array('Pepperoni', 1)),
				)) ?>
			<?= @helper('tabs.endPanel')?>
			
		<?= @helper('tabs.endPane')?>
	</div>
</div>
