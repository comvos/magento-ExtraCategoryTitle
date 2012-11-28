# Extra Category Title #

"Extra Category Title" is just a little extensions which adds an additional attribute to the category backend.


The attribute name is "Alternative Title".


When do you need this extension?

If you want to show an alternative  page title on the category page which is not the "page title".
Page title is used in the navigation, so normally  you have to use short page title because longer page title would break the navigation.

With this extension, you can have a short page title for the navigation and an alternative title for the category page.
This is also very important for seo purpose. You can have longer h1 headers with more keywords.

For example: "Furniture" in the navigation and "Furniture for livining rooms" at the category page.

## Installation ##

Just install this  extension with the Magento connect Manager. 

After that you will find "Alternative Title" attribute field at the backend (Manage Category).

You can add the the alternative title by adding the following code at the category template file:

/app/design/frontend/default/[YOURTHEME]/template/catalog/category/view.phtml

	`<?php echo $_category->getextra_category_title(); ?>`

 

**For example:**

You can replace the h1 header:

	`<h1><?php echo $_helper->categoryAttribute($_category, $_category->getName(), 'name') ?></h1>`
 
with the alternative title:

	`<h1><?php echo $_category->getextra_category_title(); ?></h1>`
or if you just want to show the alternative title when it is not empty, you can add the following code:

	`<h1><?php if ($_category->getextra_category_title()!="")
	{
	 	echo $_category->getextra_category_title(); 
	} else {
		 echo $_helper->categoryAttribute($_category, $_category->getName(), 'name'); 
	}; ?></h1>`

----------
## Warranty and Licence: ##
The extension "Extra Category Title" was laid out according to accepted programming rules with care. 

The extension "Extra Category Title" comes on a "as is" basis. 

It is recommended to the user to test the extension extensively before any productive use. 
All warranties are excluded.

We cannot give you the guarantee that the products will work with all third party extensions.

This extension is under LGPL License. [http://www.gnu.org/copyleft/lesser.html](http://www.gnu.org/copyleft/lesser.html)

----------

----------

# Extra Category Title #

"Extra Category Title" ist eine kleine Extension die im Magento Backend unter "Kategorie verwalten" ein zusätzliches Attribut mit dem Namen "Alternative Title" anlegt.


## Wozu benötige ich diese Extension? ##

Anders als z.B. das Content Management System [TYPO3](http://www.comvos.de/typo3.html "TYPO3 Agentur"), kann Magento keinen alternativen Seitentitel anlegen, um zwischen dem Titel der in der Navigation angezeigt werden soll und dem auf der eigenlichen Kategorieseite zu unterscheiden.

Daher muß man sich häufig beim Seitentitel kurz fassen, damit dieser auch noch in die Navigation passt.

Einen ausführlichen Titel auf der Kategorieseite ist aber schon alleine aus Gründen der Suchmaschinenoptimierung wichtig, da man hier die wichtigen Keywörter unterbringen kann.

So wäre ist es nun möglich in der Navigation "Möbel" erscheinen zu lassen und auf der Kategorieseite selbst eine alternative Überschrift wie "Möbel für Ihr Wohnzimmer".

Der Kreativität sind also keine Grenzen mehr gesetzt ;-)

## Installation ##

Installieren Sie die Extension über den Magento Connect Manager.

Dann finden Sie im Backend unter "Kategorie verwalten" ein zusätzlichen Attribut "Alternative Title" dass Sie pflegen können.

Sie können den alternativen Titel ausgeben, indem Sie im Template File der Kategorieseite:
/app/design/frontend/default/[YOURTHEME]/template/catalog/category/view.phtml

folgenden Code eingeben:

	`<?php echo $_category->getextra_category_title(); ?>`

**Zum Beispiel:**

Die h1 Überschrift die normalerweise den "Page Title" anzeigt:

	`<h1><?php echo $_helper->categoryAttribute($_category, $_category->getName(), 'name') ?></h1>` 

können Sie mit dem alternativen Titel ersetzen:

	`<h1><?php echo $_category->getextra_category_title(); ?></h1>`

Wenn Sie nur den alternative Titel ausgeben lassen wollen, wenn dieser auch gepflegt ist und ansonsten den normalen Titel lieber anzeigen lassen möchte, dass fügen Sie diesen Code hinzu:

	`<h1><?php if ($_category->getextra_category_title()!="") 
	{
	 	echo $_category->getextra_category_title(); 
	} else {
		 echo $_helper->categoryAttribute($_category, $_category->getName(), 'name'); 
	}; ?></h1>`

----------
## Gewährleistung und Lizenz: ##
Das Modul "Extra Category Title" wurde unter Beachtung anerkannter Programmierregeln mit Sorgfalt entwickelt.

Das Modul "Extra Category Title" wird "so wie es ist" geliefert. 

Es wird dem Nutzer ausdrücklich empfohlen, das Modul vor dem Produktiv-Einsatz ausgiebig zu testen. Alle weiteren Garantien werden, mit Ausnahme durch gesetzliche Regelungen festgelegte Garantien, ausgeschlossen. 

Wir können leider keine Garantie geben, das "Extra Category Title" für Magento mit allen zusätzlich installierten Extensions zusammen funktioniert. 

Für alle Ansprüche, die dem Nutzer durch die Nutzung des Moduls entstehen, wird die vertragliche und die deliktische Haftung des Lizenzgebers für Vermögensschäden mit Ausnahme von Vorsatz oder grober Fahrlässigkeit ausgeschlossen. Weitergehende Ansprüche des Nutzers gleich aus welchem Rechtsgrund sind ausgeschlossen.

Diese Extension steht unter der LGPL Lizenz: [http://www.gnu.org/licenses/lgpl-3.0.de.html](http://www.gnu.org/licenses/lgpl-3.0.de.html)

----------

----------
Die Magento Extension "Extra Category Title" wurde entwickelt von der Werbeagentur comvos online medien GmbH. 

Als [Magento Agentur](http://www.comvos.de/magento-agentur.html "Magento Agentur") und [TYPO3 Agentur](http://www.typo3-integration.de/typo3-agentur.html) sind wir speziealisiert auf Shop Lösungen mit Magento sowie Webseiten mit dem CMS System TYPO3.

[http://www.comvos.de/](http://www.comvos.de/)

