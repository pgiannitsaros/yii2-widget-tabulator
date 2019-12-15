<?php


namespace common\widgets\tabulator;

use Yii;
use common\widgets\tabulator\TabulatorAsset;


class TabulatorView extends \yii\bootstrap\Widget
{

    public $dataProvider = null;
    public $columns = null;
    public $model = null;
    public $selector_id = null;

    public function getColumnLabelsTabulator($model, $columns)
    {

        $labels = $model->attributeLabels();
        $relLabels = [];
        foreach ($columns as $col):
            $relLabels[] = ['field' => $col, 'title' => $labels[$col]];
        endforeach;

        return $relLabels;
    }

    public function run()
    {
        $model = new $this->dataProvider->query->modelClass();
        TabulatorAsset::register($this->getView());
        return $this->render('index', ['dataProvider' => $this->dataProvider, 'columns' => $this->columns, 'model' => $model, 'selector_id' => $this->selector_id]);
    }
}
