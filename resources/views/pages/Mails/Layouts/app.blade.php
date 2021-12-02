<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml"
    xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="format-detection" content="date=no" />
    <meta name="format-detection" content="address=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="x-apple-disable-message-reformatting" />
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet" />
    <title>Email Arg</title>
    @include('pages.Mails.Includes.css')
    @include('pages.Mails.Includes.js')
</head>

<body class="body"
    style="padding:0 !important; margin:0 !important; display:block !important; min-width:100% !important; width:100% !important; background:#efefef; -webkit-text-size-adjust:none;">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#efefef" class="gwfw">
        <tr>
            <td align="center" valign="top" class="p0-10">

                <table width="650" border="0" cellspacing="0" cellpadding="0" class="m-shell">
                    <tbody>
                        <tr>
                            <td class="td"
                                style="width:650px; min-width:650px; font-size:0pt; line-height:0pt; padding:0; margin:0; font-weight:normal;">
                                @yield('content')
                            </td>
                        </tr>
                    </tbody>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
