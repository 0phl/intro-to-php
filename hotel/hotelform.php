<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="bookhotel.php" method="post">
        <h1>Book Hotel</h1>

        <div>
            <label for="room_type">Room Type</label>
            <select name="room_type" id="">
                <option value="Single">Single - 1750/night</option>
                <option value="Double">Double - 3500/night</option>
                <option value="Suite">Suite - 5000/night</option>
            </select>
        </div>

        <label for="checkin">Checkin</label>
        <input type="date" name="checkin" id="" required>

        <label for="checkout">Checkout</label>
        <input type="date" name="checkout" id="" required>

        <input type="submit" value="Book">
    </form>
</body>
</html>
