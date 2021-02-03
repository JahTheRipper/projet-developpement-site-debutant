<?php include 'function.php';?>
<?php include 'db.php';?>
<html>
<head>
    <?php include 'head.php';?>
</head>
<body>

<h1>Plateforme vidéo tuto</h1>
<p class="text-center">Bienvenue à toi sur cette plateforme où tu pourras retrouver toutes les vidéos necessaires à
    l'apprentissage du développement web.</p>
<div class="container">
    <div class="row">
        <div class="col-sm-12 col-lg-8">
            <?php include 'current-video.php'; ?>
            <?php include 'video-navigation.php'; ?>
        </div>
        <div class="col-sm-12 col-lg-4">
            Liste des vidéos
            <?php include 'list-videos.php'; ?>
        </div>
    </div>
</div>
<?php include 'footer.php';?>
</body>
</html>
