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
        <h1>Airport Dashboard </h1>

        <div class="tbl-content">
            <form id='flightSearch'>
                <label>Flight Number</label>
                <input type='text' name='flightNo'>
                <input type="submit">

            </form>
            <form id='flightUpdate'>
                <label>From
                    <select id="from" name="from">
                        <option value="Alld">alls</option>
                    </select>
                </label>
                <label>To
                    <input type='text' name='to'>
                </label><br>
                <label>Estimated Arrival
                    <input type='text' name='arrival'>
                </label><br>
                <label>Estimated Departure
                    <input type='text' name='departure'>
                </label><br>
                <input type="submit" value="Update">
            </form>
        </div>
    </section>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='flightsData.json'></script>
    <script src='myscript.js'></script>

</body>

</html>