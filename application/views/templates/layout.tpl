{*load smarty config file*}
{config_load file="./config/template.conf"}

{include file="./include/header.tpl"}
{include file="./include/nav.tpl"}
{include file="./include/aside.tpl"}
{include file="./pages/`$data.page`.tpl"}
{include file="./include/footer.tpl"}
