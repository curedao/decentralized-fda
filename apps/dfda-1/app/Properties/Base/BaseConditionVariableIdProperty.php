<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Base;
use App\UI\ImageUrls;
use App\UI\FontAwesome;
class BaseConditionVariableIdProperty extends BaseVariableIdProperty {
	public $dbInput = 'integer,false,true';
	public $dbType = \Doctrine\DBAL\Types\Types::INTEGER;
	public $default = \OpenApi\Generator::UNDEFINED;
	public $description = 'condition_variable_id';
	public $example = 0;
	public $fieldType = self::TYPE_INTEGER;
	public $fontAwesome = FontAwesome::PRIMARY_OUTCOME_VARIABLE_ID;
	public $htmlType = self::TYPE_NUMBER;
	public $image = ImageUrls::PRIMARY_OUTCOME_VARIABLE;
	public $importance = false;
	public $isOrderable = true;
	public $isSearchable = false;
	public $maximum = 2147483647;
	public $minimum = 0;
	public $name = self::NAME;
	public const NAME = 'condition_variable_id';
	public $canBeChangedToNull = true;
	public $phpType = \App\Types\PhpTypes::INTEGER;
	public $rules = 'nullable|integer|min:0|max:2147483647';
	public $showOnDetail = true;
	public $title = 'Condition Variable ID';
	public $type = self::TYPE_INTEGER;
	public $validations = 'nullable|integer|min:0|max:2147483647';

}
