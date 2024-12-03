<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You Page</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400&family=Montserrat:wght@700&display=swap" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Custom Styles -->
    <link rel="stylesheet" href="styles.css">
</head>
<style> 
/* General Reset */
body, h1, p, a {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Body Styling */
body {
    font-family: 'Lato', sans-serif;
    background-color: white; /* Soft beige */
    color: #4a4a4a;
    text-align: center;
    line-height: 1.6;
    padding: 20px;
    overflow: hidden; /* Prevent scrolling during animations */
}

/* Header */
.site-header {
    background-color: #6b8e23; /* Olive Green */
    color: white;
    padding: 20px 0;
    border-bottom: 4px solid #8c7351;
    animation: fadeIn 1s ease-out; /* Header fade-in animation */
}

.site-header__title {
    font-family: 'Montserrat', sans-serif;
    font-size: 2.5rem;
    letter-spacing: 1px;
    opacity: 0;
    animation: fadeInUp 1s forwards 0.5s; /* Title fade-in and slide-up animation */
}

/* Main Content */
.main-content {
    margin: 40px auto;
    padding: 30px;
    max-width: 500px;
    background-color: #fff; /* White for contrast */
    border-radius: 12px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border: 1px solid #e0dcd6;
    opacity: 0;
    animation: fadeInUp 1s forwards 1s; /* Main content fade-in and slide-up animation */
}

.main-content__checkmark {
    font-size: 4rem;
    color: #e63946; /* Red for the checkmark */
    margin-bottom: 20px;
    animation: bounce 1s ease-out infinite; /* Checkmark bounce animation */
}

.main-content__body {
    font-size: 1.1rem;
    color: #4a4a4a;
    margin: 20px 0;
    opacity: 0;
    animation: fadeInUp 1s forwards 1.5s; /* Body fade-in and slide-up animation */
}

/* Footer */
.site-footer {
    margin-top: 40px;
    padding: 20px 0;
   
    color:  #6b8e23;
    opacity: 0;
    animation: fadeInUp 1s forwards 2s; /* Footer fade-in and slide-up animation */
}

.site-footer__link {
    color:  #6b8e23;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s ease;
}

.site-footer__link:hover {
    color: #6b8e23; /* Olive green on hover */
    text-decoration: underline;
}

.site-footer__fineprint {
    margin-top: 10px;
    font-size: 0.85rem;
    color: #f0e8da;
}

/* Animations */
@keyframes fadeIn {
    from {
        opacity: 0;
    }
    to {
        opacity: 1;
    }
}

@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-10px);
    }
    60% {
        transform: translateY(-5px);
    }
}

/* Responsive Design */
@media (max-width: 600px) {
    .site-header__title {
        font-size: 2rem;
    }

    .main-content__body {
        font-size: 1rem;
    }
}


</style>
<body>
    <header class="site-header">
        <h1 class="site-header__title">Thank You!</h1>
    </header>

    <main class="main-content">
        <i class="fas fa-check-circle main-content__checkmark"></i>
        <p class="main-content__body">
            "Thank you for your purchase! We're thrilled to have you as a customer and appreciate your support. Your order is being processed, and we’ll notify you once it’s on its way. If you have any questions or need assistance, feel free to reach out. We hope to serve you again soon!"
        </p>
    </main>

    <footer class="site-footer">
        <a href="/main" class="site-footer__link">Home</a>
        

    <script>
        // Update year dynamically
        document.getElementById('year').textContent = new Date().getFullYear();
    </script>
</body>

</html>
