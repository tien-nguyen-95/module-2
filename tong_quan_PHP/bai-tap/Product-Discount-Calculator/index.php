<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculator</title>
    <style>
        #content {
            width: 450px;
            margin: 0 auto;
            padding: 0px 20px 20px;
            background: white;
            border: 2px solid navy;
        }

        h1 {
            color: navy;
        }

        label {
            width: 10em;
            padding-right: 1em;
            float: left;
        }

        #data input {
            float: left;
            width: 15em;
            margin-bottom: .5em;
        }

        #button input {
            float: left;
            margin-bottom: .5em;
        }

        br {
            clear: left;
        }
    </style>
</head>

<body>
    <div id="content">
        <h1>Product Discount Calculator</h1>
        <form action="discount.php" method="POST">
            <div id="data">
                <label>Product Description:</label>
                <input type="text" name="product" /><br />
                <label>List Price:</label>
                <input type="text" name="price" /><br />
                <label>Discount Percent:</label>
                <input type="text" name="percent" />%
            </div>
            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Calculate Discount" /><br />
            </div>
        </form>
    </div>
</body>

</html>