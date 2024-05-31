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
                        <a href="{{ route('home') }}" class="home-link">
                            <img src="../assests/BSE_EQ_INE842B01015.png" alt="Company Logo">
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
                        <a href="{{ route('home') }}">Investor Relations</a>
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
                        <a href="{{ route('home') }}">Overview</a>
                    </li>
                    <li>
                        <a href="{{ route('fetchModule', ['slug' => 'agm-documents']) }}">AGM Documents</a>
                    </li>
                    <li>
                        <a href="{{ route('fetchModule', ['slug' => 'corporate-announcements']) }}">Corporate
                            Announcements</a>
                    </li>
                    <li>
                        <a href="{{ route('fetchModule', ['slug' => 'composite-scheme-of-arrangements-and-amalgamation']) }}">Composite
                            Scheme Of Arrangement And Amalgamation</a>
                    </li>
                    <li>
                        Financial Results
                        <ul>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'financials-statements-advertisement']) }}">Financials
                                    Statements Advertisement</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'outcome-of-the-board-meeting']) }}">Outcome
                                    of the Board Meeting</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'unaudited-financial-results']) }}">Unaudited
                                    Financial Results</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'audited']) }}">Audited</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'newspaper-publication']) }}">Newspaper
                                    Publication</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'financial-publication-advertisement']) }}">Financial
                                    Publication Advertisement</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('fetchModule', ['slug' => 'annual-reports']) }}">Annual Reports</a>
                        <ul>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'financials-of-subsidiaries']) }}">Financials
                                    Of Subsidiaries</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'annual-return']) }}">Annual Return</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('fetchModule', ['slug' => 'stock-information']) }}">Stock Information</a>
                    </li>
                    <li>
                        <a href="{{ route('fetchModule', ['slug' => 'general-meeting-postal-ballot']) }}">General
                            Meeting / Postal Ballot</a>
                    </li>
                    <li>
                        <a href="{{ route('fetchModule', ['slug' => 'notices-of-board-meeting']) }}">Notices Of
                            Board Meeting</a>
                    </li>
                    <li>
                        Corporate Governance <ul>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'composition-of-board-and-its-committee']) }}">Composition
                                    of Board and its Committee</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'audit-and-risk-management-committee']) }}">Audit
                                    and Risk Management Committee</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'stakeholder-relationship-committee']) }}">Stakeholders
                                    Relationship Committee</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'secretary-of-the-committee']) }}">Secretary
                                    of the Committee</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'nomination-and-renumeration-committee']) }}">Nomination
                                    and Remuneration Committee</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'corporate-social-responsibility-committee']) }}">Corporate
                                    Social Responsibility Committee</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'investor-grievance-nodal-officer-kmp-contacts']) }}">Investor
                                    Grievance & Nodal Officer & KMP Contacts</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'policies-and-other-documents']) }}">Policies
                                    / Other Documents</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'compliance-report-on-corporate-governance   ']) }}">Compliance
                                    Report on Corporate Governance</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('staticw', ['slug' => 'board-of-directors']) }}">Board Of Directors</a>
                    </li>
                    <li>
                        <a href="{{ route('fetchModule', ['slug' => 'shareholding-patterns']) }}">Shareholding
                            Patterns</a>
                        <ul>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'for-financial-year-2012-13']) }}">For
                                    Financial Year 2012-13</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'for-financial-year_2013-14']) }}">For
                                    Financial Year 2013-14</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'for-financial-year-2014-15']) }}">For
                                    Financial Year 2014-15</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'for-financial-year-2015-16']) }}">For
                                    Financial Year 2015-16</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'for-financial-year-2016-17']) }}">For
                                    Financial Year 2016-17</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'for-financial-year-2017-18']) }}">For
                                    Financial Year 2017-18</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'for-financial-year-2018-19']) }}">For
                                    Financial Year 2018-19</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'for-financial-year-2019-20']) }}">For
                                    Financial Year 2019-2020</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'for-financial-year-2020-21']) }}">For
                                    Financial Year 2020-21</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'for-financial-year-2021-22']) }}">For
                                    Financial Year 2021-22</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'for-financial-year-2022-23']) }}">For
                                    Financial Year 2022-23</a>
                            </li>
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => 'for-financial-year-2023-24']) }}">For
                                    Financial Year 2023-24</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('fetchModule', ['slug' => 'disclosure-under-sebi-sast']) }}">Disclosure
                            Under SEBI SAST</a>
                    </li>
                    <li>
                        <a href="{{ route('fetchModule', ['slug' => 'transfer-of-shares-to-iepf-authority']) }}">Transfer
                            of Shares to IEPF Authority</a>
                    </li>
                    <li>
                        <a href="{{ route('homew', ['slug' => 'investor-services-nomination']) }}">Investor Services
                            & Nomination</a>
                    </li>
                    <li>
                        <a href="{{ route('fetchModule', ['slug' => 'loss-of-share-certificates']) }}">Loss of share
                            certificates</a>
                    </li>
                </ul>
            </div>
            <div class="body-container" style="width:50%;margin-left: 3%;">
                <div class="overview-document" style="font-size: 14px;color: #676363;font-weight: normal;word-spacing: 4px;line-height: 19px">
                    <p>As of February 1, 2024, the business operations of Fortis Malar Hospital, Chennai, have been transferred to MGM Healthcare Pvt. Ltd. Malar Hospital is now owned and managed by MGM Healthcare. Fortis Malar Hospitals Limited, nor any entity of its group/ affiliated companies no longer have any ownership or control over the management or operations of Malar Hospital.</p><br>
                    <p>For further information about Malar Hospital, please visit the MGM Healthcare website at https://mgmhealthcare.in/</p><br>
                    <p style="font-style: italic;">* If you click the link, you will be redirected to the website of MGM Healthcare, which is solely owned, operated and managed by MGM Healthcare over which Fortis Malar Hospitals Limited or any of its group companies / affiliate entities (collectively, Fortis Group) does not have any control.</p><br>
                    <p style="font-style: italic;">Fortis Group does not make any representation, warranty, recommendation or guarantee in respect of the products/services being advertised or offered by MGM Healthcare (whether through its website or otherwise) nor does Fortis Group implicitly or explicitly support or endorse the sale or purchase of any of MGM Healthcare’s products/services. Fortis Group does not assume any responsibility for any correspondence or business dealings between any person and MGM Healthcare. </p><br>
                    <p style="font-style: italic;">By accessing MGM Healthcare’s website through the aforesaid link, you agree and confirm to abide by the terms and conditions of FMHL’s website (including the aforementioned terms).</p><br>
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