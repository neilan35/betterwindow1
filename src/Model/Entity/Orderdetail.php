<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Orderdetail Entity.
 */
class Orderdetail extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'OrderDetailsColour' => true,
        'OrderDetailsGlazingType' => true,
        'OrderDetailsBalRating' => true,
        'OrderDetailsRevealSize' => true,
        'OrderDetailsWinOpenType' => true,
        'OrderDetailsDoorOpenType' => true,
        'OrderDetailsFlyScreen' => true,
        'OrderDetailsFlyScreenType' => true,
        'OrderDetailsMesh' => true,
        'OrderDetailsInstallation' => true,
        'OrderDetailsInstallTypes' => true,
        'OrderDetailsDelivery' => true,
        'OrderDetailsPostcode' => true,
    ];
}
