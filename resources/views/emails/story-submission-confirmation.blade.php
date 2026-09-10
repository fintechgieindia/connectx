<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Share Your Story Application Received - Young Chanakya X</title>
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
            Thank you for sharing your story with Young Chanakya X. Stories like yours have the power to inspire, connect, and create real impact.
            Our team is currently reviewing your submission, and we will get in touch with you to take the next steps forward.
            <br><br>
            <strong>🌱 What You Get by Sharing Your Story</strong>
            <ul style="margin-top: 5px; padding-left: 20px; color: #555555; font-size: 15px;">
                <li>A chance to inspire and impact others</li>
                <li>Visibility through YCX platforms</li>
                <li>Opportunity to shape your personal narrative</li>
                <li>Connection to a community of like-minded individuals</li>
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
                <td><a href="mailto:{{ $email }}">{{ $email }}</a></td>
            </tr>
            <tr>
                <th>Social / LinkedIn URL</th>
                <td><a href="{{ $social_url }}" target="_blank">View Profile</a></td>
            </tr>
            <tr>
                <th>Talk Title</th>
                <td>{{ $talk_title }}</td>
            </tr>
            <tr>
                <th>Speaking Language</th>
                <td>{{ $speaking_language }}</td>
            </tr>
        </table>

        @if(!empty($talk_summary))
        <div class="bio-section">
            <h3>Talk Summary / Core Message</h3>
            <p>{{ $talk_summary }}</p>
        </div>
        @endif
        
        <div class="closing">
            Warm regards,<br>
            <strong>The Young Chanakya X Team</strong>
        </div>
    </div>
    
    @include('emails.layout.footer')
</div>

</body>
</html>
