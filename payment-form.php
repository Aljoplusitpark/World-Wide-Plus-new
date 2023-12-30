<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <div class="payment-container">
        <div class="payment-left">
            <div class="payment-left-top">
                <i class="fa-solid fa-chevron-left"></i>
                <i class="fa-solid fa-store"></i>
            </div>
            <form>
                <div class="payment-left-middle">
                    <!-- <p>Payment Details</p> -->
                    <h2>Payment Details</h2>
                    <div class="payment-right-middle">
                        <div class="payment-right-middle-bottom">
                            <div class="payment-right-middle-bottom-left" style="width:400px;">
                                <p>Full Name</p>
                                <input type="text" placeholder="Full Name on card">
                            </div>
                            <div class="payment-right-middle-bottom-left">
                                <p>Address</p>
                                <input type="text" placeholder="Enter Your Address">
                            </div>
                            <div class="payment-right-middle-bottom-left">
                                <p>Contact Number</p>
                                <input type="text" placeholder="Enter Your Address">
                            </div>
                            <div class="payment-right-middle-bottom-left">
                                <p>Which Type Of Course</p>
                                <!-- <input type="text" placeholder="Enter Your Address"> -->
                                <select>
                                    <option>Digital Marketing</option>
                                    <option>Flutter Development</option>
                                    <option>Web Development</option>
                                </select>
                            </div>
                            <div class="payment-right-middle-bottom-left">
                                <p>Amount</p>
                                <input type="text" value="1000">
                            </div>
                            <div class="payment-right-bottom">
                                <button><a href="payment.html" style="text-decoration: none; color: white;">Proceed To Pay</a></button>
                            </div><br>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        
    </div>
</body>
</html>