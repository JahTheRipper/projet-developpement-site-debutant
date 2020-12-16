<?php
$videos = get_videos();
?>

<ul>
    <?php foreach ($videos as $video): ?>
        <li>
            <?php
            $linkClasses = 'btn btn-primary';
            if (is_video_asked() && $_GET['video'] === $video['id']) {
                $linkClasses .= ' active';
            }
            ?>
            <a href="?video=<?php echo $video['id']; ?>" class="<?php echo $linkClasses; ?>">
                <?php echo $video['name']; ?>
            </a>
        </li>
    <?php endforeach; ?>
</ul>
