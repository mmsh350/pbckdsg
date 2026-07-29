<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('subject', 'Kaduna State Planning & Budget Commission')</title>
    <style>
        /* Email client resets */
        body, table, td, a { -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table, td { mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { -ms-interpolation-mode: bicubic; border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        table { border-collapse: collapse !important; }
        body { height: 100% !important; margin: 0 !important; padding: 0 !important; width: 100% !important; background-color: #F1F5F9; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #0F172A; }
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #F1F5F9;">
    <!-- Main Outer Wrapper -->
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #F1F5F9; padding: 40px 10px;">
        <tr>
            <td align="center">
                <!-- Email Container Card -->
                <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 620px; background-color: #FFFFFF; border-radius: 16px; overflow: hidden; border: 1px solid #E2E8F0; box-shadow: 0 10px 25px -5px rgba(15, 23, 42, 0.05);">
                    
                    <!-- Header -->
                    <tr>
                        <td style="background: linear-gradient(135deg, #021235 0%, #041F56 60%, #0B3485 100%); padding: 32px 40px; text-align: left; position: relative;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td>
                                        <div style="display: inline-block; background: rgba(255, 255, 255, 0.1); border: 1px solid rgba(255, 255, 255, 0.2); padding: 8px 16px; border-radius: 50px; font-size: 11px; font-weight: 700; color: #FF5A1F; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 12px;">
                                            Official Notice
                                        </div>
                                        <h1 style="color: #FFFFFF; font-size: 22px; font-weight: 800; margin: 0 0 6px 0; letter-spacing: -0.5px;">
                                            Kaduna State Government
                                        </h1>
                                        <p style="color: rgba(255, 255, 255, 0.8); font-size: 13px; font-weight: 500; margin: 0;">
                                            Planning & Budget Commission
                                        </p>
                                    </td>
                                    <td align="right" valign="top" style="width: 70px;">
                                        @php
                                            $logoPath = file_exists(public_path('assets/images/logo/logo-kdsg-watermark.png'))
                                                ? 'assets/images/logo/logo-kdsg-watermark.png'
                                                : (file_exists(public_path('assets/images/logo/logo-dark.png'))
                                                    ? 'assets/images/logo/logo-dark.png'
                                                    : 'assets/images/logo/logo-white.png');
                                            $logoSrc = asset($logoPath);
                                        @endphp
                                        <img src="{{ $logoSrc }}" alt="Kaduna State Government Seal" width="60" style="width: 60px; max-width: 60px; height: auto; display: block; border: 0; border-radius: 6px;">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- Orange Decorative Accent Strip -->
                    <tr>
                        <td style="height: 4px; background: linear-gradient(90deg, #FF5A1F 0%, #FF8A00 100%); font-size: 0; line-height: 0;">&nbsp;</td>
                    </tr>

                    <!-- Main Content Body -->
                    <tr>
                        <td style="padding: 40px; background-color: #FFFFFF;">
                            @yield('content')
                        </td>
                    </tr>

                    <!-- Footer Section -->
                    <tr>
                        <td style="background-color: #F8FAFC; border-top: 1px solid #E2E8F0; padding: 30px 40px; text-align: center;">
                            <p style="margin: 0 0 10px 0; font-size: 13px; font-weight: 700; color: #041F56;">
                                Planning & Budget Commission, Kaduna State
                            </p>
                            <p style="margin: 0 0 16px 0; font-size: 12px; color: #64748B; line-height: 1.5;">
                                {!! str_replace("\n", ", ", e(\App\Models\Setting::get('contact_address', 'State Secretariat, Independence Way, Kaduna State, Nigeria'))) !!}<br>
                                Phone: {{ \App\Models\Setting::get('contact_phone_primary', '+234 (0) 800 000 0000') }} &bull; Email: <a href="mailto:{{ \App\Models\Setting::get('contact_primary_email', 'info@pbc.kdsg.gov.ng') }}" style="color: #0B3485; text-decoration: none; font-weight: 600;">{{ \App\Models\Setting::get('contact_primary_email', 'info@pbc.kdsg.gov.ng') }}</a>
                            </p>
                            <div style="border-top: 1px solid #E2E8F0; padding-top: 16px; font-size: 11px; color: #94A3B8; line-height: 1.4;">
                                This is an automated system notification from the official KADPBC Portal.<br>
                                &copy; {{ date('Y') }} Kaduna State Government. All rights reserved.
                            </div>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>
