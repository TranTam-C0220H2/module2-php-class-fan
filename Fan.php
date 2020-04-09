<?php
define('SLOW', 1);
define('MEDIUM', 2);
define('FAST', 3);

class Fan
{
    private $speed;
    private $status;
    private $radius;
    private $color;

    public function __construct()
    {
        $this->speed = SLOW;
        $this->status = false;
        $this->radius = 5;
        $this->color = 'blue';
    }

    function setSpeed($newSpeed)
    {
        $this->speed = $newSpeed;
    }

    function setStatus($newStatus)
    {
        $this->status = $newStatus;
    }

    function setRadius($newRadius)
    {
        $this->radius = $newRadius;
    }

    function setColor($newColor)
    {
        $this->color = $newColor;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function toString()
    {
        if ($this->getStatus()) {
            return 'Quat dang bat voi toc do ' . $this->getSpeed() . ', mau quat ' . $this->getColor() . ', ban kinh quat ' . $this->getRadius();
        } else {
            return 'Quat dang tat voi mau quat ' . $this->getColor() . ', ban kinh quat ' . $this->getRadius();
        }
    }
}