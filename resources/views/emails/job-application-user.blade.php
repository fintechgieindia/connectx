<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Application Received - Young Chanakya X</title>
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
        <p>Dear {{ $first_name }},</p>
        
        <p>Thank you for submitting your application for the position of <strong>{{ $job_title }}</strong> at Young Chanakya X.</p>
        
        <p>Our team is currently reviewing your profile, background, and answers. If your qualifications match our current needs, we will reach out to you within <strong>5–7 working days</strong> to schedule an initial interview.</p>
        
        <p>We’ve successfully received your application with the following details:</p>
        
        <table class="details-table">
            <tr>
                <th>Applied Role / Job</th>
                <td>{{ $job_title }} ({{ ucfirst($category) }})</td>
            </tr>
            <tr>
                <th>Full Name</th>
                <td>{{ $full_name }}</td>
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
                <th>WhatsApp Number</th>
                <td>{{ $whatsapp_number }}</td>
            </tr>
            <tr>
                <th>Date of Birth</th>
                <td>{{ $dob }}</td>
            </tr>
            <tr>
                <th>Nationality</th>
                <td>{{ $nationality }}</td>
            </tr>
            <tr>
                <th>Marital Status</th>
                <td>{{ $marital_status }}</td>
            </tr>
            @if(!empty($emergency_name))
            <tr>
                <th>Emergency Contact Name</th>
                <td>{{ $emergency_name }}</td>
            </tr>
            @endif
            <tr>
                <th>Emergency Contact Phone</th>
                <td>{{ $emergency_phone }}</td>
            </tr>
            <tr>
                <th>Residential Address</th>
                <td>{{ $residential_address }}</td>
            </tr>
            <tr>
                <th>Pursuing Education?</th>
                <td>{{ ucfirst($pursuing_education) }}</td>
            </tr>
            @if(!empty($college))
            <tr>
                <th>College</th>
                <td>{{ $college }}</td>
            </tr>
            @endif
            @if(!empty($course))
            <tr>
                <th>Course</th>
                <td>{{ $course }}</td>
            </tr>
            @endif
            @if(!empty($semester))
            <tr>
                <th>Semester</th>
                <td>{{ $semester }}</td>
            </tr>
            @endif
            @if(!empty($institution))
            <tr>
                <th>Institution</th>
                <td>{{ $institution }}</td>
            </tr>
            @endif
            @if(!empty($degree))
            <tr>
                <th>Degree</th>
                <td>{{ $degree }}</td>
            </tr>
            @endif
            @if(!empty($year_of_passing))
            <tr>
                <th>Year of Passing</th>
                <td>{{ $year_of_passing }}</td>
            </tr>
            @endif
            <tr>
                <th>LinkedIn URL</th>
                <td><a href="{{ $linkedin_url }}" target="_blank">View LinkedIn Profile</a></td>
            </tr>
            @if(!empty($resume_url))
            <tr>
                <th>Resume Link</th>
                <td><a href="{{ $resume_url }}" target="_blank"><strong>View Resume File</strong></a></td>
            </tr>
            @endif
        </table>
        
        @if(!empty($cover_letter))
        <div class="bio-section">
            <h3>Why YCX & Why this role? (Cover Letter)</h3>
            <p>{{ $cover_letter }}</p>
        </div>
        @endif
        
        <div style="margin-top: 30px;">
            <strong>🚀 What You Get with YCX</strong>
            <ul style="margin-top: 5px; padding-left: 20px; color: #555555; font-size: 15px;">
                <li>Hands-on experience working on real projects</li>
                <li>Exposure to podcasts, events, and content creation</li>
                <li>Opportunity to connect with creators, founders, and professionals</li>
                <li>A fast-paced environment focused on learning, execution, and growth</li>
            </ul>
        </div>
        
        <p style="margin-top: 20px; font-size: 15px; color: #333333;">If you have any questions, feel free to reach out:</p>
        <p style="margin-top: 5px; font-size: 15px; color: #555555; line-height: 1.8;">
            📧 Email: <a href="mailto:youngchanakya.x@gmail.com" style="color: #0c3a30; font-weight: 600; text-decoration: none;">youngchanakya.x@gmail.com</a><br>
            📞 Phone: +91 86672 05661
        </p>
        
        <p style="margin-top: 25px; font-size: 15px; color: #555555;">
            Thank you once again for your interest — we’re excited to have you take this step with YCX.
        </p>
        
        <div class="closing">
            Best regards,<br>
            <strong>Young Chanakya X Team</strong>
        </div>
    </div>
    
    @include('emails.layout.footer')
</div>

</body>
</html>
