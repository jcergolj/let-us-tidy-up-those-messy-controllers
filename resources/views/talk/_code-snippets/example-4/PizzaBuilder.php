<?php

// Define the Pizza class
class Pizza
{
    private $sauce;

    private $cheese;

    private $toppings = [];

    public function setSauce($sauce)
    {
        $this->sauce = $sauce;
    }

    public function setCheese($cheese)
    {
        $this->cheese = $cheese;
    }

    public function addTopping($topping)
    {
        $this->toppings[] = $topping;
    }
}

class PizzaBuilder
{
    private $pizza;

    public function __construct()
    {
        $this->pizza = new Pizza();
    }

    public function addSauce($sauce)
    {
        $this->pizza->setSauce($sauce);

        return $this;
    }

    public function addCheese($cheese)
    {
        $this->pizza->setCheese($cheese);

        return $this;
    }

    public function addTopping($topping)
    {
        $this->pizza->addTopping($topping);

        return $this;
    }

    public function build()
    {
        return $this->pizza;
    }
}
