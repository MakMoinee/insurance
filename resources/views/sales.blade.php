<!--
=========================================================
* Soft UI Dashboard - v1.0.6
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png">
    <link rel="icon" type="image/png" href="/storage/image/favicon.ico">
    <title>
        Dashboard
    </title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="css/nucleo-icons.css" rel="stylesheet" />
    <link href="css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="css/soft-ui-dashboard.css?v=1.0.6" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .autocomplete {
            position: relative;
            display: inline-block;
        }

        .autocomplete-items {
            position: absolute;
            border: 1px solid #d4d4d4;
            border-bottom: none;
            border-top: none;
            z-index: 99;
            /*position the autocomplete items to be the same width as the container:*/
            top: 100%;
            left: 0;
            right: 0;
        }

        .autocomplete-items div {
            padding: 10px;
            cursor: pointer;
            background-color: #fff;
            border-bottom: 1px solid #d4d4d4;
        }

        /*when hovering an item:*/
        .autocomplete-items div:hover {
            background-color: #e9e9e9;
        }

        /*when navigating through the items using the arrow keys:*/
        .autocomplete-active {
            background-color: DodgerBlue !important;
            color: #ffffff;
        }
    </style>
</head>

<body class="g-sidenav-show  bg-gray-100">
    <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 "
        id="sidenav-main">
        <div class="sidenav-header">
            <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
                aria-hidden="true" id="iconSidenav"></i>
            <a class="navbar-brand m-0" href="/" target="_blank">
                <img src="/storage/image/favicon.ico" class="navbar-brand-img h-100" alt="main_logo">
                <span class="ms-1 font-weight-bold">Admin Dashboard</span>
            </a>
        </div>
        <hr class="horizontal dark mt-0">
        <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link " href="/">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>shop </title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(0.000000, 148.000000)">
                                                <path class="color-background opacity-6"
                                                    d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                                                </path>
                                                <path class="color-background"
                                                    d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Dashboard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="/members">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/storage/image/team2.png" alt="" width="15px" height="15px">
                        </div>
                        <span class="nav-link-text ms-1">Members</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="/collection">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 43 36" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>credit-card</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-2169.000000, -745.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(453.000000, 454.000000)">
                                                <path class="color-background opacity-6"
                                                    d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z">
                                                </path>
                                                <path class="color-background"
                                                    d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Collection</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="/plans">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg version="1.1" id="designs" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                width="32px" height="32px" viewBox="0 0 32 32"
                                style="enable-background:new 0 0 32 32;" xml:space="preserve">
                                <style type="text/css">
                                    .sketchy_een {
                                        fill: #111918;
                                    }
                                </style>
                                <path class="sketchy_een"
                                    d="M29.998,27.465c-0.057-0.778-0.039-1.565-0.036-2.345c0.002-0.796,0.002-1.594-0.004-2.39
	c-0.012-1.679-0.024-3.358-0.077-5.035c-0.026-0.826-0.053-1.647-0.057-2.473c-0.004-0.861-0.01-1.723-0.028-2.584
	c-0.016-0.836-0.024-1.673-0.016-2.509c0.006-0.915,0.038-1.827,0.045-2.742c0.002-0.146,0.002-0.292,0.004-0.438
	c0.002-0.458-0.383-0.84-0.84-0.84c-0.06,0-0.114,0.023-0.171,0.035c-0.013-0.016-0.019-0.036-0.034-0.051
	c-0.005-0.005-0.012-0.006-0.017-0.011c0.006-0.038,0.023-0.073,0.024-0.112c0.008-0.476,0.032-0.952,0.04-1.426
	c0.01-0.504-0.427-0.924-0.923-0.924c-0.508,0-0.919,0.421-0.923,0.924c-0.005,0.434,0.002,0.87,0.002,1.307
	c-0.303-0.004-0.605-0.011-0.908-0.016c-0.146-0.002-0.291-0.003-0.437-0.003c-0.364,0-0.727,0.009-1.09,0.016
	c0.005-0.04,0.024-0.076,0.022-0.117c-0.02-0.401-0.018-0.802-0.036-1.203c-0.022-0.496-0.397-0.909-0.909-0.909
	c-0.472,0-0.936,0.413-0.907,0.909c0.024,0.401,0.053,0.802,0.093,1.203c0.005,0.049,0.021,0.089,0.029,0.135
	c-0.717,0.008-1.435,0.012-2.152,0.014c0.003-0.139,0.003-0.278,0.003-0.418c0-0.33-0.004-0.658-0.01-0.988
	c-0.008-0.518-0.427-0.948-0.95-0.948c-0.508,0-0.962,0.431-0.948,0.948c0.008,0.31,0.014,0.618,0.028,0.928
	c0.006,0.154,0.012,0.306,0.02,0.46c0,0.01,0,0.02,0.001,0.029C18.113,5.892,17.387,5.898,16.66,5.9
	c-0.02-0.42-0.043-0.837-0.073-1.255c-0.02-0.249-0.089-0.468-0.271-0.65c-0.172-0.172-0.407-0.271-0.652-0.271
	c-0.468,0-0.964,0.421-0.921,0.92c0.038,0.421,0.081,0.84,0.126,1.258c0,0.001,0.001,0.003,0.001,0.004
	c-0.202,0.002-0.404,0-0.607,0.003c-0.478,0.006-0.956,0.013-1.434,0.021c0.01-0.498,0.017-0.999,0.019-1.497
	c0.002-0.496-0.415-0.909-0.909-0.909c-0.494,0-0.911,0.413-0.909,0.909c0.002,0.498-0.015,1.006,0.026,1.503
	c-0.493-0.003-0.986-0.004-1.48-0.011c-0.293-0.005-0.586-0.007-0.88-0.012c0-0.01,0.006-0.018,0.006-0.028
	C8.711,5.37,8.731,4.857,8.737,4.341c0.004-0.492-0.415-0.903-0.903-0.903c-0.488,0-0.907,0.411-0.903,0.903
	C6.937,4.857,6.955,5.37,6.957,5.886c0,0.002,0.001,0.003,0.001,0.004C6.163,5.877,5.369,5.866,4.574,5.858
	C4.571,5.378,4.569,4.898,4.55,4.417C4.528,3.923,4.153,3.509,3.641,3.509c-0.474,0-0.938,0.415-0.909,0.909
	C2.761,4.908,2.799,5.399,2.831,5.89C2.813,5.896,2.793,5.895,2.776,5.902C2.597,5.926,2.425,5.995,2.297,6.124
	c-0.14,0.14-0.265,0.379-0.241,0.585c0.101,0.885,0.174,1.77,0.19,2.659c0.016,0.806-0.004,1.612-0.004,2.418
	c0.002,1.573-0.002,3.145,0.006,4.717c0.016,3.198-0.02,6.396-0.02,9.595c0,0.37-0.009,0.74-0.018,1.109
	C2.084,27.35,2,27.531,2,27.734c0,0.439,0.367,0.816,0.81,0.81c0.855-0.01,1.711-0.03,2.566-0.016
	c0.838,0.012,1.675,0.026,2.511,0.03c1.648,0.012,3.295-0.004,4.941-0.008c0.486,0,0.972,0,1.456,0
	c1.193,0.002,2.386,0.004,3.579-0.022c1.671-0.034,3.342-0.045,5.012-0.101c1.008-0.034,2.013-0.057,3.02-0.051
	c0.371,0.004,0.743,0.004,1.114,0.004c0.642,0,1.286,0,1.93,0.014c0.133,0.003,0.253-0.038,0.365-0.098
	C29.686,28.21,30.027,27.875,29.998,27.465z M24.228,26.813c-1.663,0.037-3.329,0.105-4.992,0.117
	c-0.822,0.004-1.642,0.03-2.461,0.036c-0.853,0.008-1.705,0.006-2.558,0.008c-1.683,0.002-3.366-0.016-5.049-0.016
	c-1.011,0-2.021,0.014-3.032,0.004c-0.755-0.008-1.51-0.017-2.265-0.025c-0.002-0.545-0.001-1.09-0.007-1.636
	c-0.008-0.764-0.008-1.529-0.008-2.293c0-1.624-0.012-3.246-0.016-4.869c-0.002-1.582,0.022-3.165,0.014-4.747
	c-0.004-0.796-0.002-1.59-0.002-2.386c0-0.838,0.014-1.677-0.012-2.517C3.827,8.127,3.79,7.769,3.76,7.411
	c1.46-0.012,2.921-0.036,4.382-0.039c0.77-0.002,1.539,0.024,2.309,0.028c0.8,0.004,1.6,0.002,2.4-0.02
	c1.582-0.042,3.167-0.047,4.749-0.042c1.596,0.006,3.188-0.002,4.784-0.022c1-0.012,1.997,0.006,2.997,0.014
	c0.496,0.004,0.992,0.008,1.487,0.024c0.426,0.011,0.856,0.016,1.281,0.057c0.007,3.328-0.066,6.659,0.038,9.987
	c0.051,1.671,0.036,3.346,0.059,5.018c0.02,1.451,0.019,2.906,0.011,4.358c-0.131,0-0.261-0.001-0.392-0.001
	C26.654,26.773,25.44,26.784,24.228,26.813z M13.337,16.974c-0.375-0.012-0.749-0.065-1.122-0.069
	c-0.389-0.006-0.776-0.004-1.164-0.006c-0.401-0.002-0.804,0.008-1.205,0.018c-0.385,0.01-0.77,0.02-1.156,0.018
	c-0.462-0.002-0.849-0.385-0.849-0.847c0-0.451,0.378-0.85,0.833-0.85c0.006,0,0.011,0,0.017,0c0.849,0.018,1.697,0.065,2.546,0.047
	c0.81-0.016,1.622,0.014,2.432,0.022c0.755,0.006,1.507,0.03,2.262,0.038c0.666,0.008,1.331-0.002,1.997,0.012
	c1.219,0.028,2.438,0.052,3.657,0.04c0.425-0.004,0.78,0.358,0.78,0.78c0,0.425-0.356,0.778-0.78,0.78
	c-1.337,0-2.673,0.04-4.01,0.052C16.162,17.022,14.748,17.018,13.337,16.974z M18.438,19.951c-0.531,0.002-1.067-0.01-1.596-0.041
	c-0.666-0.037-1.329-0.036-1.995-0.049c-0.425-0.01-0.78-0.348-0.78-0.78c0-0.413,0.356-0.798,0.78-0.78
	c0.597,0.024,1.191,0.059,1.788,0.065c0.486,0.006,0.972,0.01,1.458,0.018c0.607,0.01,1.213-0.002,1.819-0.004
	c0.136,0,0.275,0,0.413,0c0.184,0,0.365,0.002,0.551-0.002c0.233-0.004,0.466-0.018,0.697-0.02c0.122,0,0.249,0.002,0.373,0.004
	c0.259,0.003,0.52,0.007,0.779-0.017c0.046-0.009,0.092-0.02,0.136-0.036c0.061-0.023,0.128-0.033,0.196-0.033
	c0.143,0,0.292,0.045,0.405,0.11c0.174,0.103,0.304,0.271,0.358,0.466c0.117,0.419-0.138,0.834-0.543,0.958
	c-0.28,0.087-0.61,0.061-0.899,0.069c-0.207,0.004-0.413,0.006-0.618,0.01c-0.111,0.004-0.221,0.002-0.332,0.002
	c-0.111-0.002-0.221-0.002-0.33,0c-0.294,0.01-0.589,0.02-0.883,0.036C19.621,19.955,19.033,19.949,18.438,19.951z M26.933,22.165
	c0,0.413-0.348,0.771-0.764,0.765c-0.227-0.002-0.456-0.008-0.685,0.004c-1.041,0.049-2.084-0.042-3.125-0.061
	c-0.64-0.01-1.278-0.02-1.916-0.038c-0.676-0.016-1.351-0.042-2.027-0.069c-0.393-0.018-0.723-0.318-0.723-0.725
	c0-0.366,0.31-0.726,0.687-0.726c0.012,0,0.024,0,0.036,0.001c0.379,0.024,0.755,0.073,1.134,0.083
	c0.142,0.006,0.282,0.006,0.425,0.004c0.176,0,0.354,0,0.531,0.008c0.322,0.014,0.644,0.016,0.966,0.022
	c0.597,0.008,1.193,0.034,1.792,0.034c0.267,0,0.535,0.012,0.802,0.012c0.089,0,0.18,0.002,0.271,0.002
	c0.194,0.002,0.385,0.004,0.579-0.01c0.205-0.016,0.411-0.03,0.618-0.034c0.142-0.002,0.288,0.001,0.431-0.007c0,0,0.001,0,0.001,0
	C26.447,21.315,26.933,21.653,26.933,22.165z M8.316,13.83c-0.697-0.026-1.399,0.028-2.098,0.034
	c-0.468,0.006-0.857-0.393-0.857-0.857c0-0.461,0.383-0.857,0.847-0.857c0.003,0,0.007,0,0.01,0c0.66,0.006,1.32,0.032,1.979,0.051
	c1.371,0.04,2.744,0.122,4.115,0.111c0.563-0.004,1.126,0.006,1.687,0.016c0.306,0.006,0.622-0.001,0.927-0.027
	c0.247-0.029,0.481,0.02,0.669,0.207c0.142,0.144,0.223,0.34,0.223,0.543c0,0.433-0.348,0.745-0.765,0.765
	c-0.294,0.016-0.585,0.012-0.879,0.01c-0.62-0.002-1.241,0.006-1.859,0.014c-0.685,0.01-1.371,0.02-2.054,0.012
	c-0.371-0.002-0.743-0.004-1.114-0.012c-0.122-0.002-0.243-0.002-0.365-0.002C8.626,13.836,8.47,13.836,8.316,13.83z" />
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Plans</span>
                    </a>
                </li>
                @if ($utype == 1)
                    <li class="nav-item">
                        <a class="nav-link  " href="/user_roles">
                            <div
                                class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                                <?xml version="1.0" encoding="iso-8859-1"?>
                                <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    viewBox="0 0 511.999 511.999" style="enable-background:new 0 0 511.999 511.999;"
                                    xml:space="preserve">
                                    <polygon style="fill:#F4661E;"
                                        points="474.261,401.508 474.261,444.621 436.537,444.621 301.808,444.621 301.808,401.508 
	382.537,401.508 " />
                                    <path style="fill:#FEDAAB;"
                                        d="M188.634,318.73c15.629,8.192,33.844,12.718,53.892,12.718s38.263-4.635,53.892-12.718v34.276
	c0,0-22.203,26.945-53.892,26.945s-53.892-26.945-53.892-26.945L188.634,318.73L188.634,318.73z" />
                                    <path style="fill:#4CBD91;"
                                        d="M344.921,385.341c14.551,4.635,26.945,9.7,37.616,15.197v0.97h-80.73v43.113h134.729v1.94
	c10.671,17.245,10.779,30.395,10.779,30.395s0,11.856,0,26.945H37.738c0-15.09,0-26.945,0-26.945s0.97-58.958,102.395-91.616
	c0,0,36.755-19.185,48.503-32.335c0,0,22.203,26.945,53.892,26.945s53.892-26.945,53.892-26.945
	C308.166,366.155,344.921,385.341,344.921,385.341z" />
                                    <path style="fill:#FEDAAB;"
                                        d="M296.418,318.73c-15.629,8.084-33.844,12.718-53.892,12.718s-38.263-4.527-53.892-12.718
	c-34.598-18-57.34-53.353-63.161-95.497c-16.706-2.263-33.844-18.108-33.844-31.903c0-14.874,14.443-21.557,32.335-21.557v-21.557
	c0,0,43.113,0,91.616-48.503c0,0,70.059,43.113,145.508,43.113v26.945c17.892,0,32.335,6.682,32.335,21.557
	c0,13.797-17.137,29.64-33.844,31.903C353.76,265.377,331.016,300.73,296.418,318.73z" />
                                    <path style="fill:#A67C52;"
                                        d="M215.581,99.714c-48.503,48.503-91.616,48.503-91.616,48.503v-5.389
	c0,0-5.605-134.729,118.562-134.729c123.951,0,118.562,134.729,118.562,134.729C285.64,142.827,215.581,99.714,215.581,99.714z" />
                                    <path style="fill:#231F20;"
                                        d="M482.359,393.409h-96.15l0.037-0.07c-11.234-5.787-23.733-10.86-38.188-15.498
	c-9.621-5.065-33.321-18.491-43.542-28.137v-26.192c32.68-18.787,55.045-52.405,62.206-93.53
	c18.607-5.313,34.799-22.687,34.799-38.653c0-16.219-12.185-26.993-32.335-29.224v-19.129c0.158-4.579,1.563-67.652-37.994-108.823
	C309.419,11.491,279.587,0,242.527,0c-37.158,0-67.044,11.513-88.826,34.219c-39.48,41.157-38.001,104.125-37.834,108.761v19.125
	c-20.151,2.231-32.335,13.004-32.335,29.224c0,15.966,16.194,33.339,34.799,38.653c7.162,41.133,29.533,74.756,62.206,93.531v26.19
	c-10.217,9.641-33.938,23.079-43.554,28.144C31.921,411.938,29.684,474.184,29.641,476.823l-0.001,35.176h425.773v-35.11
	c-0.004-0.509-0.175-10.398-6.421-24.172h33.366v-59.308H482.359z M196.732,331.273c14.14,5.487,29.485,8.273,45.794,8.273
	c16.181,0,31.524-2.8,45.794-8.317v18.657c-5.531,5.783-23.048,21.967-45.794,21.967c-22.598,0-40.237-16.216-45.794-21.984
	L196.732,331.273L196.732,331.273z M165.457,45.361c18.605-19.353,44.534-29.165,77.07-29.165c32.442,0,58.322,9.793,76.918,29.106
	c27.707,28.776,32.611,71.659,33.422,89.245c-69.062-2.924-132.388-41.328-133.041-41.73l-5.447-3.351l-4.523,4.522
	c-33.19,33.19-63.757,42.509-77.815,45.119C132.206,125.9,134.962,77.083,165.457,45.361z M133.495,222.127l-0.841-6.091
	l-6.093-0.826c-11.717-1.588-26.834-13.453-26.834-23.88c0-12.488,18.552-13.459,24.237-13.459h8.098v-22.305
	c14.834-2.216,48.103-10.995,84.763-45.763c17.497,9.815,73.821,38.599,136.169,40.961l-0.005,27.106h8.098
	c5.686,0,24.237,0.97,24.237,13.459c0,10.427-15.117,22.292-26.833,23.88l-6.094,0.826l-0.841,6.091
	c-5.559,40.254-27.019,72.846-58.86,89.412c-15.154,7.839-32.033,11.812-50.171,11.812c-18.337,0-35.203-3.968-50.155-11.805
	C160.515,294.972,139.055,262.381,133.495,222.127z M439.218,477.059v18.745H45.836v-18.699c0.052-0.948,0.975-13.94,12.483-30.19
	c20.263-28.612,57.024-45.086,84.297-53.868l0.654-0.211l0.61-0.319c3.353-1.75,29.401-15.505,44.481-28.135
	c9.324,8.777,28.869,23.665,54.166,23.665c25.296,0,44.842-14.888,54.166-23.665c15.08,12.629,41.129,26.385,44.481,28.135
	l0.622,0.325l0.668,0.213c0.366,0.117,0.715,0.236,1.078,0.353H293.71v59.31h137.064
	C438.612,466.212,439.19,476.403,439.218,477.059z M466.163,436.524H309.905v-26.918h156.259V436.524z" />
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                    <g>
                                    </g>
                                </svg>
                            </div>
                            <span class="nav-link-text ms-1">Roles</span>
                        </a>
                    </li>
                @endif
                <li class="nav-item">
                    <a class="nav-link  active" href="/sales_report">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <?xml version="1.0" encoding="iso-8859-1"?>
                            <!-- Generator: Adobe Illustrator 19.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
                            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;"
                                xml:space="preserve">
                                <g>
                                    <polygon style="fill:#E64C3C;"
                                        points="247.172,450.207 176.551,450.207 211.8,388.414 	" />
                                    <polygon style="fill:#C03A2B;"
                                        points="158.896,512 176.551,450.207 247.172,450.207 264.827,512 	" />
                                    <path style="fill:#13A085;"
                                        d="M512,141.241C512,63.232,448.759,0,370.758,0S229.517,63.232,229.517,141.241
		s63.241,141.241,141.241,141.241S512,219.251,512,141.241" />
                                    <path style="fill:#4482C3;"
                                        d="M17.797,422.664C6.859,428.42,0,439.807,0,452.175v59.825h158.897l17.655-61.793l-45.497-68.996
		C95.956,385.491,57.901,401.557,17.797,422.664" />
                                    <path style="fill:#C03A2B;"
                                        d="M134.46,338.819l-10.302,31.938l52.392,79.448l35.31-61.793
		C181.273,388.412,153.793,367.844,134.46,338.819" />
                                    <path style="fill:#4482C3;"
                                        d="M405.926,422.664c10.937,5.756,17.796,17.143,17.796,29.511v59.825H264.826l-17.655-61.793
		l45.497-68.996C327.767,385.491,365.823,401.557,405.926,422.664" />
                                    <path style="fill:#C03A2B;"
                                        d="M289.263,338.819l10.302,31.938l-52.392,79.448l-35.31-61.793
		C242.45,388.412,269.93,367.844,289.263,338.819" />
                                    <path style="fill:#FDD7AD;"
                                        d="M229.517,141.241c0-17.346,3.275-33.88,8.995-49.231c-8.527-2.357-17.426-3.734-26.65-3.734
		c-58.5,0-105.931,50.388-105.931,112.552v46.345c0,66.304,47.431,141.241,105.931,141.241c51.456,0,94.305-57.962,103.901-117.045
		C265.074,249.927,229.517,199.733,229.517,141.241" />
                                    <g>
                                        <path style="fill:#FFFFFF;"
                                            d="M370.758,256c-4.873,0-8.828-3.946-8.828-8.828V35.31c0-4.882,3.955-8.828,8.828-8.828
			s8.828,3.946,8.828,8.828v211.862C379.586,252.054,375.631,256,370.758,256" />
                                        <path style="fill:#FFFFFF;"
                                            d="M370.758,238.345c-21.804,0-40.413-7.645-51.041-20.983c-3.037-3.814-2.419-9.366,1.395-12.403
			c3.814-3.037,9.375-2.419,12.403,1.404c7.159,8.978,21.08,14.327,37.244,14.327c21.23,0,44.138-13.497,44.138-35.31
			c0-21.124-22.819-35.31-44.138-35.31c-29.723,0-61.793-20.25-61.793-52.966s32.071-52.966,61.793-52.966
			c22.131,0,40.254,7.45,51.041,20.983c3.037,3.814,2.419,9.366-1.395,12.403c-3.814,3.028-9.375,2.419-12.403-1.404
			c-7.371-9.242-20.595-14.327-37.244-14.327c-21.319,0-44.138,14.186-44.138,35.31c0,21.813,22.908,35.31,44.138,35.31
			c29.722,0,61.793,20.25,61.793,52.966S400.481,238.345,370.758,238.345" />
                                        <path style="fill:#FFFFFF;"
                                            d="M414.896,105.931c-4.873,0-8.828-3.946-8.828-8.828V44.138c0-4.882,3.955-8.828,8.828-8.828
			c4.873,0,8.828,3.946,8.828,8.828v52.966C423.724,101.985,419.769,105.931,414.896,105.931" />
                                        <path style="fill:#FFFFFF;"
                                            d="M326.62,247.172c-4.873,0-8.828-3.946-8.828-8.828v-52.966c0-4.882,3.955-8.828,8.828-8.828
			c4.873,0,8.828,3.946,8.828,8.828v52.966C335.448,243.226,331.493,247.172,326.62,247.172" />
                                    </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Sales Report</span>
                    </a>
                </li>
                <li class="nav-item mt-3">
                    <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="../pages/profile.html">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <svg width="12px" height="12px" viewBox="0 0 46 42" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>customer-support</title>
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g transform="translate(-1717.000000, -291.000000)" fill="#FFFFFF"
                                        fill-rule="nonzero">
                                        <g transform="translate(1716.000000, 291.000000)">
                                            <g transform="translate(1.000000, 0.000000)">
                                                <path class="color-background opacity-6"
                                                    d="M45,0 L26,0 C25.447,0 25,0.447 25,1 L25,20 C25,20.379 25.214,20.725 25.553,20.895 C25.694,20.965 25.848,21 26,21 C26.212,21 26.424,20.933 26.6,20.8 L34.333,15 L45,15 C45.553,15 46,14.553 46,14 L46,1 C46,0.447 45.553,0 45,0 Z">
                                                </path>
                                                <path class="color-background"
                                                    d="M22.883,32.86 C20.761,32.012 17.324,31 13,31 C8.676,31 5.239,32.012 3.116,32.86 C1.224,33.619 0,35.438 0,37.494 L0,41 C0,41.553 0.447,42 1,42 L25,42 C25.553,42 26,41.553 26,41 L26,37.494 C26,35.438 24.776,33.619 22.883,32.86 Z">
                                                </path>
                                                <path class="color-background"
                                                    d="M13,28 C17.432,28 21,22.529 21,18 C21,13.589 17.411,10 13,10 C8.589,10 5,13.589 5,18 C5,22.529 8.568,28 13,28 Z">
                                                </path>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <span class="nav-link-text ms-1">Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link  " href="javascript;;" data-toggle="modal" data-target="#signOutModal">
                        <div
                            class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
                            <img src="/img/signout.png" alt="" srcset="" width="20px" height="20px">
                        </div>
                        <span class="nav-link-text ms-1">Sign Out</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="sidenav-footer mx-3 ">
            <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
                <div class="full-background" style="background-image: url('img/curved-images/white-curved.jpg')">
                </div>
            </div>
        </div>
    </aside>
    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <!-- Navbar -->
        <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur"
            navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                        <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark"
                                href="javascript:;">Pages</a></li>
                        <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Sales Report</li>
                    </ol>
                    <h6 class="font-weight-bolder mb-0">Sales Report</h6>
                </nav>
                <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
                    <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Type here...">
                        </div>
                    </div>
                    <ul class="navbar-nav  justify-content-end">
                        <li class="nav-item d-flex align-items-center">
                            <a href="#" class="nav-link text-body font-weight-bold px-0"
                                style="cursor: pointer;" data-toggle="modal" data-target="#signOutModal">
                                <i class="fa fa-user me-sm-1"></i>
                                <span class="d-sm-inline d-none">Sign Out</span>
                            </a>
                        </li>
                        <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                                <div class="sidenav-toggler-inner">
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                    <i class="sidenav-toggler-line"></i>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item px-3 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0">
                                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown pe-2 d-flex align-items-center">
                            <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-bell cursor-pointer"></i>
                            </a>
                            <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4"
                                aria-labelledby="dropdownMenuButton">
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="img/team-2.jpg" class="avatar avatar-sm  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New message</span> from Laur
                                                </h6>
                                                <p class="text-xs text-secondary mb-0 ">
                                                    <i class="fa fa-clock me-1"></i>
                                                    13 minutes ago
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="mb-2">
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="my-auto">
                                                <img src="img/small-logos/logo-spotify.svg"
                                                    class="avatar avatar-sm bg-gradient-dark  me-3 ">
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    <span class="font-weight-bold">New album</span> by Travis Scott
                                                </h6>
                                                <p class="text-xs text-secondary mb-0 ">
                                                    <i class="fa fa-clock me-1"></i>
                                                    1 day
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item border-radius-md" href="javascript:;">
                                        <div class="d-flex py-1">
                                            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
                                                <svg width="12px" height="12px" viewBox="0 0 43 36"
                                                    version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <title>credit-card</title>
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <g transform="translate(-2169.000000, -745.000000)"
                                                            fill="#FFFFFF" fill-rule="nonzero">
                                                            <g transform="translate(1716.000000, 291.000000)">
                                                                <g transform="translate(453.000000, 454.000000)">
                                                                    <path class="color-background"
                                                                        d="M43,10.7482083 L43,3.58333333 C43,1.60354167 41.3964583,0 39.4166667,0 L3.58333333,0 C1.60354167,0 0,1.60354167 0,3.58333333 L0,10.7482083 L43,10.7482083 Z"
                                                                        opacity="0.593633743"></path>
                                                                    <path class="color-background"
                                                                        d="M0,16.125 L0,32.25 C0,34.2297917 1.60354167,35.8333333 3.58333333,35.8333333 L39.4166667,35.8333333 C41.3964583,35.8333333 43,34.2297917 43,32.25 L43,16.125 L0,16.125 Z M19.7083333,26.875 L7.16666667,26.875 L7.16666667,23.2916667 L19.7083333,23.2916667 L19.7083333,26.875 Z M35.8333333,26.875 L28.6666667,26.875 L28.6666667,23.2916667 L35.8333333,23.2916667 L35.8333333,26.875 Z">
                                                                    </path>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg>
                                            </div>
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="text-sm font-weight-normal mb-1">
                                                    Payment successfully completed
                                                </h6>
                                                <p class="text-xs text-secondary mb-0 ">
                                                    <i class="fa fa-clock me-1"></i>
                                                    2 days
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            <div class="row">
            </div>
            <div class="row mt-4">
                <div class="col-lg-7 mb-lg-0 mb-4">
                    <div class="card">
                        <div class="card-body p-3">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="d-flex flex-column h-100">
                                        <p class="mb-3 pt-2 text-bold">
                                            Quick Access</p>
                                        <a href="javascript;" data-toggle="modal"
                                            data-target="#collectionByBrgyModal">
                                            <button style="text-transform: none" class="btn btn-primary">Collection
                                                Report By <b style="color:yellow"> Barangay </b></button></a>
                                        <a href="javascript;" data-toggle="modal"
                                            data-target="#collectionByCityModal">
                                            <button style="text-transform: none" class="btn btn-primary">Collection
                                                Report By <b style="color:yellow">City</b></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                </div>
            </div>
            <footer class="footer pt-3  fixed-bottom">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                ©
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>,
                                made with <i class="fa fa-heart"></i> by
                                <a href="https://www.creative-tim.com" class="font-weight-bold"
                                    target="_blank">Creative Tim</a>
                                for a better web.
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com" class="nav-link text-muted"
                                        target="_blank">Creative Tim</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted"
                                        target="_blank">About Us</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/blog" class="nav-link text-muted"
                                        target="_blank">Blog</a>
                                </li>
                                <li class="nav-item">
                                    <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted"
                                        target="_blank">License</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>

    <div class="modal fade" id="collectionByBrgyModal" tabindex="-1" role="dialog"
        aria-labelledby="collectionByBrgyModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="collectionByBrgyModalLabel">Collection Report By Barangay</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form autocomplete="off" action="/user_roles" method="GET" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="province" for="province">Province:</label>
                                <div class="autocomplete" style="width:300px;">
                                    <input style="width: 380px;" id="myProvince" type="text" name="province"
                                        placeholder="Province">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city" for="city">City:</label>
                                <div class="autocomplete" style="width:300px;">
                                    <input style="width: 408px;" id="myCity" type="text" name="city"
                                        placeholder="City">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="brgy" for="brgy">Barangay:</label>
                                <div class="autocomplete" style="width:300px;">
                                    <input style="width: 380px;" id="myBrgy" type="text" name="brgy"
                                        placeholder="Barangay">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cmonth" for="cmonth">Collection Month:</label>
                                <select required name="cmonth" id="cmonth">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cmonth" for="cmonth">Collection Year:</label>
                                <select required name="cmonth" id="cmonth">
                                    @for ($i = 1970; $i <= $year; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Open Report</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="collectionByCityModal" tabindex="-1" role="dialog"
        aria-labelledby="collectionByCityModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="collectionByCityModalLabel">Collection Report By City</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <form autocomplete="off" action="/user_roles" method="GET" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="province" for="province">Province:</label>
                                <div class="autocomplete" style="width:300px;">
                                    <input style="width: 380px;" id="myProvince" type="text" name="province"
                                        placeholder="Province">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="city" for="city">City:</label>
                                <div class="autocomplete" style="width:300px;">
                                    <input style="width: 408px;" id="myCity" type="text" name="city"
                                        placeholder="City">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="cmonth" for="cmonth">Collection Month:</label>
                                <select required name="cmonth" id="cmonth">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="cmonth" for="cmonth">Collection Year:</label>
                                <select required name="cmonth" id="cmonth">
                                    @for ($i = 1970; $i <= $year; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                                </select>
                            </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Open Report</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="signOutModal" tabindex="-1" role="dialog" aria-labelledby="signOutModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form action="/signout" method="GET">
                    <div class="modal-body">
                        <h5 class="modal-title" id="signOutModalLabel">Do you want to proceed signing out ?</h5>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Yes, Proceed</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!--   Core JS Files   -->
    <script src="js/core/popper.min.js"></script>
    <script src="js/core/bootstrap.min.js"></script>
    <script src="js/plugins/perfect-scrollbar.min.js"></script>
    <script src="js/plugins/smooth-scrollbar.min.js"></script>
    <script src="js/plugins/chartjs.min.js"></script>

    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }

        function autocomplete(inp, arr) {
            /*the autocomplete function takes two arguments,
            the text field element and an array of possible autocompleted values:*/
            var currentFocus;
            /*execute a function when someone writes in the text field:*/
            inp.value = '';
            inp.addEventListener("input", function(e) {
                var a, b, i, val = this.value;
                /*close any already open lists of autocompleted values*/
                closeAllLists();
                if (!val) {
                    return false;
                }
                currentFocus = -1;
                /*create a DIV element that will contain the items (values):*/
                a = document.createElement("DIV");
                a.setAttribute("id", this.id + "autocomplete-list");
                a.setAttribute("class", "autocomplete-items");
                /*append the DIV element as a child of the autocomplete container:*/
                this.parentNode.appendChild(a);
                /*for each item in the array...*/
                for (i = 0; i < arr.length; i++) {
                    /*check if the item starts with the same letters as the text field value:*/
                    if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
                        /*create a DIV element for each matching element:*/
                        b = document.createElement("DIV");
                        /*make the matching letters bold:*/
                        b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
                        b.innerHTML += arr[i].substr(val.length);
                        /*insert a input field that will hold the current array item's value:*/
                        b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                        /*execute a function when someone clicks on the item value (DIV element):*/
                        b.addEventListener("click", function(e) {
                            /*insert the value for the autocomplete text field:*/
                            inp.value = this.getElementsByTagName("input")[0].value;
                            /*close the list of autocompleted values,
                            (or any other open lists of autocompleted values:*/
                            closeAllLists();
                        });
                        a.appendChild(b);
                    }
                }
            });
            /*execute a function presses a key on the keyboard:*/
            inp.addEventListener("keydown", function(e) {
                var x = document.getElementById(this.id + "autocomplete-list");
                if (x) x = x.getElementsByTagName("div");
                if (e.keyCode == 40) {
                    /*If the arrow DOWN key is pressed,
                    increase the currentFocus variable:*/
                    currentFocus++;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 38) { //up
                    /*If the arrow UP key is pressed,
                    decrease the currentFocus variable:*/
                    currentFocus--;
                    /*and and make the current item more visible:*/
                    addActive(x);
                } else if (e.keyCode == 13) {
                    /*If the ENTER key is pressed, prevent the form from being submitted,*/
                    e.preventDefault();
                    if (currentFocus > -1) {
                        /*and simulate a click on the "active" item:*/
                        if (x) x[currentFocus].click();
                    }
                }
            });

            function addActive(x) {
                /*a function to classify an item as "active":*/
                if (!x) return false;
                /*start by removing the "active" class on all items:*/
                removeActive(x);
                if (currentFocus >= x.length) currentFocus = 0;
                if (currentFocus < 0) currentFocus = (x.length - 1);
                /*add class "autocomplete-active":*/
                x[currentFocus].classList.add("autocomplete-active");
            }

            function removeActive(x) {
                /*a function to remove the "active" class from all autocomplete items:*/
                for (var i = 0; i < x.length; i++) {
                    x[i].classList.remove("autocomplete-active");
                }
            }

            function closeAllLists(elmnt) {
                /*close all autocomplete lists in the document,
                except the one passed as an argument:*/
                var x = document.getElementsByClassName("autocomplete-items");
                for (var i = 0; i < x.length; i++) {
                    if (elmnt != x[i] && elmnt != inp) {
                        x[i].parentNode.removeChild(x[i]);
                    }
                }
            }
            /*execute a function when someone clicks in the document:*/
            document.addEventListener("click", function(e) {
                closeAllLists(e.target);
            });
        }
        var provinces = {!! json_encode($provinces, JSON_HEX_TAG) !!};
        autocomplete(document.getElementById("myProvince"), provinces);

        var cities = {!! json_encode($cities, JSON_HEX_TAG) !!};
        autocomplete(document.getElementById("myCity"), cities);

        var brgy = {!! json_encode($brgy, JSON_HEX_TAG) !!};
        autocomplete(document.getElementById("myBrgy"), brgy);
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="js/soft-ui-dashboard.min.js?v=1.0.6"></script>
</body>

</html>
