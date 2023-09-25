<div class="position-fixed rounded mx-2 z-3 twelve-div p-2 text-center">
        <div class="twelve-div-container">
            <h3>Notification</h3>
            <hr>
            <div class="notification-center">
                <?php
                $querySelectNotification = "SELECT * FROM `notification_tb` ORDER BY date_upload DESC";
                $sqlSelectNotification = mysqli_query($con, $querySelectNotification);

                echo '<ul class="list-group list-group-flush">';
                while ($rowNotify = mysqli_fetch_array($sqlSelectNotification)){
                    echo '<li class="list-group-item">'.$rowNotify['fullname'].' '.$rowNotify['updated_part'].' ('.$rowNotify['date_upload'].')</li>';
                }
                echo '</ul>';
                ?>
            </div>
            <hr>
            <a class="bg-success py-2 rounded text-decoration-none text-bold text-light px-4"  href="leader-notif-page.php">View Updates>></a>
        </div>

    </div>