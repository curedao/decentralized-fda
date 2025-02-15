<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Base;
use App\UI\ImageUrls;
use App\UI\FontAwesome;
use App\Properties\BaseProperty;
class BasePipersProperty extends BaseProperty
{
    use \App\Traits\PropertyTraits\IsString;
	public $dbInput = 'text,65535';
	public $dbType = 'text';
	public $default = 'undefined';
	public $description = 'pipers';
	public $example = [
            'bin' => '/usr/bin/tee',
            'execute' => '{$command} | {$bin} > {$tempFile}',];
	public $fieldType = 'text';
	public $fontAwesome = FontAwesome::PIED_PIPER;
	public $htmlInput = 'textarea';
	public $htmlType = 'textarea';
	public $image = ImageUrls::QUESTION_MARK;
	public $importance = false;
	public $isOrderable = false;
	public $isSearchable = false;
	public $name = self::NAME;
	public const NAME = 'pipers';
	public $order = 99;
	public $phpType = 'string';
	public $showOnDetail = true;
	public $title = 'Pipers';
	public $type = 'string';

}
