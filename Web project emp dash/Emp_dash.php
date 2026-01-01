<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UniWork Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Top Navbar -->
<header class="navbar">
    <div class="logo">
        <img src="logo.png" alt="UniWork Logo">
        <span>UniWork</span>
    </div>

    <nav>
        <a href="#">Home</a>
        <a href="#">Services</a>
        <a href="#">About Us</a>
        <a href="#">Contact Us</a>
    </nav>
</header>

<div class="container">

    <!-- Sidebar -->
    <aside class="sidebar">
        <img src="https://img.freepik.com/premium-photo/corporate-business-young-women-employee-photos_983969-411.jpg?w=2000" class="profile-pic">
        <h3>Julie</h3>

        <ul>
            <li class="active">Dashboard</li>
            <li>New Hired Jobs</li>
            <li>Past Jobs</li>
            <li>Payments</li>
            <li>Profile</li>
        </ul>
    </aside>

    <!-- Main Content -->
    <main class="main">

        <!-- Top Cards -->
        <div class="top-grid">

            <div class="card">
                <h3>Calendar</h3>
                <div class="calendar-box">
                <div class="calendar-header">
                    <span class="sun">Sun</span>
                    <span>Mon</span>
                    <span>Tue</span>
                    <span>Wed</span>
                    <span>Thu</span>
                    <span>Fri</span>
                    <span>Sat</span>
                </div>

                <div class="calendar-grid">
                    <!-- Week 1 -->
                    <div></div>
                    <div></div>
                    <div class="date highlight">1</div>
                    <div class="date">2</div>
                    <div class="date highlight">3</div>
                    <div class="date">4</div>
                    <div class="date highlight">5</div>

                    <!-- Week 2 -->
                    <div class="date highlight">6</div>
                    <div class="date">7</div>
                    <div class="date">8</div>
                    <div class="date">9</div>
                    <div class="date">10</div>
                    <div class="date">11</div>
                    <div class="date highlight">12</div>

                    <!-- Week 3 -->
                    <div class="date">13</div>
                    <div class="date">14</div>
                    <div class="date highlight">15</div>
                    <div class="date">16</div>
                    <div class="date highlight">17</div>
                    <div class="date">18</div>
                    <div class="date">19</div>

                    <!-- Week 4 -->
                    <div class="date highlight">20</div>
                    <div class="date">21</div>
                    <div class="date">22</div>
                    <div class="date">23</div>
                    <div class="date">24</div>
                    <div class="date">25</div>
                    <div class="date highlight">26</div>

                    <!-- Week 5 -->
                    <div class="date highlight">27</div>
                    <div class="date">28</div>
                    <div class="date highlight">29</div>
                    <div class="date highlight">30</div>
                    <div class="date">31</div>
                    <div></div>
                    <div></div>
                </div>
            </div>

            </div>

            <div class="card center">
                <h1>12</h1>
                <p>Total Active Jobs</p>
            </div>

            <!-- Scrollable Notifications -->
            <div class="card">
                <h3>Notifications</h3>

                <div class="notification-container">
                    <div class="notification">
                        <b>Your job request has been accepted!</b><br>
                        JobId : ABC123
                    </div>

                    <div class="notification">
                        <b>Job posted successfully!</b><br>
                        JobId : XYZ123
                    </div>

                    <div class="notification">
                        <b>Payment received!</b><br>
                        JobId : LMN456
                    </div>

                    <div class="notification">
                        <b>New job available!</b><br>
                        JobId : PQR789
                    </div>
                </div>
            </div>

        </div>

        <!-- Middle Grid -->
        <div class="middle-grid">

            <!-- Scrollable Past Jobs -->
            <div class="card">
                <h3>Past Done Jobs</h3>

                <div class="past-jobs">
                    <table>
                        <tr align="left">
                            <th>Job Title</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>

                        <tr>
                            <td>Data Entry Work</td>
                            <td>2025-12-26</td>
                            <td><span class="badge green">Completed</span></td>
                        </tr>

                        <tr>
                            <td>Event Coordinator</td>
                            <td>2025-11-12</td>
                            <td><span class="badge green">Completed</span></td>
                        </tr>

                        <tr>
                            <td>Event Decoration</td>
                            <td>2025-11-13</td>
                            <td><span class="badge green">Completed</span></td>
                        </tr>

                        <tr>
                            <td>Poster Designing</td>
                            <td>2025-10-10</td>
                            <td><span class="badge green">Completed</span></td>
                        </tr>
                    </table>
                </div>
            </div>

            <!-- Scrollable New Hired Jobs -->
            <div class="card">
                <h3>New Hired Jobs <span class="plus">+</span></h3>

                <div class="new-jobs">
                    <div class="job">
                        <b>Data Entry Work</b><br>
                        Job ID : ABC123 | Date : 2025-12-26
                        <span class="badge blue">Confirmed</span>
                    </div>

                    <div class="job">
                        <b>Event Decoration</b><br>
                        Job ID : DEF456 | Date : 2025-12-28
                        <span class="badge sky">Accepted</span>
                    </div>

                    <div class="job">
                        <b>Flyer Designing</b><br>
                        Job ID : GHI789 | Date : 2025-12-30
                        <span class="badge sky">Accepted</span>
                    </div>


                    <div class="job">
                        <b>Website Testing</b><br>
                        Job ID : JKL222 | Date : 2025-12-31
                        <span class="badge blue">Confirmed</span>
                    </div>

                    <div class="job">
                        <b>Content Writing</b><br>
                        Job ID : MNO333 | Date : 2026-01-01
                        <span class="badge sky">Accepted</span>
                    </div>

                    <div class="job">
                        <b>Logo Design</b><br>
                        Job ID : QRS444 | Date : 2026-01-02
                        <span class="badge sky">Accepted</span>
                    </div>
                </div>
            </div>

        </div>
<!-- ---------- Bottom Grid ---------- -->
        <div class="bottom-grid">

            <!-- Profile Card -->
            <div class="card profile-card">
                <h3>Profile</h3>
                <div class="profile-info">
                    <img src="https://img.freepik.com/premium-photo/corporate-business-young-women-employee-photos_983969-411.jpg?w=2000" class="profile-big">
                    <div class="details">
                        <p><strong>Name :</strong> Julie</p>
                        <p><strong>Email :</strong> Julie@gmail.com</p>
                        <p><strong>NIC :</strong> 012345678901</p>
                        <p><strong>Address :</strong> Kelaniya, Gampaha</p>
                    </div>
                </div>
                <div class="edit-icon">&#9998;</div>
            </div>

            <!-- Payment Method Card -->
            <div class="card payment-card">
                <h3>Payment Method</h3>
                <div class="payment-info">
                    <div class="card-item">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Visa.svg" alt="Visa">
                        <span>**** **** **** 1234</span>
                    </div>
                    <div class="card-item">
                       <img src="https://logowik.com/content/uploads/images/787_mastercard.jpg" alt="MasterCard">
                        <span>**** **** **** 5678</span>
                    </div>
                    <div class="card-item">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/0/04/Visa.svg" alt="Visa">
                        <span>**** **** **** 9012</span>
                    </div>
                </div>
                <div class="edit-icon">&#9998;</div>
            </div>

</div>

        </div>

    </main>
</div>

</body>
</html>
