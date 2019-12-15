<?php
use yii\helpers\Json;
use yii\web\View;
use yii\grid\GridView;

$models = $dataProvider->models;


echo GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => $columns,
    'layout' => "{summary}<br/><div id=\"". $selector_id ."\"></div>{pager}" //{summary}\n{items}\n
]);


$tabulatorData = Json::encode($models);

//$cols = '[{title: "Last Name", field: "last_name"}, {title: "First Name", field: "first_name"}];';
$cols = Json::encode($this->context->getColumnLabelsTabulator($model, $columns));


$this->registerJs(
    sprintf("window.selector_table_id='%s'; window.tableCols = %s", $selector_id, $cols),
    View::POS_HEAD,
    'tabulator-load-columns'
);


$this->registerJs(
    sprintf("var tableData = %s; window.tabulatorTable.setData(tableData);", $tabulatorData),
    View::POS_READY,
    'tabulator-load-data'
);

