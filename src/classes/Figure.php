<?php

abstract class Figure
{
	abstract protected function area(): float|int;

	abstract protected function perimeter(): float|int;

	/**
	 * @return float|int
	 */
	public function getArea(): float|int
	{
		return $this->area();
	}

	/**
	 * @return float|int
	 */
	public function getPerimeter(): float|int
	{
		return $this->perimeter();
	}
}

