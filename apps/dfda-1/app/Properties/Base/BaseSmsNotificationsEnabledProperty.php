<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Base;
use App\Traits\PropertyTraits\IsBoolean;
use App\Types\PhpTypes;
use App\UI\ImageUrls;
use App\UI\FontAwesome;
use App\Properties\BaseProperty;
class BaseSmsNotificationsEnabledProperty extends BaseProperty{
	use IsBoolean;
	public $dbInput = self::TYPE_BOOLEAN;
	public $dbType = self::TYPE_BOOLEAN;
	public $default = \OpenApi\Generator::UNDEFINED;
	public $description = 'Should we send tracking reminder notifications via tex messages?';
	public $example = false;
	public $fieldType = self::TYPE_BOOLEAN;
	public $fontAwesome = FontAwesome::SMS_NOTIFICATIONS_ENABLED;
	public $htmlInput = 'checkbox,1';
	public $htmlType = 'checkbox';
	public $image = ImageUrls::SMS_NOTIFICATIONS_ENABLED;
	public $inForm = true;
	public $inIndex = true;
	public $inView = true;
	public $isFillable = true;
	public $isOrderable = false;
	public $isSearchable = true;
	public $name = self::NAME;
	public const NAME = 'sms_notifications_enabled';
	public $phpType = PhpTypes::BOOL;
	public $rules = 'nullable|boolean';
	public $title = 'Sms Notifications Enabled';
	public $type = self::TYPE_BOOLEAN;
	public $validations = 'required';

}
