# Formát sbirka.json
`sbirka.json` obsahuje jeden velký objekt, kde každý prvek odpovídá jednomu předmětu.
Klíčem je vždy kód předmětu pod kterým je uveden například v SISu.

Následuje příklad celého sbirka.json, který obsahuje jeden předmět.

```json
{
  "NTIN060": {
    "name": "Algoritmy a datové struktury I",
    "resources": [
      {
        "desc": "Průvodce labyrintem algoritmů",
        "links": [
          {
            "link_title": "Web",
            "url": "http://pruvodce.ucw.cz/"
          }
        ]
      }
    ]
  }
}
```

Nebojte se hromady závorek, soubor je hodně rozbalený pro jednodušší přidávání dalších materiálů a pro jednotný formát.
JSON by ho umožnil napsat i úsporněji, ale to už není tak dobře upravovatelné.

## JSON
Jde o soubor ve formátu JSON. Rychlokurz: Objekt v `{}`, pole je v `[]`. Stringy jsou v `""`.
Pokud pole nebo objekt obsahuje více prvků, jsou odděleny čárkami, ale za posledním čárka být nesmí.

## Předmět

Každý předmět má povinně jméno (`name`) a nějaké materiály `resources`.
Povšimněte si, že `resources` je pole, může obsahovat více materiálů.

### Materiál
Každý materiál má povinně popis (`desc`) a nepovinně odkazy (`links`) a zálohy (`backups`), které mají shodné schéma.

```json
{
  "desc": "Průvodce labyrintem algoritmů",
  "links": [
    {
      "link_title": "Web",
      "url": "http://pruvodce.ucw.cz/"
    }
  ],
  "backups": [
    {
      "date": "2016-09-05",
      "link_title": "PDF",
      "url": "http://pruvodce.ucw.cz/"
    }
  ]
}
```

#### Odkaz/Záloha
Každý odkaz a záloha mají povinně `url`. Nepovinně text odkazu (`link_title`) a datum (`date`), které se hodí hlavně u záloh.
Datum je klasický string ve formátu "YYYY-MM-DD", JSON žádný typ datumu nemá.

## Složitější příklad
```json
{
  "NTIN060": {
    "name": "Algoritmy a datové struktury I",
    "resources": [
      {
        "desc": "Průvodce labyrintem algoritmů od Martina Mareše a Tomáše Vally. Skvělá kniha, pokrývá vše z ADS a hodí se i u některých dalších předmětů. Dostupná pod licencí CC BY-ND 3.0 CZ, vydal CZ.NIC.",
        "links": [
          {
            "link_title": "Web",
            "url": "http://pruvodce.ucw.cz/"
          },
          {
            "link_title": "PDF",
            "url": "https://knihy.nic.cz/files/edice/Pruvodce_labyrintem_algoritmu.pdf"
          },
          {
            "link_title": "EPUB",
            "url": "https://knihy.nic.cz/files/edice/Pruvodce_labyrintem_algoritmu.epub"
          },
          {
            "link_title": "MOBI",
            "url": "https://knihy.nic.cz/files/edice/Pruvodce_labyrintem_algoritmu.mobi"
          }
        ]
      },
      {
        "desc": "Záznamy přednášek Martina Mareše z roku 2015",
        "links": [
          {
            "link_title": "Web MFF, potřeba přihlášení (CAS)",
            "url": "https://is.mff.cuni.cz/prednasky/prednaska/NTIN060/1"
          },
          {
            "link_title": "Stránka k nahrané přednášce s rozvrhem",
            "url": "http://mj.ucw.cz/vyuka/1415/ads1/"
          }
        ]
      },
      {
        "desc": "Kuchařky KSP - Korespondenčního semináře z programování. Jde o krátké texty o různých základních tématech.",
        "links": [
          {
            "link_title": "Encyklopedie KSP",
            "url": "http://ksp.mff.cuni.cz/encyklopedie/"
          }
        ]
      }
    ]
  },
  "NSWI141": {
    "name": "Úvod do počítačových sítí",
    "resources": [
      {
        "desc": "Prezentace, rámcové znění otázek, ukázková otázka",
        "links": [
          {
            "link_title": "Web",
            "url": "https://www.ms.mff.cuni.cz/~forst/vyuka.html#inet"
          }
        ]
      },
      {
        "desc": "Odpovědi a různé poznámky k otázkám ke zkoušce",
        "links": [
          {
            "link_title": "GitHub",
            "url": "https://github.com/petrroll/mff-stuff/blob/master/site/site_2016.md"
          }
        ]
      }
    ]
  }
}
```
