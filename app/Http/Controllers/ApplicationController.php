<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Models\Connector;
use App\Models\Partner;
use App\Models\Sponsor;
use App\Models\Speaker;
use App\Models\FeaturedGuest;
use App\Models\StorySubmission;
use App\Models\InstitutionRegistration;

class ApplicationController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'full_name'   => 'required|string|max:255',
            'phone'       => 'required|string|max:50',
            'email'       => 'required|email|max:255',
            'linkedin'    => 'required|url|max:255',
            'designation' => 'required|string|max:255',
            'expertise'   => 'required|string|max:255',
            'bio'         => 'required|string|max:2000',
        ]);

        try {
            \Illuminate\Support\Facades\Log::info('--- CONNECTORS LIST SUBMISSION START ---');

            // 1. Save to Database
            Connector::create([
                'full_name'   => $validated['full_name'],
                'email'       => $validated['email'],
                'phone'       => $validated['phone'],
                'linkedin'    => $validated['linkedin'],
                'designation' => $validated['designation'],
                'expertise'   => $validated['expertise'],
                'bio'         => $validated['bio'],
                'status'      => 'pending',
            ]);
            \Illuminate\Support\Facades\Log::info('Connector saved to database.');

            \Illuminate\Support\Facades\Log::info('Sending admin email...');
            // 2. Email to Admin
            Mail::send('emails.directory-application', $validated, function ($message) use ($validated) {
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to('youngchanakya.x@gmail.com')
                        ->subject('New Connector Application — ' . $validated['full_name'])
                        ->replyTo($validated['email'], $validated['full_name']);
            });
            \Illuminate\Support\Facades\Log::info('Admin email sent.');

            \Illuminate\Support\Facades\Log::info('Sending user email to: '.$validated['email']);
            // 2. Email to User (Confirmation)
            Mail::send('emails.user-confirmation', $validated, function ($message) use ($validated) {
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to($validated['email'])
                        ->replyTo(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->subject('Application Received - Young Chanakya X');
            });
            \Illuminate\Support\Facades\Log::info('User email sent.');
            \Illuminate\Support\Facades\Log::info('--- CONNECTORS LIST SUBMISSION END ---');

            return back()->with('success', 'Your application has been submitted successfully for verification!');
        } catch (\Exception $e) {
            // Log the error message for debugging
            logger()->error('SMTP Directory Application failure: ' . $e->getMessage());
            
            return back()->withInput()->with('error', 'Unable to send application via SMTP. Please check mailer settings.');
        }
    }

    public function submitPartner(Request $request)
    {
        $validated = $request->validate([
            'name'             => 'required|string|max:255',
            'email'            => 'required|email|max:255',
            'phone'            => 'required|string|max:50',
            'company'          => 'required|string|max:255',
            'designation'      => 'required|string|max:255',
            'linkedin'         => 'required|url|max:255',
            'partnership_type' => 'required|string|max:255',
            'website'          => 'nullable|url|max:255',
        ]);

        try {
            \Illuminate\Support\Facades\Log::info('--- PARTNER SUBMISSION START ---');

            // 1. Save to Database
            Partner::create([
                'name'             => $validated['name'],
                'email'            => $validated['email'],
                'phone'            => $validated['phone'],
                'company'          => $validated['company'],
                'designation'      => $validated['designation'],
                'linkedin'         => $validated['linkedin'],
                'website'          => $validated['website'] ?? null,
                'partnership_type' => $validated['partnership_type'],
                'status'           => 'pending',
            ]);
            \Illuminate\Support\Facades\Log::info('Partner saved to database.');

            \Illuminate\Support\Facades\Log::info('Sending admin email...');
            // 2. Email to Admin
            Mail::send('emails.partner-application', $validated, function ($message) use ($validated) {
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to('youngchanakya.x@gmail.com')
                        ->subject('New Partnership Application: ' . $validated['name'])
                        ->replyTo($validated['email'], $validated['name']);
            });
            \Illuminate\Support\Facades\Log::info('Admin email sent.');

            \Illuminate\Support\Facades\Log::info('Sending user email to: '.$validated['email']);
            // 2. Email to User (Confirmation)
            Mail::send('emails.partner-confirmation', $validated, function ($message) use ($validated) {
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to($validated['email'])
                        ->replyTo(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->subject('Partnership Application Received - Young Chanakya X');
            });
            \Illuminate\Support\Facades\Log::info('User email sent.');
            \Illuminate\Support\Facades\Log::info('--- PARTNER SUBMISSION END ---');

            return back()->with('success', 'Your partnership application has been submitted successfully!');
        } catch (\Exception $e) {
            logger()->error('SMTP Partnership Application failure: ' . $e->getMessage());
            return back()->withInput()->with('error', 'Unable to send application via SMTP. Please try again.');
        }
    }

    public function submitSpeaker(Request $request)
    {
        $validated = $request->validate([
            'full_name'         => 'required|string|max:255',
            'phone'             => 'required|string|max:50',
            'email'             => 'nullable|email|max:255',
            'location'          => 'required|string|max:255',
            'primary_role'      => 'required|string|max:255',
            'speaking_language' => 'required|string|max:255',
            'social_media_url'  => 'required|url|max:255',
            'story'             => 'required|string|max:3000',
        ]);

        try {
            \Illuminate\Support\Facades\Log::info('--- SPEAKER SUBMISSION START ---');

            // 1. Save to Database
            $speaker = Speaker::create([
                'full_name'         => $validated['full_name'],
                'phone'             => $validated['phone'],
                'email'             => $validated['email'] ?? null,
                'location'          => $validated['location'],
                'primary_role'      => $validated['primary_role'],
                'speaking_language' => $validated['speaking_language'],
                'social_media_url'  => $validated['social_media_url'],
                'story'             => $validated['story'],
                'status'            => 'pending',
            ]);
            \Illuminate\Support\Facades\Log::info('Speaker saved to database. ID: ' . $speaker->id);

            // 2. Email to Admin
            \Illuminate\Support\Facades\Log::info('Sending admin email...');
            Mail::send('emails.speaker-application', $validated, function ($message) use ($validated) {
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to('youngchanakya.x@gmail.com')
                        ->subject('New Speaker Application: ' . $validated['full_name']);
                if (!empty($validated['email'])) {
                    $message->replyTo($validated['email'], $validated['full_name']);
                }
            });
            \Illuminate\Support\Facades\Log::info('Admin email sent.');

            // 3. Email to User (Confirmation)
            if (!empty($validated['email'])) {
                \Illuminate\Support\Facades\Log::info('Sending user confirmation email to: ' . $validated['email']);
                Mail::send('emails.speaker-confirmation', $validated, function ($message) use ($validated) {
                    $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                            ->to($validated['email'])
                            ->replyTo(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                            ->subject('Speaker Application Received - Young Chanakya X');
                });
                \Illuminate\Support\Facades\Log::info('User email sent.');
            }
            \Illuminate\Support\Facades\Log::info('--- SPEAKER SUBMISSION END ---');

            if ($request->ajax()) {
                return response()->json([
                    'type'    => 'success',
                    'message' => 'Your speaker application has been submitted successfully!'
                ]);
            }

            return back()->with('success', 'Your speaker application has been submitted successfully!');
        } catch (\Exception $e) {
            logger()->error('SMTP Speaker Application failure: ' . $e->getMessage() . ' trace: ' . $e->getTraceAsString());
            
            if ($request->ajax()) {
                return response()->json([
                    'type'    => 'danger',
                    'message' => 'Unable to send application via SMTP. Please try again.'
                ], 500);
            }

            return back()->withInput()->with('error', 'Unable to send application via SMTP. Please try again.');
        }
    }

    public function submitsponsor(Request $request)
    {
        $sponsorshipLevel = $request->input('sponsorship_level') ?? $request->input('sponsership_level');

        $validated = $request->validate([
            'name'              => 'required|string|max:255',
            'email'             => 'required|email|max:255',
            'phone'             => 'required|string|max:50',
            'company'           => 'required|string|max:255',
            'designation'       => 'required|string|max:255',
            'linkedin'          => 'required|url|max:255',
            'sponsorship_level' => 'nullable|string|max:255',
            'sponsership_level' => 'nullable|string|max:255',
            'website'           => 'nullable|url|max:255',
        ]);

        $level = $sponsorshipLevel ?? 'Title Sponsor';
        $validated['sponsorship_level'] = $level;
        $validated['sponsership_level'] = $level;

        try {
            \Illuminate\Support\Facades\Log::info('--- SPONSOR SUBMISSION START ---');

            // 1. Save to Database
            Sponsor::create([
                'name'              => $validated['name'],
                'email'             => $validated['email'],
                'phone'             => $validated['phone'],
                'company'           => $validated['company'],
                'designation'       => $validated['designation'],
                'linkedin'          => $validated['linkedin'],
                'website'           => $validated['website'] ?? null,
                'sponsorship_level' => $level,
                'sponsership_level' => $level,
                'status'            => 'pending',
            ]);
            \Illuminate\Support\Facades\Log::info('Sponsor saved to database.');

            \Illuminate\Support\Facades\Log::info('Sending admin email...');
            // 2. Email to Admin (use correct file name: sponsor-application)
            Mail::send('emails.sponsor-application', $validated, function ($message) use ($validated) {
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to('youngchanakya.x@gmail.com')
                        ->subject('New Sponsorship Application: ' . $validated['name'])
                        ->replyTo($validated['email'], $validated['name']);
            });
            \Illuminate\Support\Facades\Log::info('Admin email sent.');

            \Illuminate\Support\Facades\Log::info('Sending user email to: '.$validated['email']);
            // 3. Email to User (use correct file name: sponsor-confirmation)
            Mail::send('emails.sponsor-confirmation', $validated, function ($message) use ($validated) {
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to($validated['email'])
                        ->replyTo(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->subject('Sponsorship Application Received - Young Chanakya X');
            });
            \Illuminate\Support\Facades\Log::info('User email sent.');
            \Illuminate\Support\Facades\Log::info('--- SPONSOR SUBMISSION END ---');

            if ($request->ajax()) {
                return response()->json(['type' => 'success', 'message' => 'Your sponsorship application has been submitted successfully!']);
            }

            return back()->with('success', 'Your sponsorship application has been submitted successfully!');
        } catch (\Exception $e) {
            logger()->error('SMTP Sponsorship Application failure: ' . $e->getMessage());

            if ($request->ajax()) {
                return response()->json(['type' => 'danger', 'message' => 'Unable to submit application. Please try again.'], 500);
            }

            return back()->withInput()->with('error', 'Unable to submit application. Please try again.');
        }
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:50',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        try {
            \Illuminate\Support\Facades\Log::info('--- CONTACT SUBMISSION START ---');

            // 1. Save to Database
            $contact = Contact::create($validated);
            \Illuminate\Support\Facades\Log::info('Saved to database. ID: ' . $contact->id);

            // 2. Email to Admin
            \Illuminate\Support\Facades\Log::info('Sending admin inquiry email...');
            
            $mailData = $validated;
            $mailData['user_message'] = $mailData['message'];
            unset($mailData['message']);

            Mail::send('emails.contact-inquiry', $mailData, function ($message) use ($validated) {
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to('youngchanakya.x@gmail.com')
                        ->subject('New Contact Inquiry: ' . ($validated['subject'] ?? 'General Inquiry'))
                        ->replyTo($validated['email'], $validated['name']);
            });
            \Illuminate\Support\Facades\Log::info('Admin email sent.');

            // 3. Email to User (Confirmation)
            \Illuminate\Support\Facades\Log::info('Sending user confirmation email to: ' . $validated['email']);
            Mail::send('emails.contact-confirmation', $mailData, function ($message) use ($validated) {
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to($validated['email'])
                        ->replyTo(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->subject('Contact Inquiry Received - Young Chanakya X');
            });
            \Illuminate\Support\Facades\Log::info('User email sent.');
            \Illuminate\Support\Facades\Log::info('--- CONTACT SUBMISSION END ---');

            if ($request->ajax()) {
                return response()->json([
                    'type'    => 'success',
                    'message' => 'Thank you for your inquiry! Our team will contact you shortly.'
                ]);
            }

            return back()->with('success', 'Thank you for your inquiry! Our team will contact you shortly.');
        } catch (\Exception $e) {
            logger()->error('SMTP Contact Inquiry failure: ' . $e->getMessage());

            if ($request->ajax()) {
                return response()->json([
                    'type'    => 'danger',
                    'message' => 'Unable to send message via SMTP. Please check mailer settings.'
                ], 500);
            }

            return back()->withInput()->with('error', 'Unable to send message via SMTP. Please check mailer settings.');
        }
    }

    public function submitRsvp(Request $request)
    {
        $validated = $request->validate([
            'full_name'   => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'phone'       => 'required|string|max:50',
            'social_url'  => 'required|url|max:255',
            'event_title' => 'required|string|max:255',
        ]);

        try {
            \Illuminate\Support\Facades\Log::info('--- EVENT RSVP SUBMISSION START ---');
            \Illuminate\Support\Facades\Log::info('Sending admin email...');

            // 1. Email to Admin
            Mail::send('emails.event-rsvp-admin', $validated, function ($message) use ($validated) {
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to('youngchanakya.x@gmail.com')
                        ->subject('New Event Application: ' . $validated['event_title'])
                        ->replyTo($validated['email'], $validated['full_name']);
            });
            \Illuminate\Support\Facades\Log::info('Admin email sent.');

            // 2. Email to User (Confirmation)
            \Illuminate\Support\Facades\Log::info('Sending user confirmation email to: ' . $validated['email']);
            Mail::send('emails.event-rsvp-user', $validated, function ($message) use ($validated) {
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to($validated['email'])   
                        ->replyTo(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->subject('Thank You for Registering: ' . $validated['event_title']);
            });
            \Illuminate\Support\Facades\Log::info('User email sent.');
            \Illuminate\Support\Facades\Log::info('--- EVENT RSVP SUBMISSION END ---');

            if ($request->ajax()) {
                return response()->json([
                    'type'    => 'success',
                    'message' => 'Your registration has been received successfully. A member of our team will contact you soon with the event schedule and further details.'
                ]);
            }

            return back()->with('success', 'Your registration has been received successfully. A member of our team will contact you soon with the event schedule and further details.');
        } catch (\Exception $e) {
            logger()->error('SMTP Event RSVP Application failure: ' . $e->getMessage());

            if ($request->ajax()) {
                return response()->json([
                    'type'    => 'danger',
                    'message' => 'Unable to send RSVP application via SMTP. Please try again later.'
                ], 500);
            }

            return back()->withInput()->with('error', 'Unable to send RSVP application via SMTP. Please check mailer settings.');
        }
    }

    public function submitJobApplication(Request $request)
    {
        $validated = $request->validate([
            'posted_job_id'      => 'nullable|integer|exists:posted_jobs,id',
            'full_name'          => 'required|string|max:255',
            'email'              => 'required|email|max:255',
            'phone'              => 'required|string|max:50',
            'whatsapp_number'    => 'required|string|max:50',
            'dob'                => 'required|string',
            'nationality'        => 'required|string|max:255',
            'marital_status'     => 'required|string|max:255',
            'emergency_name'     => 'nullable|string|max:255',
            'emergency_phone'    => 'required|string|max:50',
            'residential_address'=> 'required|string',
            'pursuing_education' => 'required|in:yes,no',
            'college'            => 'nullable|string|max:255',
            'course'             => 'nullable|string|max:255',
            'semester'           => 'nullable|string|max:255',
            'institution'        => 'nullable|string|max:255',
            'degree'             => 'nullable|string|max:255',
            'year_of_passing'    => 'nullable|string|max:255',
            'linkedin_url'       => 'required|url|max:255',
            'resume_file'        => 'required|file|mimes:pdf,doc,docx|max:5120',
            'cover_letter'       => 'nullable|string|max:5000',
            'category'           => 'required|string|in:career,internship',
        ]);

        try {
            \Illuminate\Support\Facades\Log::info('--- JOB APPLICATION SUBMISSION START ---');

            // Handle Resume File Upload
            $resumeUrl = null;
            if ($request->hasFile('resume_file')) {
                $file = $request->file('resume_file');
                $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9_.-]/', '_', $file->getClientOriginalName());
                
                // Ensure directory exists
                if (!file_exists(public_path('uploads/resumes'))) {
                    mkdir(public_path('uploads/resumes'), 0755, true);
                }
                
                $file->move(public_path('uploads/resumes'), $filename);
                $resumeUrl = asset('uploads/resumes/' . $filename);
            }

            // Save to Database
            $app = \App\Models\JobApplication::create([
                'posted_job_id'      => $validated['posted_job_id'] ?? null,
                'full_name'          => $validated['full_name'],
                'email'              => $validated['email'],
                'phone'              => $validated['phone'],
                'whatsapp_number'    => $validated['whatsapp_number'],
                'dob'                => $validated['dob'],
                'nationality'        => $validated['nationality'],
                'marital_status'     => $validated['marital_status'],
                'emergency_name'     => $validated['emergency_name'] ?? null,
                'emergency_phone'    => $validated['emergency_phone'],
                'residential_address'=> $validated['residential_address'],
                'pursuing_education' => $validated['pursuing_education'],
                'college'            => $validated['college'] ?? null,
                'course'             => $validated['course'] ?? null,
                'semester'           => $validated['semester'] ?? null,
                'institution'        => $validated['institution'] ?? null,
                'degree'             => $validated['degree'] ?? null,
                'year_of_passing'    => $validated['year_of_passing'] ?? null,
                'linkedin_url'       => $validated['linkedin_url'],
                'resume_url'         => $resumeUrl,
                'cover_letter'       => $validated['cover_letter'] ?? null,
                'category'           => $validated['category'],
                'status'             => 'new',
            ]);
            \Illuminate\Support\Facades\Log::info('Job application saved to database. ID: ' . $app->id);

            // Fetch job title for email
            $jobTitle = 'General Application';
            if ($app->posted_job_id) {
                $job = \App\Models\PostedJob::find($app->posted_job_id);
                if ($job) {
                    $jobTitle = $job->title;
                }
            }
            $nameParts = explode(' ', trim($validated['full_name']), 2);
            $firstName = $nameParts[0];
            $lastName = isset($nameParts[1]) ? $nameParts[1] : '';
            $emailData = array_merge($validated, [
                'job_title'  => $jobTitle,
                'resume_url' => $resumeUrl,
                'first_name' => $firstName,
                'last_name'  => $lastName
            ]);

            \Illuminate\Support\Facades\Log::info('Sending admin email...');
            // Email to Admin
            Mail::send('emails.job-application-admin', $emailData, function ($message) use ($validated, $jobTitle) {
                $categoryLabel = ucfirst($validated['category']);
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to('youngchanakya.x@gmail.com')
                        ->subject('New Job Application: ' . $jobTitle . ' - Young Chanakya X ' . $categoryLabel . ' (' . $validated['full_name'] . ')')
                        ->replyTo($validated['email'], $validated['full_name']);
            });
            \Illuminate\Support\Facades\Log::info('Admin email sent.');

            \Illuminate\Support\Facades\Log::info('Sending user confirmation email to: ' . $validated['email']);
            // Email to User (Confirmation)
            Mail::send('emails.job-application-user', $emailData, function ($message) use ($validated, $jobTitle) {
                $categoryLabel = ucfirst($validated['category']);
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to($validated['email'])
                        ->replyTo(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->subject('Thank You for Applying: ' . $jobTitle . ' - Young Chanakya X ' . $categoryLabel);
            });
            \Illuminate\Support\Facades\Log::info('User email sent.');
            \Illuminate\Support\Facades\Log::info('--- JOB APPLICATION SUBMISSION END ---');

            if ($request->ajax()) {
                return response()->json([
                    'type'    => 'success',
                    'message' => 'Your application has been submitted successfully!'
                ]);
            }

            return back()->with('success', 'Your application has been submitted successfully!');
        } catch (\Exception $e) {
            logger()->error('SMTP Job Application failure: ' . $e->getMessage() . ' trace: ' . $e->getTraceAsString());

            if ($request->ajax()) {
                return response()->json([
                    'type'    => 'danger',
                    'message' => 'Unable to submit application via SMTP. Please try again.'
                ], 500);
            }

            return back()->withInput()->with('error', 'Unable to submit application via SMTP. Please try again.');
        }
    }

    public function submitFeatureGuest(Request $request)
    {
        $validated = $request->validate([
            'full_name'       => 'required|string|max:255',
            'phone'           => 'required|string|max:50',
            'email'           => 'required|email|max:255',
            'company_name'    => 'required|string|max:255',
            'designation'     => 'required|string|max:255',
            'social_media_url'=> 'required|url|max:255',
            'topic'           => 'nullable|string|max:3000',
        ]);

        try {
            \Illuminate\Support\Facades\Log::info('--- FEATURE GUEST SUBMISSION START ---');

            // 1. Save to Database
            $guest = FeaturedGuest::create([
                'full_name'        => $validated['full_name'],
                'phone'            => $validated['phone'],
                'email'            => $validated['email'],
                'company_name'     => $validated['company_name'],
                'designation'      => $validated['designation'],
                'social_media_url' => $validated['social_media_url'],
                'topic'            => $validated['topic'] ?? null,
                'status'           => 'pending',
            ]);
            \Illuminate\Support\Facades\Log::info('FeaturedGuest saved. ID: ' . $guest->id);

            // 2. Notify Admin
            Mail::send('emails.feature-guest-application', $validated, function ($message) use ($validated) {
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to('youngchanakya.x@gmail.com')
                        ->subject('New Podcast Feature Application — ' . $validated['full_name'])
                        ->replyTo($validated['email'], $validated['full_name']);
            });

            // 3. Confirm to User
            Mail::send('emails.feature-guest-confirmation', $validated, function ($message) use ($validated) {
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to($validated['email'])
                        ->replyTo(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->subject('Application Received — YCX Podcast Feature');
            });
            \Illuminate\Support\Facades\Log::info('--- FEATURE GUEST SUBMISSION END ---');

            if ($request->ajax()) {
                return response()->json(['type' => 'success', 'message' => 'Your application has been submitted successfully!']);
            }

            return back()->with('success', 'Your application has been submitted successfully!');
        } catch (\Exception $e) {
            logger()->error('SMTP Feature Guest failure: ' . $e->getMessage());

            if ($request->ajax()) {
                return response()->json(['type' => 'danger', 'message' => 'Unable to submit application. Please try again.'], 500);
            }

            return back()->withInput()->with('error', 'Unable to submit application. Please try again.');
        }
    }

    public function submitStory(Request $request)
    {
        $validated = $request->validate([
            'full_name'        => 'required|string|max:255',
            'phone'            => 'required|string|max:50',
            'email'            => 'required|email|max:255',
            'social_url'       => 'required|url|max:255',
            'talk_title'       => 'required|string|max:255',
            'speaking_language'=> 'required|string|max:100',
            'talk_summary'     => 'required|string|max:5000',
        ]);

        try {
            \Illuminate\Support\Facades\Log::info('--- STORY SUBMISSION START ---');

            // 1. Save to Database
            $story = StorySubmission::create([
                'full_name'         => $validated['full_name'],
                'phone'             => $validated['phone'],
                'email'             => $validated['email'],
                'social_url'        => $validated['social_url'],
                'talk_title'        => $validated['talk_title'],
                'speaking_language' => $validated['speaking_language'],
                'talk_summary'      => $validated['talk_summary'],
                'status'            => 'pending',
            ]);
            \Illuminate\Support\Facades\Log::info('StorySubmission saved. ID: ' . $story->id);

            // 2. Notify Admin
            Mail::send('emails.story-submission-admin', $validated, function ($message) use ($validated) {
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to('youngchanakya.x@gmail.com')
                        ->subject('New Share Your Story Application: ' . $validated['talk_title'] . ' by ' . $validated['full_name'])
                        ->replyTo($validated['email'], $validated['full_name']);
            });

            // 3. Confirm to User
            Mail::send('emails.story-submission-confirmation', $validated, function ($message) use ($validated) {
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to($validated['email'])
                        ->replyTo(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->subject('Share Your Story Application Received - Young Chanakya X');
            });
            \Illuminate\Support\Facades\Log::info('--- STORY SUBMISSION END ---');

            if ($request->ajax()) {
                return response()->json(['type' => 'success', 'message' => 'Your proposal has been submitted successfully!']);
            }

            return back()->with('success', 'Your proposal has been submitted successfully!');
        } catch (\Exception $e) {
            logger()->error('SMTP Story Submission failure: ' . $e->getMessage());

            if ($request->ajax()) {
                return response()->json(['type' => 'danger', 'message' => 'Unable to submit proposal. Please try again.'], 500);
            }

            return back()->withInput()->with('error', 'Unable to submit proposal. Please try again.');
        }
    }

    public function submitInstitution(Request $request)
    {
        // 1. Normalize input field aliases from the registration form
        if (!$request->has('contact_name') && $request->filled('name')) {
            $request->merge(['contact_name' => $request->input('name')]);
        }
        if (!$request->has('designation') && $request->filled('role')) {
            $request->merge(['designation' => $request->input('role')]);
        }
        if (!$request->has('institution_name') && $request->filled('inst')) {
            $request->merge(['institution_name' => $request->input('inst')]);
        }
        if (!$request->has('institution_type') && $request->filled('type')) {
            $request->merge(['institution_type' => $request->input('type')]);
        }
        if (!$request->has('website') && $request->filled('site')) {
            $request->merge(['website' => $request->input('site')]);
        }

        // Handle areas_of_interest / interest (whether passed as string or array)
        if (!$request->has('areas_of_interest') && $request->filled('interest')) {
            $interestVal = $request->input('interest');
            $request->merge(['areas_of_interest' => is_array($interestVal) ? $interestVal : [$interestVal]]);
        } elseif (is_string($request->input('areas_of_interest'))) {
            $request->merge(['areas_of_interest' => [$request->input('areas_of_interest')]]);
        }

        // Handle city & state (e.g., if passed as "Coimbatore, TN" or individual fields)
        if ($request->filled('city') && !$request->filled('state')) {
            $cityRaw = $request->input('city');
            if (str_contains($cityRaw, ',')) {
                $parts = array_map('trim', explode(',', $cityRaw, 2));
                $request->merge([
                    'city'  => $parts[0] ?: $cityRaw,
                    'state' => !empty($parts[1]) ? $parts[1] : 'N/A',
                ]);
            } else {
                $request->merge(['state' => 'N/A']);
            }
        }

        $validated = $request->validate([
            // Contact Person
            'contact_name'          => 'required|string|max:255',
            'designation'           => 'required|string|max:255',
            'phone'                 => 'required|string|max:50',
            'email'                 => 'required|email|max:255',

            // Institution Details
            'institution_name'      => 'required|string|max:255',
            'institution_type'      => 'required|string|max:255',
            'board_or_university'   => 'nullable|string|max:255',
            'year_of_establishment' => 'nullable|string|max:50',
            'student_strength'      => 'nullable|string|max:100',
            'city'                  => 'required|string|max:100',
            'state'                 => 'nullable|string|max:100',
            'website'               => 'nullable|url|max:255',

            // Collaboration Interest
            'areas_of_interest'     => 'required|array|min:1',
            'areas_of_interest.*'   => 'string|max:255',
            'heard_about_ycx'       => 'nullable|string|max:255',
            'message'               => 'nullable|string|max:3000',
        ]);

        $boardOrUniv = !empty($validated['board_or_university']) ? $validated['board_or_university'] : 'N/A';
        $studentStrength = !empty($validated['student_strength']) ? $validated['student_strength'] : 'N/A';
        $state = !empty($validated['state']) ? $validated['state'] : 'N/A';

        try {
            \Illuminate\Support\Facades\Log::info('--- INSTITUTION REGISTRATION SUBMISSION START ---');

            // 1. Save to Database
            $institution = InstitutionRegistration::create([
                'contact_name'          => $validated['contact_name'],
                'designation'           => $validated['designation'],
                'phone'                 => $validated['phone'],
                'email'                 => $validated['email'],
                'institution_name'      => $validated['institution_name'],
                'institution_type'      => $validated['institution_type'],
                'board_or_university'   => $boardOrUniv,
                'year_of_establishment' => $validated['year_of_establishment'] ?? null,
                'student_strength'      => $studentStrength,
                'city'                  => $validated['city'],
                'state'                 => $state,
                'website'               => $validated['website'] ?? null,
                'areas_of_interest'     => json_encode($validated['areas_of_interest']),
                'heard_about_ycx'       => $validated['heard_about_ycx'] ?? null,
                'message'               => $validated['message'] ?? null,
                'status'                => 'pending',
            ]);
            \Illuminate\Support\Facades\Log::info('InstitutionRegistration saved to database. ID: ' . $institution->id);

            // Prepare email data for templates
            $emailData = $validated;
            $emailData['board_or_university'] = $boardOrUniv;
            $emailData['student_strength'] = $studentStrength;
            $emailData['state'] = $state;
            $emailData['institution_message'] = $validated['message'] ?? null;
            $emailData['user_message'] = $validated['message'] ?? null;
            unset($emailData['message']);

            // 2. Email to Admin
            \Illuminate\Support\Facades\Log::info('Sending admin email...');
            Mail::send('emails.institution-application', $emailData, function ($message) use ($validated) {
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to('youngchanakya.x@gmail.com')
                        ->subject('New Institution Registration: ' . $validated['institution_name'] . ' (' . $validated['contact_name'] . ')')
                        ->replyTo($validated['email'], $validated['contact_name']);
            });
            \Illuminate\Support\Facades\Log::info('Admin email sent.');

            // 3. Email to User (Confirmation)
            \Illuminate\Support\Facades\Log::info('Sending user confirmation email to: ' . $validated['email']);
            Mail::send('emails.institution-confirmation', $emailData, function ($message) use ($validated) {
                $message->from(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->to($validated['email'])
                        ->replyTo(config('mail.from.address', 'youngchanakya.x@gmail.com'), config('mail.from.name', 'Young Chanakya X'))
                        ->subject('Institution Registration Received — Young Chanakya X');
            });
            \Illuminate\Support\Facades\Log::info('User email sent.');
            \Illuminate\Support\Facades\Log::info('--- INSTITUTION REGISTRATION SUBMISSION END ---');

            $successMsg = 'Your institution has been successfully registered with Young Chanakya X! Our team will reach out to you shortly.';

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => $successMsg,
                ]);
            }

            return back()->with('success', $successMsg);
        } catch (\Exception $e) {
            logger()->error('SMTP Institution Registration failure: ' . $e->getMessage());

            if ($request->ajax() || $request->wantsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unable to submit registration. Please try again.',
                ], 500);
            }

            return back()->withInput()->with('error', 'Unable to submit registration. Please try again.');
        }
    }
}
