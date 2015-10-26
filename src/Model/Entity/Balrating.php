<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Balrating Entity.
 */
class Balrating extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'balrating' => true,
        'flyscreenmeshes' => true,
        'glazings' => true,
        'quoteproducts' => true,
    ];
}
