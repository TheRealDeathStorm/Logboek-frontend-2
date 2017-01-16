<?php
/**
 * Created by PhpStorm.
 * User: Niels
 * Date: 2-12-2016
 * Time: 14:59
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Logboek Docenten dashboard</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/datepicker3.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">

    <link rel='stylesheet' href='fullcalendar-3.1.0/fullcalendar.css' />
    <script src='fullcalendar-3.1.0/lib/jquery.min.js'></script>
    <script src='fullcalendar-3.1.0/lib/moment.min.js'></script>
    <script src='fullcalendar-3.1.0/fullcalendar.js'></script>

    <!--Icons-->
    <script src="js/lumino.glyphs.js"></script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

    <!-- Trajecten pagina -->
    <link rel="stylesheet" type="text/css" href="css/trajecten/demo.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/trajecten/form-builder.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/trajecten/form-render.min.css">
    <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

    <script>
        $(document).ready(function() {

            // page is now ready, initialize the calendar...

            $('#calendar').fullCalendar({
                // put your options and callbacks here
            })

        });
        $('#calendar').fullCalendar({
            weekends: false // will hide Saturdays and Sundays
        });
        $('#calendar').fullCalendar({
            dayClick: function() {
                alert('a day has been clicked!');
            }
        });
        $('#calendar').fullCalendar('next');
    </script>

</head>
