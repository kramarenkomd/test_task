<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); 
$arComponentDescription = array(
"NAME" => GetMessage("Текущее время"),
"DESCRIPTION" => GetMessage("Выводим Текущее время"),
"PATH" => array(
"ID" => "t_task",
"NAME" => "Тестовый компонент",
"CHILD" => array(
"ID" => "curdate",
"NAME" => "Текущая дата",
)
),
"ICON" => "/images/icon.gif",
);
?>
