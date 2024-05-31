<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Fortis Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,700" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="{{ URL::to('/assets/tablogo.jpg') }}">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet" />
    <style>
        body {
            /* font-family: "Montserrat", sans-serif; */
            font-family: 'Open Sans';
        }

        *,
        *::after,
        *::before {
            box-sizing: border-box;
            padding: 0;
            margin: 0;
        }

        html {
            scroll-behavior: smooth;
        }

        ul {
            list-style: none;
        }

        a {
            text-decoration: none;
            color: #000;
            font-size: 15px;
        }

        img {
            max-width: 100%;
            height: auto;
        }

        .container-grid {
            max-width: 1300px;
            margin: 0 auto;
            padding-inline: 20px;

        }

        .add-logo {
            display: flex;
            align-items: center;
            gap: 3rem;
        }

        .logo {
            width: 120px;
            height: auto;
            padding: 10px;
            margin-right: 3rem;
        }

        .logo img {
            width: 100%;
            height: 100%;
        }

        .fortis-head {
            display: flex;
            align-items: center;
            justify-content: space-between;

        }

        .fortis-add p {
            font-size: 15px;
            font-weight: 600;
            margin-top: 3%;
        }

        .inter-btn a {
            background-color: #34B366;
            padding: 10px;
            /* border-radius: 5px; */
            color: #fff;
        }

        .section {
            padding-block: 5rem 1rem;
        }

        .heading-cont h1 {
            font-size: 23px;
            font-weight: 500;
        }

        .footer {
            background-color: #1c2d36;
            padding: 20px;
        }

        .footer h3 {
            color: #fff;
            text-align: center;
            font-size: 15px;
            letter-spacing: 1px;
            word-spacing: 2px;
            margin: 0px;
            padding: 0.5% 0%;
            font-weight: 200;
        }

        .fortis-malar {
            box-shadow: 0px 1px 3px 0px rgba(0, 0, 0, 0.75);
            width: 100%;
            margin: 0px 0px 0px;
            padding-block: 4rem;
        }

        .malar-for p {
            color: #7c7c7c;
            font-size: 15px;
            letter-spacing: 1px;
            text-align: left;
            word-spacing: 2px;
        }

        .body-content {
            width: 100%;
        }

        .document-block {
            background-color: #fff;
            /* border-radius: 8px; */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
            padding: 20px;
            margin-bottom: 20px;
            margin-left: 45px;
            width: 710px;
            display: flex;
            align-items: center;
            font-size: small;
            /* border: 2px solid; */
        }

        .document-block img {
            width: 30px;
            margin-right: 10px;

        }

        .document-block span {
            margin-bottom: 10px;
            /* display: block; */
            flex-grow: 1;
            color: #5cb3fd;
        }

        .document-block a {
            background-color: #1c7432;
            color: #fff;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            /* display: inline-block; */
        }

        .document-block a:hover {
            background-color: #1a9e3e;
        }

        .document-block .view-document {
            margin-left: auto;
        }

        .document-block .delete-document {
            margin-left: 10px;
        }

        .document-left {
            background-color: #e8e9ea;
            padding: 10px 20px;
            width: 25%;
        }

        .body-container {
            width: 70%;
        }

        .document-left ul {
            list-style-type: none;
            padding: 0;
            cursor: pointer;
        }

        .document-left ul ul {
            margin-top: 10px;
            list-style-type: none;
            padding-left: 20px;

        }

        .document-left ul ul li::before {
            content: '';
            display: inline-block;
            width: 4px;
            height: 4px;
            border: 1px solid #000;
            border-radius: 50%;
            margin-right: 5px;
        }

        .document-left ul li {
            margin-bottom: 15px;
            cursor: pointer;
        }

        .document-left ul .module span {
            font-weight: bold
        }

        #overview-document {
            display: flex;
            flex-direction: column;

        }

        #overview-document p {
            font-size: 14px;
            color: #676363;
            font-weight: normal;
            word-spacing: 4px;
            line-height: 19px;

        }

        .header {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            background-color: #fff;
            z-index: 999;
        }

        .document-block {
            border: 1px solid #ada2a2;
            padding: 15px;
            margin-bottom: 25px;
            position: relative;
            box-shadow: 0 0 7px rgba(0, 0, 0, 0.2);
            margin-left: 5%;
            width: 100%;
            height: 15vh;
        }

        .document-title {
            /* font-weight: bold; */
            display: flex;
            align-items: center;
            font-family: 'Open Sans';
            font-size: 14px;
            color: rgb(68 189 134);
        }

        .document-title img {
            margin-right: 10px;
        }

        .download-button {
            position: absolute;
            /* top: 15px; */
            right: 15px;
            padding: 10px 15px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }

        .download-button:hover {
            background-color: #0056b3;
        }

        .address-bnt {
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .both-doc {
            display: flex;
            gap: 3rem;
            margin-bottom: 2rem;
        }

        .toggle-btn {
            display: none;
        }

        .back-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            margin-bottom: 2%;
        }

        .back-link:hover {
            background-color: #0056b3;
        }

        @media screen and (max-width: 768px) {
            .both-doc {
                flex-direction: column;
            }

            .document-left,
            .body-container {
                width: 100%;
            }

            .header {
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                width: 100%;
                position: relative;
            }

            .address-bnt {
                position: absolute;
                top: -300px;
                left: 0;
                right: 0;
                width: 100%;
                height: 300px;
                background-color: #1a9e3e;
                flex-direction: column;
                padding: 2rem .9rem;
                align-items: flex-start;
                justify-content: flex-start;
                color: #fff;
            }

            .fortis-add {
                order: 2;
                margin-top: 2rem;
            }

            .inter-btn a {
                background-color: transparent;
            }

            .fortis-add p {
                font-weight: 500;
            }

            .show-menu {
                top: 70px !important;
            }

            .toggle-btn {
                display: inline-block;
                font-size: 25px;
                font-weight: 500;
            }

            .section {
                padding-block: 2rem 1rem;
            }

        }
    </style>
</head>

<body>
    <header class="header">
        <div class="container-grid">
            <div class="fortis-head">
                <div class="add-logo">
                    <div class="logo">
                        <a href="{{ route('modify') }}" class="home-link">
                            <img src="../../../assests/BSE_EQ_INE842B01015.png" alt="Company Logo">
                        </a>
                    </div>
                </div>

                <div class="address-bnt" id="address-menu">
                    <div class="fortis-add">
                        <p>
                            FORTIS MALAR HOSPITALS LIMITED <br>
                            Regd. Office: Fortis Hospital, Sector 62, Phase – VIII, Mohali – 160062
                            <br>
                            CIN: L85110PB1989PLC045948 ISIN: INE842B01015
                        </p>
                    </div>
                    <div class="inter-btn">
                        <a href="{{ route('modify') }}">Investor Relations</a>
                        <a href="{{ route('registered') }}"><i class="fas fa-user-plus"></i> Register</a>
                    </div>
                </div>

                <div class="toggle-btn" id="toggle-btn">
                    <i class="ri-menu-line"></i>
                </div>
            </div>
        </div>
    </header>
    <section class="section investor">
        <div class="container-grid heading-cont">
            <h1>Investor Relations</h1>
        </div>
    </section>
    <div class="body-content">
        <div class="container-grid both-doc">
            <div class="document-left">
                <ul>
                    <li>
                        <a href="{{ route('modify') }}">Overview</a>
                    </li>
                    @foreach($modules as $module)
                    @if ($module->slug == 'investor-services-nomination')
                    <li>
                        <a href="{{ route('investor_admin', ['slug' => 'investor-services-nomination']) }}">Investor Services & Nomination</a>
                    </li>
                    @elseif ($module->slug == 'board-of-directors')
                    <li>
                        <a href="{{ route('Board.admin', ['slug' => 'board-of-directors']) }}">Board Of Directors</a>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('fetch.admin', ['slug' => $module->slug]) }}">{{ $module->modname }}</a>
                        @if (!empty($module['subcategories']))
                        <ul>
                            @foreach ($module->subcategories as $subcategory)
                            <li>
                                <a href="{{ route('fetch.admin', ['slug' => $module->slug, 'subcategory' => $subcategory['DocName']]) }}">{{ $subcategory['sub_name'] }}</a>
                            </li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endif
                    @endforeach
                </ul>
            </div>
            <div class="body-container" style="width:50%;margin-left: 3%;">
                <div><a href="{{ route('modify') }}" class="back-link"><i class="fas fa-arrow-left"></i>Back</a></div>
                <h5 style="font-size:18px; font-family: 'Open Sans', sans-serif;">Board Of Directors</h5><br>
                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;"><strong>Mr. Daljit Singh</strong></p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;">Mr. Daljit Singh has been a pivotal member of the top management team of Fortis Healthcare that conceptualized, formulated and implemented Fortis&rsquo; growth strategy to position it as India&rsquo;s leading Healthcare delivery organization in a short span of almost 13 years. He has over 40 years of rich management experience in the corporate sector.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;">Mr. Singh is the President, Fortis Healthcare Limited. During his tenure of 12 years with Fortis, he has led the Company&rsquo;s Projects Function, Strategy and Organizational Development Functions and has held the office of the Chief Executive Officer.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;">Prior to joining Fortis, Mr. Singh was on the Board of Directors of ICI India, a subsidiary of the British Multinational, Imperial Chemicals Industry plc, as the Executive Director in charge of Human Resources, Manufacturing, External Relations and Communications. Amongst key responsibilities held at ICI India, he was the Chief Executive for Pharmaceuticals, Specialties and Catalyst businesses. He was member of the ICI Global Manufacturing Group, SSHE Excellence Group and the Global HR Forum. His key experience and achievements have been in the areas of developing progressive HR strategies and ensuring their implementation, organizational restructuring, building a high performance culture and leading teams to deliver business value. He has successfully planned and executed significant change programs.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;">Mr. Singh is an acknowledged expert and thought leader in the domain of Healthcare Delivery. He has represented Fortis at Industry forums like the CII and FICCI and led several healthcare related committees. He is an active participant on the World Economic Forum platform and is on a number of Steering Boards constituted by the Forum to guide a number of major Global projects: &ldquo;Scenarios for Sustainable Health Systems&rdquo;, &ldquo;The Healthy Living Charter&rdquo;, and &ldquo;Health Systems Leapfrogging&rdquo;. He is also on the Forum&rsquo;s Advisory Board on &ldquo;The Economic Burden of Non Communicable Diseases in India&rdquo;. He has spoken on panels and presented to Indian and International audiences on themes related to Healthcare.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;">A graduate from the Indian Institute of Technology, Delhi, Mr. Singh was a Commonwealth Scholar to the Senior Management Programme at the Manchester Business School. With an outstanding track record in the field of athletics, his current interests include athletics, high altitude trekking, adventure sports, spirituality, music and reading.</p><br>

                <hr />
                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;"><strong>Mr. Ramesh Lakshman Adige</strong></p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;">Mr. Ramesh Lakshman Adige, a Non-Executive Independent Director, is a B.E. from BITS Pilani and has a Post Graduate degree from the Faculty of Management Studies, Delhi. He has 40 years of international exposure with proven track record in the areas of healthcare, pharmaceuticals, automobiles, financial services, marketing, branding, consumer durables, Global Corporate Communications, EHS, Administration, Corporate Social Responsibility, Sustainability Reporting, Intellectual Property Policy, Public Affairs, Public Policy &amp; Higher Education. He is currently on the Board of Directors of Syndicate Bank, Premier Limited; Member of the Governing Council of T.A. Pai Management Institute, Manipal; Co-opted member of Biodiversity Foundation of NCT of Delhi; Member of Expert Committee of National Formulary of India and Chairman of PHD Rural Development Foundation.</p><br>

                <hr />
                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;"><strong>Ms. Shailaja Chandra</strong></p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;">Ms. Shailaja Chandra has spent over 15 years in the health sector and was a Secretary in the Ministry of Health &amp; Family Welfare, Government of India and later she was appointed as first woman Chief Secretary of Delhi.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;">Ms. Shailaja Chandra has been a career civil servant (a member of the Indian Administrative Service) for 38 years followed by a series of post-retirement assignments carrying executive responsibilities. During her long service career in the Central Government, she was posted over three tenures with the Ministries of Defence, Power and Health. At the state level, Ms. Chandra was posted across the country in Maharashtra, Manipur, Goa, Delhi and the Andaman &amp; Nicobar Islands.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;">Since retirement, Ms. Chandra has held Board/Management Committee level positions under the Government, the NGO sector, as well as listed Indian companies.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;">She is a prolific writer and is regularly invited as a policy analyst by the print and electronic media to comment on matters of Governance, Health, Gender and current developments in Delhi, the capital of India. She has been invited several times to Chair or speak at International conferences organised by OECD as well as by Indian Universities, think tanks and health-related forums.</p><br>

                <hr />
                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;"><strong>Mr. Ravi Rajagopal</strong></p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;">Mr. Ravi Rajagopal, aged about 63 years, is a Chartered Accountant and has a 35-year career in major consumer goods businesses. He has held several positions at ITC from 1979 to 1995, where he was involved in Packaging, Tobacco Farming, Agri-Businesses, Financial Services and Tobacco Marketing. He was head of Finance and Commercial at Ranbaxy Laboratories from 1995 to 1996, after which he moved to Diageo plc, where he held several positions including Finance Director for India and South Asia, Chief Financial Officer for Venture Markets and International Region, Group Financial Controller, Managing Director for India and South Asia and Chief Financial Officer for Europe. From 2010 to 2015, he was Global Head for Mergers and Acquisitions at Diageo Plc.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;">He currently serves as Chairman for JM Financial Services Singapore, as well as an Independent Director and Chairman of the Audit Committee for Vedanta Resources Plc. He is a Director and Audit Chair of Airtel Africa Plc, UK. He is an Association Member of BUPA. Earlier board experience includes serving as Non-Executive Director in United Spirits from 2013 to 2016, as well as forming and leading Diageo&#39;s India Advisory Board on India Strategy and Business Development between 2008 and 2015. He is also one of the Trustees of the Science Museum Foundation, UK.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;">He has a B.Com degree from Madras University, and also completed the Advanced Management Programme at Harvard Business School in 2001. He is currently a Board Member of Pratham UK, a charitable organization focused on child literacy and vocational skilling and is Trustee in a school for under privileged children in Chennai, where 1,200 students up to the 12th grade are taught free of charge. He has helped build a paediatric cancer wing in Chennai for up to 70 patients at a cost of &pound;500k and is currently a Trustee in overseeing the running of the wing. He has lectured at Oxford University and Imperial College on M&amp;A and is currently studying MA (History of Ideas).</p><br>
                </p><br>
                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;">Mr. Chandrasekar is a B. Pharma from Dr. MGR Education &amp; Research Institute &ndash; Madurai and MBA in Marketing &amp; Finance from Indian Institute of Management - Kozhikode and also holds a Post Graduate Program in Business Analytics &amp; Business Intelligence from Great Lakes Institute of Management, Chennai. He has over 21 years of work experience across companies like Sanofi, GSK Pharmaceuticals, Medtronic and Dr. Lal Pathlabs. In his last assignment with SRM Institute of Medical Sciences, he was designated as General Manager &ndash; Operations.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal;line-height: 19px;">Note :</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal;line-height: 19px;">Mr L T Nanwani has resigned from the directorship with effect from August 1, 2018.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal;line-height: 19px;">Mr Rama Krishna Shetty has resigned from the directorship with effect from August 7, 2018.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal;line-height: 19px;">Mr. Akshay Kumar Tiwari and Mr. Rahul Ranjan have resigned from the directorship with effect from August 9, 2018.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal;line-height: 19px;">Mr Rakesh Laddha has resigned from the directorship with effect from May 14, 2018.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal;line-height: 19px;">Mr Karthik Rajagopal has resigned from the directorship with effect from February 1, 2016.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal;line-height: 19px;">Mr. Sanjay Jayavarthanavelu resigned from the Directorship of the Company with effect from March 31, 2015.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal;line-height: 19px;">Mr. Sandeep Puri resigned from the Directorship of the Company with effect from November 3, 2014.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal;line-height: 19px;">Mr. Aditya Vij resigned from the Chairmanship as well as directorship of the Company with effect from December 24, 2014.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal;line-height: 19px;">Mr. Ashish Bhatia resigned from the Directorship of the Company with effect from December 24, 2014.</p><br>

                <p style="font-family: 'Open Sans', sans-serif; font-size: 14px; color: #676363; font-weight: normal;line-height: 19px;">Dr. Nithya Ramamurthy has resigned from the directorship with effect from July 20, 2023.</p><br>

            </div>

        </div>
    </div>
    </div>

    <section class="section fortis-malar">
        <div class="container-grid">
            <div class="malar-for">
                <p>Fortis Malar Hospital (formerly known as Malar Hospital) was acquired by Fortis Healthcare (India)
                    Limited in early 2008. The hospital founded in 1992, is established as one of the largest corporate
                    hospitals in Chennai providing quality super specialty and multi-specialty healthcare services. ̑
                </p>
            </div>

        </div>
    </section>

    <footer class="footer">
        <h3>2024 Fortis Malar Hospital. All Rights Reserved</h3>
    </footer>
</body>
<script>
    const toggle = document.getElementById('toggle-btn');
    const address = document.getElementById('address-menu')

    if (toggle) {
        toggle.addEventListener('click', () => {
            address.classList.toggle('show-menu')
        })
    }
</script>
</html>