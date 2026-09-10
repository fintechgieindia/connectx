<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SitemapController;

// =========================
// SITEMAP
// =========================
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');



// =========================
// HOME PAGES
// =========================
Route::get('/', fn() => view('index'));
Route::get('/home-2', fn() => view('index-2'));
Route::get('/home-3', fn() => view('index-3'));
Route::get('/home-4', fn() => view('index-4'));
Route::get('/home-5', fn() => view('index-5'));
Route::get('/home-6', fn() => view('index-6'));
Route::get('/home-7', fn() => view('index-7'));
Route::get('/home-8', fn() => view('index-8'));
Route::get('/home-2-new', fn() => view('home-2'));

// =========================
// ABOUT
// =========================
Route::get('/about', fn() => view('about-us'));
Route::get('/about-2', fn() => view('about-us-v2'));

// =========================
// SERVICES
// =========================
Route::get('/services-1', fn() => view('service-v1'));
Route::get('/services-2', fn() => view('service-v2'));
Route::get('/service-details', fn() => view('service-details'));

// =========================
// TEAM
// =========================
Route::get('/team-1', fn() => view('team-v1'));
Route::get('/team-2', fn() => view('team-v2'));
Route::get('/team-details', fn() => view('team-details'));

// =========================
// PROJECTS
// =========================
Route::get('/projects-1', fn() => view('project-v1'));
Route::get('/projects-2', fn() => view('project-v2'));
Route::get('/projects-3', fn() => view('project-v3'));

Route::get('/project-details-1', fn() => view('project-details-v1'));
Route::get('/project-details-2', fn() => view('project-details-v2'));

// =========================
// SHOP
// =========================
Route::get('/shop', fn() => view('shop-grid'));
Route::get('/shop-details', fn() => view('shop-details'));
Route::get('/cart', fn() => view('cart'));
Route::get('/checkout', fn() => view('checkout'));

// =========================
// INSIGHTS
// =========================
Route::get('/insights', [App\Http\Controllers\BlogController::class, 'index'])->name('insights.index');
Route::get('/insights/{slug?}', [App\Http\Controllers\BlogController::class, 'show'])->name('insights.detail');

// =========================
// OTHER PAGES
// =========================
Route::get('/testimonial', fn() => view('testimonial'));
Route::get('/pricing', fn() => view('pricing'));
Route::get('/faq', fn() => view('faq'));
Route::get('/contact', fn() => view('contact'))->name('contact');
Route::get('/404', fn() => view('404'));
Route::get('/privacy-policy', fn() => view('privacy-policy'))->name('privacy.policy');
Route::get('/terms-and-conditions', fn() => view('terms-and-conditions'))->name('terms.conditions');


use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\AdminDashboardController;

Route::get('/connectors', function () {
    return view('connecters-list');
})->name('connecters.list');

Route::post('/connecters-list/apply', [ApplicationController::class, 'submit'])->name('connecters.apply');

Route::get('/become-a-sponsor', function () {
    return view('become-a-sponsor');
})->name('become-a-sponsor');
Route::get('/become-a-sponser', function () {
    return redirect('/become-a-sponsor', 301);
});
Route::post('/become-a-sponsor/apply', [ApplicationController::class, 'submitsponsor'])->name('sponsor.apply');
Route::post('/become-a-sponser/apply', [ApplicationController::class, 'submitsponsor']);

Route::get('/become-a-partner', function () {
    return view('become-a-partner');
});
Route::post('/become-a-partner/apply', [ApplicationController::class, 'submitPartner'])->name('partner.apply');

Route::get('/become-a-speaker', function () {
    return view('become-a-speaker');
});
Route::post('/become-a-speaker/apply', [ApplicationController::class, 'submitSpeaker'])->name('speaker.apply');

Route::get('/become-a-feature', function () {
    return view('become-a-feature');
});
Route::post('/become-a-feature/apply', [ApplicationController::class, 'submitFeatureGuest'])->name('feature-guest.apply');

Route::get('/masterclass', function () {
    return view('ycx-masterclass');
})->name('masterclass');


Route::get('/speaker-talk', function () {
    return view('speaker-talk');
})->name('speaker.talk');

Route::get('/share-your-story', function () {
    return view('share-your-story');
})->name('share-your-story');
Route::post('/share-your-story/submit', [ApplicationController::class, 'submitStory'])->name('story.submit');

// =========================
// INSTITUTION REGISTRATION
// =========================
Route::get('/register-institution', function () {
    return view('register-institution');
})->name('institution.register');
Route::post('/register-institution/submit', [ApplicationController::class, 'submitInstitution'])->name('institution.submit');

Route::get('/career', [App\Http\Controllers\JobController::class, 'careers'])->name('careers.index');
Route::get('/internship', [App\Http\Controllers\JobController::class, 'internships'])->name('internships.index');
Route::get('/career/{slug}', [App\Http\Controllers\JobController::class, 'careerDetail'])->name('careers.detail');
Route::get('/internship/{slug}', [App\Http\Controllers\JobController::class, 'internshipDetail'])->name('internships.detail');
Route::post('/jobs/apply', [ApplicationController::class, 'submitJobApplication'])->name('jobs.apply');
Route::get('/events', fn() => view('events'));
Route::get('/event-details/{slug?}', function ($slug = 'c-suite-strategy-transcending-market-vulnerabilities') {
    return view('event-details', compact('slug'));
});
Route::post('/event-details/apply', [ApplicationController::class, 'submitRsvp'])->name('rsvp.apply');

Route::post('/contact/submit', [ApplicationController::class, 'submitContact'])->name('contact.submit');
// =========================
// ADMIN — Auth
// =========================
Route::get('/admin/login',  [AdminLoginController::class, 'showLogin'])->name('admin.login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('admin.login.post');
Route::post('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin.logout');

// Protected admin routes
Route::middleware('admin')->group(function () {
    Route::get('/admin/dashboard/{section?}', [AdminDashboardController::class, 'index'])->name('admin.dashboard');

    // Connectors API (real DB)
    Route::get('/admin/api/connectors', [AdminDashboardController::class, 'connectors'])->name('admin.api.connectors');
    Route::post('/admin/api/connectors/{id}', [AdminDashboardController::class, 'updateConnector'])->name('admin.api.connectors.update');

    // Partners API (real DB)
    Route::get('/admin/api/partners', [AdminDashboardController::class, 'partners'])->name('admin.api.partners');
    Route::post('/admin/api/partners/{id}', [AdminDashboardController::class, 'updatePartner'])->name('admin.api.partners.update');

    // Speakers API (real DB)
    Route::get('/admin/api/speakers', [AdminDashboardController::class, 'speakers'])->name('admin.api.speakers');
    Route::post('/admin/api/speakers/{id}', [AdminDashboardController::class, 'updateSpeaker'])->name('admin.api.speakers.update');

    // Sponsors API (real DB)
    Route::get('/admin/api/sponsors', [AdminDashboardController::class, 'sponsors'])->name('admin.api.sponsors');
    Route::post('/admin/api/sponsors/{id}', [AdminDashboardController::class, 'updatesponsor'])->name('admin.api.sponsors.update');
    Route::get('/admin/api/sponsers', [AdminDashboardController::class, 'sponsors'])->name('admin.api.sponsers');
    Route::post('/admin/api/sponsers/{id}', [AdminDashboardController::class, 'updatesponsor'])->name('admin.api.sponsers.update');

    // Jobs & Applications API (real DB)
    Route::get('/admin/api/posted-jobs', [AdminDashboardController::class, 'postedJobs'])->name('admin.api.posted-jobs');
    Route::post('/admin/api/posted-jobs', [AdminDashboardController::class, 'savePostedJob'])->name('admin.api.posted-jobs.create');
    Route::post('/admin/api/posted-jobs/{id}', [AdminDashboardController::class, 'savePostedJob'])->name('admin.api.posted-jobs.update');
    Route::delete('/admin/api/posted-jobs/{id}', [AdminDashboardController::class, 'deletePostedJob'])->name('admin.api.posted-jobs.delete');
    Route::get('/admin/api/job-applications', [AdminDashboardController::class, 'jobApplications'])->name('admin.api.job-applications');
    Route::post('/admin/api/job-applications/{id}', [AdminDashboardController::class, 'updateJobApplication'])->name('admin.api.job-applications.update');

    // Contacts API
    Route::get('/admin/api/contacts', [AdminDashboardController::class, 'contacts'])->name('admin.api.contacts');
    Route::post('/admin/api/contacts/{id}', [AdminDashboardController::class, 'updateContactStatus'])->name('admin.api.contacts.update');

    // Featured Guests API
    Route::get('/admin/api/featured-guests', [AdminDashboardController::class, 'featuredGuests'])->name('admin.api.featured-guests');
    Route::post('/admin/api/featured-guests/{id}', [AdminDashboardController::class, 'updateFeaturedGuest'])->name('admin.api.featured-guests.update');

    // Story Submissions API
    Route::get('/admin/api/story-submissions', [AdminDashboardController::class, 'storySubmissions'])->name('admin.api.story-submissions');
    Route::post('/admin/api/story-submissions/{id}', [AdminDashboardController::class, 'updateStorySubmission'])->name('admin.api.story-submissions.update');

    // Posts / Blog CMS API
    Route::get('/admin/api/posts', [AdminDashboardController::class, 'posts'])->name('admin.api.posts');
    Route::post('/admin/api/posts', [AdminDashboardController::class, 'savePost'])->name('admin.api.posts.create');
    Route::post('/admin/api/posts/{id}', [AdminDashboardController::class, 'savePost'])->name('admin.api.posts.update');
    Route::delete('/admin/api/posts/{id}', [AdminDashboardController::class, 'deletePost'])->name('admin.api.posts.delete');

    // Categories API
    Route::get('/admin/api/categories', [AdminDashboardController::class, 'categories'])->name('admin.api.categories');
    Route::post('/admin/api/categories', [AdminDashboardController::class, 'saveCategory'])->name('admin.api.categories.create');
    Route::post('/admin/api/categories/{id}', [AdminDashboardController::class, 'saveCategory'])->name('admin.api.categories.update');
    Route::delete('/admin/api/categories/{id}', [AdminDashboardController::class, 'deleteCategory'])->name('admin.api.categories.delete');

    // Jobs full page views
    Route::get('/admin/posted-jobs/create', [AdminDashboardController::class, 'createJobPage'])->name('admin.posted-jobs.create-page');
    Route::get('/admin/posted-jobs/edit/{id}', [AdminDashboardController::class, 'editJobPage'])->name('admin.posted-jobs.edit-page');
    Route::post('/admin/posted-jobs/save', [AdminDashboardController::class, 'savePostedJobForm'])->name('admin.posted-jobs.save-form');
    Route::post('/admin/posted-jobs/update/{id}', [AdminDashboardController::class, 'updatePostedJobForm'])->name('admin.posted-jobs.update-form');

    // Posts / Blog CMS full page views
    Route::get('/admin/posts/create', [AdminDashboardController::class, 'createPostPage'])->name('admin.posts.create-page');
    Route::get('/admin/posts/edit/{id}', [AdminDashboardController::class, 'editPostPage'])->name('admin.posts.edit-page');
    Route::post('/admin/posts/save', [AdminDashboardController::class, 'savePostForm'])->name('admin.posts.save-form');
    Route::post('/admin/posts/update/{id}', [AdminDashboardController::class, 'updatePostForm'])->name('admin.posts.update-form');
});

Route::get('/check-db', function() {
    return response()->json(\App\Models\Contact::latest()->get());
});