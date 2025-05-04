<style>
    /* General styles */
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f7fa;
        margin: 0;
        padding: 0;
    }

    .profile-container {
        width: 100%;
        max-width: 1000px;
        margin: 40px auto;
        background-color: white;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .profile-header {
        display: flex;
        align-items: center;
        margin-bottom: 30px;
    }

    .profile-header img {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        margin-right: 20px;
    }

    .profile-header h1 {
        margin: 0;
        font-size: 2.5em;
        color: #333;
    }

    .profile-header p {
        color: #777;
        font-size: 1.2em;
    }

    .profile-content {
        margin-top: 20px;
    }

    .profile-section {
        margin-bottom: 30px;
    }

    .profile-section h2 {
        font-size: 1.8em;
        color: #333;
        margin-bottom: 10px;
    }

    .profile-section p {
        font-size: 1.1em;
        color: #555;
    }

    .services-list {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        gap: 20px;
    }

    .service-card {
        background-color: #e6f0ff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .service-card h3 {
        color: #333;
        font-size: 1.5em;
        margin-bottom: 15px;
    }

    .service-card p {
        color: #555;
    }

    .contact-info a {
        color: #007BFF;
        text-decoration: none;
    }

    .contact-info a:hover {
        text-decoration: underline;
    }

    /* Responsive design for smaller screens */
    @media (max-width: 768px) {
        .profile-header {
            flex-direction: column;
            align-items: flex-start;
        }

        .profile-header img {
            margin-bottom: 20px;
        }
    }
</style>
</head>
<body>

<div class="profile-container">
    <!-- Profile Header -->
    <div class="profile-header">
        <img src="https://via.placeholder.com/120" alt="Company Logo">
        <div>
            <h1>Tech Innovators</h1>
            <p>Leading the Future of Technology</p>
        </div>
    </div>

    <!-- Profile Content -->
    <div class="profile-content">
        <!-- About Us Section -->
        <div class="profile-section">
            <h2>About Us</h2>
            <p>At Tech Innovators, we strive to provide cutting-edge technological solutions that empower businesses to grow. Our team of experts specializes in software development, AI technologies, and IT consulting. With over a decade of experience, we’ve helped companies transform and excel in the digital age.</p>
        </div>

        <!-- Services Section -->
        <div class="profile-section">
            <h2>Our Services</h2>
            <div class="services-list">
                <div class="service-card">
                    <h3>Software Development</h3>
                    <p>Custom software solutions tailored to meet your business needs, from mobile apps to enterprise software.</p>
                </div>
                <div class="service-card">
                    <h3>AI & Machine Learning</h3>
                    <p>Utilizing artificial intelligence to automate processes, predict trends, and enhance decision-making.</p>
                </div>
                <div class="service-card">
                    <h3>IT Consulting</h3>
                    <p>Expert advice to help your business adopt new technologies and optimize existing systems.</p>
                </div>
            </div>
        </div>

        <!-- Contact Information Section -->
        <div class="profile-section contact-info">
            <h2>Contact Us</h2>
            <p>Email: <a href="mailto:contact@cyberacademy.id">contact@cyberacademy.id</a></p>
            <p>Phone: <a href="tel:+1234567890">+62 123456789</a></p>
            <p>Website: <a href="https://cyberacademy.id" target="_blank">cyberacademy.id</a></p>
        </div>