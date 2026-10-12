<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Models\Post;
use App\Models\PostedJob;

/**
 * SitemapController
 *
 * Generates and serves the production XML sitemap for Young Chanakya X.
 * Includes all legitimate, publicly indexable, canonical pages and dynamic records.
 *
 * Route: GET /sitemap.xml -> SitemapController@index (web.php)
 */
class SitemapController extends Controller
{
    /**
     * Strict production domain base URL.
     */
    protected string $baseUrl = 'https://connectx.youngchanakya.com';

    /**
     * Core static public pages and their crawl metadata.
     */
    protected array $staticPages = [
        [
            'path'       => '/',
            'changefreq' => 'weekly',
            'priority'   => '1.0',
            'lastmod'    => null, // defaults to current date
        ],
        [
            'path'       => '/about',
            'changefreq' => 'monthly',
            'priority'   => '0.9',
            'lastmod'    => null,
        ],
        [
            'path'       => '/connectors',
            'changefreq' => 'weekly',
            'priority'   => '0.9',
            'lastmod'    => null,
        ],
        [
            'path'       => '/masterclass',
            'changefreq' => 'weekly',
            'priority'   => '0.9',
            'lastmod'    => null,
        ],
        [
            'path'       => '/share-your-story',
            'changefreq' => 'monthly',
            'priority'   => '0.8',
            'lastmod'    => null,
        ],
        [
            'path'       => '/become-a-speaker',
            'changefreq' => 'monthly',
            'priority'   => '0.8',
            'lastmod'    => null,
        ],
        [
            'path'       => '/become-a-feature',
            'changefreq' => 'monthly',
            'priority'   => '0.8',
            'lastmod'    => null,
        ],
        [
            'path'       => '/become-a-partner',
            'changefreq' => 'monthly',
            'priority'   => '0.9',
            'lastmod'    => null,
        ],
        [
            'path'       => '/become-a-sponsor',
            'changefreq' => 'monthly',
            'priority'   => '0.9',
            'lastmod'    => null,
        ],
        [
            'path'       => '/events',
            'changefreq' => 'weekly',
            'priority'   => '0.9',
            'lastmod'    => null,
        ],
        [
            'path'       => '/register-institution',
            'changefreq' => 'monthly',
            'priority'   => '0.8',
            'lastmod'    => null,
        ],
        [
            'path'       => '/career',
            'changefreq' => 'weekly',
            'priority'   => '0.8',
            'lastmod'    => null,
        ],
        [
            'path'       => '/internship',
            'changefreq' => 'weekly',
            'priority'   => '0.8',
            'lastmod'    => null,
        ],
        [
            'path'       => '/insights',
            'changefreq' => 'weekly',
            'priority'   => '0.9',
            'lastmod'    => null,
        ],
        [
            'path'       => '/contact',
            'changefreq' => 'monthly',
            'priority'   => '0.7',
            'lastmod'    => null,
        ],
        [
            'path'       => '/privacy-policy',
            'changefreq' => 'yearly',
            'priority'   => '0.4',
            'lastmod'    => '2026-07-11',
        ],
        [
            'path'       => '/terms-and-conditions',
            'changefreq' => 'yearly',
            'priority'   => '0.4',
            'lastmod'    => '2026-07-13',
        ],
    ];

    /**
     * Curated public event detail slugs.
     */
    protected array $eventSlugs = [
        'founder-spotlight-series-scaling-beyond-series-a',
        'creator-connect-sessions-multi-platform-monetization',
        'women-in-leadership-circle-directing-enterprise-operations',
        'mentor-connect-program-engineering-architecture-scales',
        'fireside-chats-building-legacy-brand-narratives',
        'ceo-conversations-navigating-cross-border-ventures',
    ];

    /**
     * Build the list of all indexable URLs.
     */
    public function getSitemapData(): array
    {
        $today = now()->toDateString();
        $urls = [];

        // 1. Core static pages
        foreach ($this->staticPages as $page) {
            $urls[] = [
                'loc'        => $this->baseUrl . ($page['path'] === '/' ? '' : $page['path']),
                'lastmod'    => $page['lastmod'] ?? $today,
                'changefreq' => $page['changefreq'],
                'priority'   => $page['priority'],
            ];
        }

        // 2. Curated Events
        foreach ($this->eventSlugs as $slug) {
            $urls[] = [
                'loc'        => $this->baseUrl . '/event-details/' . $slug,
                'lastmod'    => $today,
                'changefreq' => 'monthly',
                'priority'   => '0.7',
            ];
        }

        // 3. Dynamic Published Blog Posts (Insights)
        try {
            $posts = Post::where('status', 'published')->orderBy('created_at', 'desc')->get();
            foreach ($posts as $post) {
                $lastmod = $post->updated_at ? $post->updated_at->toDateString() : ($post->created_at ? $post->created_at->toDateString() : $today);
                $urls[] = [
                    'loc'        => $this->baseUrl . '/insights/' . $post->slug,
                    'lastmod'    => $lastmod,
                    'changefreq' => 'monthly',
                    'priority'   => '0.7',
                ];
            }
        } catch (\Throwable $e) {
            // Proceed gracefully
        }

        // 4. Dynamic Active Careers
        try {
            $careers = PostedJob::where('category', 'career')->where('status', 'active')->orderBy('created_at', 'desc')->get();
            foreach ($careers as $career) {
                $lastmod = $career->updated_at ? $career->updated_at->toDateString() : ($career->created_at ? $career->created_at->toDateString() : $today);
                $urls[] = [
                    'loc'        => $this->baseUrl . '/career/' . $career->slug,
                    'lastmod'    => $lastmod,
                    'changefreq' => 'weekly',
                    'priority'   => '0.7',
                ];
            }
        } catch (\Throwable $e) {
            // Proceed gracefully
        }

        // 5. Dynamic Active Internships
        try {
            $internships = PostedJob::where('category', 'internship')->where('status', 'active')->orderBy('created_at', 'desc')->get();
            foreach ($internships as $internship) {
                $lastmod = $internship->updated_at ? $internship->updated_at->toDateString() : ($internship->created_at ? $internship->created_at->toDateString() : $today);
                $urls[] = [
                    'loc'        => $this->baseUrl . '/internship/' . $internship->slug,
                    'lastmod'    => $lastmod,
                    'changefreq' => 'weekly',
                    'priority'   => '0.7',
                ];
            }
        } catch (\Throwable $e) {
            // Proceed gracefully
        }

        return $urls;
    }

    /**
     * Generate the XML string for the sitemap.
     */
    public function generateXml(): string
    {
        $urls = $this->getSitemapData();

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($urls as $item) {
            $xml .= "    <url>\n";
            $xml .= "        <loc>" . htmlspecialchars($item['loc'], ENT_XML1, 'UTF-8') . "</loc>\n";
            $xml .= "        <lastmod>" . $item['lastmod'] . "</lastmod>\n";
            $xml .= "        <changefreq>" . $item['changefreq'] . "</changefreq>\n";
            $xml .= "        <priority>" . $item['priority'] . "</priority>\n";
            $xml .= "    </url>\n";
        }

        $xml .= '</urlset>';

        return $xml;
    }

    /**
     * Generate and return the XML sitemap response.
     */
    public function index(): Response
    {
        $xml = $this->generateXml();

        return response($xml, 200)
            ->header('Content-Type', 'application/xml; charset=utf-8')
            ->header('Cache-Control', 'public, max-age=86400');
    }
}
