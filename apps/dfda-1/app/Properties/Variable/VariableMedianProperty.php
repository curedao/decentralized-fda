<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Variable;
use App\Models\BaseModel;
use App\Models\Variable;
use App\Traits\PropertyTraits\IsCalculated;
use App\Traits\PropertyTraits\VariableProperty;
use App\Properties\Base\BaseMedianProperty;
use App\Traits\VariableValueTraits\VariableValueTrait;
use App\Utils\Stats;
class VariableMedianProperty extends BaseMedianProperty
{
    use VariableValueTrait, VariableProperty;
    use IsCalculated;
    public $table = Variable::TABLE;
    public $parentClass = Variable::class;
    public function validate(): void {
        if(!$this->shouldValidate()){return;}
        parent::validate();
        // TODO: Rename this to average daily instead of ambiguous mean:  $this->validateBetweenMinMaxRecorded($this->getValue());
    }
    /**
     * @param BaseModel|Variable $model
     * @return float
     */
    public static function calculate($model){
        $cv = $model->getDBModel();
        $values = $cv->pluckFromUserVariables(static::NAME);
        $val = ($values) ? Stats::average($values) : null;
        $cv->setAttribute(static::NAME, $val);
        return $val;
    }
}
