<?php
/*
*  GNU General Public License v3.0
*  Contributors: ADD YOUR NAME HERE, Mike P. Sinn
 */

namespace App\Properties\Connection;
use App\Models\Connection;
use App\Traits\PropertyTraits\ConnectionProperty;
use App\Properties\Base\BaseImportedDataEndAtProperty;
class ConnectionImportedDataEndAtProperty extends BaseImportedDataEndAtProperty
{
    use ConnectionProperty;
    public $table = Connection::TABLE;
    public $parentClass = Connection::class;
    public function showOnUpdate(): bool {return false;}
    public function showOnCreate(): bool {return false;}
    public function showOnIndex(): bool {return false;}
    public function showOnDetail(): bool {return false;}
}
