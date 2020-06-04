<?php
namespace DeviceSpecifierParser;


use DeviceDetector\Parser\ParserAbstract;

class DeviceSpecifierParser extends ParserAbstract
{
    protected $fixtureFile = '../regexes/device-specifier.yml';
    protected $parserName = 'DeviceSpecifierParser';

    
    public function parse()
    {




        return true;
    }

}