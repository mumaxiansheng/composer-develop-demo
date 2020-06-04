<?php


namespace tool;


class AmountTool
{
    /**
     * 元转分
     * @param float $money 转换金额
     * @return int
     */
    public static function bigTurnSmall($money)
    {
        return (int)($money * 100);
    }

    /**
     * 分转元
     * @param int $money 转换金额
     * @return string
     */
    public static function smallTurnBig($money)
    {
        return (string)round($money / 100, 2);
    }

}