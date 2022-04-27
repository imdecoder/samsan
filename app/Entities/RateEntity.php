<?php

namespace App\Entities;

use \CodeIgniter\Entity;

class RateEntity extends Entity
{
    protected $id;
    protected $month_name;
    protected $month_no;
    protected $tax_rate;
    protected $unit_price;
    protected $overdue_interest;
    protected $lighting_price;
    protected $service_price;

    /*public function getID()
    {
        return $this->attributes['id'];
    }*/

    public function getMonthName()
    {
        return $this->attributes['month_name'];
    }

    public function getMonthNo()
    {
        return $this->attributes['month_no'];
    }

    public function getTaxRate()
    {
        return $this->attributes['tax_rate'];
    }

    public function getUnitPrice()
    {
        return $this->attributes['unit_price'];
    }

    public function getOverdueInterest()
    {
        return $this->attributes['overdue_interest'];
    }

    public function getLightingPrice()
    {
        return $this->attributes['lighting_price'];
    }

    public function getServicePrice()
    {
        return $this->attributes['service_price'];
    }
}
