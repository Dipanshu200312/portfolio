<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dr. Deepak Jain - Portfolio</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f9fa;
        }
        header {
            background: #002244;
            color: #fff;
            padding: 20px 50px;
            text-align: center;
            font-size: 28px;
            font-weight: bold;
        }
        .container {
            max-width: 1200px;
            margin: 0px auto;
            background: #f8f9fa;
            padding: 50px;
            border-radius: 10px;
            /* box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1); */
        }
        .profile-section {
            display: flex;
            align-items: center;
            gap: 50px;
        }
        .profile-img {
            width: 400px;
            height: auto;
            border-radius: 10px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        }
        .content h1 {
            color: #002244;
            font-size: 32px;
            margin-bottom: 10px;
        }
        .content p {
            color: #333;
            font-size: 15px;
            line-height: 1.6;
        }
        .linkedin a {
            background: #0077b5;
            color: #fff;
            padding: 12px 25px;
            font-size: 20px;
            border-radius: 5px;
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            transition: 0.3s;
        }
        .linkedin a:hover {
            background: #005a8d;
        }
        .linkedin a i {
            margin-right: 10px;
        }
        ul {
            list-style: none;
            padding: 0;
        }
        ul li {
            font-size: 15px;
            padding: 8px 0;
        }
        ul li i {
            color: #0056b3;
            margin-right: 10px;
        }
        .details-section {
            display: flex;
            justify-content: space-between;
            gap: 50px;
            margin-top: 30px;
        }
        .details-section .left, .details-section .right {
            width: 48%;
        }
        footer {
            background: #002244;
            color: #fff;
            text-align: center;
            padding: 20px;
            margin-top: 50px;
        }
        .navbar {
    background: #002244;
    padding: 15px 50px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: white;
}

.navbar .logo {
    font-size: 24px;
    font-weight: bold;
}

.navbar ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.navbar ul li {
    margin: 0 15px;
}

.navbar ul li a {
    text-decoration: none;
    display: flex;
    align-items: center;
}

.navbar ul li a img {
    width: 30px;
    height: 30px;
    transition: transform 0.3s;
}

.navbar ul li a:hover img {
    transform: scale(1.2);
}

        .banner {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: url('https://source.unsplash.com/1600x600/?business,success') no-repeat center center/cover;
        color: white;
        background-color: black;
        padding: 42px 18px;
    }
    .banner-content {
        flex: 1;
        text-align: left;
        padding-left: 50px;
    }
    .banner h1 {
        font-size: 40px;
        margin-bottom: 10px;
    }
    .banner p {
        font-size: 18px;
        margin-bottom: 20px;
    }
    .banner .cta-button {
        background: #00bfff;
        color: white;
        padding: 12px 25px;
        font-size: 20px;
        border-radius: 5px;
        text-decoration: none;
        transition: 0.3s;
        display: inline-block;
    }
    .banner .cta-button:hover {
        background: #0088cc;
    }
    .banner-image {
        flex: 1;
        display: flex;
        justify-content: center;
    }
    .banner-image img {
        width: 111px ;
        height: auto;
    }
    .social-icons a {
            color: white;
            font-size: 24px;
            margin-left: 15px;
        }
    </style>
</head>
<body>
    <!-- <header>Dr. Deepak Jain</header> -->
    <nav class="navbar">
    <div class="logo"><img src="https://www.aafmindia.co.in/online-certification-wealth-management/img/AAFM_logo.jpg" alt="Logo" style="height: 50px;"></div>
    <div class="social-icons">
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
        <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>
</nav>

    
    <section class="banner">
    <div class="banner-content">
        <h1>Welcome to Dr. Deepak Jain’s</h1>
        <p>Co-founder & Director - AAFM® India | Founder - Nexgen Estate Planning Solutions</p>
       
    </div>
    <div class="banner-image">
    <img src="https://upload.wikimedia.org/wikipedia/commons/8/81/LinkedIn_icon.svg" alt="LinkedIn Profile" width="100">

    </div>
</section>
    <div class="container">
        <div class="profile-section">
            <img src="https://www.digitalsilk.com/wp-content/uploads/2022/09/Gabriel_profile.jpg" alt="Dr. Deepak Jain" class="profile-img">
            <div class="content">
                
                <h2><strong>Co-founder & Director - AAFM® India | Founder - Nexgen Estate Planning Solutions | Founder - Financial Literacy Advisory Body India</strong></h2>
                <p>Dr. Deepak Jain is a distinguished financial expert, educator, and entrepreneur with over 20 years of experience in wealth management, estate planning, and financial literacy. Holding a Doctorate in Wealth Management, he is a Chartered Wealth Manager (CWM®), Certified Financial Planner (CFP), and a renowned financial trainer who has empowered over 50,000 professionals and impacted 1 million investors globally.</p>
                <h3>Key Expertise:</h3>
                <ul style="list-style: none; padding: 0; margin: 0;">
    <li style="display: flex; align-items: flex-start; gap: 8px; margin-bottom: 8px;">
        <i class="fas fa-check" style="color: green; margin-top: 5px;"></i> 
        <span>Estate & Succession Planning – Crafting wealth transfer strategies for HNIs & businesses.</span>
    </li>
    <li style="display: flex; align-items: flex-start; gap: 8px; margin-bottom: 8px;">
        <i class="fas fa-check" style="color: green; margin-top: 5px;"></i> 
        <span>Wealth Protection & Portfolio Management – Tailored solutions to maximize financial security.</span>
    </li>
    <li style="display: flex; align-items: flex-start; gap: 8px; margin-bottom: 8px;">
        <i class="fas fa-check" style="color: green; margin-top: 5px;"></i> 
        <span>Financial Literacy Advocacy – Founder of FLAB India, driving financial education nationwide.</span>
    </li>
    <li style="display: flex; align-items: flex-start; gap: 8px; margin-bottom: 8px;">
        <i class="fas fa-check" style="color: green; margin-top: 5px;"></i> 
        <span>Training & Thought Leadership – Conducted 300+ workshops, author of Estate Planning for Financial Advisors.</span>
    </li>
</ul>

                
            </div>
        </div>
        
        <div class="details-section">
            <div class="left">
                <h2>Career Highlights</h2>
                <ul>
                <ul style="list-style: none; padding: 0;">
    <li style="display: flex; align-items: flex-start; margin-bottom: 8px;">
        <i class="fas fa-check-circle" style="color: green; margin-right: 8px; margin-top: 5px;"></i> 
        <span>Held leadership roles at Citibank, Standard Chartered, ING Vysya Bank</span>
    </li>
    <li style="display: flex; align-items: flex-start; margin-bottom: 8px;">
        <i class="fas fa-check-circle" style="color: green; margin-right: 8px; margin-top: 5px;"></i> 
        <span>Co-founded AAFM® India, the leading certification body in wealth management</span>
    </li>
    <li style="display: flex; align-items: flex-start; margin-bottom: 8px;">
        <i class="fas fa-check-circle" style="color: green; margin-right: 8px; margin-top: 5px;"></i> 
        <span>Established Nexgen Estate Planning Solutions, pioneering estate & legacy planning services</span>
    </li>
    <li style="display: flex; align-items: flex-start; margin-bottom: 8px;">
        <i class="fas fa-check-circle" style="color: green; margin-right: 8px; margin-top: 5px;"></i> 
        <span>Featured speaker at global finance & wealth management forums</span>
    </li>
</ul>

                </ul>
            </div>
            <div class="right">
                <h2>Education & Credentials</h2>
                <ul>
                <ul style="list-style: none; padding: 0;">
    <li style="display: flex; align-items: flex-start; margin-bottom: 8px;">
        <i class="fas fa-check-circle" style="color: green; margin-right: 8px; margin-top: 5px;"></i> 
        <span>Doctorate in Wealth Management</span>
    </li>
    <li style="display: flex; align-items: flex-start; margin-bottom: 8px;">
        <i class="fas fa-check-circle" style="color: green; margin-right: 8px; margin-top: 5px;"></i> 
        <span>CWM®, CFP® & Advanced Estate Planning Certifications</span>
    </li>
</ul>

<li style="display: flex; align-items: flex-start;">
    <i class="fas fa-check-circle" style="color: green; margin-right: 8px;"></i> 
    <span>A serial entrepreneur & financial success coach, Dr. Jain is committed to transforming the financial landscape through education, innovation, and strategic wealth planning.</span>
</li>


                </ul>
                <div class="linkedin">
                    <a href="https://linkedin.com/in/dr-deepak-jain-estate-planner" target="_blank">
                        <i class="fab fa-linkedin"></i> <strong>Connect with Dr. Deepak Jain</strong>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <footer>
    © copyright 2025 American Academy of Financial Management India Private Ltd. All rights reserved..
    </footer>

    <script>
        gsap.from(".profile-img", { duration: 1.5, x: -100, opacity: 0, ease: "power2.out" });
        gsap.from(".content h1", { duration: 1.2, y: -50, opacity: 0, ease: "power2.out", delay: 0.5 });
        gsap.from(".content p", { duration: 1.2, y: 30, opacity: 0, ease: "power2.out", delay: 0.7 });
        gsap.from(".linkedin", { duration: 1.2, scale: 0.8, opacity: 0, ease: "power2.out", delay: 1 });
    </script>
</body>
</html>