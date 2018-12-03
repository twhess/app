<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Servco Entity
 *
 * @property int $id
 * @property string $name
 * @property string $street
 * @property string $city
 * @property string $state
 * @property string $zip
 * @property string $phone
 * @property string $fax
 * @property string $email
 *
 * @property \App\Model\Entity\Dailypart[] $dailyparts
 */
class Servco extends Entity
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
        'name' => true,
        'street' => true,
        'city' => true,
        'state' => true,
        'zip' => true,
        'phone' => true,
        'fax' => true,
        'email' => true,
        'dailyparts' => true
    ];
}
