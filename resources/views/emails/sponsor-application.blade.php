<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Sponsorship Application</title>
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
            A new application has been submitted for a <strong>Young Chanakya X Sponsorship</strong>. Below are the details provided by the applicant:
        </p>
        
        <table class="details-table">
            <tr>
                <th>Full Name</th>
                <td>{{ $name }}</td>
            </tr>
            <tr>
                <th>Email ID</th>
                <td><a href="mailto:{{ $email }}">{{ $email }}</a></td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>{{ $phone }}</td>
            </tr>
            <tr>
                <th>Company Name</th>
                <td>{{ $company }}</td>
            </tr>
            <tr>
                <th>Designation</th>
                <td>{{ $designation }}</td>
            </tr>
            <tr>
                <th>LinkedIn URL</th>
                <td><a href="{{ $linkedin }}" target="_blank">View LinkedIn Profile</a></td>
            </tr>
            <tr>
                <th>Sponsorship Level</th>
                <td>{{ $sponsorship_level }}</td>
            </tr>
            @if(!empty($website))
            <tr>
                <th>Website URL</th>
                <td><a href="{{ $website }}" target="_blank">{{ $website }}</a></td>
            </tr>
            @endif
        </table>
    </div>
    
    @include('emails.layout.footer')
</div>

</body>
</html>
