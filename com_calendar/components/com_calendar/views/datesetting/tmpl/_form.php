<form enctype="multipart/form-data" action="<?= @route('view=datesetting')?>" method="post" class="form-validate" onSubmit="return myValidate(this);">
	<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
	
	<label for="title_field"><?=@text('Title')?>:</label>
	<input type="text" name="title" id="title_field" class="required" />
	
	<!--
	<label for="dedication_field"><?=@text('Title 2')?>:</label>
	<input type="text" name="dedication" id="dedication_field" />
	-->
	
	<label for="link_field"><?=@text('Link')?>:</label>
	<input type="text" name="link" id="link_field" />
	
	<label for="file_upload_field"><?=@text('Image')?>:</label>
	<input type="file" id="field_upload_field" name="file_upload" />
	
	<label for="description_field"><?=@text('Comment/Story:')?>:</label>
	<textarea id="description_field" name="description"></textarea>
	
	<br/>
	<input type="submit" value="Continue"/>
	
	<input type="hidden" name="action" value="savesettings" />
</form>