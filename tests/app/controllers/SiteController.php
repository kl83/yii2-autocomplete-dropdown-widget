<?php
namespace app\controllers;

class SiteController extends \yii\web\Controller
{
    public $sampleData = [
        'Alabama',
        'Alaska',
        'Arizona',
        'Arkansas',
        'California',
        'Colorado',
        'Connecticut',
        'Delaware',
        'Florida',
        'Georgia',
        'Hawaii',
        'Idaho',
        'Illinois',
        'Indiana',
        'Iowa',
        'Kansas',
        'Kentucky',
        'Louisiana',
        'Maine',
        'Maryland',
        'Massachusetts',
        'Michigan',
        'Minnesota',
        'Mississippi',
        'Missouri',
        'Montana',
        'Nebraska',
        'Nevada',
        'New Hampshire',
        'New Jersey',
        'New Mexico',
        'New York',
        'North Carolina',
        'North Dakota',
        'Ohio',
        'Oklahoma',
        'Oregon',
        'Pennsylvania',
        'Rhode Island',
        'South Carolina',
        'South Dakota',
        'Tennessee',
        'Texas',
        'Utah',
        'Vermont',
        'Virginia',
        'Washington',
        'West Virginia',
        'Wisconsin',
        'Wyoming',
    ];

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSource($term)
    {
        \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
        $searchResult = array_filter($this->sampleData, function ( $state ) use ( $term ) {
            return strpos($state, $term) !== false;
        });
        $data = [];
        foreach ( $searchResult as $value => $label ) {
            $data[] = [
                'id' => $value,
                'label' => $label,
            ];
        }
        return $data;
    }
}
