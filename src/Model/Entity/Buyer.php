<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Buyer Entity.
 */
class Buyer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'CustAddress' => true,
        'user' => true,
    ];
}
