<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Constant Entity.
 */
class Constant extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'code' => true,
        'value' => true,
    ];
}
