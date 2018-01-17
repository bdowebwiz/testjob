<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Test</title>
    <link href="css/bootstrap.css" rel="stylesheet">

    <style>

        .triangle{

        }
    </style>
</head>
<body>
    <?
        include_once "classTest.php";
        $arResult = new classTest();

        if(!empty($_GET)){
            if( !empty($_GET['name']) || !empty($_GET['sort']) ){
                $arResult::afSorting($_GET);
            }else{
                $arResult::afForm($_GET);
            }
        }

    ?>
    <div style="margin: 50px 0 50px 0;">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1">
                <form role="form" method="get">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
                                <label >Id</label>
                            </div>

                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                <input type="text" name="idot" class="form-control" placeholder="От" value="<?=$_GET['idot']?>">
                            </div>

                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                <input type="text" name="iddo" class="form-control" placeholder="От" value="<?=$_GET['iddo']?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
                                <label >Тип товара</label>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8">
                                <select class="form-control" name="view">
                                    <option value="">Выберите значение</option>
                                    <? foreach ($arResult::$arFilt['view'] as $arData) {?>
                                        <? if($_GET['view'] == $arData){?>
                                            <option selected value="<?=$arData?>" selected><?=$arData?></option>
                                        <?}else{?>
                                            <option value="<?=$arData?>" ><?=$arData?></option>
                                        <?}?>
                                    <?}?>
                                </select>
                            </div>


                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
                                <label >Цвет</label>
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-8">
                                <select class="form-control" name="color" >
                                    <option value="">Выберите значение</option>
                                    <? foreach ($arResult::$arFilt['color'] as $arData) {?>
                                        <? if($_GET['color'] == $arData){?>
                                            <option selected value="<?=$arData?>" selected><?=$arData?></option>
                                        <?}else{?>
                                            <option value="<?=$arData?>" ><?=$arData?></option>
                                        <?}?>
                                    <?}?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
                                <label >Ширина</label>
                            </div>

                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                <input type="text" name="widthot" class="form-control" placeholder="От" value="<?=$_GET['widthot']?>">
                            </div>

                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                <input type="text" name="widthdo" class="form-control" placeholder="От" value="<?=$_GET['widthdo']?>">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
                                <label >Высота</label>
                            </div>

                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                <input type="text" name="heightot" class="form-control" placeholder="От" value="<?=$_GET['heightot']?>">
                            </div>

                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                <input type="text" name="heightdo" class="form-control" placeholder="От" value="<?=$_GET['heightdo']?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
                                <label >Глубина</label>
                            </div>

                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                <input type="text" name="depthot" class="form-control" placeholder="От" value="<?=$_GET['depthot']?>">
                            </div>

                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                <input type="text" name="depthdo" class="form-control" placeholder="От" value="<?=$_GET['depthdo']?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
                                <label >Количество</label>
                            </div>

                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                <input type="text" name="colot" class="form-control" placeholder="От" value="<?=$_GET['colot']?>">
                            </div>

                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                <input type="text" name="coldo" class="form-control" placeholder="От" value="<?=$_GET['coldo']?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
                                <label >Цена</label>
                            </div>

                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                <input type="text" name="priceot" class="form-control" placeholder="От" value="<?=$_GET['priceot']?>">
                            </div>

                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                <input type="text" name="pricedo" class="form-control" placeholder="От" value="<?=$_GET['pricedo']?>">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-lg-2 col-md-4 col-sm-4 col-xs-4">
                                <label >Скидка</label>
                            </div>

                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                <input type="text" name="saleot" class="form-control" placeholder="От" value="<?=$_GET['saleot']?>">
                            </div>

                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-4">
                                <input type="text" name="saledo" class="form-control" placeholder="От" value="<?=$_GET['saledo']?>">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">Сортировать</button>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <table class="table table-hover">
                <thead>
                    <tr>
                    <?
                        foreach ($arResult::$arDataName as$key => $arNameItem) {?>
                            <?
                            $arSort = 1;
                            if(!empty($_GET['sort']) ){
                                if ($_GET['name'] == $key) {
                                    if ($_GET['sort'] == 1) {
                                        $arSort = 0;
                                    }
                                }
                            }?>

                            <th><?=$arNameItem?> <a href="?name=<?=$key?>&sort=<?=$arSort?>"><span class="glyphicon <?if($arSort==1){?>glyphicon-sort-by-attributes<?}else{?>glyphicon-sort-by-attributes-alt<?}?>"></span></a></th>
                        <?}
                    ?>
                    </tr>
                </thead>
                <tbody>
                <?
                foreach ($arResult::$arData as $key => $arItem ) {?>
                    <tr>
                        <? foreach ($arItem as $arData) {?>
                            <td><?=$arData?></td>
                        <?}?>
                    </tr>
                <?}?>

                </tbody>
            </table>

            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4"> Общее количество товаров : <?=$arResult::afSum('tovar')?></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Суммарная цена : <?=$arResult::afSum('price')?></div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">Суммарная скидка : <?=$arResult::afSum('sale')?></div>
            </div>
        </div>
    </div>

</body>
</html>