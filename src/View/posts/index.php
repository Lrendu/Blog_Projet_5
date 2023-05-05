<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Articles</title>
        <link href="style.css" rel="stylesheet" />
    </head>

    <body>
        <h1>Le super blog de l'AVBN !</h1>
        <div class="news">
            <h3>
                <?= htmlspecialchars($post['title']) ?>
                <em>le <?= $post['created_at'] ?></em>
            </h3>

            <p>
                <?= nl2br(htmlspecialchars($post['content'])) ?>
            </p>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="single-item pb_slide_v2 slick-initialized slick-slider slick-dotted">
                    <div class="slick-list" style="height: 712.359px;">
                        <div class="slick-track" style="opacity: 1; width: 12210px; transform: translate3d(-1110px, 0px, 0px);">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>