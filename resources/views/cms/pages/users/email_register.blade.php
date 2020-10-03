<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="utf-8">
    <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width">
    <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Use the latest (edge) version of IE rendering engine -->
    <meta name="x-apple-disable-message-reformatting">
    <!-- Disable auto-scale in iOS 10 Mail entirely -->
    <title></title>
    <!-- The title tag shows in email notifications, like Android 4.4. -->

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- CSS Reset : BEGIN -->
    <style>
        /* What it does: Remove spaces around the email design added by some email clients. */
        /* Beware: It can remove the padding / margin and add a background color to the compose a reply window. */

        body,
        html {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            background: #f1f1f1;
        }

        /* What it does: Stops email clients resizing small text. */

        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        /* What it does: Centers email on Android 4.4 */

        div[style*="margin: 16px 0"] {
            margin: 0 !important;
        }

        /* What it does: Stops Outlook from adding extra spacing to tables. */

        table,
        td {
            mso-table-lspace: 0 !important;
            mso-table-rspace: 0 !important;
        }

        /* What it does: Fixes webkit padding issue. */

        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }

        /* What it does: Uses a better rendering method when resizing images in IE. */

        img {
            -ms-interpolation-mode: bicubic;
        }

        /* What it does: Prevents Windows 10 Mail from underlining links despite inline CSS. Styles for underlined links should be inline. */

        a {
            text-decoration: none;
        }

        /* What it does: A work-around for email clients meddling in triggered links. */
        *[x-apple-data-detectors],
        /* iOS */

        .aBn,
        .unstyle-auto-detected-links * {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        /* What it does: Prevents Gmail from displaying a download button on large, non-linked images. */

        .a6S {
            display: none !important;
            opacity: 0.01 !important;
        }

        /* What it does: Prevents Gmail from changing the text color in conversation threads. */

        .im {
            color: inherit !important;
        }

        /* If the above doesn't work, add a .g-img class to any image in question. */

        img.g-img+div {
            display: none !important;
        }

        /* What it does: Removes right gutter in Gmail iOS app: https://github.com/TedGoas/Cerberus/issues/89  */
        /* Create one of these media queries for each additional viewport size you'd like to fix */
        /* iPhone 4, 4S, 5, 5S, 5C, and 5SE */

        <blade media|%20only%20screen%20and%20(min-device-width%3A%20320px)%20and%20(max-device-width%3A%20374px)%20%7B%0D>u~div .email-container {
            min-width: 320px !important;
        }
        }

        /* iPhone 6, 6S, 7, 8, and X */

        <blade media|%20only%20screen%20and%20(min-device-width%3A%20375px)%20and%20(max-device-width%3A%20413px)%20%7B%0D>u~div .email-container {
            min-width: 375px !important;
        }
        }

        /* iPhone 6+, 7+, and 8+ */

        <blade media|%20only%20screen%20and%20(min-device-width%3A%20414px)%20%7B%0D>u~div .email-container {
            min-width: 414px !important;
        }
        }
    </style>

    <!-- CSS Reset : END -->

    <!-- Progressive Enhancements : BEGIN -->
    <style>
        .primary {
            background: #52c8ff;
        }

        .bg_white {
            background: #ffffff;
        }

        .bg_light {
            background: #fafafa;
        }

        .bg_black {
            background: #000000;
        }

        .bg_footer {
            background-image: url("./images/footer_bg.png");
        }

        .bg_dark {
            background: rgba(0, 0, 0, .8);
        }

        .email-section {
            padding: 2.5em;
        }

        /*BUTTON*/

        .btn {
            padding: 7px 20px;
            display: inline-block;
        }

        .btn.btn-primary {
            border-radius: 30px;
            background: #52c8ff;
            color: #ffffff;
        }

        .btn.btn-white {
            border-radius: 30px;
            background: #ffffff;
            color: #000000;
        }

        .btn.btn-white-outline {
            border-radius: 30px;
            background: transparent;
            border: 1px solid #fff;
            color: #fff;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Montserrat', sans-serif;
            color: #000000;
            margin-top: 0;
            font-weight: normal;
        }

        body {
            font-family: 'Montserrat', sans-serif;
            font-weight: 400;
            font-size: 15px;
            line-height: 1.8;
            color: rgba(0, 0, 0, .4);
        }

        a {
            color: #52c8ff;
        }

        table {}

        /*LOGO*/

        .logo h1 {
            margin: 0;
        }

        .logo h1 a {
            color: #000000;
            font-size: 20px;
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
        }

        .navigation {
            padding: 0;
        }

        .navigation li {
            list-style: none;
            display: inline-block;
            margin-left: 5px;
            font-size: 13px;
            font-weight: 500;
        }

        .navigation li a {
            color: rgba(0, 0, 0, .4);
        }

        /*HERO*/

        .hero {
            position: relative;
            z-index: 0;
        }

        .hero .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            content: '';
            width: 100%;
            background: #000000;
            z-index: -1;
            opacity: 0.8;
            background: rgba(3, 63, 255, 1);
            background: -moz-linear-gradient(45deg, rgba(3, 63, 255, 1) 0%, rgba(82, 200, 255, 1) 100%);
            background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(3, 63, 255, 1)), color-stop(100%, rgba(82, 200, 255, 1)));
            background: -webkit-linear-gradient(45deg, rgba(3, 63, 255, 1) 0%, rgba(82, 200, 255, 1) 100%);
            background: -o-linear-gradient(45deg, rgba(3, 63, 255, 1) 0%, rgba(82, 200, 255, 1) 100%);
            background: -ms-linear-gradient(45deg, rgba(3, 63, 255, 1) 0%, rgba(82, 200, 255, 1) 100%);
            background: linear-gradient(45deg, rgba(3, 63, 255, 1) 0%, rgba(82, 200, 255, 1) 100%);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#033fff', endColorstr='#52c8ff', GradientType=1))
        }

        .hero .icon {}

        .hero .icon a {
            display: block;
            width: 60px;
            margin: 0 auto;
        }

        .hero .text {
            color: rgba(255, 255, 255, .8);
        }

        .hero .text h2 {
            color: #ffffff;
            font-size: 30px;
            margin-bottom: 0;
            font-weight: 400;
        }

        /*HEADING SECTION*/

        .heading-section {}

        .heading-section h2 {
            color: #000000;
            font-size: 22px;
            margin-top: 0;
            line-height: 1.4;
            font-weight: 400;
            /*text-transform: uppercase;*/
        }

        .heading-section .subheading {
            margin-bottom: 20px !important;
            display: inline-block;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(0, 0, 0, .4);
            position: relative;
        }

        .heading-section .subheading::after {
            position: absolute;
            left: 0;
            right: 0;
            bottom: -10px;
            content: '';
            width: 100%;
            height: 2px;
            background: #52c8ff;
            margin: 0 auto;
        }

        .heading-section-white {
            color: rgba(255, 255, 255, .8);
        }

        .heading-section-white h2 {
            font-family: line-height: 1;
            padding-bottom: 0;
        }

        .heading-section-white h2 {
            color: #ffffff;
        }

        .heading-section-white .subheading {
            margin-bottom: 0;
            display: inline-block;
            font-size: 13px;
            text-transform: uppercase;
            letter-spacing: 2px;
            color: rgba(255, 255, 255, .4);
        }

        .icon {
            text-align: center;
        }

        .icon img {}

        /*SERVICES*/

        .services {
            background: rgba(0, 0, 0, .03);
        }

        .text-services {
            padding: 10px 10px 0;
            text-align: center;
        }

        .text-services h3 {
            font-size: 16px;
            font-weight: 600;
        }

        .text-services h4 {
            font-size: 14px;
            font-weight: 500;
        }

        h4#menunggu {
            color: #bababa;
        }

        .services-list {
            padding: 0;
            margin: 0 0 20px;
            width: 100%;
            float: left;
        }

        .services-list img {
            float: left;
        }

        .services-list .text {
            width: calc(100% - 60px);
            float: right;
        }

        .services-list h3,
        h4 {
            margin-top: 0;
            margin-bottom: 0;
        }

        .services-list p {
            margin: 0;
        }

        /*BLOG*/

        .text-services .meta {
            text-transform: uppercase;
            font-size: 14px;
            margin-top: 0;
        }

        /*TESTIMONY*/

        .text-testimony .name {
            margin: 0;
        }

        .text-testimony .position {
            color: rgba(0, 0, 0, .3);
        }

        /*VIDEO*/

        .img {
            width: 100%;
            height: auto;
            position: relative;
        }

        .img .icon {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            bottom: 0;
            margin-top: -25px;
        }

        .img .icon a {
            display: block;
            width: 60px;
            position: absolute;
            top: 0;
            left: 50%;
            margin-left: -25px;
        }

        /*COUNTER*/

        .counter {
            width: 100%;
            position: relative;
            z-index: 0;
        }

        .counter .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            content: '';
            width: 100%;
            background: #000000;
            z-index: -1;
            opacity: 0.7;
            background: rgba(3, 63, 255, 1);
            background: -moz-linear-gradient(45deg, rgba(3, 63, 255, 1) 0%, rgba(82, 200, 255, 1) 100%);
            background: -webkit-gradient(left bottom, right top, color-stop(0%, rgba(3, 63, 255, 1)), color-stop(100%, rgba(82, 200, 255, 1)));
            background: -webkit-linear-gradient(45deg, rgba(3, 63, 255, 1) 0%, rgba(82, 200, 255, 1) 100%);
            background: -o-linear-gradient(45deg, rgba(3, 63, 255, 1) 0%, rgba(82, 200, 255, 1) 100%);
            background: -ms-linear-gradient(45deg, rgba(3, 63, 255, 1) 0%, rgba(82, 200, 255, 1) 100%);
            background: linear-gradient(45deg, rgba(3, 63, 255, 1) 0%, rgba(82, 200, 255, 1) 100%);
            filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#033fff', endColorstr='#52c8ff', GradientType=1))
        }

        .counter-text {
            text-align: center;
        }

        .counter-text .num {
            display: block;
            color: #ffffff;
            font-size: 34px;
            font-weight: 400;
        }

        .counter-text .name {
            display: block;
            color: rgba(255, 255, 255, .9);
            font-size: 13px;
        }

        /*PROGRESS*/

        .progress {
            display: block;
            margin-bottom: 20px;
        }

        .progress h3 {
            font-size: 13px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 10px;
        }

        .progressbar {
            padding: 0;
            background: rgba(0, 0, 0, .1);
        }

        .progressbar>div {
            background: #52c8ff;
            /* Adjust with JavaScript */
            height: 6px;
        }

        /*FOOTER*/

        .footer {
            color: rgba(255, 255, 255, .8);
        }

        .footer .heading {
            color: #ffffff;
            font-size: 20px;
        }

        .footer ul {
            margin: 0;
            padding: 0;
        }

        .footer ul li {
            list-style: none;
            margin-bottom: 10px;
        }

        .footer ul li a {
            color: rgba(255, 255, 255, 1);
        }

        <blade media|%20screen%20and%20(max-width%3A%20500px)%20%7B%0D>.icon {
            text-align: left;
        }

        .text-services {
            padding-left: 0;
            padding-right: 20px;
            text-align: left;
        }
        }
    </style>

</head>

<body width="100%" style="margin: 0; padding: 0 !important; mso-line-height-rule: exactly; background-color: #222222;">
    <center style="width: 100%; background-color: #f1f1f1;">
        <div style="display: none; font-size: 1px;max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden; mso-hide: all; font-family: sans-serif;">
            &zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;&zwnj;&nbsp;
        </div>
        <div style="max-width: 600px; margin: 0 auto;" class="email-container">
            <!-- BEGIN BODY -->
            <table align="center" role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%" style="margin: auto;">
                <tr>
                    <td valign="top" class="bg_white" style="padding: 1em 2.5em;">
                        <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                            <tr>
                                <td width="40%" class="logo" style="text-align: left;">
                                    <img src="https://mrexportir.s3-ap-southeast-1.amazonaws.com/backend/images/email/logo.png" alt="" style="width: 70%;max-width: 300px;height: auto;/* margin: auto; */display: block;">
                                </td>
                                <td width="60%" class="logo" style="text-align: right;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- end tr -->
                <!-- end tr -->
                <tr>
                    <td class="bg_white">
                        <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                            <tr>
                                <td class="bg_light email-section" style="width: 100%;">
                                    <table role="presentation" border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tr>
                                            <td valign="middle" width="90%">
                                                <table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
                                                    <tr>
                                                        <td class="text-services" style="text-align: left; padding-left:25px;">
                                                            <div class="heading-section">
                                                                <h2>Hi,
                                                                    {{ $data['users']['name'] }}
                                                                </h2>
                                                                <p>Terima kasih telah mendaftar Xportir. Mohon klik link
                                                                    dibawah ini untuk mengkonfirmasi bahwa Anda pemilik
                                                                    email ini:</p>
                                                                <p><a href="{{ $data['users']['url_aktivasi'] }}" target="_blank">{{ $data['users']['url_aktivasi'] }}</a></p>
                                                                <p>Kami tunggu konfirmasi Anda.</p>
                                                                <h2>Tim Xportir</h2>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td valign="middle" width="20%"></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>

                    </td>
                </tr>
                <!-- end:tr -->
                <!-- 1 Column Text + Button : END -->
            </table>
            <div>
                <img src="https://mrexportir.s3-ap-southeast-1.amazonaws.com/backend/images/email/logo-footer.png" alt="" style="max-width: 600px;">
            </div>

        </div>
    </center>
</body>

</html>