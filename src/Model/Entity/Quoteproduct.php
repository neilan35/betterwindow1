<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Quoteproduct Entity.
 */
class Quoteproduct extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * @var array
     */
    protected $_accessible = [
        'quote_id' => true,
        'quantity' => true,
        'colour_id' => true,
        'balrating_id' => true,
        'itemtype_id' => true,
        'open_type' => true,
        'design_id' => true,
        'reveal'=>true,
        'reveal_id' => true,
        'flyscreentype'=>true,
        'flyscreentypes'=>true,
        'flyscreenmesh_id' => true,
        'glazing_id' => true,
        'height' => true,
        'width' => true,
        'quote' => true,
        'colour' => true,
        'balrating' => true,
        'itemtype' => true,
        'design' => true,
        'reveal' => true,
        'flyscreenmesh' => true,
        'glazing' => true,
        'usages'=>true,
        'glasstype'=>true,
        'quote'=>true,
    ];
}
