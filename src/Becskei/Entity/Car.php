<?php

namespace Becskei\Enity;

class Car
{
    /** @var  string */
    private $color;

    /** @var  integer */
    private $maxSpeed;

    /**
     * @return string
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param string $color
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    /**
     * @return int
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     *
     * @return $this
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;

        return $this;
    }
}
