<?php

namespace Jenson\City\Helper;


use Jenson\City\CityService;

class Helpers
{

    /**
     * 获取城市简称
     *
     * @param string $cityName
     * @return array
     */
    public static function getCityShortName(string $cityName = ''): array
    {
        $city = new CityService();
        $data = $city->getCityShortName($cityName);
        return [
            'cocde' => 200,
            'data' => $data
        ];
    }

    /**
     * 获取城市信息
     *
     * @param int $page
     * @param int $page_size
     * @param string $cityName
     * @return array
     */
    public static function getCityAreaInfo(int $page = 1, int $page_size = 10, string $cityName = ''): array
    {
        $city = new CityService();
        $data = $city->getCityAreaInfo($page,$page_size,$cityName);
        return [
            'cocde' => 200,
            'data' => $data
        ];
    }

    public static function getCitySubInfo($layer = 1,$cityName = ''){
        $city = new CityService();
        $data = $city->getCitySubInfo($layer,$cityName);
        return [
            'cocde' => 200,
            'data' => $data
        ];
    }
}