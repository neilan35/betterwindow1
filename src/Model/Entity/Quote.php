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
        'quoteno' => true,
        'unitcost' => true,
        'quantity' => true,
        'installation' => true,
        'installtype' => true,
        'delivery' => true,
        // 'deliverytype' => true,
        'status' => true,
        'customer' => true,
        'quoteproducts' => true,
    ];
}
