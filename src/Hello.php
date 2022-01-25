<?php
/*
 * @Author: 
 * @Date: 2022-01-25 14:14:36
 */
namespace Xxb\First;

class Hello
{
    private $name;

    public function __construct($name = 'World')
    {
        $this->name = $name;
    }

    public function hello()
    {
        return 'Hello ' . $this->name;
    }

}
