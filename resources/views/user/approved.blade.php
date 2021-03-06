<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- cdnjs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- Fontawesome cdn -->
    <script src="https://kit.fontawesome.com/dbed6b6114.js" crossorigin="anonymous"></script>

    <!-- CSS Stylesheet -->
    <link rel="stylesheet" href="/css/complaints.css">

    <title>Complaints</title>
</head>

<body>

    <!-- sub-header -->
    <section class="sub-header">
    <nav>
      <h1>Aninaw</h1>
      <div class="nav-links" id="navLinks">
        <i class="fa fa-times" onclick="hideMenu()"></i>
        <ul>
            <li class="home"><a href="/">Home</a></li>
            <li class="news"><a href="/complaint/news">News</a></li>
            <li class="form"><a href="/complaint/create">Form</a></li>
            <li class="complaints active"><a href="/complaint">Complaints</a></li>
            <li class="about"><a href="/complaint/about">About</a></li>
        </ul>
      </div>
      <i class="fa fa-bars" onclick="showMenu()"></i>
    </nav>
    <h2>COMPLAINTS TABLE SHEET</h2>
    </section>

    <!-- table -->
    <div class="table-container">
        <table class="table">
            <thead>
                <tr>
                    <th>Complaint No.</th>
                    <th>Date Submitted</th>
                    <th>Subject of Complaint</th>
                    <th>Location</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-label="Complaint No.">0001</td>
                    <td data-label="Date Submitted">01-01-2022</td>
                    <td data-label="Subject of Complaint">Garbage</td>
                    <td data-label="Location">Almanza</td>
                    <td data-label="Status"><p class="status status-pending">Pending</p></td>
                </tr>

                <tr>
                    <td data-label="Complaint No.">0002</td>
                    <td data-label="Date Submitted">01-02-2022</td>
                    <td data-label="Subject of Complaint">Streetlights</td>
                    <td data-label="Location">Talon Uno</td>
                    <td data-label="Status"><p class="status status-on-process">On Process</p></td>
                </tr>

                <tr>
                    <td data-label="Complaint No.">0003</td>
                    <td data-label="Date Submitted">01-03-2022</td>
                    <td data-label="Subject of Complaint">Public Official</td>
                    <td data-label="Location">Talon Dos</td>
                    <td data-label="Status"><p class="status status-completed">Completed</p></td>
                </tr>

                <tr>
                    <td data-label="Complaint No.">0004</td>
                    <td data-label="Date Submitted">01-04-2022</td>
                    <td data-label="Subject of Complaint">Garbage</td>
                    <td data-label="Location">Zapote</td>
                    <td data-label="Status"><p class="status status-pending">Pending</p></td>
                </tr>

                <tr>
                    <td data-label="Complaint No.">0005</td>
                    <td data-label="Date Submitted">01-05-2022</td>
                    <td data-label="Subject of Complaint">Neighbor</td>
                    <td data-label="Location">Almanza</td>
                    <td data-label="Status"><p class="status status-cancelled">Cancelled</p></td>
                </tr>

                <tr>
                    <td data-label="Complaint No.">0005</td>
                    <td data-label="Date Submitted">01-05-2022</td>
                    <td data-label="Subject of Complaint">Neighbor</td>
                    <td data-label="Location">Almanza</td>
                    <td data-label="Status"><p class="status status-on-process">On Process</p></td>
                </tr>

                <tr>
                    <td data-label="Complaint No.">0005</td>
                    <td data-label="Date Submitted">01-05-2022</td>
                    <td data-label="Subject of Complaint">Neighbor</td>
                    <td data-label="Location">Almanza</td>
                    <td data-label="Status"><p class="status status-on-process">On Process</p></td>
                </tr>

                <tr>
                    <td data-label="Complaint No.">0003</td>
                    <td data-label="Date Submitted">01-03-2022</td>
                    <td data-label="Subject of Complaint">Public Official</td>
                    <td data-label="Location">Talon Dos</td>
                    <td data-label="Status"><p class="status status-completed">Completed</p></td>
                </tr>

                <tr>
                    <td data-label="Complaint No.">0003</td>
                    <td data-label="Date Submitted">01-03-2022</td>
                    <td data-label="Subject of Complaint">Public Official</td>
                    <td data-label="Location">Talon Dos</td>
                    <td data-label="Status"><p class="status status-completed">Completed</p></td>
                </tr>

                <tr>
                    <td data-label="Complaint No.">0004</td>
                    <td data-label="Date Submitted">01-04-2022</td>
                    <td data-label="Subject of Complaint">Garbage</td>
                    <td data-label="Location">Zapote</td>
                    <td data-label="Status"><p class="status status-pending">Pending</p></td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        <li class="page-item previous-page disable"><a class="page-link" href="">Prev</a></li>
        <li class="page-item current-page active"><a class="page-link" href="">1</a></li>
        <li class="page-item current-page"><a class="page-link" href="">2</a></li>
        <li class="page-item current-page"><a class="page-link" href="">3</a></li>
        <li class="page-item next-page"><a class="page-link" href="">Next</a></li>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-row">

                <div class="footer-col">
                    <h4>Las Pinas City Hall</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Operating Hours</a></li>
                        <li><a href="#">Telephone Directory</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Aninaw</h4>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">The Developers</a></li>
                        <li><a href="#">Privacy and Terms</a></li>
                    </ul>
                </div>
        
                <div class="footer-col">
                    <h4>Get Help</h4>
                    <ul>
                        <li><a href="#">FAQs</a></li>
                        <li><a href="form.html">Submit Form</a></li>
                    </ul>
                </div>

                <div class="footer-col">
                    <h4>Socials</h4>
                    <div class="social-links">
                        <a href="#"><i class="fa fa-facebook-square"></i></a>
                        <a href=""><i class="fa fa-twitter-square"></i></a>
                        <div class="copyright">
                            <i class="fa fa-copyright"> 2022</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Toggle Menu -->
    <script>
    var navLinks=document.getElementById("navLinks");
    function showMenu(){
      navLinks.style.right="0";
    }
    function hideMenu(){
      navLinks.style.right="-200px";
    }
    </script>
</body>
</html>