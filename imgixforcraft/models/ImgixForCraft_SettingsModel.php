<?php
namespace Craft;

class ImgixForCraft_SettingsModel extends BaseModel
{
	protected function defineAttributes()
	{
        return array(
            'imgixSourceUrl' => array(AttributeType::String, 'required' => true),
        );
	}
}
