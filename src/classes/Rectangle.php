<?php
require_once 'Figure.php';

class Rectangle extends Figure
{
	/**
	 * @var float
	 */
	protected float $length;
	/**
	 * @var float
	 */
	protected float $width;

	/**
	 * @param float|int $length
	 * @param float|int $width
	 */
	public function __construct(float|int $length, float|int $width)
	{
		if ($length > 0 && $width > 0) {
			$this->length = $length;
			$this->width = $width;
		} else {
			throw new InvalidArgumentException('Довжина і ширина повинні бути більше 0.');
		}
	}

	/**
	 * @return float|int
	 */
	protected function area(): float|int
	{
		return $this->length * $this->width;
	}

	/**
	 * @return float|int
	 */
	protected function perimeter(): float|int
	{
		return 2 * ($this->length + $this->width);
	}
}

