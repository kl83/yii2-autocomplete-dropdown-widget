<?php
namespace kl83\widgets;

class AutocompleteDropdown extends \yii\widgets\InputWidget
{
    /**
     * Source for autocomplete. It must by url to get autocomlete items.
     * @var string
     */
    public $source = [];
    /**
     * Additional autocomplete options.
     * @var array
     */
    public $autocompleteOptions = [];
    /**
     * Initial autocomplete value.
     * @var string
     */
    public $textValue = '';

    function run()
    {
        AutocompleteDropdownAsset::register($this->view);
        $this->view->registerJs("autocomleteDropdownInit('{$this->options['id']}')");
        $this->autocompleteOptions['source'] = $this->source;
        $this->options['data-autocomplete'] = $this->autocompleteOptions;
        return $this->render('widget', [
            'widget' => $this,
            'hasModel' => $this->hasModel(),
        ]);
    }
}
