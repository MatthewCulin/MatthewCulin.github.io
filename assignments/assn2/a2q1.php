<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
            $PAGE_TITLE = "A2Q1";
            include "./PHP/includes/meta.php";
        ?>
    </head>

    <body>
        <header>
            <?php include "./PHP/includes/nav.php" ?>
            <h1>Assignment 2 Question 1</h1>
        </header>
        <main>
            <!-- PART A -->
            <section>
                <!-- PHP -->
                <?php         
                    // CREATE STRING OF NAMES
                    $names = "Harry Potter, ron Weasley, Hermoine Granger, lavender brown, Pavarti patil, NEVILLE Longbottom, Seamus FiNNegan, Dean Thomas";

                    // CREATE ARRAY FROM $NAMES
                    $arrayNames = explode(", ", $names);

                    // PUSH NEW ITEM ONTO END OF ARRAY
                    array_push($arrayNames, "draco Malfoy");

                    // CASE INSENSITIVE SORT OF ARRAY
                    natcasesort($arrayNames);

                    // PROPER CAPITALIZATION
                    foreach($arrayNames as &$name)
                        $name = ucwords(strtolower($name));
                ?>
                
                <h2>Part A</h2>
                <!-- PRINT ARRAY IN UNORDERED LIST -->
                <ul>
                    <?php foreach($arrayNames as &$name): ?>
                        <?php if(stripos($name, 'h') !== false): ?>
                            <li class = "griff">
                                <?= $name ?>
                            </li>
                        <?php else: ?>
                            <li class = "rav">
                                <?= $name ?>
                            </li>
                        <?php endif ?>
                    <?php endforeach ?>
                </ul>
            </section>
            
            <!-- PART B -->
            <section>
                <!-- PHP -->
                <!-- FORM VALIDATION -->
                <?php
                    $errors = [];

                    if(isset($_POST['submit'])){

                        $low = $_POST['low'];
                        $high = $_POST['high'];

                        // LOW NOT SET OR NOT A NUMBER
                        if(!isset($_POST['low']) || !is_numeric($low))
                            array_push($errors, "Please enter a minimum");

                        // HIGH NOT SET OR NOT A NUMBER
                        if(!isset($_POST['high']) || !is_numeric($low))
                            array_push($errors, "Please enter a maximum");

                        if(isset($_POST['low']) && isset($_POST['high'])){
                            // LOW LARGER THAN HIGH
                            if($low > $high)
                                array_push($errors, "Minimum must be less than maximum");
                        }
                    }
                ?>

                <h2>Part B</h2>
                <!-- FORM -->
                <form id="mult-table" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                    <!-- LOW FOR RANGE -->
                    <div>
                        <label for="low">Minimum:</label>
                        <input type="number" id="low" name="low" min="1" max="12" value = "<?php echo $_POST['low']?>" >
                    </div>
                    <!-- HIGH FOR RANGE -->
                    <div>
                        <label for="high">Maximum:</label>
                        <input type="number" id="high" name="high" min="1" max="12" value = "<?php echo $_POST['high']?>" >
                    </div>
                    <input class="buttonLink" type = "submit" value="Generate Multiplication Table" name="submit">
                </form>
                
                <!-- FORM SUBMITTED -->
                <!-- NO ERRORS -->
                <?php if(isset($_POST['submit']) && sizeof($errors) <= 0): ?>
                    <h3>Multiplication Table From <?= $low?> To <?= $high ?></h3>
                    
                    <!-- PRINT TABLE -->
                    <table>
                        <!-- TABLE HEADER -->
                        <thead>
                            <tr>
                                <?php for($i = $low - 1; $i <= $high; $i++): ?>
                                    <?php if($i == $low-1): ?>
                                        <th>X</th>
                                    <?php else: ?>
                                        <th><?= $i ?></th>
                                    <?php endif ?>
                                <?php endfor ?>
                            </tr>
                        </thead>
                        <!-- TABLE BODY -->
                        <tbody>
                            <?php for($i = $low; $i <= $high; $i++): ?>
                                <tr>
                                    <th><?= $i ?></th>
                                    <!-- PRODUCT -->
                                    <?php for($j = $low; $j <= $high; $j++): ?>
                                        <!-- SQUARE -->
                                        <?php if($i == $j): ?>
                                            <td class = "square"><?= $j * $i ?></td>
                                        <?php else: ?>
                                            <td><?= $j * $i ?></td>
                                        <?php endif ?>
                                    <?php endfor ?>
                                </tr>
                            <?php endfor ?>
                        </tbody>
                    </table>
                     
                <!-- PRINT ERRORS -->
                <?php elseif (isset($_POST['submit']) && sizeof($errors) > 0): ?>
                    <h3>Errors</h3>
                    <ul class="errors">
                    <?php foreach ($errors as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                    </ul>
                <?php endif ?>
            </section>
        </main>
    </body>
</html>