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