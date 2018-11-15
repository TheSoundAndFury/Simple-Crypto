<?php

$this->load->view('header');
?>
<!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h1 class="mt-5">Simple Crypto</h1>
            <p class="lead">Curent Cryto-Currency Listings.</p>
                <table class="table table-hover table-bordered maintable" id="maintable">
                    <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Name</th>
                        <th>Symbol</th>
                        <th>Price</th>
                    </tr>
                    </thead>

                    <?php
                    $iZero = array_values($data); //The index for the data comes in out of order, so we're making our own.
                    for($i = 0; $i < sizeof($iZero); $i++){
                        echo "<tr><td>". $iZero[$i]['rank']."</td>";
                        echo "<td>".  $iZero[$i]['name']."</td>";
                        echo "<td>".  $iZero[$i]['symbol']."</td>";
                        echo "<td>". "$" . number_format($iZero[$i]['quotes']['USD']['price'],2)."</td></tr>";
                    }
                    ?>

                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#maintable').DataTable({
                            });
                        });
                    </script>
                </table>
        </div>
    </div>
</div>

<?php

$this->load->view('footer');
?>


</body>

</html>
