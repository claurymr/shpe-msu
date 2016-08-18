<?php
/**
 * Created by PhpStorm.
 * User: Sakura
 * Date: 7/7/2016
 * Time: 3:20 PM
 */
?>

<!Doctype html>
<html>
<head>
    <title>SHPE|MSU</title>
    <script type="text/javascript" src="assets/js/jquery-3.1.0.min.js"></script>
    <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/uikit.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <link href="assets/css/footer.css" rel="stylesheet" type="text/css">
    <link href="assets/css/sponsors.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="assets/css/animation.css">
    <link rel="stylesheet" type="text/css" href="assets/css/media-queries.css">
</head>
<body>
    <div id="main">
        <?php include "header.php" ?>
        <div id="banner">
            <div id="image-banner"></div>
            <div id="mission-vision">
                <div class="inner-container">
                    <h2>Mission</h2>
                    <p>SHPE changes lives by empowering the Hispanic community to
                        realize its fullest potential and to impact the world through
                        STEM awareness, access, support and development.</p>
                    <h2>Vision</h2>
                    <p>SHPE's vision is a world where Hispanics are highly valued and
                        influential as the leading innovators, scientists, mathematicians
                        and engineers.</p>
                </div>
            </div>
        </div>
        <div id="shpe-highlights">
            <div class="inner-container">
                <div class="announcements">
                    <h2>Highlights</h2>
                    <div class="uk-grid">
                        <div class="uk-width-1-3">
                            <div class="announcement">
                                <div class="ann-img"></div>
                                <p><a href="#ann-modal" data-uk-modal>ANNOUNCEMENT 1</a></p>
                                <div id="ann-modal" class="uk-modal">
                                    <div class="uk-modal-dialog uk-modal-dialog-blank uk-height-viewport">
                                        <a class="uk-modal-close uk-close" style="background-color: #006A3F;"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="uk-width-2-3">
                            <div class="announcement">
                                <div class="ann-img"></div>
                                <p><a>ANNOUNCEMENT 2</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="uk-grid">
                        <div class="uk-width-2-3">
                            <div class="announcement">
                                <div class="ann-img"></div>
                                <p><a>ANNOUNCEMENT 3</a></p>
                            </div>
                        </div>
                        <div class="uk-width-1-3">
                            <div class="announcement">
                                <div class="ann-img"></div>
                                <p><a>ANNOUNCEMENT 4</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="events">
            <div class="inner-container">
                <div class="uk-grid">
                    <div class="uk-width-2-5">
                        <div id="upcoming-events">
                            <h2>Upcoming Events</h2>
                            <div class="event">
                                <div class="calendar">
                                    <div class="date">13</div>
                                    <div class="month">August</div>
                                </div>
                                <div class="event-info">
                                    <p>SHPE Pool Party</p>
                                    <p>Hosted by SHPE MSU</p>
                                </div>
                            </div>
                            <div class="event">
                                <div class="calendar">
                                    <div class="date">13</div>
                                    <div class="month">August</div>
                                </div>
                                <div class="event-info">
                                    <p>SHPE Pool Party</p>
                                    <p>Hosted by SHPE MSU</p>
                                </div>
                            </div>
                            <div class="event">
                                <div class="calendar">
                                    <div class="date">13</div>
                                    <div class="month">August</div>
                                </div>
                                <div class="event-info">
                                    <p>SHPE Pool Party</p>
                                    <p>Hosted by SHPE MSU</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-width-3-5">
                        <div id="event-of-week">
                            <h2>Event of the Week</h2>
                            <div class="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php" ?>
    </div>

    <script type="text/javascript" src="assets/js/uikit.min.js"></script>
</body>
</html>
