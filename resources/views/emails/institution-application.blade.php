<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Institution Registration — Young Chanakya X</title>
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
            A new <strong>Institution Registration</strong> has been submitted on Young Chanakya X.
            Below are the details provided by the applicant:
        </p>

        <table class="details-table">
            {{-- Contact Person --}}
            <tr><th colspan="2" style="background:#f1ede4; color:#0c3a30; font-size:13px; letter-spacing:1px; text-transform:uppercase;">Contact Person</th></tr>
            <tr>
                <th>Full Name</th>
                <td>{{ $contact_name }}</td>
            </tr>
            <tr>
                <th>Designation / Role</th>
                <td>{{ $designation }}</td>
            </tr>
            <tr>
                <th>Phone / WhatsApp</th>
                <td>{{ $phone }}</td>
            </tr>
            <tr>
                <th>Email Address</th>
                <td><a href="mailto:{{ $email }}">{{ $email }}</a></td>
            </tr>

            {{-- Institution Details --}}
            <tr><th colspan="2" style="background:#f1ede4; color:#0c3a30; font-size:13px; letter-spacing:1px; text-transform:uppercase;">Institution Details</th></tr>
            <tr>
                <th>Institution Name</th>
                <td>{{ $institution_name }}</td>
            </tr>
            <tr>
                <th>Institution Type</th>
                <td>{{ $institution_type }}</td>
            </tr>
            <tr>
                <th>Board / University</th>
                <td>{{ $board_or_university }}</td>
            </tr>
            @if(!empty($year_of_establishment))
            <tr>
                <th>Year of Establishment</th>
                <td>{{ $year_of_establishment }}</td>
            </tr>
            @endif
            <tr>
                <th>Student Strength</th>
                <td>{{ $student_strength }}</td>
            </tr>
            <tr>
                <th>City</th>
                <td>{{ $city }}</td>
            </tr>
            <tr>
                <th>State</th>
                <td>{{ $state }}</td>
            </tr>
            @if(!empty($website))
            <tr>
                <th>Institution Website</th>
                <td><a href="{{ $website }}" target="_blank">{{ $website }}</a></td>
            </tr>
            @endif

            {{-- Collaboration Interest --}}
            <tr><th colspan="2" style="background:#f1ede4; color:#0c3a30; font-size:13px; letter-spacing:1px; text-transform:uppercase;">Collaboration Interest</th></tr>
            <tr>
                <th>Areas of Interest</th>
                <td>
                    @php
                        $areas = is_array($areas_of_interest)
                            ? $areas_of_interest
                            : json_decode($areas_of_interest, true) ?? [];
                    @endphp
                    {{ implode(', ', $areas) }}
                </td>
            </tr>
            @if(!empty($heard_about_ycx))
            <tr>
                <th>How They Heard About YCX</th>
                <td>{{ $heard_about_ycx }}</td>
            </tr>
            @endif
            @if(!empty($institution_message))
            <tr>
                <th>Additional Message</th>
                <td style="white-space: pre-wrap;">{{ $institution_message }}</td>
            </tr>
            @endif
        </table>
    </div>

    @include('emails.layout.footer')
</div>

</body>
</html>
