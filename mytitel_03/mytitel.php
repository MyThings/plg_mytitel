<?php
defined( '_JEXEC' ) or die( 'Restricted access' );
jimport( 'joomla.plugin.plugin' );

class plgMythingsMyTitel extends JPlugin
{
	/**
	 * @param object $inhalt
	 */
	public function onMythingsTitel(&$inhalt)
	{
		// Unsere Überschrift wird aus den Parametern ausgelesen
		$ueber = $this->params->get('titel',1);
		// Die Schriftgröße wird ausgelesen und mit dem Maß em versehen
		$hoehe = $this->params->get('groesse',1);
		// Nun bauen wir alles zusammen
		$titel = '<p style="font-size:' . $hoehe . 'em">' . $ueber . '</p>';
		// und übergeben es unserer Komponente
		$inhalt->ueberschrift = $titel;

		return true;
	}
}