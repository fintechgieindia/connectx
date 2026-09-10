<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Podcast Feature Application</title>
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
        <p class="intro">A new application has been submitted for the Young Chanakya X Podcast Feature. Details below:</p>
        
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
            <h3>What they want to talk about</h3>
            <p>{{ $topic }}</p>
        </div>
        @endif
    </div>
    
    @include('emails.layout.footer')
</div>

</body>
</html>
