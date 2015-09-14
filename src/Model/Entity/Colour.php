<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Colour Entity.
 */
class Colour extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'category_id' => true,
        'name' => true,
        'category' => true,
        'products' => true,
    ];
}
