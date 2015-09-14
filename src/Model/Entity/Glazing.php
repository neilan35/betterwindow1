<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Glazing Entity.
 */
class Glazing extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'usage_id' => true,
        'glasstype_id' => true,
        'composition_id' => true,
        'balrating_id' => true,
        'obscurity' => true,
        'safety' => true,
        'price' => true,
        'usage' => true,
        'glasstype' => true,
        'composition' => true,
        'balrating' => true,
        'products' => true,
    ];
}
