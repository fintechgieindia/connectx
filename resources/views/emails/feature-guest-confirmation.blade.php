<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Application Received — YCX Podcast Feature</title>
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
            Thank you for applying to be featured on the Young Chanakya X Podcast.
            <br><br>
            We’ve received your submission, and our team is currently reviewing it. We aim to feature individuals with meaningful stories, insights, and experiences that can create value for our audience.
            <br><br>
            <strong>🎙️ What You Get</strong>
            <ul style="margin-top: 5px; padding-left: 20px; color: #555555; font-size: 15px;">
                <li>A featured conversation on the YCX Podcast</li>
                <li>Personal brand visibility across our platforms</li>
                <li>Opportunity to share your story, ideas, and insights</li>
                <li>Exposure to a growing audience of students, creators, and founders</li>
                <li>High-quality content clips for your personal use</li>
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
                <th>Company</th>
                <td>{{ $company_name }}</td>
            </tr>
            <tr>
                <th>Designation</th>
                <td>{{ $designation }}</td>
            </tr>
            <tr>
                <th>Social Media</th>
                <td><a href="{{ $social_media_url }}" target="_blank">View Profile</a></td>
            </tr>
        </table>
        
        @if(!empty($topic))
        <div class="bio-section">
            <h3>What You’d Like to Share</h3>
            <p>{{ $topic }}</p>
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
