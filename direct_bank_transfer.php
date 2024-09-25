<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .container h1 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
        .container form {
            display: flex;
            flex-direction: column;
        }
        .form-group {
            display: flex;
            flex-direction: column;
            margin-bottom: 15px;
        }
        .form-group label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        .form-group input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .expiry {
            display: flex;
            justify-content: space-between;
        }
        .expiry .form-group {
            width: 48%;
        }
        .save-details {
            display: flex;
            align-items: center;
        }
        .save-details input {
            margin-right: 10px;
        }
        .container form button {
            background-color: #55aae2;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        .container form button:hover {
            background-color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add a new card</h1>
        <form action="process_payment.php" method="post">
            <div class="form-group">
                <label for="card-number">Card number</label>
                <input type="text" id="card-number" name="card_number" required>
            </div>
            <div class="form-group">
                <label for="cardholder-name">Cardholder name</label>
                <input type="text" id="cardholder-name" name="cardholder_name" required>
            </div>
            <div class="expiry">
                <div class="form-group">
                    <label for="expiry-month">MM</label>
                    <input type="number" id="expiry-month" name="expiry_month" value="1" max="12" min="1" required>
                </div>
                <div class="form-group">
                    <label for="expiry-year">YY</label>
                    <input type="number" id="expiry-year" name="expiry_year" value="2024" min="1" required>
                </div>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" required>
            </div>
            <div class="save-details">
                <input type="checkbox" id="save-details" name="save_details">
                <label for="save-details">Save card details</label>
            </div>
            <button type="submit">Save & Confirm</button>
        </form>
    </div>
</body>
</html>
