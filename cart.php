<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Albos Roxas/E-commerce Shop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>


    <link rel="stylesheet" href="css/styles.css">

    <script src="https://kit.fontawesome.com/3fdaed0c83.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat+Subrayada&family=Ubuntu+Condensed&display=swap"
        rel="stylesheet">

</head>

<body>

    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="images/acc.png" width="125px">
                </div>
                <?php include "menu.php" ?>
            </div>
        </div>

        <div class="small-container cart-page">

            <table>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Subtotal</th>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="images/buy-1.jpg">
                            <div>
                                <p> Pink LongSleeve</p>
                                <small>Price: Php950.00</small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1" </td>
                    <td>Php950.00</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="images/buy-2.jpg">
                            <div>
                                <p> Pink LongSleeve</p>
                                <small>Price: Php950.00</small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div </td>
                    <td><input type="number" value="1" </td>
                    <td>Php500.00</td>
                </tr>
                <tr>
                    <td>
                        <div class="cart-info">
                            <img src="images/buy-3.jpg">
                            <div>
                                <p> Pink LongSleeve</p>
                                <small>Price: Php750.00</small>
                                <br>
                                <a href="">Remove</a>
                            </div>
                        </div>
                    </td>
                    <td><input type="number" value="1" </td>
                    <td>Php400.00</td>
                </tr>
            </table>

            <div class="total-price">
                <table>
                    <tr>
                        <td>Subtotal</td>
                        <td>Php1,650.00</td>
                    </tr>
                    <tr>
                        <td> Tax</td>
                        <td> Php35.00</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td>Php1,685.00</td>
                    </tr>

                </table>
            </div>
            <a href="payment.html" <td class="btn">Checkout</td></a>



            <script>
            var MenuItems = document.getElementById(MenuItems);


            MenuItems.style.maxHeight = "0px";

            function menutoggle() {
                if (MenuItems.style.maxHeight == "0px") {
                    MenuItems.style.maxHeight = "200px";
                } else {
                    MenuItems.style.maxHeight = "0px";
                }
            }
            </script>




</body>

</html>