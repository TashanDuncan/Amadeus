<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AmaDeus - WebApp Dashboard</title>
    <link href="./css/styles.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
</head>
<body class="grid-container">
    <header>
        <div class="logo">
            <svg enable-background="new 0 0 612 792" version="1.1" viewBox="0 0 612 792" xml:space="preserve" xmlns="http://www.w3.org/2000/svg">
            <path d="m192.6 475.98c-1.126 1.756-2.259 3.469-3.451 5.097l-0.502 0.675c-1.137 5.249-3.32 9.777-6.977 14.253-4.226 5.172-10.418 10.272-17.799 13.083-1.586 8.401-3.153 19.649-3.615 29.977-0.512 11.42 0.329 21.712-0.406 33.474-0.735 11.761-3.046 24.991-7.561 42.528-4.516 17.537-11.236 39.378-17.431 58.176-6.196 18.796-11.867 34.548-15.017 45.574-3.15 11.025-3.78 17.325-5.775 16.486-1.996-0.84-5.356-8.821-7.351-17.222-1.996-8.401-2.626-17.222-3.991-19.952s-3.465 0.63-5.985 4.831c-2.521 4.2-5.46 9.24-7.036 11.026-1.576 1.785-1.785 0.314-2.625-6.511-0.84-6.826-2.311-19.008-0.21-40.009 2.1-21.003 7.771-50.826 7.875-57.757s-5.355 9.031-10.291 23.207c-4.936 14.177-9.346 26.568-13.336 37.49-3.99 10.921-7.561 20.371-9.976 18.585-2.416-1.784-3.676-14.806-4.096-26.355-0.42-11.552 0-21.633-1.681-25.203-1.68-3.57-5.459-0.631-9.555 3.57-4.096 4.2-8.507 9.66-9.557 5.774-1.05-3.885 1.26-17.115 4.096-28.771 2.834-11.656 6.194-21.737 11.161-34.186 4.928-12.354 11.44-27.042 20.266-38.863-6.989-10.106-10.544-17.864-10.951-26.604-0.42-9.031 2.52-19.112 9.136-26.673 6.615-7.562 16.907-12.602 28.598-16.573 4.919-1.671 10.086-3.153 15.36-4.24-0.913-10.043 3.407-18.324 10.752-24.025 2.08-1.616 4.405-3.023 6.907-4.279-0.452-1.71-0.902-3.311-1.34-4.749-2.205-7.246-4.096-10.397-6.93-14.387-2.836-3.99-6.616-8.822-8.296-15.017-1.68-6.196-1.26-13.757-0.735-19.638s1.156-10.081-0.945-15.331c-2.1-5.251-6.931-11.551-9.451-17.642-2.52-6.092-2.731-11.972-2.626-16.173 0.104-4.201 0.525-6.72 2.205-11.235 1.681-4.516 4.621-11.026 3.571-16.486-1.051-5.461-6.091-9.872-8.821-15.647-2.731-5.776-3.15-12.916-2.625-17.747s1.996-7.351 4.516-11.551c2.519-4.201 6.09-10.081 6.51-15.122s-2.311-9.24-3.571-13.966-1.05-9.977 2.416-15.017c3.465-5.041 10.186-9.872 13.756-14.178 3.57-4.305 3.99-8.084 4.41-11.865s0.84-7.561 3.045-11.55c2.205-3.991 6.195-8.191 10.605-12.286 4.41-4.096 9.241-8.087 11.971-12.917s3.36-10.501 6.194-16.119c2.833-5.618 7.873-11.183 14.487-14.594 6.614-3.413 14.805-4.673 20.896-8.034s10.082-8.82 13.757-14.176 7.035-10.606 11.76-13.966c4.726-3.36 10.817-4.831 15.542-6.301 4.726-1.471 8.085-2.94 10.816-5.881 2.729-2.941 4.83-7.351 8.086-10.71 3.255-3.36 7.665-5.671 13.021-6.616 5.355-0.945 11.655-0.525 16.38-1.89 4.726-1.365 7.876-4.516 10.606-7.036 2.73-2.521 5.041-4.411 9.662-4.201 4.62 0.209 11.551 2.521 17.222 2.731 5.67 0.209 10.08-1.681 14.596-5.041 4.516-3.361 9.135-8.192 15.121-9.452 5.985-1.26 13.337 1.051 20.268 2.835 6.931 1.786 13.441 3.045 18.797 2.101s9.555-4.096 15.593-5.881 13.915-2.205 20.95 0.946c7.035 3.15 13.231 9.87 18.588 11.813 5.355 1.942 9.87-0.893 17.536 0.368 7.666 1.259 18.481 6.615 24.1 11.498 5.618 4.883 6.038 9.294 6.669 14.23 0.629 4.935 1.47 10.395 5.67 13.651 4.2 3.254 11.761 4.305 16.276 9.976s5.985 15.961 5.461 23.522c-0.525 7.561-3.046 12.391-2.415 16.066 0.629 3.675 4.409 6.195 6.93 11.026s3.78 11.971 3.57 17.432c-0.21 5.46-1.891 9.24-5.461 13.021-3.571 3.779-9.033 7.56-9.139 14.49s5.145 17.012 8.505 26.462c3.36 9.451 4.83 18.271 5.985 25.203 1.156 6.931 1.995 11.97 3.466 16.171 1.47 4.201 3.57 7.56 4.2 13.756 0.63 6.195-0.21 15.226-1.785 21.422-1.575 6.195-3.886 9.555-4.307 12.6-0.419 3.045 1.052 5.776 6.302 13.757 5.25 7.98 14.281 21.211 21.106 28.667 6.826 7.455 11.446 9.135 15.018 12.391 3.569 3.255 6.09 8.085 6.616 14.071 0.524 5.986-0.946 13.126-4.097 17.747-3.149 4.62-7.981 6.721-12.916 7.771-4.936 1.05-9.976 1.05-13.126 2.94s-4.411 5.669-3.991 10.29c0.421 4.62 2.521 10.08 3.361 14.386s0.42 7.456-1.155 9.452c-1.575 1.994-4.306 2.834-4.411 4.725-0.104 1.89 2.416 4.83 3.361 8.086 0.944 3.255 0.314 6.826-1.995 8.926-2.311 2.1-6.301 2.73-10.396 4.936-4.096 2.205-8.297 5.984-10.187 10.5-1.891 4.516-1.471 9.767-1.051 14.808 0.42 5.039 0.84 9.87-1.681 14.49-2.52 4.62-7.98 9.031-13.335 11.236-5.356 2.205-10.606 2.205-14.912 1.681-4.305-0.525-7.665-1.576-11.026-0.735-3.36 0.84-6.72 3.57-10.605 6.406-19.038 13.891-14.058-3.319-5.837 26.557 2.804 10.192 8.685 24.684 18.136 55.241 9.449 30.558 22.472 77.181 29.612 107 7.141 29.822 8.399 42.845 3.149 37.594-5.251-5.251-17.011-28.772-43.683-56.075-26.673-27.303-68.258-58.385-106.9-80.751-38.645-22.367-74.347-36.02-103.12-42.844-28.772-6.826-50.614-6.826-64.266-4.306-13.652 2.521-19.111 7.561-17.431-0.211 1.68-7.771 10.5-28.352 15.023-47.43 4.522-19.078 4.746-36.652 4.857-45.439 0.112-8.787 0.112-8.787-1.617-5.692-0.78 1.411-1.924 3.457-3.047 4.32z" clip-rule="evenodd" fill-rule="evenodd" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="22.926"/>
            </svg>
            <h1><span>Ama</span>Deus&trade;</h1>
        </div>
        <div class="user">
            <div class="notification-bell" >
                <svg id="bell" class='ring' version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 -2 32 32" xml:space="preserve">
                    <g id="_x36__6_">
                        <g>
                            <path class="st0" d="M24,18v-8c0-5.5-4.5-10-10-10S4,4.5,4,10v8l-4,8h9.1c0.5,2.3,2.5,4,4.9,4s4.4-1.7,4.9-4H28L24,18z M14,28
                            c-1.3,0-2.4-0.8-2.8-2h5.6C16.4,27.2,15.3,28,14,28z M3,24l3-6v-8c0-4.4,3.6-8,8-8s8,3.6,8,8v8l3,6H3z"/>
                        </g>
                    </g>
                    <circle id='circle' cx="20" cy="2" r="4"/>
                </svg>
                <div class="alert-notifications" id="notifications">
                    <div class=alert-notifications-close ><span id="close-notifications">x</span></div>
                    <div class="alert-notifications-color">
                        <div class="alert-notifications-container">
                            <img src="images/member-1.jpg"   class="profile-image" alt="profile picture">
                            <div>
                                <p>Victoria Chambers liked your post</p>
                            </div>
                        </div>
                    </div>
                    <div class="alert-notifications-color">
                        <div class="alert-notifications-container">
                            <img src="images/member-4.jpg"   class="profile-image" alt="profile picture">
                            <div>
                                <p>Dan Oliver commented on your post</p>
                            </div>
                        </div>
                    </div>
                    <div class="alert-notifications-color">
                        <div class="alert-notifications-container">
                            <img src="images/member-3.jpg"   class="profile-image" alt="profile picture">
                            <div>
                                <p>Dawn Wood is now following you</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="name">
                <a href="http://www.tashanduncan.com" target="_blank"><img src="./images/0.jpg" alt="profile image" class="profile-image"></a>
                <a href="http://www.tashanduncan.com" target="_blank"><h3 class="name-header">Tashan Duncan</h3></a>
            </div>
        </div>
    </header>
    <nav>
        <!--Dashboard SVG-->
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <path d="M25 18c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-1-4h2v2h-2v-2zm1 12c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-1-4h2v2h-2v-2zm-7 4c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-1-4h2v2h-2v-2zM28 0H6C3.8 0 2 1.8 2 4v24c0 2.2 1.8 4 4 4h22c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4zm2 28c0 1.1-.9 2-2 2H6c-1.1 0-2-.9-2-2V8h26v20zm0-22H4V4c0-1.1.9-2 2-2h22c1.1 0 2 .9 2 2v2zM17 18c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-1-4h2v2h-2v-2zM9 26c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-1-4h2v2H8v-2zm1-4c1.7 0 3-1.3 3-3s-1.3-3-3-3-3 1.3-3 3 1.3 3 3 3zm-1-4h2v2H8v-2z"/>
          </svg>
          </a>

        <!--Members SVG-->
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <path d="M18 16.4c1.3-1.7 2-3.9 2-6.4 0-5.5-4-10-9-10S2 4.5 2 10c0 2.4.8 4.6 2 6.4-2.3.8-4 3-4 5.6v4c0 3.3 2.7 6 6 6h10c3.3 0 6-2.7 6-6v-4c0-2.6-1.7-4.8-4-5.6zM4 10c0-4.4 3.1-8 7-8s7 3.6 7 8-3.1 8-7 8-7-3.6-7-8zm16 15.5c0 2.5-2.2 4.5-4.9 4.5H6.9C4.2 30 2 28 2 25.5v-3c0-2.1 1.6-3.9 3.8-4.4C7.2 19.3 9 20 11 20s3.8-.7 5.2-1.9c2.2.5 3.8 2.2 3.8 4.4v3zM23 8h8c.6 0 1-.4 1-1s-.4-1-1-1h-8c-.6 0-1 .4-1 1s.4 1 1 1zm8 16h-6c-.6 0-1 .4-1 1s.4 1 1 1h6c.6 0 1-.4 1-1s-.4-1-1-1zm0-12h-8c-.6 0-1 .4-1 1s.4 1 1 1h8c.6 0 1-.4 1-1s-.4-1-1-1zm0 6h-6c-.6 0-1 .4-1 1s.4 1 1 1h6c.6 0 1-.4 1-1s-.4-1-1-1z"/>
          </svg></a>

        <!--visits SVG-->
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <path d="M14 0h-2c-1.1 0-2 .9-2 2v28c0 1.1.9 2 2 2h2c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2zm0 29c0 .6-.4 1-1 1s-1-.4-1-1V3c0-.6.4-1 1-1s1 .4 1 1v26zM4 9H2c-1.1 0-2 .9-2 2v19c0 1.1.9 2 2 2h2c1.1 0 2-.9 2-2V11c0-1.1-.9-2-2-2zm0 20c0 .6-.4 1-1 1s-1-.4-1-1V12c0-.6.4-1 1-1s1 .4 1 1v17zm20-13h-2c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h2c1.1 0 2-.9 2-2V18c0-1.1-.9-2-2-2zm0 13c0 .6-.4 1-1 1s-1-.4-1-1V19c0-.6.4-1 1-1s1 .4 1 1v10z"/>
          </svg>
          </a>

        <!--Settings SVG-->
        <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
            <path d="M26 24H14.9c-.4-1.7-2-3-3.9-3s-3.4 1.3-3.9 3H6c-.6 0-1 .4-1 1s.4 1 1 1h1.1c.4 1.7 2 3 3.9 3s3.4-1.3 3.9-3H26c.6 0 1-.4 1-1s-.4-1-1-1zm-15 3.4c-1.3 0-2.4-1.1-2.4-2.4 0-1.3 1.1-2.4 2.4-2.4 1.3 0 2.4 1.1 2.4 2.4 0 1.3-1.1 2.4-2.4 2.4zM26 8H14.9c-.4-1.7-2-3-3.9-3S7.6 6.3 7.1 8H6c-.6 0-1 .4-1 1s.4 1 1 1h1.1c.4 1.7 2 3 3.9 3s3.4-1.3 3.9-3H26c.6 0 1-.4 1-1s-.4-1-1-1zm-15 3.4c-1.3 0-2.4-1.1-2.4-2.4 0-1.3 1.1-2.4 2.4-2.4 1.3 0 2.4 1.1 2.4 2.4 0 1.3-1.1 2.4-2.4 2.4zM26 16h-2.1c-.4-1.7-2-3-3.9-3s-3.4 1.3-3.9 3H6c-.6 0-1 .4-1 1s.4 1 1 1h10.1c.4 1.7 2 3 3.9 3s3.4-1.3 3.9-3H26c.6 0 1-.4 1-1s-.4-1-1-1zm-6 3.4c-1.3 0-2.4-1.1-2.4-2.4 0-1.3 1.1-2.4 2.4-2.4 1.3 0 2.4 1.1 2.4 2.4 0 1.3-1.1 2.4-2.4 2.4zM28 0H4C1.8 0 0 1.8 0 4v24c0 2.2 1.8 4 4 4h24c2.2 0 4-1.8 4-4V4c0-2.2-1.8-4-4-4zm2 28c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V4c0-1.1.9-2 2-2h24c1.1 0 2 .9 2 2v24z"/>
          </svg></a>
    </nav>
    <main>
        <div class="main-header">
            <h2 class="headline">Dashboard</h2>
            <div class="main-header-search">
                <input type="search" placeholder="Search..." />
            </div>
        </div>
        <!-- alert banner -->
        <div class="alert" id="alert"><!-- JS will insert alert here --></div>



        <!-- line graph charts -->
        <section class="traffic">
            <div class="traffic-header">
                <h3>Traffic</h3>
                <ul class="traffic-nav">
                    <li class="traffic-nav-link" onclick="hourlyUpdate()">Hourly</li>
                    <li class="traffic-nav-link" onclick="dailyUpdate()">Daily</li>
                    <li class="traffic-nav-link active" onclick="weeklyUpdate()">Weekly</li>
                    <li class="traffic-nav-link" onclick="monthlyUpdate()">Monthly</li>
                </ul>
            </div>
            <div class="widget-container-full">
            <!-- element line graph will attach to -->
            <canvas id="traffic-chart"></canvas>
            </div>
        </section>

        <!-- bar graph -->
        <section class="daily">
            <h3>Daily Traffic</h3>

        <div class="widget-container-half">
            <!-- element bar graph will attach to -->
            <canvas id="daily-chart"></canvas>
        </div>
        </section>

        <!-- doughnut graph -->
        <section class="mobile">
            <h3>Mobile users</h3>

        <div class="widget-container-half">
            <!-- element bar graph will attach to -->
            <canvas id="mobile-chart"></canvas>
        </div>
        </section>


        <section class="social">
            <div class="social-header">
                <h3>Social Stats</h3>
            </div>
            <div class="social-content">
                <div class="social-container">
                    <div class="social-image">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                        <path fill="white" d="M32,3.1c-1.2,0.5-2.4,0.9-3.8,1c1.4-0.8,2.4-2.1,2.9-3.6c-1.3,0.8-2.7,1.3-4.2,1.6C25.8,0.8,24,0,22.2,0
                            c-3.6,0-6.6,2.9-6.6,6.6c0,0.5,0.1,1,0.2,1.5C10.3,7.8,5.5,5.2,2.2,1.2c-0.6,1-0.9,2.1-0.9,3.3c0,2.3,1.2,4.3,2.9,5.5
                            c-1.1,0-2.1-0.3-3-0.8c0,0,0,0.1,0,0.1c0,3.2,2.3,5.8,5.3,6.4c-0.6,0.1-1.1,0.2-1.7,0.2c-0.4,0-0.8,0-1.2-0.1
                            c0.8,2.6,3.3,4.5,6.1,4.6c-2.2,1.8-5.1,2.8-8.2,2.8c-0.5,0-1.1,0-1.6-0.1c2.9,1.9,6.4,3,10.1,3c12.1,0,18.7-10,18.7-18.7
                            c0-0.3,0-0.6,0-0.8C30,5.6,31.1,4.4,32,3.1z"/>
                        </svg>

                    </div>
                    <div class="social-text">
                        <p class="social-name">Twitter</p>
                        <p class="social-number">10,345</p>
                    </div>
                </div>
                <div class="social-container">
                    <div class="social-image">
                        <svg enable-background="new 0 0 56.693 56.693" height="56.693px"  version="1.1" viewBox="0 0 56.693 56.693" width="56.693px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path fill="white" d="M40.43,21.739h-7.645v-5.014c0-1.883,1.248-2.322,2.127-2.322c0.877,0,5.395,0,5.395,0V6.125l-7.43-0.029  c-8.248,0-10.125,6.174-10.125,10.125v5.518h-4.77v8.53h4.77c0,10.947,0,24.137,0,24.137h10.033c0,0,0-13.32,0-24.137h6.77  L40.43,21.739z"/></svg>
                    </div>
                    <div class="social-text">
                        <p class="social-name">FaceBook</p>
                        <p class="social-number">8,739</p>
                    </div>
                </div>
                <div class="social-container">
                    <div class="social-image">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 32 32" style="enable-background:new 0 0 32 32;" xml:space="preserve">
                <path fill="white" d="M17.7,25.7c0-0.3,0-0.5-0.1-0.8c-0.1-0.2-0.1-0.5-0.2-0.7c-0.1-0.2-0.2-0.4-0.3-0.7c-0.2-0.2-0.3-0.4-0.4-0.6
                    c-0.1-0.2-0.3-0.3-0.5-0.6c-0.2-0.2-0.4-0.4-0.5-0.5c-0.1-0.1-0.3-0.3-0.6-0.5c-0.3-0.2-0.5-0.4-0.6-0.4s-0.3-0.2-0.6-0.4
                    c-0.3-0.2-0.5-0.4-0.6-0.4c-0.2,0-0.5,0-1,0c-0.7,0-1.4,0-2,0.1c-0.7,0.1-1.4,0.2-2.1,0.5c-0.7,0.2-1.3,0.5-1.9,0.9s-1,0.8-1.3,1.4
                    c-0.3,0.6-0.5,1.3-0.5,2.1c0,0.9,0.2,1.7,0.7,2.3c0.5,0.7,1.1,1.2,1.8,1.6s1.5,0.7,2.3,0.9s1.6,0.3,2.4,0.3c0.8,0,1.5-0.1,2.2-0.2
                    c0.7-0.2,1.3-0.4,1.9-0.8c0.6-0.3,1.1-0.8,1.4-1.4C17.5,27.2,17.7,26.5,17.7,25.7z M15.4,9.1c0-0.8-0.1-1.6-0.3-2.5
                    c-0.2-0.9-0.5-1.7-0.9-2.5c-0.4-0.8-0.9-1.5-1.6-2c-0.7-0.5-1.5-0.8-2.3-0.8c-1.2,0-2.1,0.4-2.8,1.3c-0.7,0.9-1,1.9-1,3.2
                    c0,0.6,0.1,1.2,0.2,1.9c0.1,0.7,0.4,1.3,0.7,2c0.3,0.7,0.7,1.3,1.1,1.8c0.4,0.5,0.9,1,1.5,1.3c0.6,0.3,1.2,0.5,1.9,0.5
                    c1.2,0,2.1-0.4,2.7-1.2C15.1,11.4,15.4,10.4,15.4,9.1z M12.9,0h8.4l-2.6,1.5h-2.6c0.9,0.6,1.6,1.4,2.1,2.4s0.8,2.1,0.8,3.2
                    c0,0.9-0.1,1.8-0.4,2.5c-0.3,0.7-0.7,1.3-1.1,1.8c-0.4,0.4-0.8,0.9-1.3,1.2c-0.4,0.4-0.8,0.8-1.1,1.2c-0.3,0.4-0.4,0.8-0.4,1.3
                    c0,0.3,0.1,0.7,0.3,1c0.2,0.3,0.5,0.6,0.8,0.9c0.3,0.3,0.7,0.6,1.1,0.9c0.4,0.3,0.8,0.7,1.2,1.1c0.4,0.4,0.8,0.8,1.1,1.3
                    c0.3,0.5,0.6,1,0.8,1.6c0.2,0.6,0.3,1.3,0.3,2c0,2.1-0.9,3.9-2.7,5.4c-1.9,1.7-4.6,2.5-8.1,2.5c-0.8,0-1.5-0.1-2.3-0.2
                    c-0.8-0.1-1.6-0.3-2.3-0.6c-0.8-0.3-1.5-0.7-2.1-1.1c-0.6-0.4-1.1-1-1.5-1.7C1,27.6,0.8,26.9,0.8,26c0-0.8,0.2-1.6,0.7-2.6
                    c0.4-0.8,1-1.5,1.8-2.1c0.8-0.6,1.8-1.1,2.8-1.4c1-0.3,2-0.5,3-0.7c0.9-0.1,1.9-0.2,2.9-0.3c-0.8-1.1-1.2-2-1.2-2.9
                    c0-0.2,0-0.3,0-0.5c0-0.1,0.1-0.3,0.1-0.4c0-0.1,0.1-0.2,0.2-0.4c0.1-0.2,0.1-0.3,0.1-0.4c-0.5,0.1-1,0.1-1.3,0.1
                    c-1.9,0-3.5-0.6-4.9-1.9c-1.4-1.3-2-2.8-2-4.7c0-1.8,0.6-3.4,1.8-4.8C6,1.7,7.5,0.8,9.3,0.4C10.5,0.1,11.7,0,12.9,0z M32.8,4.9v2.5
                    h-4.9v4.9h-2.5V7.4h-4.9V4.9h4.9V0h2.5v4.9H32.8z"/>
                </svg>
                    </div>
                    <div class="social-text">
                        <p class="social-name">Google+</p>
                        <p class="social-number">2,530</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- new members widget -->
        <section class="members">
            <h3>New Members</h3>
            <div class="members-container">
                <img src="images/member-1.jpg"   class="profile-image" alt="profile picture">
                <div class="members-text">
                    <p>Victoria Chambers</p>
                   <a href="#">victoria.chambers80@example.com</a>
                </div>
                <p class="members-date">06/12/20</p>
            </div>

            <div class="members-container">
                <img src="images/mozart-silhouette.jpg" class="profile-image" alt="profile picture">
                <div class="members-text">
                    <p>Dale Byrd</p>
                    <a href="#">dale.byrd520@example.com</a>
                </div>
                <p class="members-date">06/12/20</p>
            </div>

            <div class="members-container">
                <img src="images/member-3.jpg" class="profile-image" alt="profile picture">
                <div class="members-text">
                    <p>Dawn Wood</p>
                    <a href="#">dawn.wood16@example.com</a>
                </div>
                <p class="members-date">06/12/20</p>
            </div>

            <div class="members-container">
                <img src="images/member-4.jpg" class="profile-image" alt="profile picture">
                <div class="members-text">
                    <p>Dan Oliver</p>
                    <a href="#">dan.oliver82@example.com</a>
                </div>
                <p class="members-date">06/12/20</p>
            </div>
        </section>

        <section class="activity">
            <h3>Recent Activity</h3>

            <div class="activity-container">
                <img src="images/member-1.jpg" class="profile-image" alt="profile picture">
                <div class="activity-text">
                    <p>Victoria Chambers commented on <a href="#" class="activity-link">AmaDeus' SEO Tips</a></p>
                    <p>4 hours ago</p>
                </div>
                <span class="arrow">></span>
            </div>

            <div class="activity-container">
                <img src="images/member-2.jpg" class="profile-image" alt="profile picture">
                <div class="activity-text">
                    <p>Dale Byrd liked the post <a href="#" class="activity-link">FaceBook's Changes for 2021</a></p>
                    <p>5 hours ago</p>
                </div>
                <span class="arrow">></span>
            </div>

            <div class="activity-container">
                <img src="images/member-3.jpg" class="profile-image" alt="profile picture">
                <div class="activity-text">
                    <p>Dawn Wood commented on the post <a href="#" class="activity-link">FaceBook's Changes for 2021</a></p>
                    <p>5 hours ago</p>
                </div>
                <span class="arrow">></span>
            </div>

            <div class="activity-container">
                <img src="images/member-4.jpg" class="profile-image" alt="profile picture">
                <div class="activity-text">
                    <p>Dan Oliver posted <a href="#" class="activity-link">AmaDeus' SEO Tips</a></p>
                    <p>1 day ago</p>
                </div>
                <span class="arrow">></span>
            </div>
        </section>

        <!-- messaging widget -->
        <section class="message">
            <h3>Message User</h3>

            <form class="widget-container">
                <input type="text" placeholder="Search for user" class="form-field" id="userField" list="users">
                <datalist id="users">
                    <option value="Dale Byrd">
                    <option value="Dan Oliver">
                    <option value="Dawn Wood">
                    <option value="Tashan Duncan">
                    <option value="Victoria Chambers">
                </datalist>
                <textarea placeholder="Message for user" class="form-area" id= "messageField"></textarea>
                <button class="button-primary" id="send">Send</button>
            </form>
        </section>

        <!-- local settings widget -->
        <section class="settings">
            <h3>Settings</h3>
            <!-- custom CSS toggle code-->
            <div class="widget-container">
                <div class="widget-toggle">
                    <p>Send Email Notifications</p>
                    <label class="switch">
                        <input type="checkbox" id='email-notifications'>
                        <span class="slider round"></span>
                    </label>
                </div>
                <div class="widget-toggle">
                    <p>Set Profile to Public</p>
                    <label class="switch">
                        <input type="checkbox" id='public'>
                        <span class="slider round"></span>
                    </label>
                </div>
                <!-- custom CSS toggle code-->
                <select class="form-field" id="timezone">
                    <option value="-12:00">(GMT -12:00) Eniwetok, Kwajalein</option>
                    <option value="-11:00">(GMT -11:00) Midway Island, Samoa</option>
                    <option value="-10:00">(GMT -10:00) Hawaii</option>
                    <option value="-09:50">(GMT -9:30) Taiohae</option>
                    <option value="-09:00">(GMT -9:00) Alaska</option>
                    <option value="-08:00">(GMT -8:00) Pacific Time (US &amp; Canada)</option>
                    <option value="-07:00">(GMT -7:00) Mountain Time (US &amp; Canada)</option>
                    <option value="-06:00">(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
                    <option value="-05:00">(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
                    <option value="-04:50">(GMT -4:30) Caracas</option>
                    <option value="-04:00">(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
                    <option value="-03:50">(GMT -3:30) Newfoundland</option>
                    <option value="-03:00">(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
                    <option value="-02:00">(GMT -2:00) Mid-Atlantic</option>
                    <option value="-01:00">(GMT -1:00) Azores, Cape Verde Islands</option>
                    <option value="+00:00" selected="selected">(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
                    <option value="+01:00">(GMT +1:00) Brussels, Copenhagen, Madrid, Paris</option>
                    <option value="+02:00">(GMT +2:00) Kaliningrad, South Africa</option>
                    <option value="+03:00">(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
                    <option value="+03:50">(GMT +3:30) Tehran</option>
                    <option value="+04:00">(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
                    <option value="+04:50">(GMT +4:30) Kabul</option>
                    <option value="+05:00">(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
                    <option value="+05:50">(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
                    <option value="+05:75">(GMT +5:45) Kathmandu, Pokhara</option>
                    <option value="+06:00">(GMT +6:00) Almaty, Dhaka, Colombo</option>
                    <option value="+06:50">(GMT +6:30) Yangon, Mandalay</option>
                    <option value="+07:00">(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
                    <option value="+08:00">(GMT +8:00) Beijing, Perth, Singapore, Hong Kong</option>
                    <option value="+08:75">(GMT +8:45) Eucla</option>
                    <option value="+09:00">(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
                    <option value="+09:50">(GMT +9:30) Adelaide, Darwin</option>
                    <option value="+10:00">(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
                    <option value="+10:50">(GMT +10:30) Lord Howe Island</option>
                    <option value="+11:00">(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
                    <option value="+11:50">(GMT +11:30) Norfolk Island</option>
                    <option value="+12:00">(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
                    <option value="+12:75">(GMT +12:45) Chatham Islands</option>
                    <option value="+13:00">(GMT +13:00) Apia, Nukualofa</option>
                    <option value="+14:00">(GMT +14:00) Line Islands, Tokelau</option>
                </select>
                <div class="settings-button" >
                    <button class="button-primary" id="save">Save</button>
                    <button class="button-disabled" id="cancel">Cancel</button>
                </div>
            </div>
        </section>



    </main>
    <script src="./js/charts.js"></script>
    <script src="./js/app.js"></script>
</body>
</html>
