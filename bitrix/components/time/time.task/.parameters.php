<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
$PropClock = array ("H:i:s" => "Часы:минуты:секунды","H:i" => "Часы:минуты","H" => "Часы");
$arComponentParameters = array(
					"GROUPS" => array(),
					"PARAMETERS" => array(
							"TEMPLATE_FOR_TIME" => array(
							"PARENT" => "BASE",
							"NAME" => "Формат времени",
							"TYPE" => "LIST",
								"VALUES" => $PropClock,
							"MULTIPLE" => "N",
							"DEFAULT" => "H-m-s",
							"REFRESH" => "Y",
														),
										 ),
								);
?>
