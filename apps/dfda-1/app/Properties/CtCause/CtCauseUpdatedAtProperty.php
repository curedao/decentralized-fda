<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\CtCause;
use App\Models\CtCause;
use App\Traits\PropertyTraits\CtCauseProperty;
use App\Properties\Base\BaseUpdatedAtProperty;
class CtCauseUpdatedAtProperty extends BaseUpdatedAtProperty
{
    use CtCauseProperty;
    public $table = CtCause::TABLE;
    public $parentClass = CtCause::class;
}
