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
> Vi använder Media Query för att få responsiva sidor.
- [x] Arbetet ska implementeras med objektorienterade principer. (G)
> Vi har api:er och classer som vi utgår ifrån, där vi gör förfrågan till respektive funktioner.
- [x] Skapa ett konceptuellt ER diagram, detta ska lämnas in vid idégodkännandet. (G)
> ER diagremmet finns i mappen; diagrams i projektet.
- [x] Beskriv er företagsidé i en kort textuell presentation, detta ska lämnas in vid idégodkännandet. (G)
> ”Vår affärsidé är att erbjuda sport- och sportmodesprodukter av hög kvalité, med god function och snygg design för hela familjen till bästa pris.”
- [x] All data som programmet utnyttjar ska vara sparat i en MYSQL databas (produkter, beställningar, konton mm). (G)
> Vi har skapat en databas för alla data i olika tabeller för dom uppgifter vi vill hantera.
- [x] Det ska finnas ett normaliserat diagram över databasen i gitrepot. (G)
> Vi har pushat upp en bild över diagrammen för databasen som finns i mappen; diagrams.
- [x] Man ska kunna logga in som administratör i systemet. (G)
> Admin loggar in via login formen som finns på sidan på samma sätt som en user gör.
- [x] Inga Lösenord får sparas i klartext i databasen. (G)
> Vi hashar alla lösenord.
- [x] En besökare ska kunna beställa produkter från sidan, detta ska uppdatera lagersaldot i databasen. (G)
> När man är inloggad och slutför sitt köp så dras dom summorna av respetive produkt av från UnitinStock i databasen på products.
- [x] Administratörer ska kunna uppdatera antalet produkter i lager från admin delen av sidan. (G)
> Admin kan göra det när hen är inloggad, i dashborden så finns det en knapp som hänvisar till en ny sida för att uppdatera antal produkter i lager.
- [x] Administratörer ska kunna se en lista på alla gjorda beställningar. (G)
> Här har vi gjort i PHP en class som heter orderClass.PHP som har en function i sig som kallas getAllOrders() med hjälp av denna function får admin se en lista över beställingar.
- [x] Sidans produkter ska delas upp i kategorier, en produkt ska tillhöra minst en kategori, men kan tillhöra flera. (G)
> Vi har delat upp sidans produkter i fyra kategorier som vi döpte till "Men,Women,Children OCH Accessories.
- [x] Från hemsidan ska man kunna se en lista över alla produkter, och man ska kunna lista bara dom produkter som tillhör en kategori. (G)
> Det kan man göra genom en dropdown meny där även alla produkter finns tillgängliga som en submeny.
- [x] Besökare ska kunna lägga produkterna i en kundkorg, som är sparad i session på servern. (G)
> Vi har skapat en function som heter addProduct med Javascript som gör så att produkterna sparas i session på server side.
- [x] Man ska från hemsidan kunna skriva upp sig för att få butikens nyhetsbrev genom att ange sitt namn och epostadress. (G)
> Här har vi skapat nyhetsbrev där man både kan vara besökare men också registrera sig som användare och få möjligheten till om man signa upp sig som premunant.
- [x] Administratörer ska kunna se en lista över personer som vill ha nyhetsbrevet och deras epost adresser. (G)
> Admin i sin dashbord trycka på knappen newsletter för att få fram alla som har skrivit upp sig för nyhetsbrev, besökare som användare.
- [x] Besökare ska kunna välja ett av flera fraktalternativ. (G)
> När man skall slutföra sitt köp i kundkorgen så får man upp olika fraktalternativ att välja mellan i en dropdown meny.
- [x] Tillgängliga fraktalternativ ska vara hämtade från databasen. (G)
> Datan hämtas från tabellen shippers i databasen .

***

## Demo:
Klicka här för att komma till [hemsidan](http://www.robertg.se/wieg18_sportcentrum)!

Ladda ner och importera den. Det är viktigt att namnet heter och sportcentrum och att ni tar bort den gamla

Våran Binero: http://www.robertg.se/wieg18_sportcentrum





*** Inlogning för Admin ***


- Mail: admin@gmail.com 
- Password: admin 

