<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banner Section with Menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
    <div class="logo">
        <img src="https://www.aafmindia.co.in/online-certification-wealth-management/img/AAFM_logo.jpg" alt="Logo" style="height: 50px;">
    </div>
    <div class="social-icons">
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        <a href="https://www.youtube.com" target="_blank"><i class="fab fa-youtube"></i></a>
        <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
    </div>
</div>

    <div class="banner">
    <div class="banner-content">
        <p>Great leadership thrives with great minds behind it.</p>
        <h1>Across India, our team of visionaries and innovators is dedicated to turning ideas into impact.</h1>
        <p>Meet the leaders driving our mission forward.</p>
        <button id="speakWithExpertsBtn" class="btn" onclick="location.href='#ourteam'">SPEAK WITH OUR EXPERTS</button>    </div>
</div>
<section class="team-section" id="ourteam">
    <div class="container">
        <h2 class="team-title">Meet Our Leadership - MEET THE TEAM BEHIND AAFM INDIA</h2>
        <p class="team-subtitle">Top industry professionals with hands-on experience</p>
        <div class="team-grid">
            <a href="Dr-Deepak-Jain.html" target="_blank" class="team-member">
                <img src="https://www.digitalsilk.com/wp-content/uploads/2022/09/Gabriel_profile.jpg" alt="Dr. Deepak Jain" class="team-img">
                <h3 class="team-name">Dr. Deepak Jain</h3>
                <p class="team-role">Co-founder & Director - AAFM® India</p>
            </a>
            <a href="Vyas-Rai-Nagpal.html" target="_blank" class="team-member">
                <img src="https://www.digitalsilk.com/wp-content/uploads/2022/09/Gabriel_profile.jpg" alt="Vyas Rai Nagpal" class="team-img">
                <h3 class="team-name">Vyas Rai Nagpal</h3>
                <p class="team-role">Founder Director - AAFM® India</p>
            </a>
            <a href="Dr-K-S-Rao.html" target="_blank" class="team-member">
                <img src="https://www.digitalsilk.com/wp-content/uploads/2024/11/profiles3.jpg" alt="Dr. K S Rao" class="team-img">
                <h3 class="team-name">Dr. K S Rao</h3>
                <p class="team-role">Executive Director – AAFM India</p>
            </a>
            <a href="Romit-Barat.html" target="_blank" class="team-member">
                <img src="https://www.digitalsilk.com/wp-content/uploads/2022/09/Gabriel_profile.jpg" alt="Romit Barat" class="team-img">
                <h3 class="team-name">Romit Barat</h3>
                <p class="team-role">Non-Executive Director – AAFM India | Investment Strategist | BFSI Leader</p>
            </a>
            <a href="Dimple-Mittal.html" target="_blank" class="team-member">
                <img src="https://www.digitalsilk.com/wp-content/uploads/2022/09/Gabriel_profile.jpg" alt="Dimple Mittal" class="team-img">
                <h3 class="team-name">Dimple Mittal</h3>
                <p class="team-role">Head - Business Development, AAFM® India</p>
            </a>
            <a href="Jasneet-Singh-Bindra.html" target="_blank" class="team-member">
                <img src="https://www.digitalsilk.com/wp-content/uploads/2022/09/Gabriel_profile.jpg" alt="Jasneet Singh Bindra" class="team-img">
                <h3 class="team-name">Jasneet Singh Bindra</h3>
                <p class="team-role">Country Head – Institutional Sales – AAFM India</p>
            </a>
        </div>
    </div>
</section>
<!-- filepath: /d:/xamp/htdocs/portfoliopage/index.php -->
<section class="team-section">
    <h2 class="team-title">OUR TEAM</h2>
    <div class="team-grids">
        <div class="team-membert" onclick="showDetails('Stefan Vasiljevic', 'CTO', 'Stefan is a full-stack developer...', 'https://www.digitalsilk.com/wp-content/uploads/2022/09/Gabriel_profile.jpg')">
            <img src="https://www.digitalsilk.com/wp-content/uploads/2022/09/Gabriel_profile.jpg" alt="Stefan Vasiljevic" class="team-img">
            <h3 class="team-name">Stefan Vasiljevic</h3>
            <p class="team-role">CTO</p>
        </div>
        <div class="team-membert" onclick="showDetails('Ana Margarita Meira', 'VP Client Partner', 'Ana has 10+ years of experience...', 'https://www.digitalsilk.com/wp-content/uploads/2022/09/Gabriel_profile.jpg')">
            <img src="https://www.digitalsilk.com/wp-content/uploads/2022/09/Gabriel_profile.jpg" alt="Ana Margarita Meira" class="team-img">
            <h3 class="team-name">Ana Margarita Meira</h3>
            <p class="team-role">VP Client Partner</p>
        </div>
        <div class="team-membert" onclick="showDetails('Matt Loy', 'Head of Development', 'Matt specializes in web and mobile technologies...', 'https://www.digitalsilk.com/wp-content/uploads/2022/09/Gabriel_profile.jpg')">
            <img src="https://www.digitalsilk.com/wp-content/uploads/2022/09/Gabriel_profile.jpg" alt="Matt Loy" class="team-img">
            <h3 class="team-name">Matt Loy</h3>
            <p class="team-role">Head of Development</p>
        </div>
        <div class="team-membert" onclick="showDetails('Branko Stojanovic', 'Managing Director', 'Branko oversees company strategy...', 'https://www.digitalsilk.com/wp-content/uploads/2022/09/Gabriel_profile.jpg')">
            <img src="https://www.digitalsilk.com/wp-content/uploads/2022/09/Gabriel_profile.jpg" alt="Branko Stojanovic" class="team-img">
            <h3 class="team-name">Branko Stojanovic</h3>
            <p class="team-role">Managing Director</p>
        </div>
    </div>
</section>

<div class="details-section" id="details">
    <span class="close-btn" onclick="hideDetails()">&times;</span>
    <div class="details-content">
        <img id="details-img" src="" alt="Profile Image" class="team-img">
        <h2 id="details-name"style="color: black;"></h2>
        <h4 id="details-role"style="color: black;"></h4>
        <p id="details-desc"style="color: black;"></p>
    </div>
</div>

<!-- footer -->
<footer class="footer">
  	 <div class="container">
  	 	<div class="row">
           <div class="footer-col">
    <img src="https://www.aafmindia.co.in/online-certification-wealth-management/img/AAFM_logo.jpg" alt="Company Logo" style="height: 50px; margin-bottom: 22px;">
    <h4>About Us</h4>
    <p>We are dedicated to providing top-notch financial education and certification.</p>
</div>
<div class="footer-col">
    <h4>More Info</h4>
    <ul>
        <li><a href="https://www.aafmindia.co.in/Aboutus.aspx" style="color: white;">AAFM INDIA</a></li>
        <li><a href="https://www.aafmindia.co.in/AAFM(Global).aspx" style="color: white;">AAFM USA</a></li>
        <li><a href="https://www.aafmindia.co.in/Missions.aspx" style="color: white;">Mission</a></li>
        <li><a href="https://www.aafmindia.co.in/GlobalBoardofStandards.aspx" style="color: white;">Global Board</a></li>
        <li><a href="https://www.aafmindia.co.in/GlobalAlliances.aspx" style="color: white;">Global Recognition</a></li>
        <li><a href="https://www.aafmindia.co.in/ListofSpeakers.aspx" style="color: white;">List of Speakers</a></li>
       
    </ul>
</div>
<div class="footer-col">
    <h4>More Info </h4>
    <ul>
     
       
        <li><a href="http://www.aafmindia.co.in/charteredwealthmanager/CWMIndiaataglance.html" style="color: white;">CWM<sup>®</sup> at a Glance</a></li>
        <li><a href="http://www.aafmindia.co.in/sitemap.xml" style="color: white;">Site map</a></li>
      
        <li><a href="http://www.handlemobileapp.com/digital-suraksha/aafmindia-app/admin-panel/login/index/abchbhsvfhcsbahfbhbsfjaafmbvbvhzbhdfbshbdfhbhsbygfhawbrgawy" target="_blank" style="color: white;">AAFM Digital Suraksha</a></li>
        <li><a href="http://www.aafmindia.in/demo/usa-acer/candidate/wmat_registration.php" target="_blank" style="color : White;">WMAT <span style="font-size: 70%">Registration</span></a></li>
        <li><a href="http://www.aafmindia.in/demo/usa-acer/index.php" target="_blank" style="color : White;">USA-ACER (Demo)</a></li>
        <li><a href="https://www.aafmindia.co.in/PrivacyPolicy.aspx" target="_blank" style="color : White;">Privacy Policy</a></li>
    </ul>
</div>
  	 		<div class="footer-col">
  	 			<h4>follow us</h4>
  	 			<div class="social-links">
  	 				<a href="#"><i class="fab fa-facebook-f"></i></a>
  	 				<a href="#"><i class="fab fa-twitter"></i></a>
  	 				<a href="#"><i class="fab fa-instagram"></i></a>
  	 				<a href="#"><i class="fab fa-linkedin-in"></i></a>
  	 			</div>
  	 		</div>
  	 	</div>
  	 </div>
  </footer>
 <!-- end footer -->
<script>
    // Ensure the details box is hidden on page load
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById("details").style.display = "none"; 
    });

    function showDetails(name, role, desc, imgSrc) {
        let detailsBox = document.getElementById("details");
        detailsBox.style.display = "flex"; 
        document.getElementById("details-name").innerText = name;
        document.getElementById("details-role").innerText = role;
        document.getElementById("details-desc").innerText = desc;
        document.getElementById("details-img").src = imgSrc;
    }

    function hideDetails() {
        document.getElementById("details").style.display = "none"; 
    }
</script>



    <script>
        function toggleMenu() {
            document.getElementById("menu").classList.toggle("show");
        }
    </script>
    <script>
        window.addEventListener('scroll', function() {
    const header = document.querySelector('.header');
    if (window.scrollY > 0) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

    </script>
</body>
</html>
