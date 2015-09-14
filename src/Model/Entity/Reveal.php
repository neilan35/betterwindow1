<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reveal Entity.
 */
class Reveal extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'type' => true,
        'price' => true,
        'products' => true,
    ];
}
