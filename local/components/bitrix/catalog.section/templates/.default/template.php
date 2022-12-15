<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$this->setFrameMode(true);
?>

<? foreach ($arResult["ITEMS"] as $item): ?>

    <div class="catElement product col-xs-6 col-sm-6 col-md-4 col-lg-<?= $item['PROPERTIES']['_auto_R_KVA']['VALUE'] ? '3' : '2' ?>">
        <?
        $urlClass = "";
        if (strlen($item["NAME"]) < 10 && $APPLICATION->GetCurPage() != '/catalog/index.php') $urlClass = "s14";
        ?>
        <div class="catElementNested">
            <div class="name"><a href="<?= $item["DETAIL_PAGE_URL"] ?>"><?= $item["NAME"] ?></a></div>
            <div class="separator"></div>
            <div class="img"><a href="<?= $item["DETAIL_PAGE_URL"] ?>"><img
                            src='<?= CFile::ResizeImageGet($item["DETAIL_PICTURE"], array('width' => 1500000000, 'height' => 300), BX_RESIZE_IMAGE_PROPORTIONAL, true)['src']; ?>'></a>
            </div>
            <? if ($item['PROPERTIES']['_auto_R_KVA']['VALUE']): ?>
                <div class="char">
                    <ul>
                        <? foreach ($item['PROPERTIES'] as $key => $char): ?>
                            <? if (strpos($key, '_auto_') !== false && $char["SORT"] < 500): ?>
                                <li><span style="font-weight:bold;"><?= $char['NAME'] ?></span>: <?= $char['VALUE'] ?>
                                </li>
                            <? endif; ?>
                        <? endforeach; ?>
                    </ul>
                </div>
            <? endif; ?>
            <? if ($APPLICATION->GetCurPage() == '/catalog/transformatory_dlya_progreva_betona_i_grunta/'): ?>
                <div style="text-align: center;padding:14px 0;font-size: 15px;font-weight: bold;text-transform: uppercase">
                    Цена: <?= $item['PRICES']['BASE']['DISCOUNT_VALUE'] ? $item['PRICES']['BASE']['PRINT_DISCOUNT_VALUE'] : "По запросу" ?>
                </div>
            <? endif; ?>
            <div class="detailed">
                <? if ($APPLICATION->GetCurPage() == '/catalog/transformatory_dlya_progreva_betona_i_grunta/'): ?>
                    <!--a class="section_detailed" href="<? /*=$item["DETAIL_PAGE_URL"]*/ ?>">Подробнее</a-->

                    <a class="b24-web-form-popup-btn-30">Купить</a></li>
                <?else:?>
                    <a class="section_detailed" style="text-transform: uppercase" href="<?=$item["DETAIL_PAGE_URL"] ?>">Подробнее</a>
                <? endif; ?>
            </div>
        </div>
    </div>

<? endforeach;
unset($item); ?>

<? if (count($arResult["ITEMS"]) > 0): ?>
    <div style="margin-bottom:1rem;" class="break"></div><? endif; ?>

<? if ($arResult["DESCRIPTION"]): ?>

    <? $rsSections = CIBlockSection::GetList(
        array("SORT" => "ASC"),
        array("IBLOCK_ID" => $arResult["SECTION"]['IBLOCK_ID'], "ID" => $arResult['SECTION']['ID']),
        false,
        array('UF_AVERGATION', "UF_BOTTOM_CATALOG")
    );
    $arSection = array();
    $arSection = $rsSections->Fetch(); ?>

    <? if (!empty($arSection['UF_AVERGATION'])): ?>
        <div class="avergation-category">
            <div id="tabs">
                <ul>
                    <li class="active">Преимущества оборудования</li>
                </ul>
                <div id="tabs-1">
                    <table class="table table-striped">
                        <tbody>

                        <? foreach ($arSection['UF_AVERGATION'] as &$item): ?>
                            <tr>
                                <td>
                                    <?= $item; ?>
                                </td>
                            </tr>
                        <? endforeach;
                        unset($item); ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <? endif; ?>
    <?= $arResult["DESCRIPTION"] ?>

<? endif; ?>

