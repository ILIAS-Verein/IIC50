<#1>
<?php
include_once("./Services/Migration/DBUpdate_3136/classes/class.ilDBUpdate3136.php");
ilDBUpdate3136::addStyleClass("CarouselCntr", "ca_cntr", "div",
	array());
?>
<#2>
<?php
include_once("./Services/Migration/DBUpdate_3136/classes/class.ilDBUpdate3136.php");
ilDBUpdate3136::addStyleClass("CarouselICntr", "ca_icntr", "div",
	array());
?>
<#3>
<?php
include_once("./Services/Migration/DBUpdate_3136/classes/class.ilDBUpdate3136.php");
ilDBUpdate3136::addStyleClass("CarouselIHead", "ca_ihead", "div",
	array());
?>
<#4>
<?php
include_once("./Services/Migration/DBUpdate_3136/classes/class.ilDBUpdate3136.php");
ilDBUpdate3136::addStyleClass("CarouselICont", "ca_icont", "div",
	array());
?>
<#5>
<?php
$ilDB->addTableColumn("il_wiki_data", "link_md_values",array (
	"type" => "integer",
	"length" => 1,
	"notnull" => false,
	"default" => 0,
));
?>