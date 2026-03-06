<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ICEBSH 2026</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header class="navbar">
    <div class="nav-container">
        <div class="logo">
            <img src="img/logoicebsh.png" alt="Logo">
        </div>
        <nav>
            <ul class="nav-menu">
                <li><a href="index.php" class="active">HOME</a></li>
                <li><a href="callforpaper.php">CALL FOR PAPER</a></li>
                <li><a href="submissions.php">SUBMISSIONS</a></li>
                <li><a href="committee.php">COMMITTEE</a></li>
                <li><a href="contact.php">CONTACT</a></li>
            </ul>
        </nav>
    </div>
</header>

<div class="hero-banner">
    <img src="img/icebsh1.png" alt="ICEBSH Banner">
</div>
<main>
<section class="section">
    <h1>SPEAKERS</h1>
    <div class="content-box">
        <p><strong>Riela Provi Drianda, Ph.D.</strong> – Tokyo City University</p>
        <p><strong>Dr. Linda Linchin Lin</strong> – Kun Shan University</p>
    </div>
</section>

<section class="section">
    <h1>SCHEDULE</h1>
    <div class="content-box">
        <p><strong>Full Paper Submission Deadline:</strong> February 28, March 13, 2026</p>
        <p><strong>Notification of Acceptance:</strong> March 10, March 20, 2026</p>
        <p><strong>Full Paper Submission:</strong> March 20, March 27, 2026</p>
        <p><strong>Registration Schedule:</strong> March 25, March 30, 2026</p>
        <p><strong>Conference Date:</strong> April 6-7, 2026</p>

        <br>
        <p><strong>Conference Agenda:</strong></p>
        <ol>
            <li>Plenary Session with Plenary Speakers</li>
            <li>Parallel Sessions in breakout rooms (Online Platform)</li>
            <li>Networking opportunities for collaboration</li>
        </ol>
    </div>
</section>

<section class="partners">
    <div class="partner-item">
        <h3>ORGANIZED BY</h3>
        <p>Tarumanagara University</p>
        <img src="img/untar.png" alt="">
    </div>

    <div class="partner-item">
        <h3>CO-HOST BY</h3>
        <p>Kun Shan University</p>
        <img src="img/kunshan.png" alt="">
    </div>
</section>
</main>

<footer>
    Copyright© ICEBSH - Universitas Tarumanagara 2026
</footer>

<script>
const banner = document.querySelector('.hero-banner');

let isDown = false;
let startX;
let scrollLeft;

banner.addEventListener('mousedown', (e) => {
    isDown = true;
    banner.classList.add('active');
    startX = e.pageX - banner.offsetLeft;
    scrollLeft = banner.scrollLeft;
});

banner.addEventListener('mouseleave', () => {
    isDown = false;
});

banner.addEventListener('mouseup', () => {
    isDown = false;
});

banner.addEventListener('mousemove', (e) => {
    if (!isDown) return;
    e.preventDefault();
    const x = e.pageX - banner.offsetLeft;
    const walk = (x - startX) * 2;
    banner.scrollLeft = scrollLeft - walk;
});
</script>

</body>
</html>