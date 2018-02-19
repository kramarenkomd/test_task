<?
session_start();
CModule::AddAutoloadClasses(
    '',
    array(
        'ModClass' =>  '/init_class/copysectionelements2archive.php', //Класс для копирования раздела и элемента в архивный инфоблок при активном чекбоксе "Архивировать"
    )
);
AddEventHandler("iblock", "OnAfterIBlockSectionUpdate", Array("ModClass", "OnAfterIBlockSectionUpdateHandler"));
?>
