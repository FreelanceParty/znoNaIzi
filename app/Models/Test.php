<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Test
 * @property int      $id
 * @property int      $topic_id
 * @property int|NULL $number_in_order
 * @property Carbon   $created_at
 * @property Carbon   $updated
 * @package App\Models
 * @method static where(string $column, string $operator, string $value)
 */
class Test extends Model
{
    /*** @return HasMany */
    public function questions(): HasMany
    {
        return $this->hasMany(Question::class);
    }

    /*** @return int */
    public function getId(): int
    {
        return $this->id;
    }

	/*** @return BelongsTo */
	public function topic(): BelongsTo
	{
		return $this->belongsTo(Topic::class);
	}

    /*** @return int */
    public function getTopicId(): int
    {
        return $this->topic_id;
    }

    /**
     * @param int $topic_id
     * @return void
     */
    public function setTopicId(int $topic_id): void
    {
        $this->topic_id = $topic_id;
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
