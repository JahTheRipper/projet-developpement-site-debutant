<?php
$videos = get_videos();
?>

<ul>
    <?php foreach ($videos as $video): ?>
        <li>
            <a href="videos-1.php" class="btn btn-primary">
                <?php echo $video['name']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
