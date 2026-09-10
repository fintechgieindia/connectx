<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Event RSVP Application</title>
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
        <p class="intro">
            Hello,
            <br><br>
            A new application has been submitted to attend one of the curated events on the Young Chanakya X website. Below are the candidate details:
        </p>
        <table class="details-table">
            <tr>
                <th>Event Title</th>
                <td><strong>{{ $event_title }}</strong></td>
            </tr>
            <tr>
                <th>Full Name</th>
                <td>{{ $full_name }}</td>
            </tr>
            <tr>
                <th>Email</th>
                <td><a href="mailto:{{ $email }}">{{ $email }}</a></td>
            </tr>
            <tr>
                <th>Mobile</th>
                <td>{{ $phone }}</td>
            </tr>
            <tr>
                <th>Social Media URL</th>
                <td><a href="{{ $social_url }}" target="_blank">{{ $social_url }}</a></td>
            </tr>
        </table>
    </div>
    
    @include('emails.layout.footer')
</div>

</body>
</html>
