<?php
defined('_JEXEC') or die;

class plgContentMyTitel extends JPlugin
{
	/**
	 * @param  string     $context  Bezeichner des Aufrufers
	 * @param  object     $item     Artikelobjekt
	 * @param  JRegistry  $params   Artikleparameter
	 * @param  int        $page     Aktuelle Seitennummer
	 */
	public function onContentPrepare($context, &$article, &$params, $limitstart)
	{
		$titel = "<p>Wir programmieren ein erstes Plugin</p>";
		$article->text = $titel . $article->text;
		return true;
	}
}
