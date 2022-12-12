<?php
					use Bitrix\Main\Loader;
					require_once ($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
					if(!Loader::includeModule("sotbit.regions"))
					{
						return false;
					}
					$domain = new \Sotbit\Regions\Location\Domain();
					$domainCode = $domain->getProp("CODE");
					?><urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"><url><loc><?=$domainCode?>/sitemap-iblock-12.php</loc><lastmod>2021-07-15T13:59:34+07:00</lastmod></url></urlset>