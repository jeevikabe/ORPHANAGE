<?php include './admin_components/admin_header.php' ?>

    <div class="ui container">

        <!-- Top Navigation Bar -->
        <?php include './admin_components/admin_top-menu.php' ?>

        <!-- BODY Content -->
        <div class="ui grid">
            <!-- Left menu -->
            <?php include './admin_components/admin_side-menu.php' ?>
            
            <!-- right content -->
            <div class="twelve wide column">
                <h1>Triggered -Data</h1>


                <table class="ui celled table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>CID</th>
                            <th>action</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                            $sql = "SELECT * FROM tlogs";
                            $result = $conn->query($sql);
    
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while($row = $result->fetch_assoc()) {
                                
                        ?>

                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['cid']; ?></td>
                            <td><?php echo $row['action']; ?></td>
                            <td><?php echo $row['cdate']; ?></td>
                        </tr>
                        
                        <?php
                                }
                            }
                        ?>

                    </tbody>
                    <tfoot class="full-width">
                        
                    </tfoot>
                </table>


                
            </div>

        </div>

    </div>
<?php include './admin_components/admin_footer.php' ?>