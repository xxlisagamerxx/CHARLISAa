# Lesopdrachten week 2

## Onderwerpen 

- [GET](https://www.php.net/manual/en/reserved.variables.get.php)
    - [Pluralsight, $_GET() demo](https://app.pluralsight.com/course-player?course=php-fundamentals&author=jill-gundersen&name=php-fundamentals-m9&clip=5&mode=live)
- [POST](https://www.php.net/manual/en/reserved.variables.post.php)
    - [Pluralsight, werken met FORMS](https://app.pluralsight.com/course-player?course=php-getting-started&author=christian-wenz&name=d5b21976-f9aa-46a7-b4b6-f30484c469af&clip=0&mode=live)

## Opdracht 2.1

**Music collection - Index**

Kopieer de index.php van opdracht 1.3. De data van de albuminformatie staat al in een apart bestand in de map includes/music-data.php. 
Importeer deze data in de index.php pagina met behulp van de functie ```require_once()```

## Opdracht 2.2

**Music collection - Details**

Voeg aan elke rij een "Detail" link toe. Deze linkt naar een pagina waarin alleen de gegevens van dat album getoond worden. 
Maak ook de detailpagina. Eventueel gebruik je css voor een gepaste opmaak.

## Opdracht 2.3

**Music collection - Create**

Voeg een "Create" link toe, boven de tabel. Na het aanklikken van de link wordt de bijbehorende pagina geladen met een formulier 
waarvan de velden overeenkomen met de gegevens van een album. 

Elke veld is voorzien van [validatie](https://app.pluralsight.com/course-player?clipId=277ae945-9b08-47fb-9b3f-dffa8c70459a) (zowel in HTML als in PHP afhandelen)
- Elke veld uit het formulier is een verplicht veld
- Het veld met het aantal tracks van het album moet een getal bevatten.
