<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Back to the futur</title>
</head>

<body>
    <div class="main">
        <div class="background">
            <div class="wantedTime">
                <?php
                $presentTime = new DateTime('now', new DateTimeZone('Europe/Paris'));
                ?>

                <div class="general">
                    <div class="text">
                        MONTH
                    </div>
                    <div class="datePresent">
                        <?php
                        echo $presentTime->format('M');
                        ?>
                    </div>
                </div>
                <div class="general">
                    <div class="text">
                        DAY
                    </div>
                    <div class="datePresent">
                        <?php
                        echo $presentTime->format('d');
                        ?>
                    </div>
                </div>
                <div class="general">
                    <div class="text">
                        YEAR
                    </div>
                    <div class="datePresent">
                        <?php
                        echo $presentTime->format('Y');
                        ?>
                    </div>
                </div>
                <div class="generalDot">
                    <div class="textAm">
                        AM
                    </div>
                    <?php
                    if ($presentTime->format('A') == 'AM') {
                        echo '<span class="dotAmOk"></span>';
                        echo '<div class="textPm">
                                PM
                              </div>';
                        echo '<span class="dotPm"></span>';
                    } else {
                        echo '<span class="dotAm"></span>';
                        echo '<div class="textPm">
                                PM
                              </div>';
                        echo '<span class="dotPmOk"></span>';
                    }
                    ?>
                </div>
                <div class="general">
                    <div class="text">
                        HOUR
                    </div>
                    <div class="datePresent">
                        <?php
                        echo $presentTime->format('h');
                        ?>
                    </div>
                </div>
                <div class="general">
                    <div class="text">
                        MIN
                    </div>
                    <div class="datePresent">
                        <?php
                        echo $presentTime->format('i');
                        ?>
                    </div>
                </div>
            </div>
            <div class="presentTime">
                PRESENT TIME
            </div>
        </div>
        <div class="background">
            <div class="wantedTime">
                <?php
                $destinationTime = new DateTime('now', new DateTimeZone('Europe/Paris'));

                $destinationTime->setTime(5, 02);
                $destinationTime->setDate(2020, 12, 25);

                ?>
                <div class="general">
                    <div class="text">
                        MONTH
                    </div>
                    <div class="dateWanted">
                        <?php
                        echo $destinationTime->format('M');
                        ?>
                    </div>
                </div>
                <div class="general">
                    <div class="text">
                        DAY
                    </div>
                    <div class="dateWanted">
                        <?php
                        echo $destinationTime->format('d');
                        ?>
                    </div>
                </div>
                <div class="general">
                    <div class="text">
                        YEAR
                    </div>
                    <div class="dateWanted">
                        <?php
                        echo $destinationTime->format('Y');
                        ?>
                    </div>
                </div>
                <div class="generalDot">
                    <div class="textAm">
                        AM
                    </div>
                    <?php
                    if ($destinationTime->format('A') == 'AM') {
                        echo '<span class="dotAmOk"></span>';
                        echo '<div class="textPm">
                                PM
                              </div>';
                        echo '<span class="dotPm"></span>';
                    } else {
                        echo '<span class="dotAm"></span>';
                        echo '<div class="textPm">
                                PM
                              </div>';
                        echo '<span class="dotPmOk"></span>';
                    }
                    ?>
                </div>
                <div class="general">
                    <div class="text">
                        HOUR
                    </div>
                    <div class="dateWanted">
                        <?php
                        echo $destinationTime->format('h');
                        ?>
                    </div>
                </div>
                <div class="general">
                    <div class="text">
                        MIN
                    </div>
                    <div class="dateWanted">
                        <?php
                        echo $destinationTime->format('i');
                        ?>
                    </div>
                </div>
            </div>
            <div class="TimeWanted">
                DESTINATION TIME
            </div>
        </div>
        <div class="background">
            <div class="wantedTime">
                <div class="general">
                    <div class="text">
                        MONTH
                    </div>
                    <div class="dateTimeLeft">
                        <?php
                        echo $presentTime->diff($destinationTime)->format('%M');
                        ?>
                    </div>
                </div>
                <div class="general">
                    <div class="text">
                        DAY
                    </div>
                    <div class="dateTimeLeft">
                        <?php
                        echo $presentTime->diff($destinationTime)->format('%d');
                        ?>
                    </div>
                </div>
                <div class="general">
                    <div class="text">
                        YEAR
                    </div>
                    <div class="dateTimeLeft">
                        <?php
                        echo $presentTime->diff($destinationTime)->format('%Y');
                        ?>
                    </div>
                </div>
                <div class="general">
                    <div class="text">
                        HOUR
                    </div>
                    <div class="dateTimeLeft">
                        <?php
                        echo $presentTime->diff($destinationTime)->format('%h');
                        ?>
                    </div>
                </div>
                <div class="general">
                    <div class="text">
                        MIN
                    </div>
                    <div class="dateTimeLeft">
                        <?php
                        echo $presentTime->diff($destinationTime)->format('%i');
                        ?>
                    </div>
                </div>

            </div>
            <div class="timeLeft">
                TIME LEFT
            </div>
            <div class="general">
                <div class="text">
                    MIN
                </div>
                <div class="dateTimeLeft">
                    <?php
                    $dateDiff = $presentTime->diff($destinationTime);
                    $minLeft = $dateDiff->days * 24 * 60 + $dateDiff->format('%h') * 60 + $dateDiff->format('%i');
                    echo $minLeft;
                    ?>
                </div>
            </div>
            <div class="timeLeft">
                MINUTES LEFT
            </div>
            <div class="general">
                <div class="text">
                    LITERS
                </div>
                <div class="dateTimeLeft">
                    <?php
                    echo $minLeft / 10000;
                    
                    ?>
                </div>
            </div>
            <div class="timeLeft">
                FUEL
            </div>
        </div>

    </div>
    </div>
</body>

</html>