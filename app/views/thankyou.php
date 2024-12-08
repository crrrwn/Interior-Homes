<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Your Purchase - Interior Homes</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        :root {
            --primary-color: #4a6741;
            --secondary-color: #8a9e8d;
            --accent-color: #d4a373;
            --text-color: #333;
            --bg-color: #f8f9fa;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
            line-height: 1.6;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            overflow-x: hidden;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .header {
            background-color: var(--primary-color);
            color: var(--white);
            padding: 2rem 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .header::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255,255,255,0.2) 0%, rgba(255,255,255,0) 80%);
            transform: rotate(45deg);
            animation: shimmer 5s infinite linear;
        }

        .header h1 {
            font-family: 'Playfair Display', serif;
            font-size: clamp(2rem, 5vw, 3.5rem);
            font-weight: 700;
            margin-bottom: 0.5rem;
            position: relative;
            animation: fadeInDown 1s ease-out, float 3s ease-in-out infinite;
        }

        .main-content {
            background-color: var(--white);
            border-radius: 15px;
            padding: 3rem 2rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            margin: 2rem auto;
            max-width: 800px;
            text-align: center;
            position: relative;
            overflow: hidden;
            animation: fadeIn 1s ease-out 0.5s both;
        }

        .main-content::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: linear-gradient(45deg, rgba(74, 103, 65, 0.1) 0%, rgba(255,255,255,0) 60%);
            transform: rotate(45deg);
            z-index: 1;
        }

        .image-container {
            position: relative;
            width: 200px;
            height: 200px;
            margin: 0 auto 2rem;
        }

        .thank-you-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        .animated-checkmark {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 80px;
            height: 80px;
        }


        .checkmark {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: block;
            stroke-width: 2;
            stroke: var(--accent-color);
            stroke-miterlimit: 10;
            box-shadow: inset 0px 0px 0px var(--accent-color);
            animation: fill .4s ease-in-out .4s forwards, scale .3s ease-in-out .9s both;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .checkmark__circle {
            stroke-dasharray: 166;
            stroke-dashoffset: 166;
            stroke-width: 2;
            stroke-miterlimit: 10;
            stroke: var(--accent-color);
            fill: none;
            animation: stroke 0.6s cubic-bezier(0.65, 0, 0.45, 1) forwards;
        }

        .checkmark__check {
            transform-origin: 50% 50%;
            stroke-dasharray: 48;
            stroke-dashoffset: 48;
            animation: stroke 0.3s cubic-bezier(0.65, 0, 0.45, 1) 0.8s forwards;
        }

        .message {
            font-size: clamp(1rem, 2.5vw, 1.2rem);
            color: var(--text-color);
            margin-bottom: 2rem;
            position: relative;
            z-index: 2;
        }

        .order-details {
            background-color: rgba(74, 103, 65, 0.1);
            border-radius: 10px;
            padding: 1rem;
            margin-bottom: 2rem;
            transition: all 0.3s ease;
        }

        .order-details:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .cta-button {
            display: inline-block;
            background-color: var(--primary-color);
            color: var(--white);
            text-decoration: none;
            padding: 1rem 2rem;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            z-index: 2;
        }

        .cta-button:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .cta-button::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 300%;
            height: 300%;
            background: radial-gradient(circle, rgba(255,255,255,0.3) 0%, rgba(255,255,255,0) 80%);
            transform: translate(-50%, -50%);
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .cta-button:hover::after {
            opacity: 1;
        }

        .footer {
            background-color: var(--primary-color);
            color: var(--white);
            text-align: center;
            padding: 1.5rem 0;
            margin-top: auto;
        }

        .footer p {
            font-size: 0.9rem;
            opacity: 0.8;
        }

        .social-icons {
            margin-top: 1rem;
        }

        .social-icons a {
            color: var(--white);
            font-size: 1.5rem;
            margin: 0 0.5rem;
            transition: all 0.3s ease;
        }

        .social-icons a:hover {
            color: var(--accent-color);
            transform: translateY(-3px);
        }

        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }

        @keyframes shimmer {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }

        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }

        @keyframes stroke {
            100% {
                stroke-dashoffset: 0;
            }
        }

        @keyframes scale {
            0%, 100% {
                transform: translate(-50%, -50%) scale(1);
            }
            50% {
                transform: translate(-50%, -50%) scale(1.1);
            }
        }

        @keyframes fill {
            100% {
                box-shadow: inset 0px 0px 0px 100px var(--accent-color);
            }
        }

        @media (max-width: 768px) {
            .container { padding: 1rem; }
            .main-content { padding: 2rem 1.5rem; }
            .cta-button { padding: 0.8rem 1.5rem; }
            .image-container {
                width: 150px;
                height: 150px;
            }
            .animated-checkmark {
                width: 60px;
                height: 60px;
            }
        }
    </style>
</head>

<body>
    <header class="header">
        <div class="container">
            <h1>Thank You for Your Purchase!</h1>
        </div>
    </header>

    <main class="container">
        <div class="main-content">
            <div class="image-container">
                <img src="https://cdn3d.iconscout.com/3d/premium/thumb/thank-you-by-businessman-3d-illustration-download-in-png-blend-fbx-gltf-file-formats--thanks-work-done-ok-happy-pack-people-illustrations-4341241.png?f=webp" alt="Thank You" class="thank-you-image">
                <div class="animated-checkmark">
                    <svg class="" xmlns="" viewBox="0 0 52 52">
                        <circle class="" cx="26" cy="26" r="25" fill="none"/>
                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                    </svg>
                </div>
            </div>
            <p class="message">
                Hello <span id="customerName">Valued Customer</span>, we're thrilled to have you as a customer and appreciate your support. Your order is being processed, and we'll notify you once it's on its way.
            </p>
            <div class="order-details">
                <p><strong>Order Date:</strong> <span id="orderDate"></span></p>
            </div>
            <p class="message">
                If you have any questions or need assistance, feel free to reach out. We hope to serve you again soon!
            </p>
            <a href="/main" class="cta-button">Return to Home</a>
        </div>
    </main>

    <footer class="footer">
        <div class="container">
            <p>&copy; <span id="currentYear"></span> Interior Homes. All rights reserved.</p>
            <div class="social-icons">
                <a href="#" target="_blank"><i class="fab fa-facebook"></i></a>
                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#" target="_blank"><i class="fab fa-pinterest"></i></a>
            </div>
        </div>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Set current date
            const orderDate = new Date().toLocaleDateString('en-US', { year: 'numeric', month: 'long', day: 'numeric' });
            document.getElementById('orderDate').textContent = orderDate;

            // Set current year in footer
            document.getElementById('currentYear').textContent = new Date().getFullYear();

            // Simulate order details (replace with actual data retrieval)
            const urlParams = new URLSearchParams(window.location.search);
            const orderNumber = urlParams.get('order') || 'N/A';
            const customerName = urlParams.get('name') || 'Valued Customer';

            document.getElementById('orderNumber').textContent = orderNumber;
            document.getElementById('customerName').textContent = customerName;

            // Add hover effect to order details
            const orderDetails = document.querySelector('.order-details');
            orderDetails.addEventListener('mouseenter', function() {
                this.style.backgroundColor = 'rgba(74, 103, 65, 0.2)';
            });
            orderDetails.addEventListener('mouseleave', function() {
                this.style.backgroundColor = 'rgba(74, 103, 65, 0.1)';
            });

            // Add click effect to CTA button
            const ctaButton = document.querySelector('.cta-button');
            ctaButton.addEventListener('mousedown', function() {
                this.style.transform = 'scale(0.95)';
            });
            ctaButton.addEventListener('mouseup', function() {
                this.style.transform = 'translateY(-3px)';
            });

            console.log('Thank you page loaded successfully!');
        });
    </script>
</body>

</html>

