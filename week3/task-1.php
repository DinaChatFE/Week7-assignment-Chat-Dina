<?php

class InvertString
{

    private $result;
    // constructor will run only php 8 or error
    public function __construct(private $str)
    {
        $this->start();
    }
    public function start()
    {
        for ($i = strlen($this->str) - 1; $i >= 0; $i--) {
            $this->result .= $this->str[$i];
        }

        echo $this->result;
    }

}

new InvertString('Hello I love programing');
