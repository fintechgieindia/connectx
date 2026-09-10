<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Contact Inquiry Received - Young Chanakya X</title>
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
        <div class="greeting">Hello {{ $name }},</div>
        
        <div class="message">
            Thank you for reaching out to us. We have successfully received your inquiry submitted via our contact form.
            <br><br>
            A representative from the Young Chanakya X team will review your message and get back to you shortly.
        </div>
        
        <div class="details-box">
            <h3>Submission Summary</h3>
            <div class="details-row">
                <div class="details-label">Name</div>
                <div class="details-value">{{ $name }}</div>
            </div>
            <div class="details-row">
                <div class="details-label">Email</div>
                <div class="details-value">{{ $email }}</div>
            </div>
            <div class="details-row">
                <div class="details-label">Phone Number</div>
                <div class="details-value">{{ $phone }}</div>
            </div>
            <div class="details-row">
                <div class="details-label">Message</div>
                <div class="details-value" style="white-space: pre-wrap;">{{ $user_message }}</div>
            </div>
            @if(!empty($subject))
            <div class="details-row">
                <div class="details-label">Subject</div>
                <div class="details-value">{{ $subject }}</div>
            </div>
            @endif
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
