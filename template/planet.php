<div class="col-lg-4 col-md-6 col-sm-12">
    <div class="card hovercard planet">
        <div class="cardheader" style="background-image: url(<?= $planet->image?>)">

        </div>
        <div class="symbol">
            <img alt="" src="<?= $planet->symbol?>">
        </div>
        <div class="info">
            <div class="title">
                <h2><a target="_blank" href="<?= $planet->url?>"><?= $planet->name?></a></h2>
            </div>

            <div class="desc">
                <?php
                    echo 'Type : ' . $planet->type;
                ?>
            </div>

            <div class="desc">
                <?php
                    echo 'Satellites connus : ' . $planet->satellites;
                ?>
            </div>


        </div>
        <div class="bottom">
            <a class="btn btn-info btn-sm" href="<?= $planet->url?>">
                <i class="fab fa-wikipedia-w"></i>
            </a>
        </div>
    </div>
</div>