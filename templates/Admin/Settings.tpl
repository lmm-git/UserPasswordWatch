{include file='Admin/Includes/Header.tpl' __title='Settings'}

{form cssClass='z-form'}
	{formerrormessage id='error'}
	{formvalidationsummary}

	<fieldset>
		<legend>{gt text='Standards'}</legend>
		<div class="z-formrow">
			{formlabel __text='Soft expiry of user passwords' for='passwordExpireSoftLimit' mandatory=true}
			{formtextinput id='passwordExpireSoftLimit' mandatory=true maxLength=255}
		</div>

		<div class="z-formrow">
			{formlabel __text='Hard expiry of user passwords' for='passwordExpireHardLimit' mandatory=true}
			{formtextinput id='passwordExpireHardLimit' mandatory=true maxLength=255}
		</div>
	</fieldset>

	<div class="z-buttons z-formbuttons">
		{formbutton commandName='send' __text='Store settings' class='z-bt-ok z-btgreen'}
		{formbutton commandName='cancel' __text='Cancel' class='z-bt-cancel z-btred'}
	</div>
{/form}

{include file='Admin/Includes/Footer.tpl'}
