<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Itemtype Entity.
 */
class Itemtype extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'type' => true,
        'opentypes' => true,
        'quoteproducts' => true,
    ];
}
