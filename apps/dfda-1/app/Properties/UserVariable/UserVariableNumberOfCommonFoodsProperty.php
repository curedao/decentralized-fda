<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\UserVariable;
use App\Models\UserVariable;
use App\Traits\PropertyTraits\UserVariableProperty;
use App\Properties\Base\BaseNumberOfCommonFoodsProperty;
class UserVariableNumberOfCommonFoodsProperty extends BaseNumberOfCommonFoodsProperty
{
    use UserVariableProperty;
    public $table = UserVariable::TABLE;
    public $parentClass = UserVariable::class;
}
