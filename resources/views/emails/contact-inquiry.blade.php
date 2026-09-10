<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Contact Inquiry Received</title>
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
            A new inquiry has been submitted through the <strong>Young Chanakya X Contact Form</strong>. Below are the details provided:
        </p>
        
        <table class="details-table">
            <tr>
                <th>Full Name</th>
                <td>{{ $name }}</td>
            </tr>
            <tr>
                <th>Email Address</th>
                <td><a href="mailto:{{ $email }}">{{ $email }}</a></td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>{{ $phone }}</td>
            </tr>
            <tr>
                <th>Message</th>
                <td style="white-space: pre-wrap;">{{ $user_message }}</td>
            </tr>
            @if(!empty($subject))
            <tr>
                <th>Subject</th>
                <td>{{ $subject }}</td>
            </tr>
            @endif
        </table>
    </div>
    
    @include('emails.layout.footer')
</div>

</body>
</html>
