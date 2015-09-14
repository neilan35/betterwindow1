<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Customer Entity.
 */
class Customer extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'australian_business_number' => true,
        'company_name' => true,
        'first_name' => true,
        'last_name' => true,
        'phone_number' => true,
        'street_address' => true,
        'suburb' => true,
        'state' => true,
        'postcode' => true,
        'user' => true,
    ];
}
