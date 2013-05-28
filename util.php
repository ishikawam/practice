<?php
class Util
{
    const PCODE1 = 123456;
    const PCODE2 = 20;

    public function setPcode() {
        $pcode = (time() + self::PCODE1) * self::PCODE2;
        return $pcode;
    }

    public function returnTiem($pcode) {
        $ttime = ($pcode / self::PCODE2) - self::PCODE1;
        return $ttime;
    }

}



