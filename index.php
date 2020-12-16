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
            <?php if (!is_video_asked()): ?>
                <iframe width="560" height="315" src="https://www.youtube.com/embed/kZS84ctzii8" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                </iframe>
<?php
            else:
                $video = get_video((int) $_GET['video']);
                if ($video === null):
                    echo 'oups cette vidéo n\'existe pas!';
                else:
?>
                    <video controls width="560" height="315">
                        <source src="<?php echo $video['path']; ?>" type="video/mp4"/>
                    </video>
                <?php endif; ?>
            <?php endif; ?>
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
