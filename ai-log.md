## Les 1

Ik heb de prompt van prompt.md gebruikt. Hierbij heb ik 9 bestanden gekregen, waarvan 7 nieuwe bestanden. Dit waren:
functions.php
front-page.php
page-about.php
archive-project.php
single-project.php
project-card.php
main.css
accessibility.css
main.js

Ik heb de topbuttons getest (Home, Over mij, Projecten, Contact) en alles werkt. Over mij en projecten zijn dus wel in hetzelfde tab, met als naam op pagina 'Portfolio'. Momenteel staat het leeg.

Er bestaan nu ook twee pagina's. localhost/ (Home) en localhost/projecten/ (Projecten en contact). De contact tab staat eigenlijk ook beneden op de home page, maar de button verwijst je naar /projecten.

De styling is het enige van deze prompt wat ik niet had verwacht. Het is in mijn mening wel professioneel, en komt met een luxe uitstraling. Het enige wat ik er aan zou hebben veranderd is het feit dat het en beetje veel styling is. Simpel is key.

Alles werkt zoals het hoort. Ik heb voor de rest niks veranderd.

## Les 2

Ik heb de thema aangemaakt op WordPress. Ik heb het ook een mooie thumbnail gegeven: Een screenshot die ik resized heb naar 4:3 zodat het mooi uit ziet op de Thema pagina van WordPress.

Hiernaast heb ik ook een project toegevoegd met titel, beschrijving, korte attributes en een korte beschrijving over mijn rol. Ik heb dit project ook een mooie thumbnail gegeven die ik deels met AI heb gegenereerd.

Ik heb de tekst kleur van mijn pagina in /assets/css/main.css veranderd. --gold (global variabel) was en beetje te donker voor mij dus ik heb het ietsjes lichter gemaakt.

In het process van mijn thumbnail wijzigen heb ik per ongeluk mijn docker volumes verwijderd, waardoor de database connection niet meer aanwezig was. Ik dacht dat ik met 'docker compose down' mijn docker gewoon kon stoppen, maar het was net geen uninstall. Ik heb dit opgelost door in me config weer opnieuw mijn database volume te assignen en toen was alles weer goed.