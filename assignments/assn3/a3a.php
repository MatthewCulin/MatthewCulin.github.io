<!DOCTYPE html>
<html lang="en">
    <head>
        <?php 
                $PAGE_TITLE = "Assignment 3A";
                include "./PHP/includes/meta.php";
            ?>
        <script defer src="JS/a3script.js"></script>
    </head>

    <body>
        <header>
            <?php include "./PHP/includes/nav.php" ?>
            <h1>Fun With JavaScript</h1>
        </header>
        <main>
            <!-- DISAPPEARING TEXT -->
            <section id="disappear">
                <h2>Disappearing Text</h2>
                <p>
                    Adieus except say barton put feebly favour him. Entreaties unpleasant
                    sufficient few pianoforte discovered uncommonly ask. Morning cousins amongst
                    in mr weather do neither. Warmth object matter course active law spring six.
                    Pursuit showing tedious unknown winding see had man add. And park eyes too more
                    him. Simple excuse active had son wholly coming number add. Though all excuse
                    ladies rather regard assure yet. If feelings so prospect no as raptures quitting.
                </p>
            </section>


            <!-- CHANGING BACKGROUND -->
            <section id="background">
                <h2>Change Background</h2>
                <ul>
                    <li>Click Me</li>
                    <li>Or Me</li>
                    <li>Maybe Me</li>
                    <li>How About Me</li>
                </ul>
            </section>

            <!-- TWO COLOUR -->
            <section id="multi">
                <h2>Multi-Colour</h2>
                <p>
                    Barton waited twenty always repair in within we do. An delighted offending curiosity
                    my is dashwoods at. Boy prosperous increasing surrounded companions her nor advantages
                    sufficient put. John on time down give meet help as of. Him waiting and correct believe
                    now cottage she another. Vexed six shy yet along learn maids her tiled. Through studied
                    shyness evening bed him winding present. Become excuse hardly on my thirty it wanted.
                </p>
            </section>

            <!-- TEXT CLONING -->
            <section id="clone">
                <h2>Text Cloning</h2>
                <label for="randomtext">Enter Some Text Here:</label>
                <input type="text" id="randomtext" name="randomtext">

                <p></p>
            </section>

            <!-- BOX CHANGE SIZE -->
            <section id="resize">
                <h2>Resize Box</h2>
                <label for="width">Width (em):</label>
                <input type="text" id="width" name="width">
                <span class="errors hidden">Please enter a number</span>

                <label for="height">Height (em):</label>
                <input type="text" id="height" name="height">
                <span class="errors hidden">Please enter a number</span>

                <button>Increase Box Size</button>
                <div class="boxes"></div>
            </section>

            <!-- ADDING CHILDREN -->
            <section id="add">
                <h2>Add Children</h2>
                <ul>
                    <li>Click Me</li>
                    <li>Or Me</li>
                    <li>Maybe Me</li>
                    <li>How About Me</li>
                    <li>Click Here</li>
                </ul>
            </section>

            <!-- LIST OPERATIONS -->
            <section id="list">
                <h2>List Operations</h2>
                <ul>
                    <li>Interact with me</li>
                    <li>Interact with me</li>
                    <li>Interact with me</li>
                    <li>Interact with me</li>
                    <li>Interact with me</li>
                    <li>Interact with me</li>
                </ul>
            </section>

            <!-- FETCH -->
            <section id="fetch">
                <h2>Fetch</h2>
                <div>
                    <h3>Blue</h3>
                    <p>
                        Blue is one of the three primary colours of pigments in painting and traditional colour
                        theory, as well as in the RGB colour model. It lies between violet and green on the
                        spectrum of visible light. The eye perceives blue when observing light with a dominant
                        wavelength between approximately 450 and 495 nanometres. Most blues contain a slight
                        mixture of other colours; azure contains some green, while ultramarine contains some
                        violet. The clear daytime sky and the deep sea appear blue because of an optical
                        effect known as Rayleigh scattering. An optical effect called Tyndall scattering
                        explains blue eyes. Distant objects appear more blue because of another optical effect
                        called aerial perspective.
                    </p>
                </div>
            </section>
        </main>
    </body>
</html>