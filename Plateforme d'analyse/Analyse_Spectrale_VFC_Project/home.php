<!DOCTYPE html>
<html>
<head>
    <title>Analyse Spectrale</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div id="bar">Plateforme Analyse Spectrale</div>
    <div class="content">
        <div id="header">
            <form id="form">
                <label>Fichier</label>
                <input type="file" name="file">
                <button type="submit" style="background-color: #000;color:#fff;border-radius:5px;padding:0.4%;font-size: 14px;border-color: #fff;border-width: 0;">Uploader</button>
            </form><br><br>
            <div id="bpm">
            </div>
            <br>
        </div>
        <div>
            <canvas id="myChart" width="400" height="100"></canvas>
        </div>
    </div>
    <script type="text/javascript" src="chart.min.js"></script>
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="script.js"></script>
</body>
</html>
