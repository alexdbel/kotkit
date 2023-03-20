<?php

function post($video_url, $postman_profile, $post_title, $nbr_abonnes, $nbr_likes)
{
?>
    <div class="post">
        <div class="img-post" style="width: 5000px; height:500px;">
            <img src=<?= $video_url ?> alt="short video" style="width: 7%;margin-left:500px; height:500px; object-fit:cover; border-radius: 10px;">
        </div>
        <div style="margin-left: 500px;">
            <div class="pasman" style="display: inline-flex; justify-content: center; width: 350px;">
                <div class="postman-like" style="display: flex;">
                    <img src=<?= $postman_profile ?> alt="postman profile" style="width: 12%; height: 80%; border-radius: 50%; margin-top: 6px;">

                    <div class="about" style="margin-top: 1px;">
                        <span><?= $post_title ?></span>
                        <br>
                        <span><?= $nbr_abonnes ?>K abonnées</span>
                    </div>
                </div>
                <div class="like action-icon" style="display: flex; margin-top: 10px;">
                    <p><?= $nbr_likes ?>K</p>
                    <i class="fa-solid fa-heart"></i>
                </div>

            </div>

            <div class="actions-post">
                <div class="action-post">
                    <i class="fa-sharp fa-solid fa-thumbs-up action-icon"></i>
                    <p>j\'aime</p>
                </div>
                <div class="action-post" class="action-icon">
                    <i class="fa-sharp fa-solid fa-comments action-icon"></i>
                    <p>Commenter</p>
                </div>
                <div class="action-post">
                    <i class="fa-sharp fa-solid fa-share-nodes action-icon"></i>
                    <p>Partager</p>
                </div>
                <div class="action-post"></div>
            </div>
        </div>
    </div>
    <br style="border-top:2px solid black">
<?php
}
?>