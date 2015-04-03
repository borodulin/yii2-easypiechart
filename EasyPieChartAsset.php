<?php
/**
 * @link https://github.com/borodulin/yii2-easypiechart
 * @copyright Copyright (c) 2015 Andrey Borodulin
 * @license https://github.com/borodulin/yii2-easypiechart/blob/master/LICENSE
 */
namespace conquer\easypiechart;

class EasyPieChartAsset extends \yii\web\AssetBundle
{
	// The files are not web directory accessible, therefore we need
	// to specify the sourcePath property. Notice the @bower alias used.
	public $sourcePath = '@bower/jquery.easy-pie-chart';
	
	public $js = [
		'dist/jquery.easypiechart.min.js',
	];
	
	public $depends = [
		'yii\web\JqueryAsset',	
	];
}