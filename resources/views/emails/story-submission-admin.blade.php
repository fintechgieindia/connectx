<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Share Your Story Application - Young Chanakya X</title>
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
        <p style="font-size:15px;color:#555;">A new story submission has been received via the YCX Share Your Story page. Details below:</p>
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
    </div>
    
    @include('emails.layout.footer')
</div>

</body>
</html>
