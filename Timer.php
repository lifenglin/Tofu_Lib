<?php
class Timer
{
    static protected $_arrData = array();

    static public function begin($strName = 'default')
    {
        return self::$_arrData[$strName]['begin'] = self::$_arrData[$strName]['end'] = microtime(true);
    }

    static public function end($strName = 'default')
    {
        return self::$_arrData[$strName]['end'] = microtime(true);
    }

    static public function count($strName = 'default')
    {
        return round((self::$_arrData[$strName]['end'] - self::$_arrData[$strName]['begin']) * 1000);
    }

    static public function countAll($strName = 'default')
    {
        $arrCount = array();
        $arrKeys = array_keys(self::$_arrData);
        foreach ($arrKeys as $strName) {
            $arrCount[$strName] = self::count($strName);
        }
        return $arrCount;
    }
}
