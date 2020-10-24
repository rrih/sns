<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Room Entity
 *
 * @property int $id
 * @property int $user_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 * @property int $other_user_id
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\OtherUser $other_user
 * @property \App\Model\Entity\Entry[] $entries
 * @property \App\Model\Entity\Message[] $messages
 */
class Room extends Entity
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
        'created' => true,
        'modified' => true,
        'other_user_id' => true,
        'user' => true,
        'other_user' => true,
        'entries' => true,
        'messages' => true,
    ];
}
