    <!-- <h1><?php echo $page_heading; ?></h1> -->
    <!-- using templating engine syntax -->
    <h1><?= $page_heading; ?></h1>
    <!-- using templating engine syntax -->
    <h2>Subject list</h2>
    <ul>
        <!-- <?php
                if (count($subjects) > 0) {
                    foreach ($subjects as $sub) {
                        echo "<li>" . $sub . "</li>";
                    }
                } else {
                    echo "<p>Sorry! No records found</p>";
                } ?> -->
        <!-- using templating engine syntax -->
        <?php
        if (count($subjects) > 0) :
            foreach ($subjects as $sub) :
        ?>
                <li><?= $sub; ?></li>
        <?php
            endforeach;
        else :
            echo "<p>Sorry! No records Found!!!</p>";
        endif;
        ?>
        <!-- using templating engine syntax -->
    </ul>