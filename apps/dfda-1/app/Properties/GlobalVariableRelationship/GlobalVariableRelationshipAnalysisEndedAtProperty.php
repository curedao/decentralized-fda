<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\GlobalVariableRelationship;
use App\Models\GlobalVariableRelationship;
use App\Traits\PropertyTraits\GlobalVariableRelationshipProperty;
use App\Properties\Base\BaseAnalysisEndedAtProperty;
class GlobalVariableRelationshipAnalysisEndedAtProperty extends BaseAnalysisEndedAtProperty
{
    use GlobalVariableRelationshipProperty;
    public $table = GlobalVariableRelationship::TABLE;
    public $parentClass = GlobalVariableRelationship::class;
}
