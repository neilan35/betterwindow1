<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Quote Entity.
 */
class Quote extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'customer_id' => true,
        'installation' => true,
        'installtype' => true,
        'delivery' => true,
        'status' => true,
        'customer' => true,
        'quoteproducts' => true,
    ];
}
