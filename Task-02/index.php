
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Online Food Ordering</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    

    <!-- Header -->
    <div class="header">
        <h2>OnlineFood</h2>
        <div class="nav">
            <a href="#">Home</a>
            <a href="#">Menu</a>
            <a href="#">Contact</a>
            <a href="#order">Order</a>
            <a href="#login">Login</a>
            <a href="#register">Register</a>
        </div>
        <div class="search-container">
             <input type="text" placeholder="Search food..." class="search-input">
             <button class="search-btn">🔍</button>
        </div>

    </div>

    <!-- Hero -->
    <div class="hero">
        <h1>Welcome to World of Best Food</h1>
        <p>Don't stop your cravings...!</p>
        <button class="btn" id="popupbtn">Order Now</button>
    </div>

    <!-- Why Choose Us -->
    <div class="section">
        <h2>Why We Choose</h2>
        <div class="boxes">
            <div class="box">
                <h3>Home Delivery</h3>
                <p>Fast and safe delivery at your doorstep.</p>
            </div>
            <div class="box">
                <h3>Best Quality</h3>
                <p>Fresh ingredients and hygienic cooking.</p>
            </div>
            <div class="box">
                <h3>Low Cost Food</h3>
                <p>Affordable prices for everyone.</p>
            </div>
        </div>
    </div>

    <!-- Discover Our Story -->
    <div class="section story">
        <h2>Discover Our Story</h2>
        <div class="stats">
            <div class="stat">120<span>Food Items</span></div>
            <div class="stat">60<span>Cooks</span></div>
            <div class="stat">75<span>Beverages</span></div>
        </div>
    </div>
    <div class="section media">
        <div class="box">
        <h2>Our Location</h2>
        <iframe
            src="https://www.google.com/maps?q=india&output=embed"
            loading="lazy" width="150px" height="200px">
        </iframe>
        </div>
        <div class="box">
            <h2>Watch tutorial</h2>
        <video controls muted playsinline width="200px" height="200px">
            <source src="c:\Users\JAGADEESHWARI\Downloads\video.mp4" type="video/mp4" >
        </video>
        </div>
        <div class="box">
        <h2>Enjoy Our Background Music</h2>
        <br>
        <audio controls class="small">
            <source src="https://www.soundhelix.com/examples/mp3/SoundHelix-Song-1.mp3" type="audio/mpeg">
        </audio>
    </div>
    </div>
     <div id="login" class="modal">
        <div class="modal-box">
            <h2>Login</h2>
            <form action="login.php" method="post">
               <input type="Email" name="email" placeholder="Email" required>
               <input type="password" name="password" placeholder="Password" required>
               <button type="submit" name="login">Login</button>
            </form>
            <a href="#" class="close">Close</a>
        </div>
    </div>
    <div id="register" class="modal">
        <div class="modal-box">
            <h2>Register</h2>
            <form action="register.php" method="post">
               <input type="text" name="username" placeholder="Username" required>
               <input type="Email" name="email" placeholder="Email" required>
               <input type="password" name="password" placeholder="Password" required>
               <button type="submit" name="register">Register</button>
            </form>
            <a href="#" class="close">Close</a>
        </div>
    </div>
    <!-- Order Food Section -->
<div id="order" class="order-section">
    <h2>Order Food</h2>

    <form  class="order-form"action="#" method="post">
        <label>Food Item</label>
        <select required>
            <option value="">Select Item</option>
            <option>Burger</option>
            <option>Pizza</option>
            <option>Biryani</option>
            <option>Noodles</option>
        </select>

        <label>Quantity</label>
        <input type="number" min="1" placeholder="Enter quantity" required>

        <label>Delivery Address</label>
        <textarea rows="3" placeholder="Enter delivery address" required></textarea>

        <label>Payment Method</label>
        <select required>
            <option value="">Select Payment</option>
            <option>Cash on Delivery</option>
            <option>UPI</option>
            <option>Debit / Credit Card</option>
        </select>

        <button type="submit">Place Order</button>
        <a href="#" class="close">Close</a>
    </form>
    
    </div>
    <table border="1" rules="all" width="700" cellspacing="20px" cellpadding="1spx" >
        <caption style="color: crimson;">
            <b>TOP RATING FOOD</b>
        </caption>
        <tbody align="center">
        <tr>
            <th>FOOD ITEM </th><th>PRICE</th><th>RATING</th>
        </tr>
        <tr>
            <td>Biryani</td><td>250/-</td><td>4.2</td>
        </tr>
        <tr>
            <td>Pizza</td><td>300/-</td><td>4.1</td>
        </tr>
        <tr>
            <td>Mango milkshake</td><td>150/-</td><td>4.0</td>
        </tr>
        <tr>
            <td>Butter chicken </td><td>100/-</td><td>4.0</td>
        </tr>
        <tr>
            <td>Sambar Idli</td><td>50/-</td><td>3.9</td>
        </tr>
        </tbody>
    </table>
    <div class="section">
        <h2>today's Special</h2>
        <p id="foodinfo"></p>
        <p id="priceinfo"></p>
        <p id="quantityinfo"></p>
        <button class="btn" id="incrorder">order one more</button>

    </div>
    <div class="form-section">
    <div class="form-box">
        <h2>Ratings & Reviews</h2>
        
        <label>Name</label>
        <input type="text" placeholder="Your name">

        <label>Email</label>
        <input type="email" placeholder="Your email">

        <label>Rating</label>
        <div class="options">
            <input type="radio" name="rating"> ⭐
            <input type="radio" name="rating"> ⭐⭐
            <input type="radio" name="rating"> ⭐⭐⭐
            <input type="radio" name="rating"> ⭐⭐⭐⭐
            <input type="radio" name="rating"> ⭐⭐⭐⭐⭐
        </div>

        <label>Your Review</label>
        <textarea rows="4" placeholder="Write your review..."></textarea>

        <button class="btn">Submit Review</button>
        <a href="#" class="close">Close</a>
    </div>
</div>
<div class="form-section">
    <div class="form-box">
        <h2>Upload Your File</h2>

        <form action="upload.php" method="post" enctype="multipart/form-data">

            <label>Select File</label>
            <input type="file" name="file" required>

            <button type="submit" name="upload">Upload</button>

        </form>
    </div>
</div>

    <!-- Footer -->
    <div class="footer">
        <p>Online Food | World of Best Food</p>
        <p>Contact Us : 9834567855</p>
        <p>© 2025 Online Food Service. All Rights Reserved</p>
    </div>
     <script>
        let v=123;
        const a="world best food"
        var s=56.78
        console.log("time is over");
        console.log(v);
        console.log(s)
        console.log(a)
        //document.write("food website");
        let x;
        console.log(x)
        let d=null;
        console.log(d)
        // variables
        var foodname="chicken biryani";
        let price=250;
        let quantity=1;
        console.log("food item:",foodname);
        console.log("price:",price);
        console.log("Quantity:",quantity);
        /*quantity++;
        console.log("Quantity:",quantity);*/ 
        // the above line throw an error -reclaraton of variable using cont and let is not possible
        document.getElementById("foodinfo").innerText="Food item:"+foodname;
        document.getElementById("priceinfo").innerText="Price:"+price;
        document.getElementById("quantityinfo").innerText="Quantity:"+quantity;
        document.getElementById("incrorder").addEventListener("click", () => {
           quantity++;
           document.getElementById("quantityinfo").innerText ="Quatity:"+quantity;
        });

        // popup boxes
        document.getElementById("popupbtn").addEventListener("click", function () {
            alert("Welcome to OnlineFood!");
            let order = confirm("Do you want to place the order?");
            if(order){
                let name=prompt("enter your name:");
                if(name){
                    alert("Thank you " + name+ "! Your order is placed.")
                }
                else{
                    alert("Order is cancelled")
                }
            }
        });
        //functions
        function calculate(qty,price){
            return qty*price;
        }
        const total= function(){
            let bill=calculate(quantity,price);
            alert("Total bill: "+bill +"/-");
        };
        const changemsg=() =>{
            document.querySelector(".hero h1").innerText="Order Fresh Food Instantly";
        };
        document.querySelector(".btn").addEventListener("mouseover",changemsg);
        document.getElementById("incrorder").addEventListener("click",total);
        

    </script>

</body>
</html>
