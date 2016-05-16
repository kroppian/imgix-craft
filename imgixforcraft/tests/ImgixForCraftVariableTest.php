<?php


namespace Craft;
#use variables\ImgixForCraftVariable;

use \Mockery as m;

class ImgixForCraftVariableTest extends BaseTest
{

  protected $systemSettings;
  protected $pluginService;
  protected $craftVariable;

  public function setUp()
  {

    # $settings = craft()->plugins->getPlugin('imgixForCraft')->getSettings();
    $this->systemSettings = m::mock('Craft\SystemSettingsService');
		$this->pluginService = m::mock('Craft\PluginService');
		$this->craftVariable = m::mock('Craft\CraftVariable');
    
    $this->craftVariable->shouldReceive('plugins')->with()->andReturn($this->pluginService)->byDefault();

    $this->pluginService->shouldReceive('getPlugin')->with('imgixForCraft')->andReturn($this->systemSettings)->byDefault();

    $this->systemSettings->shouldReceive('getSettings')->with()->andReturn($this->systemSettings)->byDefault();

		$this->systemSettings->shouldReceive('getSetting')->with('imgixSourceUrl')->andReturn('imgix.testeroonie.org')->byDefault();

    $this->setComponent(craft(), 'plugin', $this->pluginService);

    $this->loadDependencies(); 
  
  }

  public function testCanBeNegated()
  {

      $variable = new ImgixForCraftVariable();

      $variable->imgixify('blah');

      // Assert
      $this->assertEquals(-1,-1);
  }

  protected function loadDependencies()
  {
    $dir = __DIR__;
    $map = array(
      '\\Craft\\ImgixForCraft_SettingsModel'	=> '/../models/ImgixForCraft_SettingsModel.php',
      '\\Craft\\ImgixForCraftVariable'	=> '/../variables/ImgixForCraftVariable.php',
      '\\Loath\\Mocks\\Craft'	=> '/mocks/Craft.php',
    );
    foreach ($map as $classPath => $filePath)
    {
      if (!class_exists($classPath, false))
      {
        require_once $dir.$filePath;
      }
    }
  }

}

