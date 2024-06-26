<div class="weekly-box">
    <div class="weekly-title">
        <h3>Nangka Health Center</h3>
        <p>Schedule of Health Services</p>
    </div>

    <!-- Navigation buttons -->
    <div class="day-navigation">
        <button onclick="showSchedule('monday')">Monday</button>
        <button onclick="showSchedule('tuesday')">Tuesday</button>
        <button onclick="showSchedule('wednesday')">Wednesday</button>
        <button onclick="showSchedule('thursday')">Thursday</button>
        <button onclick="showSchedule('friday')">Friday</button>
    </div>
    <div class="weekly-box-table-head">
        <div class="weekly-box-table-cell weekly-box-table-cell-day">
            <p>Day</p>
        </div>
        <div class="weekly-box-table-cell weekly-box-table-cell-time">
            <p>Time</p>
        </div>
        <div class="weekly-box-table-cell">
            <p>Medical</p>
        </div>
        <div class="weekly-box-table-cell">
            <p>Dental</p>
        </div>
    </div>
    <!-- Monday Schedule -->
    <div id="monday" class="weekly-box-table active">


        <div class="weekly-box-table-row">
            <div class="weekly-box-table-cell weekly-box-table-cell-day">
                <p>Monday</p>
            </div>

            <div class="weekly-box-table-cell weekly-box-table-cell-time">
                <div class="weekly-box-table-divider">
                    <p>8 - 12 NN</p>
                </div>

                <div class="weekly-box-table-divider weekly-box-last-divider">
                    <p>1 - 5 PM</p>
                </div>
            </div>

            <?php
            $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Monday' AND time LIKE '8 - 12 NN'") or die('query failed');
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="weekly-box-table-cell">
                        <div class="weekly-box-table-divider">
                            <p><?php echo $row['medical']; ?></p>
                        </div>
                <?php
                }
            }
                ?>

                <?php
                $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Monday' AND time LIKE '1 - 5 PM'") or die('query failed');
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="weekly-box-table-divider weekly-box-last-divider">
                            <p><?php echo $row['medical']; ?></p>
                        </div>
                    </div>
            <?php
                    }
                }
            ?>

            <?php
            $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Monday' AND time LIKE '8 - 12 NN'") or die('query failed');
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="weekly-box-table-cell weekly-box-last-cell">
                        <div class="weekly-box-table-divider">
                            <p><?php echo $row['dental']; ?></p>
                        </div>
                <?php
                }
            }
                ?>

                <?php
                $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Monday' AND time LIKE '1 - 5 PM'") or die('query failed');
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="weekly-box-table-divider weekly-box-last-divider">
                            <p><?php echo $row['dental']; ?></p>
                        </div>
                    </div>
            <?php
                    }
                }
            ?>
        </div>

    </div>
    <!-- Tuesday Schedule -->
    <div id="tuesday" class="weekly-box-table">

        <div class="weekly-box-table-row">
            <div class="weekly-box-table-cell weekly-box-table-cell-day">
                <p>Tuesday</p>
            </div>

            <div class="weekly-box-table-cell weekly-box-table-cell-time">
                <div class="weekly-box-table-divider">
                    <p>8 - 12 NN</p>
                </div>

                <div class="weekly-box-table-divider weekly-box-last-divider">
                    <p>1 - 5 PM</p>
                </div>
            </div>

            <?php
            $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Tuesday' AND time LIKE '8 - 12 NN'") or die('query failed');
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="weekly-box-table-cell">
                        <div class="weekly-box-table-divider">
                            <p><?php echo $row['medical']; ?></p>
                        </div>
                <?php
                }
            }
                ?>

                <?php
                $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Tuesday' AND time LIKE '1 - 5 PM'") or die('query failed');
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="weekly-box-table-divider weekly-box-last-divider">
                            <p><?php echo $row['medical']; ?></p>
                        </div>
                    </div>
            <?php
                    }
                }
            ?>

            <?php
            $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Tuesday' AND time LIKE '8 - 12 NN'") or die('query failed');
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="weekly-box-table-cell weekly-box-last-cell">
                        <div class="weekly-box-table-divider">
                            <p><?php echo $row['dental']; ?></p>
                        </div>
                <?php
                }
            }
                ?>

                <?php
                $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Tuesday' AND time LIKE '1 - 5 PM'") or die('query failed');
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="weekly-box-table-divider weekly-box-last-divider">
                            <p><?php echo $row['dental']; ?></p>
                        </div>
                    </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
    <!-- Wednesday Schedule -->
    <div id="wednesday" class="weekly-box-table">

        <div class="weekly-box-table-row">
            <div class="weekly-box-table-cell weekly-box-table-cell-day">
                <p>Wednesday</p>
            </div>

            <div class="weekly-box-table-cell weekly-box-table-cell-time">
                <div class="weekly-box-table-divider">
                    <p>8 - 12 NN</p>
                </div>

                <div class="weekly-box-table-divider weekly-box-last-divider">
                    <p>1 - 5 PM</p>
                </div>
            </div>

            <?php
            $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Wednesday' AND time LIKE '8 - 12 NN'") or die('query failed');
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="weekly-box-table-cell">
                        <div class="weekly-box-table-divider">
                            <p><?php echo $row['medical']; ?></p>
                        </div>
                <?php
                }
            }
                ?>

                <?php
                $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Wednesday' AND time LIKE '1 - 5 PM'") or die('query failed');
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="weekly-box-table-divider weekly-box-last-divider">
                            <p><?php echo $row['medical']; ?></p>
                        </div>
                    </div>
            <?php
                    }
                }
            ?>

            <?php
            $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Wednesday' AND time LIKE '8 - 12 NN'") or die('query failed');
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="weekly-box-table-cell weekly-box-last-cell">
                        <div class="weekly-box-table-divider">
                            <p><?php echo $row['dental']; ?></p>
                        </div>
                <?php
                }
            }
                ?>

                <?php
                $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Wednesday' AND time LIKE '1 - 5 PM'") or die('query failed');
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="weekly-box-table-divider weekly-box-last-divider">
                            <p><?php echo $row['dental']; ?></p>
                        </div>
                    </div>
            <?php
                    }
                }
            ?>
        </div>

    </div>
    <!-- Thursday Schedule -->
    <div id="thursday" class="weekly-box-table">

        <div class="weekly-box-table-row">
            <div class="weekly-box-table-cell weekly-box-table-cell-day">
                <p>Thursday</p>
            </div>

            <div class="weekly-box-table-cell weekly-box-table-cell-time">
                <div class="weekly-box-table-divider">
                    <p>8 - 12 NN</p>
                </div>

                <div class="weekly-box-table-divider weekly-box-last-divider">
                    <p>1 - 5 PM</p>
                </div>
            </div>

            <?php
            $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Thursday' AND time LIKE '8 - 12 NN'") or die('query failed');
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="weekly-box-table-cell">
                        <div class="weekly-box-table-divider">
                            <p><?php echo $row['medical']; ?></p>
                        </div>
                <?php
                }
            }
                ?>

                <?php
                $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Thursday' AND time LIKE '1 - 5 PM'") or die('query failed');
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="weekly-box-table-divider weekly-box-last-divider">
                            <p><?php echo $row['medical']; ?></p>
                        </div>
                    </div>
            <?php
                    }
                }
            ?>

            <?php
            $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Thursday' AND time LIKE '8 - 12 NN'") or die('query failed');
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="weekly-box-table-cell weekly-box-last-cell">
                        <div class="weekly-box-table-divider">
                            <p><?php echo $row['dental']; ?></p>
                        </div>
                <?php
                }
            }
                ?>

                <?php
                $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Thursday' AND time LIKE '1 - 5 PM'") or die('query failed');
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="weekly-box-table-divider weekly-box-last-divider">
                            <p><?php echo $row['dental']; ?></p>
                        </div>
                    </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
    <!-- Friday Schedule -->
    <div id="friday" class="weekly-box-table">

        <div class="weekly-box-table-row">
            <div class="weekly-box-table-cell weekly-box-table-cell-day">
                <p>Friday</p>
            </div>

            <div class="weekly-box-table-cell weekly-box-table-cell-time">
                <div class="weekly-box-table-divider">
                    <p>8 - 12 NN</p>
                </div>

                <div class="weekly-box-table-divider weekly-box-last-divider">
                    <p>1 - 5 PM</p>
                </div>
            </div>

            <?php
            $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Friday' AND time LIKE '8 - 12 NN'") or die('query failed');
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="weekly-box-table-cell">
                        <div class="weekly-box-table-divider">
                            <p><?php echo $row['medical']; ?></p>
                        </div>
                <?php
                }
            }
                ?>

                <?php
                $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Friday' AND time LIKE '1 - 5 PM'") or die('query failed');
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="weekly-box-table-divider weekly-box-last-divider">
                            <p><?php echo $row['medical']; ?></p>
                        </div>
                    </div>
            <?php
                    }
                }
            ?>

            <?php
            $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Friday' AND time LIKE '8 - 12 NN'") or die('query failed');
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <div class="weekly-box-table-cell weekly-box-last-cell">
                        <div class="weekly-box-table-divider">
                            <p><?php echo $row['dental']; ?></p>
                        </div>
                <?php
                }
            }
                ?>

                <?php
                $result = mysqli_query($con, "SELECT * FROM `weekly_schedule` WHERE day LIKE 'Friday' AND time LIKE '1 - 5 PM'") or die('query failed');
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <div class="weekly-box-table-divider weekly-box-last-divider">
                            <p><?php echo $row['dental']; ?></p>
                        </div>
                    </div>
            <?php
                    }
                }
            ?>
        </div>
    </div>
</div>

<script>
    // Function to show schedule for a specific day
    function showSchedule(day) {
        // Hide all schedule tables
        var scheduleTables = document.querySelectorAll('.weekly-box-table');
        scheduleTables.forEach(function(table) {
            table.classList.remove('active');
        });

        // Show schedule for the selected day
        var selectedDay = document.getElementById(day);
        selectedDay.classList.add('active');
    }

    // By default, show Monday's schedule
    showSchedule('monday');
</script>