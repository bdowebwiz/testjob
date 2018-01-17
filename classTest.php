<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 16.12.2017
 * Time: 16:13
 */
class classTest {
    public static $arDataName = array();
    public static $arData = array();
    public static $arSum = array();
    public static $arFilt = array();

    public function __construct()
    {
        self::$arFilt['view'] = array();
        self::$arFilt['color'] = array();
        $handle = fopen('file/7777.csv', "r");
        $array_line_full = array();
        while (($line = fgetcsv($handle, 0, ";")) !== FALSE) {
            $arDataArray[] = $line;
        }
        fclose($handle);
        foreach ($arDataArray as $key => $arDataItem ) {
            if($key == 0){
                self::$arDataName = $arDataItem;
            }else{
                self::$arData[] = $arDataItem;

                if(array_search($arDataItem['1'], self::$arFilt['view']) === FALSE){
                    self::$arFilt['view'][] = $arDataItem['1'];
                }
                if(array_search($arDataItem['2'], self::$arFilt['color']) === FALSE){
                    self::$arFilt['color'][] = $arDataItem['2'];
                }

            }
        }

        return ;
    }

    public static function afSorting($data) {
        $data_name=array();
        foreach(self::$arData as $key=>$arr){
            $data_name[$key]=$arr[$data['name']];
        }
        if($data['sort'] == 1){
            array_multisort($data_name, SORT_DESC ,self::$arData);
        }else{
            array_multisort($data_name, SORT_ASC ,self::$arData);
        }

        return self::$arData;
    }

    public static function afForm($data) {

        foreach ($data as $key => $arItem ) {
            if(!empty($arItem)){
                self::afFilter($key,$arItem);
            }
        }

    }

    public static function afFilter($tip,$data) {
        foreach (self::$arData as $key => $arItem) {
            if($tip == 'idot'){
                if($data <= $arItem[0]){
                    $arFilter[]=$arItem;
                }
            }elseif($tip == 'iddo'){
                if($data >= $arItem[0]){
                    $arFilter[]=$arItem;
                }
            }elseif($tip == 'view'){
                if($data == $arItem[1]){
                    $arFilter[]=$arItem;
                }
            }elseif($tip == 'color'){
                if($data == $arItem[2]){
                    $arFilter[]=$arItem;
                }
            }elseif($tip == 'widthot'){
                if($data <= $arItem[3]){
                    $arFilter[]=$arItem;
                }
            }elseif($tip == 'widthdo'){
                if($data >= $arItem[3]){
                    $arFilter[]=$arItem;
                }
            }elseif($tip == 'heightot'){
                if($data <= $arItem[4]){
                    $arFilter[]=$arItem;
                }
            }elseif($tip == 'heightdo'){
                if($data >= $arItem[4]){
                    $arFilter[]=$arItem;
                }
            }elseif($tip == 'depthot'){
                if($data <= $arItem[5]){
                    $arFilter[]=$arItem;
                }
            }elseif($tip == 'depthdo'){
                if($data >= $arItem[5]){
                    $arFilter[]=$arItem;
                }
            }elseif($tip == 'colot'){
                if($data <= $arItem[6]){
                    $arFilter[]=$arItem;
                }
            }elseif($tip == 'coldo'){
                if($data >= $arItem[6]){
                    $arFilter[]=$arItem;
                }
            }elseif($tip == 'priceot'){
                if($data <= $arItem[7]){
                    $arFilter[]=$arItem;
                }
            }elseif($tip == 'pricedo'){
                if($data >= $arItem[7]){
                    $arFilter[]=$arItem;
                }
            }elseif($tip == 'saleot'){
                if($data <= $arItem[8]){
                    $arFilter[]=$arItem;
                }
            }elseif($tip == 'saledo'){
                if($data >= $arItem[8]){
                    $arFilter[]=$arItem;
                }
            }

        }

        return self::$arData = $arFilter;
    }


    public static function afSum($data) {
        foreach (self::$arData as $key => $arItem ) {
            $arSumTovar[] = $arItem['6'];
            $arSumPrice[] = $arItem['7'];
            $arSumSale[] = $arItem['8'];
        }

        if($data == 'tovar'){
            return array_sum($arSumTovar);
        }elseif($data == 'price'){
            return array_sum($arSumPrice);
        }elseif($data == 'sale'){
            return array_sum($arSumSale);
        }
    }

}