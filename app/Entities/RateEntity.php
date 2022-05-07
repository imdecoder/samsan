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

    public function setMonthName($month_name)
    {
        $this->attributes['month_name'] = $month_name;
    }

    public function setMonthNo($month_no)
    {
        $this->attributes['month_no'] = $month_no;
    }

    public function setTaxRate($tax_rate)
    {
        $this->attributes['tax_rate'] = $tax_rate;
    }

    public function setUnitPrice($unit_price)
    {
        $this->attributes['unit_price'] = $unit_price;
    }

    public function setOverdueInterest($overdue_interest)
    {
        $this->attributes['overdue_interest'] = $overdue_interest;
    }

    public function setLightingPrice($lighting_price)
    {
        $this->attributes['lighting_price'] = $lighting_price;
    }

    public function setServicePrice($service_price)
    {
        $this->attributes['service_price'] = $service_price;
    }
}
