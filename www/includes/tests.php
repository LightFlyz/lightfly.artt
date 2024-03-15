<?

$some_php_tests = '<div class="test-box">
            <ul id="myUL1">

            <pre>
            <?
            $music = get_tunes();
            print_r($music);
            ?>
            </pre>
            
            <?$music[0]['title'];

                $i = 1;
                while($i <= 6){
                    echo '<li><p>while '.$i.'</p></li>';
                    $i++;
                }

                echo '<hr>';

                $g = 1;
                do{
                    echo '<li><p>do_while '.$g.'</p></li>';
                    $g++;
                }
                while($g <= 6);

                echo '<hr>';

                for($k = 1; $k <= 6; $k++){
                    echo '<li><p>for '.$k.'</p></li>';
                }

                echo '<hr>';

                for($l = 1, $count = count($music); $l <= $count; $l++){
                    echo '<li><p>for + count $music '.$l.'</p></li>';
                }
            ?>

            <pre>
            <?
            echo '<hr>';
            foreach($music as $music1){
                echo '<li><p>'.$music1['title'].' by '.$music1['artist'].'</p></li>';
            }
            ?>
            </pre>

            <?php
            include '..//includes/song_block.php';
            echo $initial;
            //$files = glob("songs/assets/songsPhp/*.php");
            //$files = array_reverse($files);
            //foreach ($files as $songname) {
            //    include $songname;
            //}
            ?>
            </ul>
        </div>
'