<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Institution Registration Received — Young Chanakya X</title>
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
        <div class="greeting">Hello {{ $contact_name }},</div>

        <div class="message">
            Thank you for registering <strong>{{ $institution_name }}</strong> with <strong>Young Chanakya X</strong>.
            <br><br>
            We have received your institution's details and our team is currently reviewing your submission.
            We are excited about the potential to bring impactful programs, events, and leadership initiatives
            to your institution. A member of our team will reach out to you shortly to discuss the next steps
            and explore how we can collaborate.
        </div>

        <table class="details-table">
            <tr>
                <th>Contact Person</th>
                <td>{{ $contact_name }}</td>
            </tr>
            <tr>
                <th>Email Address</th>
                <td><a href="mailto:{{ $email }}">{{ $email }}</a></td>
            </tr>
            <tr>
                <th>Phone / WhatsApp</th>
                <td>{{ $phone }}</td>
            </tr>
            <tr>
                <th>Institution Name</th>
                <td>{{ $institution_name }}</td>
            </tr>
            <tr>
                <th>Institution Type</th>
                <td>{{ $institution_type }}</td>
            </tr>
            <tr>
                <th>City &amp; State</th>
                <td>{{ $city }}, {{ $state }}</td>
            </tr>
        </table>

        <div class="closing">
            Best regards,<br>
            <strong>Young Chanakya X Team</strong>
        </div>
    </div>

    @include('emails.layout.footer')
</div>

</body>
</html>
