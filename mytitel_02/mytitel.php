<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.plugin.plugin' );

class plgContentMyTitel extends JPlugin
{
	/**
	 * @param  string     $context  Bezeichner des Aufrufers
	 * @param  object     $item     Artikelobjekt
	 * @param  JRegistry  $params   Artikleparameter
	 * @param  int        $page     Aktuelle Seitennummer
	 */
	public function onContentPrepare($context, &$article, &$params, $page = 0)
	{
		// Unsere Überschrift wird aus den Parametern ausgelesen
		$ueber = $this->params->get('titel',1);
		// Die Schriftgröße wird ausgelesen und mit dem Maß em versehen
		$hoehe = $this->params->get('groesse',1);
		// Nun bauen wir alles zusammen
		$titel = '<p style="font-size:' . $hoehe . 'em">' . $ueber . '</p>';
		// Abfrage des context - bei usnerer MyThings-Komponente müssen wir unseren Text anders zurückgeben
		if ( $context == 'mythings' ) {
			$article->ueberschrift = $titel;
		} else {
			$article->text = $titel . $article->text;
		}

		return true;
	}
}
