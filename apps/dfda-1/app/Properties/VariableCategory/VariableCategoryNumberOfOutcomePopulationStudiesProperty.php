<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\VariableCategory;
use App\Models\VariableCategory;
use App\Traits\PropertyTraits\VariableCategoryProperty;
use App\Properties\Base\BaseNumberOfOutcomePopulationStudiesProperty;
class VariableCategoryNumberOfOutcomePopulationStudiesProperty extends BaseNumberOfOutcomePopulationStudiesProperty
{
    use VariableCategoryProperty;
    public $table = VariableCategory::TABLE;
    public $parentClass = VariableCategory::class;
}
