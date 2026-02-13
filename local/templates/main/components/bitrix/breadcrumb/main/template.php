<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

if(empty($arResult))
	return "";

$strReturn = '';

$strReturn .= '<div class="breadcrumbs"><ul itemprop="http://schema.org/breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);

	if($arResult[$index]["LINK"] <> "" && $index != $itemSize-1)
	{
		$strReturn .= '
			<li id="bx_breadcrumb_'.$index.'" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="link">
				<a href="'.$arResult[$index]["LINK"].'" title="'.$title.'" itemprop="item">'.$title.'</a>
				<meta itemprop="position" content="'.($index + 1).'" />
			</li>';
	}
	else
	{
		if (!empty($title )) {
		$strReturn .= '
				<li>'.$title.'</li>';
		}
      }
}

$strReturn .= '</ul></div>';

return $strReturn;
