<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dailypart Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $vendor_id
 * @property string $po
 * @property string $description
 * @property string $special_request
 * @property int $urgency_id
 * @property int $action_id
 * @property int $servco_id
 * @property string $status
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Vendor $vendor
 * @property \App\Model\Entity\Urgency $urgency
 * @property \App\Model\Entity\Action $action
 * @property \App\Model\Entity\Servco $servco
 */
class Dailypart extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'user_id' => true,
        'vendor_id' => true,
        'po' => true,
        'description' => true,
        'special_request' => true,
        'urgency_id' => true,
        'action_id' => true,
        'servco_id' => true,
        'status' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'vendor' => true,
        'urgency' => true,
        'action' => true,
        'servco' => true
    ];
}
