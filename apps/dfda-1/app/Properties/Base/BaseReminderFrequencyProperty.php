<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Base;
use App\Traits\PropertyTraits\IsInt;
use App\UI\ImageUrls;
use App\UI\FontAwesome;
use App\Properties\BaseProperty;
class BaseReminderFrequencyProperty extends BaseProperty{
	use IsInt;
    const DEFAULT = 86400;
    public $dbInput = 'integer,false';
	public $dbType = \Doctrine\DBAL\Types\Types::INTEGER;
	public $default = self::DEFAULT;
	public $description = 'Number of seconds between one reminder and the next';
	public $example = self::DEFAULT;
	public $fieldType = self::TYPE_INTEGER;
	public $fontAwesome = FontAwesome::EARLIEST_REMINDER_TIME;
	public $htmlType = 'text';
	public $image = ImageUrls::EARLIEST_REMINDER_TIME;
	public $inForm = true;
	public $inIndex = true;
	public $inView = true;
	public $isFillable = true;
	public $isOrderable = true;
	public $isSearchable = false;
	public $maximum = 2147483647;
	public $minimum = 0;
	public $name = self::NAME;
	public const NAME = 'reminder_frequency';
	public $phpType = \App\Types\PhpTypes::INTEGER;
	public $rules = 'nullable|integer|min:0|max:2147483647';
	public $title = 'Frequency';
	public $type = self::TYPE_INTEGER;
	public $canBeChangedToNull = true;
	public $validations = 'nullable|integer|min:0|max:2147483647';

}
