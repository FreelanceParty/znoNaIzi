<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * Class Subject
 * @property int      $id
 * @property string   $title
 * @property int|NULL $number_in_order
 * @property Carbon   $created_at
 * @property Carbon   $updated_at
 * @package App\Models
 * @method static where(string $column, string $operator, string $value)
 */
class Subject extends Model
{
	use HasFactory;

	/*** @return HasMany */
	public function chapters(): HasMany
	{
		return $this->hasMany(Chapter::class);
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

	/*** @return int|NULL */
	public function getNumberInOrder(): ?int
	{
		return $this->number_in_order;
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
