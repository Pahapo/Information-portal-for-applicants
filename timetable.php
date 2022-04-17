        <?php require('require/head.php'); ?>
        <?php require('require/loading.php'); ?>
        
        <header class="header">
            <div class="header_title">
                <img src="img/calendar.png">
                <h1>Расписание</h1>
            </div>
        </header>

        <div class="container">
            <section>
                <div class="block_timetable">
                    <div class="block_timetable_starttime">
                        <p>8:00</p> 
                    </div>
                    <div class="block_timetable_lesson" style="background: linear-gradient(to bottom left,#9184ff, #f07cff);">
                        <div class="block-1">
                            <h2 style="color: #fff;">Первая пара</h2>  
                            <h3 style="color: #fff;">8:00 - 9:30</h3>                       
                        </div>
                    </div>
                </div>
                <div class="block_timetable_line">
                </div>

                <?php $timetables = get_timetables();
                foreach ($timetables as $timetable): ?>

                <div class="block_timetable">
                    <div class="block_timetable_starttime">
                        <p><?php echo $timetable["time_start"]; ?></p> 
                    </div>
                    <div class="block_timetable_lesson">
                        <div class="block-1">
                            <h2><?php echo $timetable["name"]; ?></h2>  
                            <h3><?php echo $timetable["time"]; ?></h3>                       
                        </div>
                    </div>
                </div>
                <div class="block_timetable_line">
                </div>

                <?php endforeach; ?>

            </section>
        </div>

        <?php require('require/endpage.php'); ?>