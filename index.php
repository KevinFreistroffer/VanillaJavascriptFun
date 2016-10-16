    <?php 
        include('./includes/header.php'); 
        include('./includes/functions.php');
    ?>

        <main class="container">

            <div id="top-three">
                <div class="box col-xs-12 col-sm-4">
                    <div class="box-overlay">
                        <button id="button-one" class="btn btn-default" onClick="toggleTopButtons(2)">One</button>
                    </div>
                </div>
                <div class="box col-xs-12 col-sm-4">
                    <div class="box-overlay">
                        <button id="button-two" class="btn btn-default" onClick="toggleTopButtons(3)">Two </button>
                    </div>
                </div>
                <div class="box col-xs-12 col-sm-4">
                    <div class="box-overlay">
                        <button id="button-three" class="btn btn-default" onClick="toggleTopButtons(1)">Three</button>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div id="toggle-all-buttons-box">
                    <button class="btn btn-default col-xs-12 col-sm-2 col-sm-offset-5" onClick="toggleAllTopButtons( 'show' )">Show All</button>
                    <button class="btn btn-default col-xs-12 col-sm-2 col-sm-offset-5" onClick="toggleAllTopButtons( 'hide' )">Hide All</button>
                    <div class="clearfix"></div>
                </div>
                <div class="clearfix"></div>
            </div>

            <div id="text">
                <section>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?</p>
                    <p></p>
                    <p></p>
                </section>
            </div>

            <div id="register-form">
                <form method="GET">
                    Name: <input type="text" name="name"><br>
                    E-mail: <input type="text" name="email"><br>
                    <input type="submit">
                </form>

        
            </div>

        </main>


<?php include('./includes/footer.php'); ?>