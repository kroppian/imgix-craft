<?php
namespace Craft;

require 'vendor/autoload.php';

class ImgixForCraftPlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('Imgix For Craft');
    }

    public function getVersion()
    {
        return '0.0.1';
    }

    public function getDeveloper()
    {
        return 'Ian Kropp';
    }

    public function getDeveloperUrl()
    {
        return 'https://github.com/kroppian';
    }
    public function hasCpSection()
    {
        return false;
    }

  
    protected function defineSettings()
    {
        return array(
            'cocktailCategories' => array(AttributeType::Mixed, 'default' => array('Sours', 'Fizzes', 'Juleps')),
        );
    }

    protected function getSettingsModel()
    {
        return new ImgixForCraft_SettingsModel();
    }

    public function getSettingsHtml()
    {
       return craft()->templates->render('imgixforcraft/settings', array(
           'settings' => $this->getSettings()
       ));
    }

    
}
