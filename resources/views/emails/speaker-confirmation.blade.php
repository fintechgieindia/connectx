<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Speaker Application Received - Young Chanakya X</title>
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
        <div class="greeting">Hi {{ $full_name }},</div>
        <div class="message">
            Thank you for applying to speak at Young Chanakya X! Your story is someone else's turning point, and we appreciate you sharing yours with us.
            Our team is currently reviewing your profile, and we will get in touch with you to discuss the next steps.
            <br><br>
            <strong>🎤 What You Get as a Speaker</strong>
            <ul style="margin-top: 5px; padding-left: 20px; color: #555555; font-size: 15px;">
                <li>A platform to share your ideas, experiences, and insights</li>
                <li>Exposure across YCX content channels</li>
                <li>Opportunity to build your personal brand</li>
                <li>Access to a growing network of students, creators, and professionals</li>
            </ul>
        </div>
        
        <table class="details-table">
            <tr>
                <th>Full Name</th>
                <td>{{ $full_name }}</td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>{{ $phone }}</td>
            </tr>
            <tr>
                <th>Email ID</th>
                <td>@if(!empty($email))<a href="mailto:{{ $email }}">{{ $email }}</a>@else—@endif</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>{{ $location }}</td>
            </tr>
            <tr>
                <th>Primary Role</th>
                <td>{{ $primary_role }}</td>
            </tr>
            <tr>
                <th>Speaking Language</th>
                <td>{{ $speaking_language }}</td>
            </tr>
            <tr>
                <th>Social Media</th>
                <td><a href="{{ $social_media_url }}" target="_blank">View Profile</a></td>
            </tr>
        </table>

        @if(!empty($story))
        <div class="bio-section">
            <h3>Main Message & Story</h3>
            <p>{{ $story }}</p>
        </div>
        @endif

        <div class="closing">
            Best regards,<br>
            <strong>The Young Chanakya X Team</strong>
        </div>
    </div>
    
    @include('emails.layout.footer')
</div>

</body>
</html>
