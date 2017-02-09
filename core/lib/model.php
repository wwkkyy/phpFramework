<?php
namespace core\lib;


class model extends \medoo{
    public function __construct()
    {
        $temp = conf::all('database');
        parent::__construct($temp);

    }
}