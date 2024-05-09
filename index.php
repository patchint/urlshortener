<!--

                                 __       __
                    ____  ____ _/ /______/ /_
                   / __ \/ __ `/ __/ ___/ __ \
                  / /_/ / /_/ / /_/ /__/ / / /
                 / .___/\__,_/\__/\___/_/ /_/
                /_/

                      <## DevOps ##>
             <## My laziness is patchless ##>
-->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <title>Abrège !</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" type="image/x-icon" href="https://patchli.fr/assets/img/favicon.ico">
    <script src="script.js"></script>


    <!-- META TAGS -->

    <meta name="title" content="Abrège frère">
    <meta name="description" content="Il est trop long ton lien">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://abregefre.re">
    <meta property="og:title" content="Abrège frère">
    <meta property="og:description" content="Il est trop long ton lien">

    <!-- Twitter -->
    <meta property="twitter:url" content="https://abregefre.re">
    <meta property="twitter:title" content="Abrège frère">
    <meta property="twitter:description" content="Il est trop long ton lien">
</head>
<body>
    <div class="content">
        <div class="center margin">
            <h1 class="title">Abrège frère</h1>
            <form onsubmit="event.preventDefault(); shortenUrl();">
                <input type="text" id="url" name="url" placeholder="Mets ton lien" required>
                <input type="submit" value="Abrège !">
            </form>
            <div id="shortened-url" class="center"></div>
        </div>
        <p class="center margin">Ou</p>
        <div class="center margin">
            <form onsubmit="event.preventDefault(); retrieveUrlInfo();">
                <input type="text" id="shortcode" name="shortcode" placeholder="Code court" required>
                <input type="submit" value="Rechercher">
            </form>
            <div id="url-info" class="center"></div>
        </div>
        <br>
        <footer>
            <p><a href="https://patchli.fr" target="_blank">patchli.fr</a> - contact [arobase] patchli.fr - <a href="confidentialite.pdf">Confidentialité</a> - 2019-2024</p>
            <p>Si vous souhaitez me payer un café, vous pouvez passer par LiberaPay</p>
            <a href="https://fr.liberapay.com/patchli/donate" target="_blank"><img alt="Donate using Liberapay" src="https://liberapay.com/assets/widgets/donate.svg"></a>
            <p><em>Au cas où, c'est un raccourcisseur de lien..</em></p>
            <br>
        </footer>
    </div>
</body>
</html>
