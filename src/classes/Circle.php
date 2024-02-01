<?php
require_once 'Figure.php';

class Circle extends Figure
{
	protected float $radius;

	/**
	 * @param float|int $radius
	 */
	public function __construct(float|int $radius)
	{
		if ($radius > 0) {
			$this->radius = $radius;
		} else {
			throw new InvalidArgumentException('Радіус повинен бути більше 0.');
		}
	}

	/**
	 * @return float|int
	 */
	protected function area(): float|int
	{
		return M_PI * ($this->radius ** 2);
	}

	/**
	 * @return float|int
	 */
	protected function perimeter(): float|int
	{
		return 2 * M_PI * $this->radius;
	}
}