<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Book Entity
 *
 * @property int $id
 * @property string $name
 * @property string $auther
 * @property int $Publisher_id
 * @property int $price
 *
 * @property \App\Model\Entity\Publisher $publisher
 */
class Book extends Entity
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
        'auther' => true,
        'Publisher_id' => true,
        'price' => true,
        'publisher' => true
    ];
}
