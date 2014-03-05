<?php

namespace tsvetann\sortablegridview;

use yii\grid\GridView;
use yii\helpers\Json;
use yii\jui\SortableAsset;

/**
 * Class SortableGridview. A sortable gridview for Yii2
 * @package tsvetann\sortablegridview
 * @author Tsvetan Nikolov <live.webscore@gmail.com>
 */

class SortableGridview extends GridView
{
    public $sortOptions = null;

    public function run()
    {
        $view = $this->getView();
        SortableAsset::register($view);
        $options = '';
        if ($this->sortOptions !== null) {
            $options = Json::encode($this->sortOptions);
        }
        $id = $this->options['id'];
        $view->registerJs("jQuery('#$id table tbody').sortable($options);");
        parent::run();
    }
}