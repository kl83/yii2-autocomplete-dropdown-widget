# Yii2 Autocomplete dropdown widget
[![Latest Stable Version](https://poser.pugx.org/kl83/yii2-autocomplete-dropdown-widget/v/stable)](https://packagist.org/packages/kl83/yii2-autocomplete-dropdown-widget)
[![Total Downloads](https://poser.pugx.org/kl83/yii2-autocomplete-dropdown-widget/downloads)](https://packagist.org/packages/kl83/yii2-autocomplete-dropdown-widget)
[![License](https://poser.pugx.org/kl83/yii2-autocomplete-dropdown-widget/license)](https://packagist.org/packages/kl83/yii2-autocomplete-dropdown-widget)

Dropdown widget with autocomplete jQuery UI and ability to send in form identifier of the selected item.

## Installation
The preferred way to install this extension is through [composer](https://getcomposer.org/).

Either run
~~~
php composer.phar require kl83/yii2-autocomplete-dropdown-widget ~1.0.0
~~~
or add
~~~
"kl83/yii2-autocomplete-dropdown-widget": "~1.0.0"
~~~
to the require section of your composer.json file.

## Widget options
Option|Description
------|-----------
**(string) source**|Url to load autocomlete source in JSON-formt. Example: [{"id":**id**,"label":"**some text**"}, ... ].
**(array) autocompleteOptions**|JQueryUI Autocomplete widget options.
**(string) textValue**|Initial text-input value.
**(boolean) ajaxGlobal**|"global" property value of ajax request, [read more](http://api.jquery.com/jquery.ajax/).

## Usage
```php
<?= $form->field($model, 'createdBy')->widget('kl83\widgets\AutocompleteDropdown', [
    'source' => '/user/autocomplete-source',
    'textValue' => $model->user->fullName,
]) ?>
```

## License
MIT License
