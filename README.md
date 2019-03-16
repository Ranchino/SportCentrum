# SportCentrum

_A webshop that sells sports products, clothing and more- School project_

> ”Vår affärsidé är att erbjuda sport- och sportmodesprodukter av hög kvalité, med god funktion och snygg design för hela familjen till bästa pris.”


***

## Backgrund till projektet:
Året är 1992, Waynes World och Cosí fan tutte går på biograferna. Janne Kemi är en finsk ultramiljonär som har bestämt sig för att satsa på en ny e-handel. Han vill investera i en nya hemsida. Han har anlitat oss för att ta fram en webbshop. 

Han har vissa specefika krav från IT-avdelningen som han har bifogat som en kravspecifikation. Förutom det har vi fria händer att ta fram en grym idé och tjäna sjuka pengar(åt Janne). 


## Mål:  

Vi skall bygga en objekt-orienterad back-end webbshop applikation i PHP som är kopplad till en MySQL databas. Backend skall innehålla ett API som skall användas för kommunikationen med databasen.

## Projekttid :

Startar torsdag den _21 februari_.

Redovisas och presenteras på fredag den _14 mars_.

Deadline inlämning söndag den _17 mars_.

## Gruppen:

__Projektet:__
SportCentrum

__Vi har en projektledare:__ 
- Robert Grahovac

__Fyra utvecklare:__ 
1. Sakine Mazlomyar 
2. Ahmed Hussein 
3. Ranj Bahadin 
4. Peter Cavar 

## Kravspec:
- [x] Alla sidor skall vara responsiva. (G)
> Vi använde media query för att få responsiva sidor
- [x] Arbetet ska implementeras med objektorienterade principer. (G)
> vi har api:er och classer som vi utgår ifrån.
- [x] Skapa ett konceptuellt ER diagram, detta ska lämnas in vid idégodkännandet. (G)
> Vi skapade Er Diagram med hjälp av en sida som kallas www.draw.io som vi delade upp så alla kunde medverka i.
- [x] Beskriv er företagsidé i en kort textuell presentation, detta ska lämnas in vid idégodkännandet. (G)
> ”Vår affärsidé är att erbjuda sport- och sportmodesprodukter av hög kvalité, med god function och snygg design för hela familjen till bästa pris.”
- [x] All data som programmet utnyttjar ska vara sparat i en MYSQL databas (produkter, beställningar, konton mm). (G)
> Här har vi skapat en class som heter dbcCLASS.php som är kopplad till databasen som har all informationen sparat i.
- [x] Det ska finnas ett normaliserat diagram över databasen i gitrepot. (G)
> vi har pushat upp den normaliserat diagrammen över till databsen som en bild.
- [x] Man ska kunna logga in som administratör i systemet. (G)
> Här har vi skapat en class som heter adminClass.php så en admin kan registrera sig i.
- [x] Inga Lösenord får sparas i klartext i databasen. (G)
> Vi använder $hash så ingen lösenord är i klartext.
- [x] En besökare ska kunna beställa produkter från sidan, detta ska uppdatera lagersaldot i databasen. (G)
> när user är inloggad och gör beställing då dra det från unit in stock i databasen.
- [x] Administratörer ska kunna uppdatera antalet produkter i lager från admin delen av sidan. (G)
> admin kan göra det när Admin är inloggad i admin sidan då kan man uppdatera antal produkter.
- [x] Administratörer ska kunna se en lista på alla gjorda beställningar. (G)
> Här har vi gjort i PHP en class som heter orderClass.PHP som har en function i sig som kallas getAllOrders() med hjälp av denna function får admin se en lista över beställingar.
- [x] Sidans produkter ska delas upp i kategorier, en produkt ska tillhöra minst en kategori, men kan tillhöra flera. (G)
> vi har delat sidans produkter i flera kategorier som vi döpte de till "Men,Women,Children OCH Accessories.
- [x] Från hemsidan ska man kunna se en lista över alla produkter, och man ska kunna lista bara dom produkter som tillhör en kategori. (G)
> Det kan man göra när man trycker på dropdown meny.
- [x] Besökare ska kunna lägga produkterna i en kundkorg, som är sparad i session på servern. (G)
> Vi har skapat en function som heter addProduct med Javascript som gör så att produkterna sparas i session. Det är varje gång man tycker på köp kanppen då uppdateras kundvagnen.
- [x] Man ska från hemsidan kunna skriva upp sig för att få butikens nyhetsbrev genom att ange sitt namn och epostadress. (G)
> här har vi skapat Newsletter.PHP och Newsletter.js så när en ny kund skriver up sig i nyhetsbrev får hen mail. Och det ser man i våran sida som en knapp som vi döpte den till newsletter.
- [x] Administratörer ska kunna se en lista över personer som vill ha nyhetsbrevet och deras epost adresser. (G)
> Med hjälp av Newsletter som vi har skapat när är en person skriver upp sig i nyhetsbrev då sparas de i databasen sen kan admin kalla på det.
- [x] Besökare ska kunna välja ett av flera fraktalternativ. (G)
> Det ser man efter man har gjort en beställing då kan man välja olika fraktalternativ.
- [x] Tillgängliga fraktalternativ ska vara hämtade från databasen. (G)
> Det hämtas från databasen.

***

## Demo:
Klicka här för att komma till [hemsidan](http://www.robertg.se/wieg18_sportcentrum)!

Ladda ner och importera den. Det är viktigt att namnet heter och sportcentrum och att ni tar bort den gamla

Våran Binero: http://www.robertg.se/wieg18_sportcentrum





*** Inlogning för Admin ***


- Mail: admin@gmail.com 
- Password: admin 
