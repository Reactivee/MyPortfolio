<?php
/**
 * Created by PhpStorm.
 * User: a_obidov
 * Date: 28.03.2021
 * Time: 14:35
 */

namespace frontend\widgets;

use yii\base\Widget;
use yii\bootstrap\Html;
use Yii;

class LanguagePicker extends Widget
{
    public function run()
    {
        $languages = [
            'uz' => 'Oʻz',
            'ru' => 'Ru',
            'en' => 'En'
        ];
        $currentLang = $languages[Yii::$app->language];
        unset($languages[Yii::$app->language]);
        $params = Yii::$app->request->queryParams;
        $items = [];
        foreach ($languages as $code => $language) {
            $params[0] = '';
            $params['language'] = $code;
            $items[] = Html::a($language, $params);
        }
        return Html::ul(
            [
                Html::a($currentLang, '#', ['class' => 'dropdown-toggle', 'data-toggle' => 'dropdown', 'role' => 'button']) .
                Html::ul($items,
                    [
                        'class' => 'dropdown-menu list-unstyled border-0',
                        'encode' => false
                    ])
            ],
            [
                'class' => 'my-lang-picker list-unstyled text-uppercase',
                'encode' => false,
                'itemOptions' => [
                    'class' => 'dropdown list-unstyled'
                ]
            ]
        );
    }
}