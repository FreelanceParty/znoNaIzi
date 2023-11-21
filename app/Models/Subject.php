<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Subject
 * @property int      $id
 * @property string   $title
 * @property int|NULL $numberInOrder
 * @property Carbon   $createdAt
 * @property Carbon   $updatedAt
 * @package App\Models
 * @method static where(string $column, string $operator, string $value)
 */
class Subject extends Model
{
    // TODO: add chapters: HasMany

    /*** @return int */
    public function getId(): int
    {
        return $this->id;
    }

    /*** @return string */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return void
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /*** @return int|NULL */
    public function getNumberInOrder(): ?int
    {
        return $this->numberInOrder;
    }

    /**
     * @param int|NULL $numberInOrder
     * @return void
     */
    public function setNumberInOrder(?int $numberInOrder): void
    {
        $this->numberInOrder = $numberInOrder;
    }

}
