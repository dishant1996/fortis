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
                        <a href="{{ route('workable') }}" class="home-link">
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
                        <a href="{{ route('workable') }}">Investor Relations</a>
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
                        <a href="{{ route('workable') }}">Overview</a>
                    </li>
                    @foreach($modules as $module)
                    @if ($module->slug == 'investor-services-nomination')
                    <li>
                        <a href="{{ route('homew', ['slug' => 'investor-services-nomination']) }}">Investor Services & Nomination</a>
                    </li>
                    @elseif ($module->slug == 'board-of-directors')
                    <li>
                        <a href="{{ route('staticw', ['slug' => 'board-of-directors']) }}">Board Of Directors</a>
                    </li>
                    @else
                    <li>
                        <a href="{{ route('fetchModule', ['slug' => $module->slug]) }}">{{ $module->modname }}</a>
                        @if (!empty($module['subcategories']))
                        <ul>
                            @foreach ($module->subcategories as $subcategory)
                            <li>
                                <a href="{{ route('fetchModule', ['slug' => $module->slug, 'subcategory' => $subcategory['DocName']]) }}">{{ $subcategory['sub_name'] }}</a>
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
                <div class="container" style="margin-left: 5%;font-family: 'Open Sans';color: #676363;font-size:14px;">
                    <h5 style="font-size:16px;">Investor Services & Nomination</h5><br>

                    <div class="editable-investors" style="font-size: 14px; color: #676363; font-weight: normal; word-spacing: 4px; line-height: 19px;" id="editable-investors-Content">
                        <p style="font-family: 'Open Sans';">Securities and Exchange Board of India (&ldquo;SEBI&rdquo;) has by its circular No. SEBI / HO / MIRSD / MIRSD_RTAMB / P / CIR / 2021 / 655 dated 3rd November, 2021 laid down common and simplified norms for processing shareholder&rsquo;s service request by RTAs. The circular, effective from 1st January, 2022, also provides for mandatory furnishing of PAN, KYC details, nomination; freezing of folios without valid PAN, KYC details; compulsory linking of PAN and Aadhaar by shareholders in physical form, among others. Further, by Circular No. SEBI/HO/MIRSD/MIRSD_RTAMB/P/CIR/2021/687 dated 14th December, 2021 SEBI has issued some clarifications to the circular dated 3rd November, 2021(collectively referred to as &lsquo;the Circulars&rsquo;).</p><br>

                        <p style="font-family: 'Open Sans';"><strong>It is in your interest to provide the details / documents. If already provided, please treat this communication for information purpose only.</strong></p><br>

                        <p style="font-family: 'Open Sans';"><strong>Please submit the documents / details listed in the table below to KFin, (self-attested) at the following address:</strong></p><br>

                        <p style="font-family: 'Open Sans';"><strong>KFin Technologies Limited</strong> &nbsp; &nbsp;&nbsp;<br />
                            Unit: FORTIS MALAR HOSPITALS LIMITED<br />
                            Selenium Tower B, Plot Nos.31 &amp; 32 | Financial District&nbsp;<br />
                            Nanakramguda, Serilingampally Mandal, Hyderabad &ndash; 500032</p><br>

                        <table border="1" style="border:1px solid black">
                            <tbody>
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>Documents / details to be provided by shareholder(s)</th>
                                    <th>Please furnish details in*</th>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">1</td>
                                    <td>Valid Pan Linked with Aadhaar</td>
                                    <td style="text-align: center;" rowspan="6">Form No. ISR-1</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">2</td>
                                    <td>Postal Address with PIN</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">3</td>
                                    <td>Email address</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">4</td>
                                    <td>Mobile Number</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">5</td>
                                    <td>Demat account details</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">6</td>
                                    <td>Bank account details</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">7</td>
                                    <td>Nomination details</td>
                                    <td style="text-align: center;">Form No. SH-13</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">8</td>
                                    <td>Declaration to opt-out of nomination</td>
                                    <td style="text-align: center;">Form No. ISR-3</td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;">9</td>
                                    <td>Cancellation of nomination</td>
                                    <td style="text-align: center;">Form No. SH-14</td>
                                </tr>
                            </tbody>
                        </table>
                        <br>

                        <p style="font-family: 'Open Sans';">(*The aforesaid forms are attached and can also be downloaded from the Company&rsquo;s website <a href="mailto:www.fortismalar.com">www.fortismalar.com</a> or that of KFin <a href="mailto:www.kfintech.com">www.kfintech.com</a>).</p><br>

                        <p style="font-family: 'Open Sans';">You can also e-mail the documents through your email registered with KFin, to <a href="mailto:einward.ris@kfintech.com">einward.ris@kfintech.com</a> duly e-signed. E-Sign is an integrated service which facilitates issuing a digital signature certificate and performing signing of requested data by the e-Sign user. You may approach any of the empanelled e-Sign Service Providers, details of which are available on the website of Controller of Certifying Authorities (CCA), Ministry of Communications and Information Technology, Government of India (<a href="https://cca.gov.in/" target="_blank">https://cca.gov.in/</a>) for the purposes of obtaining the e-sign.</p><br>

                        <ul>
                            <li style="font-family: 'Open Sans';"><strong>Freezing of Folios without PAN, KYC details and Nomination</strong></li>
                        </ul><br>

                        <p style="font-family: 'Open Sans';">Folios wherein any one of the above mentioned documents / details are not available on or after 1st April, 2023, shall be frozen by KFin / the Company in terms of the Circulars. The frozen folios will be referred by KFin the Company to the administering authority under the Benami Transactions (Prohibitions) Act, 1988 and or Prevention of Money Laundering Act, 2002, if they continue to remain frozen as on 31st December, 2025.</p><br>

                        <ul>
                            <li style="font-family: 'Open Sans';"><strong>Compulsory linking of PAN and Aadhaar by all shareholders in physical mode</strong></li>
                        </ul><br>

                        <p style="font-family: 'Open Sans';">From 31st March, 2022 or any other date as may be specified by the Central Board of Direct Taxes (&ldquo;CBDT&rdquo;), KFin will accept only valid PANs and also verify that the PAN in the existing folios are valid; i.e. it is linked to the Aadhaar number of the shareholder. <strong>The folios wherein PAN is not valid as on the notified cut-off date of 31st March 2022 or any other date as may be specified by the CBDT, will also be frozen.</strong></p><br>


                        <p style="font-family: 'Open Sans';">In terms of the Circulars, w.e.f 1st January, 2022, KFin will not process any service request or complaint from shareholder(s)/claimant(s), unless PAN, KYC and Nomination documents/details are available.</p>
                    </div>
                </div>

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
<script>
    window.onload = function() {
        const savedContent = localStorage.getItem('editableInvestorsContent');
        if (savedContent) {
            // Injecting saved content into  div
            document.getElementById('editable-investors-Content').innerHTML = savedContent;
        }
    }
</script>

</html>