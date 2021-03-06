<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jitasmita's Bank</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h3 class="logo">JitasBank</h2>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="customerlist.php">Customer Details</a></li>
                    <li><a href="customerlist.php">Money Transfer</a></li>
                    <li><a href="transactions.php">Recent Transactions</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            <div class="search">
                <input class="srch" type="search" name="" placeholder="type to text">
                <a href="#"><button class="btn">Search</button></a>
            </div>
        </div>
        <div class="content">
            <h1>Welcome to<br><span>Jitasmita's Bank.</span> <br> We are at your service .</h1>
                <p class="par">This is a bank that is created keeping the customer's satisfaction and ease in mind.  <br>
                    Get the most reliable and hassle-free services right at your finger-tips!<br> Experience world class banking at its best.</p>
                <a href="customerlist.php"><button class="cn">Transact now</button></a>


                <div class="form">
                    <form action="register.php" method="post">
                    <h2>Add a customer here</h2>
                    <input type="text" name="name" id="" placeholder="Enter name here">
                    <input type="text" name="Acc_no" id="" placeholder="Enter Account Number">
                    <input type="email" name="email_id" id="" placeholder="Enter email">
                    <input type="number" name="balance" id="" placeholder="Enter balance">
                    <button class="btnn" type="submit" name="submit">Submit</button>
                    </form>
                    <p class="link">Already added?<br><br>
                    <a href="customerlist.php">Go to customers list</a> from here</a>
                
                    
                </div>
        </div>
    </div>

</body>

</html>