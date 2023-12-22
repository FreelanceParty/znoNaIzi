<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * class Chapter
 * @property int      $id
 * @property string   $title
 * @property int      $subject_id
 * @property int|NULL $number_in_order
 * @property Carbon   $created_at
 * @property Carbon   $updated_at
 * @package App\Models
 * @method static where(string $column, string $operator, string $value)
 */
class Chapter extends Model
{
    /*** @return BelongsTo */
    public function subject(): BelongsTo{
        return $this->belongsTo(Subject::class);
    }

	/**** @return HasMany */
	public function topics(): HasMany{
		return $this->hasMany(Topic::class);
	}

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

    /*** @return int */
    public function getSubjectId(): int
    {
        return $this->subject_id;
    }

    /**
     * @param int $subject_id
     * @return void
     */
    public function setSubjectId(int $subject_id): void
    {
        $this->subject_id = $subject_id;
    }

    /*** @return int|null */
    public function getNumberInOrder(): ?int
    {
        return $this->number_in_order;
    }

    /**
     * @param int|null $number_in_order
     * @return void
     */
    public function setNumberInOrder(?int $number_in_order): void
    {
        $this->number_in_order = $number_in_order;
    }
}
