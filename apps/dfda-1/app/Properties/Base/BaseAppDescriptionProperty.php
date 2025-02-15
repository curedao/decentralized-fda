<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Base;
use App\Traits\PropertyTraits\IsString;
use App\Types\PhpTypes;
use App\UI\ImageUrls;
use App\UI\FontAwesome;
use App\Properties\BaseProperty;
class BaseAppDescriptionProperty extends BaseProperty{
	use IsString;
	public const DEFAULT_DESCRIPTION = "Better living through data.";
	public $dbInput = 'string,255:nullable';
	public $dbType = PhpTypes::STRING;
	public $default = "A description of your app.";
	public $description = 'app_description';
	public $fieldType = PhpTypes::STRING;
	public $fontAwesome = FontAwesome::AUDIO_DESCRIPTION_SOLID;
	public $htmlInput = 'text';
	public $htmlType = 'text';
	public $image = ImageUrls::HAS_ANDROID_APP;
	public $importance = false;
	public $inForm = true;
	public $inIndex = true;
	public $inView = true;
	public $isFillable = true;
	public $isOrderable = false;
	public $isSearchable = true;
	public $maxLength = 255;
	public $name = self::NAME;
	public const NAME = 'app_description';
	public $canBeChangedToNull = true;
	public $phpType = PhpTypes::STRING;
	public $rules = 'nullable|max:255';
	public $title = 'App Description';
	public $type = PhpTypes::STRING;
	public $validations = 'nullable|max:255';

}
