<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Corporate Entity.
 */
class Corporate extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'CustID' => true,
        'CustType' => true,
        'CustCompanyName' => true,
        'CustTradingName' => true,
        'CustABN' => true,
        'CustContactPerson' => true,
    ];
}
