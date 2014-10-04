J-duo j3 template www.kunstimunterricht.de version
=================

## responsive Joomla 3.3x template

* less based css; minimal bootstrap usage; based on adhocgrafx template styleguide
* lightweight off-canvas nav
* responsive slides
* modal media boxes
* font resizer
* external link icons
* more usefull options like analytics ...

### J-duo j3 template is based on Jduo, a lightweight off-canvas sketch for rwd templates.

Jduo ist eine kleine Skizze einer möglichst einfach zu implementierenden off-canvas Funktionalität.

inspired by codrops Blueprint: Slide and push Menus https://github.com/codrops/Blueprint-SlidePushMenus

#### How to ..

Notwendig sind folgende 2 Dateien:

* classie.min.js: 0.56 kb
* off-canvas.less > off-canvas.css: 2.50 kb
* = 3.06 kb

Alle weiteren less Dateien beziehen sich auf das Layout der Demo.

In der index.html wird gezeigt, wie den beiden Elementen nav und aside die off-canvas Funktionalität zugewiesen wird.

#### Das Grundprinzip

In den üblichen grid-layouts besitzen die container-divs im Allgemeinen die Eigenschaften float: left und position: relative.
Im mobile first Ansatz wird die Breite auf width: 100% gesetzt.
Sie wird mittels media queries dann für größere devices differenziert, z.B. in ein 2-Spaltensystem von 66.66% zu 33.33%.
Die container-divs, die man für kleinere devices in den off-canvas setzen will, muss man nun für die schmalen Breiten via media queries aus diesem System herausbrechen, indem man ihnen position: absolute zuweist.
Das ist im Prinzip alles.

Funktioniert auf allen Browsern, die media queries und javascript verstehen.

Für den Fall der Fälle habe ich eine einfache .js > .no-js (modernizr) Variante als fallback beigefügt:

* Grids werden für kleine devices auf float: left, position: relative und width: 100% gesetzt,
dann werden alle container-divs vertikal aufgereiht dargestellt.
* Toggler buttons werden unsichtbar gesetzt.