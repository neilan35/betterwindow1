<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Composition Entity.
 */
class Composition extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'glazings' => true,
        'price' =>true,
    ];
}
