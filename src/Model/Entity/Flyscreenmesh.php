<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Flyscreenmesh Entity.
 */
class Flyscreenmesh extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'balrating_id' => true,
        'meshtype_id' => true,
        'flyscreenopentype_id' => true,
        'balrating' => true,
        'meshtype' => true,
        'flyscreenopentype' => true,
        'products' => true,
    ];
}
