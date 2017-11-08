This repo is outdated and unmaintained
================

SortableGridview
================

Yii2 Sortable Gridview

What is sortable gridview
-------------------

Sometimes one needs a more complex jquery sortable element such that you can filter the elements in a bigger database and then be able to sort the results. Sortable Gridview fulfills this gap

Usage
-------------------
There is an additional attribute available `sortOptions = []`. It takes options from the [jquery ui sortable](http://api.jqueryui.com/sortable/)
```
echo SortableGridview::widget([
            'dataProvider' => $dataProvider,
            'filterModel' => $filterModel,
            'options' => [
                'id' => 'targetTable',
                'class' => 'grid-view'
            ],
            'sortOptions' => [
                'placeholder' => 'ui-state-highlight',
                'cursor' => 'move',
                'receive' => new JsExpression("function(event, ui) {
                    console.log('receive');
                }"),
                'change' => new JsExpression("function(event, ui) {
                    console.log('change');
                }"),
            ],
            'columns' => [

                'id',
                'title',
            ],
        ]);
```
        
Installation via composer
-------------------

require: "tsvetann/sortablegridview": "dev-master"
