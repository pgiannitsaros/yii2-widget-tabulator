# yii2-widget-tabulator
yii2 wrapper for [tabulator javasript library](http://tabulator.info)

download the repository, unzip and rename the folder to tabulator and copy this folder into common/widget in advanced template yii2 project. If widget folder does not exists, create it.

usage

in your controller in a specific action use the code as bellow

```
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => [Your_model_here]::find(),
            'pagination' => [
                'pageSize' => 20,
            ],
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider]);
    }
```

In view file add the bellow code



```
use common\widgets\tabulator\TabulatorView;
use common\models\Employees;

echo TabulatorView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'last_name',
        'first_name',
        'middle_name'
    ],
    'selector_id' => 'example-tabulator',
]);
```


