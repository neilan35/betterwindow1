<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Userz Entity.
 */
class Userz extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'CustID' => true,
        'email' => true,
        'password' => true,
    ];
}
