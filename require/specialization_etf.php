<?php $info = get_etf_info();
        foreach ($info as $infosy): ?>

            <a href="../group.php?id=<?php echo $infosy["id"]; ?>">
                <div class="block transition-0<?php echo $infosy["id"]; ?> hidden">
                    <div class="block-1">
                        <h2><?php echo $infosy["name"]; ?></h2>
                        <div class="block-code">
                            <img src="../img/cubes.png">
                            <h3 style="color: #707070;"><?php echo $infosy["code"]; ?></h3>
                        </div>
                        <div class="years">
                            <h4><?php echo $infosy["period"]; ?></h4>
                        </div>
                    </div>
                    <div class="block-2">
                        <img src="../img/desk.png">
                    </div>
                </div>
            </a>

        <?php endforeach; ?>
    </section>   