<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Application Received - Young Chanakya X</title>
    <style>
        @include('emails.layout.styles')
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <img src="https://x.youngchanakya.com/images/logo/logo.png" alt="Young Chanakya X">
    </div>
    
    <div class="content">
        <div class="greeting">Hello {{ $full_name }},</div>
        
        <div class="message">
            Thank you for submitting your profile to be featured in the Young Chanakya X Connectors Directory.
            <br><br>
            We’re reviewing your profile and will get back to you shortly with the next steps.
            <br><br>
            <strong>🌟 What You Get</strong>
            <br>
            Being part of the YCX Connectors network helps you:
            <ul style="margin-top: 5px; padding-left: 20px; color: #555555; font-size: 15px;">
                <li>Build visibility within a growing ecosystem of creators, founders, and professionals</li>
                <li>Connect with like-minded individuals across campuses and industries</li>
                <li>Unlock collaboration opportunities and meaningful conversations</li>
                <li>Position yourself as a credible voice in your domain</li>
            </ul>
        </div>
        
        <table class="details-table">
            <tr>
                <th>Full Name</th>
                <td>{{ $full_name }}</td>
            </tr>
            <tr>
                <th>Designation</th>
                <td>{{ $designation }}</td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>{{ $phone }}</td>
            </tr>
            <tr>
                <th>Email ID</th>
                <td><a href="mailto:{{ $email }}">{{ $email }}</a></td>
            </tr>
            <tr>
                <th>Field of Expertise</th>
                <td>{{ $expertise }}</td>
            </tr>
            <tr>
                <th>LinkedIn URL</th>
                <td><a href="{{ $linkedin }}" target="_blank">View LinkedIn Profile</a></td>
            </tr>
        </table>
        
        <div class="bio-section">
            <h3>Description / Bio</h3>
            <p>{{ $bio }}</p>
        </div>
        
        <div class="closing">
            Best regards,<br>
            <strong>Young Chanakya X Team</strong>
        </div>
    </div>
    
    @include('emails.layout.footer')
</div>

</body>
</html>
