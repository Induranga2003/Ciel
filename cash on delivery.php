<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Payment</title>
    <link rel="stylesheet" href="assets/css/codstyles.css">
    <style>
        /* Custom alert box styling */
        .custom-alert {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            z-index: 1000;
        }
        .custom-alert button {
            margin-top: 10px;
        }
        /* Overlay */
        .alert-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 999;
        }
    </style>
</head>
<body>
    <header>
        <div>
           <h1>Cash on Delivery</h1> 
        </div>
    </header>
    <main>
        <section class="payment-instructions">
            <h2>Payment Instructions</h2>
            
            
            <form id="addressForm" onsubmit="addCAD(event)">
                <label for="country">Country:</label>
                <input type="text" id="country" name="country" required>
                <br>
                <label for="city">City:</label>
                <input type="text" id="city" name="city" required>
                <br>
                <label for="state">State:</label>
                <input type="text" id="state" name="state" required>
                <br>
                <label for="zip">ZIP Code:</label>
                <input type="text" id="zip" name="zip" required>
                <br>
                <button type="submit">Submit</button>
            </form>
            
            <p>Include your order number in the memo section of the check. Once we receive your check, your order will be processed.</p>
        </section>
    </main>
    <footer>
        <p>&copy; 2024 CIEL. All rights reserved.</p>
    </footer>

    <div class="alert-overlay" id="alertOverlay"></div>
    <div class="custom-alert" id="customAlert">
        <p id="alertMessage"></p>
        <button onclick="closeAlert()">OK</button>
    </div>

    <script>
        function addCAD(event){
            event.preventDefault();

            var country = document.getElementById("country").value;
            var city = document.getElementById("city").value;
            var state = document.getElementById("state").value;
            var zip = document.getElementById("zip").value;

            var form = new FormData();
            form.append("country", country);
            form.append("city", city);
            form.append("state", state);
            form.append("zip", zip);

            var request = new XMLHttpRequest();
            request.onreadystatechange = function(){
                if(request.readyState == 4 && request.status == 200){
                    var response = request.responseText;
                    if (response == "success"){
                        showAlert("Your order is successful! Check your email for future details.");
                        setTimeout(() => { window.location.reload(); }, 2000);
                    }else{
                        showAlert(response);
                    }
                }
            }
            request.open("POST", "save_address.php", true);
            request.send(form);
        }

        function showAlert(message) {
            document.getElementById('alertMessage').innerText = message;
            document.getElementById('alertOverlay').style.display = 'block';
            document.getElementById('customAlert').style.display = 'block';
        }

        function closeAlert() {
            document.getElementById('alertOverlay').style.display = 'none';
            document.getElementById('customAlert').style.display = 'none';
        }
    </script>
</body>
</html>

