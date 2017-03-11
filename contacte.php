<?php include "header.php" ?>

    <div id="content-wrapper">
        <?php include "sidebar.php" ?>

        <div id="content">
            <div id="breadcrumb">Contacte: agenda mea</div>

            <form action="" method="post">
                <input type="text" name="lastName" placeholder="First Name">
                <input type="text" name="firstName" placeholder="Last Name">
                <input type="text" name="phone" placeholder="Telefon">
                <button>Save</button>
            </form>





            <table id="agenda">

              <thead>

                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Phone number</th>

                </tr>

              </thead>

                <tbody>

                </tbody>

            </table>



        </div>

        <div class="clear"></div>
    </div>

<?php include "footer.php" ?>
</div>

<!--<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>-->
<script src="js/lib/jquery/jquery-2.1.3.js"></script>

<script src="js/code-examples/functions-jquery.js" type="text/javascript"></script>

<script src="js/responsive.js" type="text/javascript"></script>
<script src="js/contacte.js" type="text/javascript"></script>

</body>
</html>