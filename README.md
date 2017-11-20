![Travis status](https://travis-ci.org/Sejsel/mff-sbirka.svg?branch=master)

# Sbírka materiálů ke studiu na MFF UK
Cílem tohoto repozitáře je sesbírat vše, co by se mohlo hodit ke studiu jednotlivých předmětů na Matematicko-fyzikální fakultě Univerzity Karlovy. Jakékoliv příspěvky jsou vítány.

Sbírka v současnosti běží na následujících adresách:
- http://sbirka.sejsel.cz/ (hostuje Jiří Sejkora)


## Jak přispět

### Materiály
Hlavním souborem, který obsahuje sbírku je [sbirka.json](sbirka.json). Sbírka sbírá odkazy, naopak do repozitáře nepatří soubory, mělo by se na ně jen odkazovat. Můžete přidávat odkazy na cokoliv, co se hodí ke studiu, nemusí jít o vaši tvorbu.

Po přihlášení na GitHub je možné jej jednoduše upravit pomocí tlačítka s popisem "Fork this project and edit this file" v horní liště souboru. Po provedení úprav to automaticky vytvoří pull request, který zde potom někdo schválí. Popřípadě použijte jakýkoliv jiný způsob, kterým vytvoříte pull request.

Pokud si nevěříte, vytvořte prosím alespoň issue, kam napište, čím chcete přispět.

Soubor je formátu JSON, formát je detailněji popsán [zde](format.md). Před provedením změn prosím zkontrolujte pomocí nějakého linteru, že jde o validní JSON. Například poslední prvek v objektu/poli za sebou nesmí mít čárku.

### Soubory
Rozumným místem, kam nahrát soubory je něco, kde přežijí. Například v počítačové laboratoři na Malé Straně je možné jednoduše mít adresář přístupný z webu. Úložiště typu uloz.to nejsou moc vhodná, pokud to jde, vyvarujte se jim.

### Kód, design webu
I takové změny jsou velmi vítány. Zejméne design webu, popřípadě cokoliv, co zjednoduší jeho používání.

## Cíle
- Udržet přidávání nových materiálů co nejjednodušší aby celá sbírka nebyla zbytečně komplikovaná.
- Zajistit životnost sbírky. Je možné, že web přestane fungovat, autor se o ni přestane starat. I proto je celá sbírka v gitovém repozitáři. Pokud by se o tento repozitář nikdo nestaral, prostě udělejte fork.
- Sesbírat co nejvíce materiálů

## TODO
- Přidat materiály
- Zlepšit rozhraní webu
- Na web přidat sady předmětů, například doporučené plány studia pro jednodušší vyhledávání.

## Jak spustit web
Web sbírky je napsán v PHP 7.1. Pro spuštění stačí uložit repozitář a nasměrovat webserver na adresář public. Webserver musí mít přístup ke všem souborům repozitáře.

Adresář tests obsahuje pár phpunit testů, zejména test, který kontroluje, zda jde [sbirka.json](sbirka.json) naparsovat.

## Licence
Vše obsažené v repozitáři je volné dílo podle licence [Unlicense](LICENSE). Naopak to, na co se repozitář odkazuje může být pod jinou licencí.
