<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Stock Entity
 *
 * @property int $StockID
 * @property int $Quantity
 * @property \Cake\I18n\FrozenDate $DateDeliver
 * @property \Cake\I18n\FrozenDate $DateReturn
 */
class Stock extends Entity
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
        'Quantity' => true,
        'DateDeliver' => true,
        'DateReturn' => true
    ];
}
