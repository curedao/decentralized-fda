<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Charts\QMHighcharts\Highcharts\Combinations\DualAxesLineAndColumn;
use App\Charts\QMHighcharts\HighchartConfig;
use App\Charts\QMHighcharts\Options\BaseChart;
use App\Charts\QMHighcharts\Options\BaseLegend;
use App\Charts\QMHighcharts\Options\BaseSeries;
use App\Charts\QMHighcharts\Options\BaseSubtitle;
use App\Charts\QMHighcharts\Options\BaseTitle;
use App\Charts\QMHighcharts\Options\BaseTooltip;
use App\Charts\QMHighcharts\Options\BaseXAxis;
use App\Charts\QMHighcharts\Options\BaseYAxis;
use Ghunti\HighchartsPHP\HighchartJsExpr;
class BaseDualAxesLineAndColumn extends HighchartConfig {
	/**
	 * @var BaseChart
	 * @link https://api.highcharts.com/highcharts/chart
	 */
	public $chart;
	/**
	 * @var BaseTitle
	 * @link https://api.highcharts.com/highcharts/title
	 */
	public $title;
	/**
	 * @var BaseSubtitle
	 * @link https://api.highcharts.com/highcharts/subtitle
	 */
	public $subtitle;
	/**
	 * @var BaseXAxis[]
	 * @link https://api.highcharts.com/highcharts/xAxis
	 */
	public $xAxis;
	/**
	 * @var BaseYAxis[]
	 * @link https://api.highcharts.com/highcharts/yAxis
	 */
	public $yAxis;
	/**
	 * @var BaseTooltip
	 * @link https://api.highcharts.com/highcharts/tooltip
	 */
	public $tooltip;
	/**
	 * @var BaseLegend
	 * @link https://api.highcharts.com/highcharts/legend
	 */
	public $legend;
	/**
	 * @var BaseSeries[]
	 * @link https://api.highcharts.com/highcharts/series
	 */
	public $series;
	public function __construct(){
		parent::__construct();
		$this->chart = new BaseChart();
		$this->title = new BaseTitle();
		$this->subtitle = new BaseSubtitle();
		$this->xAxis = [];
		$this->yAxis = [];
		$this->tooltip = new BaseTooltip();
		$this->legend = new BaseLegend();
		$this->series = [];
		$this->chart->renderTo = "container";
		$this->chart->zoomType = "xy";
		$this->title->text = "Average Monthly Temperature and Rainfall in Tokyo";
		$this->subtitle->text = "Source: WorldClimate.com";
		$this->xAxis = [
			[
				'categories' => [
					'Jan',
					'Feb',
					'Mar',
					'Apr',
					'May',
					'Jun',
					'Jul',
					'Aug',
					'Sep',
					'Oct',
					'Nov',
					'Dec',
				],
			],
		];
		$leftYaxis = new BaseYAxis();
		$leftYaxis->labels->formatter = new HighchartJsExpr("function() {
		    return this.value +'°C'; }");
		$leftYaxis->labels->setColor("#89A54E");
		$leftYaxis->title->text = "Temperature";
		$leftYaxis->title->setColor("#89A54E");
		$rightYaxis = new BaseYAxis();
		$rightYaxis->title->text = "Rainfall";
		$rightYaxis->title->setColor("#4572A7");
		$rightYaxis->labels->formatter = new HighchartJsExpr("function() {
		    return this.value +' mm'; }");
		$rightYaxis->labels->style->color = "#4572A7";
		$rightYaxis->opposite = 1;
		$this->yAxis = [
			$leftYaxis,
			$rightYaxis,
		];
		$this->tooltip->formatter = new HighchartJsExpr("function() {
		    return '' + this.x +': '+ this.y +
		    (this.series.name == 'Rainfall' ? ' mm' : '°C'); }");
		$this->legend->layout = "vertical";
		$this->legend->align = "left";
		$this->legend->x = 120;
		$this->legend->verticalAlign = "top";
		$this->legend->y = 100;
		$this->legend->floating = 1;
		$this->legend->backgroundColor = "#FFFFFF";
		$this->series[] = [
			'name' => "Rainfall",
			'color' => "#4572A7",
			'type' => "column",
			'yAxis' => 1,
			'data' => [
				49.9,
				71.5,
				106.4,
				129.2,
				144.0,
				176.0,
				135.6,
				148.5,
				216.4,
				194.1,
				95.6,
				54.4,
			],
		];
		$this->series[] = [
			'name' => "Temperature",
			'color' => "#89A54E",
			'type' => "spline",
			'data' => [
				7.0,
				6.9,
				9.5,
				14.5,
				18.2,
				21.5,
				25.2,
				26.5,
				23.3,
				18.3,
				13.9,
				9.6,
			],
		];
	}
	public function demo(): string{
		/** @noinspection PhpIncludeInspection */
		require base_path('vendor/ghunti/highcharts-php/demos/highcharts/combinations/dual_axes_line_and_column.php');
	}
}
