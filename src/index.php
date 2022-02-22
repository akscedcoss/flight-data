<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href="style.css">
    </link>
    <title>Document</title>
</head>

<body>

    <section>
        <!--for demo wrap-->
        <h1>FLight Time Table </h1>
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                    <tr>
                        <th>Flight Number</th>
                        <th>From </th>
                        <th>To</th>
                        <th>Arrival</th>
                        <th>Departure</th>
                        <th>Status</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>

                </tbody>
            </table>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='flightsData.json'></script>
    <script src='myscript.js'></script>

</body>

</html>