<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SmartPOS - Point of Sale Software</title>
<style>
    body {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
        background: #f5f6fa;
        color: #333;
    }
    header {
        background: #1a73e8;
        color: #fff;
        padding: 20px 60px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    header h1 {
        margin: 0;
        font-size: 28px;
    }
    header nav a {
        margin-left: 20px;
        color: #fff;
        text-decoration: none;
        font-size: 16px;
    }
    .hero {
        display: flex;
        padding: 60px;
        align-items: center;
        background: #fff;
    }
    .hero-text {
        flex: 1;
    }
    .hero-text h2 {
        font-size: 42px;
        margin-bottom: 20px;
    }
    .hero-text p {
        font-size: 18px;
        line-height: 28px;
    }
    .hero-text button {
        margin-top: 25px;
        padding: 14px 28px;
        background: #1a73e8;
        color: #fff;
        border: none;
        border-radius: 6px;
        font-size: 18px;
        cursor: pointer;
    }
    .hero img {
        width: 420px;
    }
    .features {
        padding: 60px 40px;
        text-align: center;
    }
    .features h2 {
        font-size: 34px;
        margin-bottom: 40px;
    }
    .feature-boxes {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
    }
    .box {
        padding: 25px;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    }
    .box h3 {
        margin-bottom: 12px;
        font-size: 22px;
    }
    .box p {
        font-size: 16px;
        line-height: 26px;
    }
    .cta {
        text-align: center;
        padding: 60px;
        background: #1a73e8;
        color: #fff;
    }
    .cta h2 {
        font-size: 32px;
    }
    .cta button {
        margin-top: 20px;
        padding: 14px 26px;
        background: #fff;
        color: #1a73e8;
        font-size: 18px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
    }
    footer {
        text-align: center;
        padding: 20px;
        background: #0f2454;
        color: #fff;
        font-size: 15px;
    }

    @media(max-width: 768px) {
        .hero {
            flex-direction: column;
            text-align: center;
        }
        .hero img {
            margin-top: 30px;
            width: 300px;
        }
    }
</style>
</head>
<body>

<header>
    <h1>SmartPOS</h1>
    <nav>
        <a href="#features">Features</a>
        <a href="#download">Download</a>
        <a href="#contact">Contact</a>
    </nav>
</header>

<section class="hero">
    <div class="hero-text">
        <h2>Modern POS Software for Your Business</h2>
        <p>Manage sales, inventory, customers, and accounts all in one place.  
        SmartPOS makes your business faster, easier, and more profitable.</p>
        <button>Get Started</button>
    </div>
    <img src="https://cdn-icons-png.flaticon.com/512/2942/2942924.png" alt="POS Illustration">
</section>

<section class="features" id="features">
    <h2>Powerful Features</h2>
    <div class="feature-boxes">
        <div class="box">
            <h3>Sales Management</h3>
            <p>Track daily sales, discounts, invoices, and generate reports instantly.</p>
        </div>
        <div class="box">
            <h3>Inventory Control</h3>
            <p>Low stock alerts, product tracking, barcode support & real-time updates.</p>
        </div>
        <div class="box">
            <h3>Customer & Supplier</h3>
            <p>Store details, purchase history, due reports, and more.</p>
        </div>
        <div class="box">
            <h3>Accounts & Reports</h3>
            <p>Daily, monthly, and yearly financial reports with analytics dashboard.</p>
        </div>
    </div>
</section>

<section class="cta" id="download">
    <h2>Start Using SmartPOS Today</h2>
    <p>Boost your business with smart technology.</p>
    <button>Download Now</button>
</section>

<footer id="contact">
    © 2025 SmartPOS. All Rights Reserved.
</footer>

</body>
</html>
