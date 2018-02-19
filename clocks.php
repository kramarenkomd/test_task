<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Точное время");
?><?$APPLICATION->IncludeComponent(
	"time:time.task", 
	".default", 
	array(
		"COMPONENT_TEMPLATE" => ".default",
		"TEMPLATE_FOR_TIME" => "H:i:s"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>