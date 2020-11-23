<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Šah</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>
<body>
    <div id="kontejner">
        <!--prvi red -->
        <div id="jedan" class="belo">
            <div id="topcrnilevi">
                <img src="figure/crni-top.png" alt="">
            </div>
        </div>
        <div id="dva" class="crno">
            <div id="konjcrnilevi">
                <img src="figure/crni-konj.png" alt="">
            </div>
        </div>
        <div id="tri" class="belo">
            <div id="lovaccrnilevi">
                <img src="figure/crni-lovac.png" alt="">
            </div>
        </div>
        <div id="cetiri" class="crno">
            <div id="kraljicacrna">
                <img src="figure/crna-kraljica.png" alt="">
            </div>
        </div>
        <div id="pet" class="belo">
            <div id="kraljcrni">
                <img src="figure/crni-kralj.png" alt="">
            </div>
        </div>
        <div id="sest" class="crno">
              <div id="lovaccrnidesni">
                <img src="figure/crni-lovac.png" alt="">
              </div>
        </div>
        <div id="sedam" class="belo">
            <div id="konjcrnidesni">
                <img src="figure/crni-konj.png" alt="">
            </div>
        </div>
        <div id="osam" class="crno">
            <div id="topcrnidesni">
                <img src="figure/crni-top.png" alt="">
            </div>
        </div>
        <!--drugi red -->
        <div id="devet" class="crno">
            <div id="pesakcrni1">
                <img src="figure/crni-pesak.png" alt="">
            </div>
        </div>
        <div id="deset" class="belo">
            <div id="pesakcrni2">
                <img src="figure/crni-pesak.png" alt="">
            </div>
        </div>
        <div id="jedanaest" class="crno">
            <div id="pesakcrni3">
                <img src="figure/crni-pesak.png" alt="">
            </div>
        </div>
        <div id="dvanaest" class="belo">
            <div id="pesakcrni4">
                <img src="figure/crni-pesak.png" alt="">
            </div>
        </div>
        <div id="trinaest" class="crno">
            <div id="pesakcrni5">
                <img src="figure/crni-pesak.png" alt="">
            </div>
        </div>
        <div id="cetrnaest" class="belo">
            <div id="pesakcrni6">
                <img src="figure/crni-pesak.png" alt="">
            </div>
        </div>
        <div id="petnaest" class="crno">
            <div id="pesakcrni7">
                <img src="figure/crni-pesak.png" alt="">
            </div>
        </div>
        <div id="sesnaest" class="belo">
            <div id="pesakcrni8">
                <img src="figure/crni-pesak.png" alt="">
            </div>
        </div>
        <!--treći red -->
        <div id="sedamnaest" class="belo"></div>
        <div id="osamnaest" class="crno"></div>
        <div id="devetnaest" class="belo"></div>
        <div id="dvadeset" class="crno"></div>
        <div id="dvadesetjedan" class="belo"></div>
        <div id="dvadesetdva" class="crno"></div>
        <div id="dvadesettri" class="belo"></div>
        <div id="dvadesetcetiri" class="crno"></div>
        <!--četvrti red-->
        <div id="dvadesetpet" class="crno"></div>
        <div id="dvadesetsest" class="belo"></div>
        <div id="dvadesetsedam" class="crno"></div>
        <div id="dvadesetosam" class="belo"></div>
        <div id="dvadesetdevet" class="crno"></div>
        <div id="trideset"class="belo"></div>
        <div id="tridesetjedanclass="crno"></div>
        <div id="tridesetdva" class="belo"></div>
        <!--peti red -->
        <div id="tridesettri" class="belo"></div>
        <div id="tridesetcetiri" class="crno"></div>
        <div id="tridesetpet" class="belo"></div>
        <div id="tridesetsest" class="crno"></div>
        <div id="tridesetsedam" class="belo"></div>
        <div id="tridesetosam" class="crno"></div>
        <div id="tridesetdevet" class="belo"></div>
        <div id="cetrdeset" class="crno"></div>
        <!--šesti red -->
        <div id="cetrdesetjedan" class="crno"></div>
        <div id="cetrdesetdva" class="belo"></div>
        <div id="cetrdesettri" class="crno"></div>
        <div id="cetrdesetcetiri" class="belo"></div>
        <div id="cetrdesetpet" class="crno"></div>
        <div id="cetrdesetsest" class="belo"></div>
        <div id="cetrdesetsedam" class="crno"></div>
        <div id="cetrdesetosam" class="belo"></div>
        <!--sedmi red -->
        <div id="cetrdesetdevet" class="belo">
            <div id="pesakbeli1">
                <img src="figure/beli-pesak.png" alt="">
            </div>
        </div>
        <div id="pedeset" class="crno">
            <div id="pesakbeli2">
                <img src="figure/beli-pesak.png" alt="">
            </div>
        </div>
        <div id="pedesetjedan" class="belo">
            <div id="pesakbeli3">
                <img src="figure/beli-pesak.png" alt="">
            </div>
        </div>
        <div id="pedesetdva" class="crno">
            <div id="pesakbeli4">
                <img src="figure/beli-pesak.png" alt="">
            </div>
        </div>
        <div id="pedesettri" class="belo">
            <div id="pesakbeli5">
                <img src="figure/beli-pesak.png" alt="">
            </div>
        </div>
        <div id="pedesetcetiri" class="crno">
            <div id="pesakbeli6">
                <img src="figure/beli-pesak.png" alt="">
            </div>
        </div>
        <div id="pedesetpet" class="belo">
            <div id="pesakbeli7">
                <img src="figure/beli-pesak.png" alt="">
            </div>
        </div>
        <div id="pedesetsest" class="crno">
            <div id="pesakbeli8">
                <img src="figure/beli-pesak.png" alt="">
            </div>
        </div>
        <!-- osmi red -->
        <div id="pedesetsedam" class="crno">
            <div id="topbelilevi">
                <img src="figure/beli-top.png" alt="">
            </div>
        </div>
        <div id="pedesetosam" class="belo">
            <div id="konjbelilevi">
                <img src="figure/beli-konj.png" alt="">
            </div>
        </div>
        <div id="pedesetdevet" class="crno">
            <div id="lovacbelilevi">
                <img src="figure/beli-lovac.png" alt="">
            </div>
        </div>
        <div id="sezdeset" class="belo">
            <div id="kraljicabela">
                <img src="figure/bela-kraljica.png" alt="">
            </div>
        </div>
        <div id="sezdesetjedan" class="crno">
            <div id="kraljbeli">
                <img src="figure/beli-kralj.png" alt="">
            </div>
        </div>
        <div id="sezdesetdva" class="belo">
            <div id="lovacbelidesni">
                <img src="figure/beli-lovac.png" alt="">
            </div>
        </div>
        <div id="sezdesettri" class="crno">
            <div id="konjbelidesni">
                <img src="figure/beli-konj.png" alt="">
            </div>
        </div>
        <div id="sezdesetcetiri" class="belo">
            <div id="topbelidesni">
                <img src="figure/beli-top.png" alt="">
            </div>
        </div>
    </div>
    </body>
</html>