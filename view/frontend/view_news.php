<?php
    foreach ($arr as $row) {
    ?>


    <div class="item">
        <div class="article"><a href="index.php?controller=news_detail&id=15" class="image">
                <img src="public/upload/news/<?php echo $row->c_img; ?>""
                     alt="<?php echo $row->c_name; ?>"
                     title="<?php echo $row->c_name; ?>"
                     class="img-responsive"> </a>
            <div class="info">
                <h3><a href="index.php?controller=news_detail&id=15"><?php echo $row->c_name; ?></a></h3>
                <p class="desc">
                <p><?php echo $row->c_description; ?></p>
                </p>
            </div>
        </div>
    </div>
<?php } ?>