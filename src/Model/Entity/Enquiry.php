<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Enquiry Entity.
 */
class Enquiry extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'firstname' => true,
        'lastname' => true,
        'email' => true,
        'phone' => true,
        'comment' => true,
    ];
}
