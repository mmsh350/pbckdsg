<?php

namespace App\Services;

use Illuminate\Http\Request;

class FormSecurityService
{
    /**
     * Prohibited explicit, spam, and phishing keywords.
     */
    protected array $prohibitedKeywords = [
        'viagra', 'cialis', 'casino', 'poker', 'betting', 'crypto', 'bitcoin', 'ethereum', 'usdt',
        'passive income', 'guaranteed return', 'whatsapp group', 'telegram group', 'porn', 'pornography',
        'adult video', 'escort', 'hookup', 'lottery winner', 'wire transfer', 'verify your account',
        'account suspended', 'login credentials', 'click here to claim'
    ];

    /**
     * Suspicious TLDs and link shorteners.
     */
    protected array $suspiciousDomains = [
        'bit.ly', 'tinyurl', 't.me', 'telegram.me', 'wa.me',
        '.xyz', '.top', '.ru', '.cn', '.work', '.click', '.buzz', '.club', '.gq', '.cf', '.tk', '.ml', '.ga'
    ];

    /**
     * Process all security layers for contact form submission.
     *
     * @return array|null Returns error response array if security check fails, or null if clean.
     */
    public function validateSubmission(Request $request): ?array
    {
        // 1. Honeypot Check (Invisible fields traps bots)
        if ($request->filled('website_url_hp') || $request->filled('address_hp')) {
            return ['status' => 'bot_silent_discard'];
        }

        // 2. Time Trap Check (Forms submitted < 2s are automated scripts)
        if ($request->has('form_time')) {
            $submittedIn = time() - (int) $request->input('form_time');
            if ($submittedIn < 2) {
                return ['status' => 'bot_silent_discard'];
            }
        }

        // 3. Security Math Captcha Check
        $captchaExpected = session('captcha_answer');
        if ($captchaExpected !== null && (int) $request->input('captcha') !== (int) $captchaExpected) {
            return ['status' => 'error', 'field' => 'captcha', 'message' => 'Incorrect security answer. Please try again.'];
        }
        session()->forget('captcha_answer');

        // 4. Anti-XSS, Anti-Phishing & Content Security Check
        $rawMessage = $request->input('message', '');
        $rawSubject = $request->input('subject', '');
        $rawName = $request->input('name', '');
        $combinedText = strtolower($rawName . ' ' . $rawSubject . ' ' . $rawMessage);

        // Block HTML anchor tags, script tags, BBCode links & XSS payloads
        if (preg_match('/(<a\s|href=|\[url|\[link|<script|javascript:|data:text\/html)/i', $rawMessage . ' ' . $rawSubject)) {
            return ['status' => 'error', 'field' => 'message', 'message' => 'For security reasons, HTML code or embedded links are not permitted in contact messages.'];
        }

        // Block suspicious phishing domains, url shorteners & malicious TLDs
        if (preg_match('/(https?:\/\/|www\.)[^\s<]+/i', $combinedText, $urlMatches)) {
            foreach ($this->suspiciousDomains as $domain) {
                if (str_contains(strtolower($urlMatches[0]), $domain)) {
                    return ['status' => 'error', 'field' => 'message', 'message' => 'Your message contains unverified links or suspicious URLs and could not be sent.'];
                }
            }

            preg_match_all('/(https?:\/\/|www\.)[^\s<]+/i', $combinedText, $allUrls);
            if (count($allUrls[0]) > 1) {
                return ['status' => 'error', 'field' => 'message', 'message' => 'For security reasons, multiple web links are not allowed in contact messages.'];
            }
        }

        // Block explicit content & phishing scam keywords
        foreach ($this->prohibitedKeywords as $keyword) {
            if (str_contains($combinedText, $keyword)) {
                return ['status' => 'error', 'field' => 'message', 'message' => 'Your message contains prohibited terms or suspicious link patterns and could not be submitted.'];
            }
        }

        return null;
    }

    /**
     * Sanitize user input by stripping HTML tags and trimming whitespace.
     */
    public function sanitizeInputs(array $data): array
    {
        foreach ($data as $key => $value) {
            if (is_string($value)) {
                $data[$key] = strip_tags(trim($value));
            }
        }

        return $data;
    }
}
