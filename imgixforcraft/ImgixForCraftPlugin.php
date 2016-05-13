<?php
namespace Craft;

class FruitAviaryImageEditorPlugin extends BasePlugin
{
    public function getName()
    {
         return Craft::t('Imgix For Craft');
    }

    #public function addAssetActions()
    #{
    #    return array('FruitAviaryImageEditor_EditImage');
    #}

    function getVersion()
    {
        return '0.0.1';
    }

    function getDeveloper()
    {
        return 'Ian Kropp';
    }

    function getDeveloperUrl()
    {
        return 'https://github.com/kroppian';
    }

    #protected function getSettingsModel()
    #{
    #    return new FruitAviaryImageEditor_SettingsModel();
    #}

    #public function getSettingsHtml()
    #{
    #    return craft()->templates->render('fruitaviaryimageeditor/settings', array(
    #        'settings' => $this->getSettings(),
    #        'aviaryTools' => craft()->config->get('aviaryTools', 'fruitaviaryimageeditor'),
    #    ));
    #}

    public function init() 
    {


#        if (craft()->request->isCpRequest()) {
#            craft()->templates->includeJsResource('fruitaviaryimageeditor/js/editor.js');
#            $settings = $this->getSettings();
#            $aviaryTools = is_array($settings['aviaryTools']) ? '[\''.implode ("', '", $settings['aviaryTools']).'\']' : '\'all\'';
#            $user = craft()->userSession->user;
#
#            $js = "
#                var Fruit = {
#                    featherEditor : new Aviary.Feather({
#                        apiKey: '".$settings['aviaryApiKey']."',
#                        tools: ".$aviaryTools.",
#                        enableCORS: '".$settings['enableCORS']."' ? true : false,
#                        theme: '".$settings['aviaryTheme']."',
#                        language: '".substr($user['preferredLocale'], 0, 2)."'
#                }),
#
#                launchEditor : function (id, src, options) {
#                    var defaults = {
#                        image: id,
#                        url: src
#                    }
#                    var options = $.extend({}, defaults, options);
#                    this.featherEditor.launch(options);
#                    }
#                };
#            ";
#            craft()->templates->includeJs($js);
#        }
    }
}
