<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\User;
use App\Models\Setting;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class Index extends Component
{
    use WithFileUploads;

    public $activeTab = 'contact'; // 'contact', 'about', 'leadership', 'system', 'subscribers', 'users'

    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

    public $sync_document_dates = false;
    public $send_subscriber_alerts = true; // Master toggle for subscriber notifications

    // Executive Leadership Settings
    public $leadership_section_tag = 'EXECUTIVE LEADERSHIP';
    public $leadership_section_heading = "Steering Kaduna's Socio-Economic Agenda";

    public $governor_role = 'Executive Governor of Kaduna State';
    public $governor_name = 'Sen. Uba Sani';
    public $governor_bio = 'Leading the administration with a strategic mandate focused on rural transformation, human capital development, institutional reform, and inclusive economic growth across Kaduna State.';
    public $governor_tags = 'Safety & Security, Infrastructure, Human Capital, Agriculture, Trade & Investment, OGP Transparency';
    public $governor_image_current = '';
    public $governor_image_file = null;

    public $commissioner_role = 'Honourable Commissioner';
    public $commissioner_name = 'Hon. Mukhtar Ahmed Monrovia';
    public $commissioner_bio = '"Our dedicated team works tirelessly to ensure optimal resource allocation, fiscal discipline, and empirical M&E to create a lasting positive impact across all sectors of our economy."';
    public $commissioner_tag = 'Planning & Budget Commission';
    public $commissioner_image_current = '';
    public $commissioner_image_file = null;

    // Contact Info Settings
    public $contact_phone_primary = '+234 (0) 800 000 0000';
    public $contact_phone_secondary = '+234 (0) 900 000 0000';
    public $contact_address = "Planning & Budget Commission\nState Secretariat, Independence Way\nKaduna, Kaduna State, Nigeria";
    public $contact_working_hours_weekday = 'Monday - Friday: 8:00 AM - 4:00 PM';
    public $contact_working_hours_weekend = 'Saturday & Sunday: Closed';

    // Contact Email & Notification Settings
    public $contact_primary_email = 'info@pbc.kdsg.gov.ng';
    public $contact_secondary_email = 'support@pbc.kdsg.gov.ng';
    public $send_mail_to_primary = true;
    public $send_mail_to_secondary = true;
    public $send_mail_to_all_admins = false;
    public $send_acknowledgment_to_sender = true;

    // Social Media & External Portal Links
    public $social_facebook_url = '#';
    public $social_twitter_url = '#';
    public $social_instagram_url = '#';
    public $social_linkedin_url = '';
    public $social_youtube_url = '';
    public $link_citifeed_app = 'https://play.google.com/store/apps/details?id=kaduna.citizen.feedback';
    public $link_ogp_portal = 'https://www.opengovpartnership.org/members/kaduna-state-nigeria/';
    public $link_budget_template = 'https://pbc.kdsg.gov.ng/download/2026-revenue-budget-template/';
    public $link_nutrition_dashboard = 'https://nscfn.nationalplanning.gov.ng/fn-dashboard';
    // Institutional Foundation (About, Vision, Mission, Values)
    public $about_welcome_heading = 'Welcome to the Commission';
    public $about_welcome_text_1 = 'Established under Law No. 2017, the Kaduna State Planning and Budget Commission serves as the central machinery for economic planning, annual budget formulation, project monitoring, and social investment coordination.';
    public $about_welcome_text_2 = 'From its origins in 1979 to its modern statutory role, the Commission manages public finances and donor partnerships across all 23 Local Government Areas in Kaduna State.';
    public $about_vision = 'A world-class and dynamic Planning and Budget Agency creating a vibrant economy for continuous improvement of the living standards of the people of Kaduna State.';
    public $about_mission = 'To serve as an effective machinery for the formulation, coordination, monitoring and evaluation of Government economic policies, plans and budgets using a competent workforce.';
    public $about_core_values = 'Dedication, Integrity, Teamwork, Fiscal Transparency, Employee Welfare, and Continuous Innovation.';

    public function mount()
    {
        $this->sync_document_dates = (bool) Setting::get('sync_document_dates', 0);
        $this->send_subscriber_alerts = (bool) Setting::get('send_subscriber_alerts', 1);

        $this->contact_phone_primary = Setting::get('contact_phone_primary', '+234 (0) 800 000 0000');
        $this->contact_phone_secondary = Setting::get('contact_phone_secondary', '+234 (0) 900 000 0000');
        $this->contact_address = Setting::get('contact_address', "Planning & Budget Commission\nState Secretariat, Independence Way\nKaduna, Kaduna State, Nigeria");
        $this->contact_working_hours_weekday = Setting::get('contact_working_hours_weekday', 'Monday - Friday: 8:00 AM - 4:00 PM');
        $this->contact_working_hours_weekend = Setting::get('contact_working_hours_weekend', 'Saturday & Sunday: Closed');

        $this->contact_primary_email = Setting::get('contact_primary_email', 'info@pbc.kdsg.gov.ng');
        $this->contact_secondary_email = Setting::get('contact_secondary_email', 'support@pbc.kdsg.gov.ng');
        $this->send_mail_to_primary = (bool) Setting::get('send_mail_to_primary', 1);
        $this->send_mail_to_secondary = (bool) Setting::get('send_mail_to_secondary', 1);
        $this->send_mail_to_all_admins = (bool) Setting::get('send_mail_to_all_admins', 0);
        $this->send_acknowledgment_to_sender = (bool) Setting::get('send_acknowledgment_to_sender', 1);

        $this->social_facebook_url = Setting::get('social_facebook_url', '#');
        $this->social_twitter_url = Setting::get('social_twitter_url', '#');
        $this->social_instagram_url = Setting::get('social_instagram_url', '#');
        $this->social_linkedin_url = Setting::get('social_linkedin_url', '');
        $this->social_youtube_url = Setting::get('social_youtube_url', '');
        $this->link_citifeed_app = Setting::get('link_citifeed_app', 'https://play.google.com/store/apps/details?id=kaduna.citizen.feedback');
        $this->link_ogp_portal = Setting::get('link_ogp_portal', 'https://www.opengovpartnership.org/members/kaduna-state-nigeria/');
        $this->link_budget_template = Setting::get('link_budget_template', 'https://pbc.kdsg.gov.ng/download/2026-revenue-budget-template/');
        $this->link_nutrition_dashboard = Setting::get('link_nutrition_dashboard', 'https://nscfn.nationalplanning.gov.ng/fn-dashboard');

        $this->about_welcome_heading = Setting::get('about_welcome_heading', 'Welcome to the Commission');
        $this->about_welcome_text_1 = Setting::get('about_welcome_text_1', 'Established under Law No. 2017, the Kaduna State Planning and Budget Commission serves as the central machinery for economic planning, annual budget formulation, project monitoring, and social investment coordination.');
        $this->about_welcome_text_2 = Setting::get('about_welcome_text_2', 'From its origins in 1979 to its modern statutory role, the Commission manages public finances and donor partnerships across all 23 Local Government Areas in Kaduna State.');
        $this->about_vision = Setting::get('about_vision', 'A world-class and dynamic Planning and Budget Agency creating a vibrant economy for continuous improvement of the living standards of the people of Kaduna State.');
        $this->about_mission = Setting::get('about_mission', 'To serve as an effective machinery for the formulation, coordination, monitoring and evaluation of Government economic policies, plans and budgets using a competent workforce.');
        $this->about_core_values = Setting::get('about_core_values', 'Dedication, Integrity, Teamwork, Fiscal Transparency, Employee Welfare, and Continuous Innovation.');

        $this->leadership_section_tag = Setting::get('leadership_section_tag', 'EXECUTIVE LEADERSHIP');
        $this->leadership_section_heading = Setting::get('leadership_section_heading', "Steering Kaduna's Socio-Economic Agenda");

        $this->governor_role = Setting::get('governor_role', 'Executive Governor of Kaduna State');
        $this->governor_name = Setting::get('governor_name', 'Sen. Uba Sani');
        $this->governor_bio = Setting::get('governor_bio', 'Leading the administration with a strategic mandate focused on rural transformation, human capital development, institutional reform, and inclusive economic growth across Kaduna State.');
        $this->governor_tags = Setting::get('governor_tags', 'Safety & Security, Infrastructure, Human Capital, Agriculture, Trade & Investment, OGP Transparency');
        $this->governor_image_current = Setting::get('governor_image', '');

        $this->commissioner_role = Setting::get('commissioner_role', 'Honourable Commissioner');
        $this->commissioner_name = Setting::get('commissioner_name', 'Hon. Mukhtar Ahmed Monrovia');
        $this->commissioner_bio = Setting::get('commissioner_bio', '"Our dedicated team works tirelessly to ensure optimal resource allocation, fiscal discipline, and empirical M&E to create a lasting positive impact across all sectors of our economy."');
        $this->commissioner_tag = Setting::get('commissioner_tag', 'Planning & Budget Commission');
        $this->commissioner_image_current = Setting::get('commissioner_image', '');
    }

    public function setTab($tab)
    {
        $this->activeTab = $tab;
    }

    public function updatedSyncDocumentDates($value)
    {
        Setting::set('sync_document_dates', $value ? '1' : '0');
        session()->flash('success', 'Document date synchronization setting updated.');
    }

    public function updatedSendSubscriberAlerts($value)
    {
        Setting::set('send_subscriber_alerts', $value ? '1' : '0');
        $msg = $value ? 'Global subscriber email alerts ENABLED.' : 'Global subscriber email alerts PAUSED for all users.';
        session()->flash('success', $msg);
    }

    public function toggleSubscriberStatus($id)
    {
        $sub = Subscriber::findOrFail($id);
        $sub->is_active = !$sub->is_active;
        $sub->save();

        session()->flash('success', 'Subscriber status updated to ' . ($sub->is_active ? 'Active' : 'Paused') . '.');
    }

    public function saveContactSettings()
    {
        $this->validate([
            'contact_phone_primary' => 'required|string|max:255',
            'contact_phone_secondary' => 'nullable|string|max:255',
            'contact_address' => 'required|string',
            'contact_working_hours_weekday' => 'required|string|max:255',
            'contact_working_hours_weekend' => 'required|string|max:255',
        ]);

        Setting::set('contact_phone_primary', $this->contact_phone_primary);
        Setting::set('contact_phone_secondary', $this->contact_phone_secondary);
        Setting::set('contact_address', $this->contact_address);
        Setting::set('contact_working_hours_weekday', $this->contact_working_hours_weekday);
        Setting::set('contact_working_hours_weekend', $this->contact_working_hours_weekend);

        session()->flash('success', 'Head office contact details & working hours updated successfully.');
    }

    public function saveMailSettings()
    {
        $this->validate([
            'contact_primary_email' => 'required|email',
            'contact_secondary_email' => 'nullable|email',
        ]);

        Setting::set('contact_primary_email', $this->contact_primary_email);
        Setting::set('contact_secondary_email', $this->contact_secondary_email);
        Setting::set('send_mail_to_primary', $this->send_mail_to_primary ? '1' : '0');
        Setting::set('send_mail_to_secondary', $this->send_mail_to_secondary ? '1' : '0');
        Setting::set('send_mail_to_all_admins', $this->send_mail_to_all_admins ? '1' : '0');
        Setting::set('send_acknowledgment_to_sender', $this->send_acknowledgment_to_sender ? '1' : '0');

        session()->flash('success', 'Mail routing & notification settings updated successfully.');
    }

    public function saveSocialLinks()
    {
        $this->validate([
            'social_facebook_url' => 'nullable|string|max:255',
            'social_twitter_url' => 'nullable|string|max:255',
            'social_instagram_url' => 'nullable|string|max:255',
            'social_linkedin_url' => 'nullable|string|max:255',
            'social_youtube_url' => 'nullable|string|max:255',
            'link_citifeed_app' => 'nullable|string|max:255',
            'link_ogp_portal' => 'nullable|string|max:255',
            'link_budget_template' => 'nullable|string|max:255',
            'link_nutrition_dashboard' => 'nullable|string|max:255',
        ]);

        Setting::set('social_facebook_url', $this->social_facebook_url);
        Setting::set('social_twitter_url', $this->social_twitter_url);
        Setting::set('social_instagram_url', $this->social_instagram_url);
        Setting::set('social_linkedin_url', $this->social_linkedin_url);
        Setting::set('social_youtube_url', $this->social_youtube_url);
        Setting::set('link_citifeed_app', $this->link_citifeed_app);
        Setting::set('link_ogp_portal', $this->link_ogp_portal);
        Setting::set('link_budget_template', $this->link_budget_template);
        Setting::set('link_nutrition_dashboard', $this->link_nutrition_dashboard);

        session()->flash('success', 'Social media handles & external portal links updated successfully.');
    }

    public function saveAboutSettings()
    {
        $this->validate([
            'about_welcome_heading' => 'required|string|max:255',
            'about_welcome_text_1' => 'required|string',
            'about_welcome_text_2' => 'nullable|string',
            'about_vision' => 'required|string',
            'about_mission' => 'required|string',
            'about_core_values' => 'required|string',
        ]);

        Setting::set('about_welcome_heading', $this->about_welcome_heading);
        Setting::set('about_welcome_text_1', $this->about_welcome_text_1);
        Setting::set('about_welcome_text_2', $this->about_welcome_text_2);
        Setting::set('about_vision', $this->about_vision);
        Setting::set('about_mission', $this->about_mission);
        Setting::set('about_core_values', $this->about_core_values);

        session()->flash('success', 'Vision, Mission, Core Values, and Welcome message updated successfully.');
    }

    public function saveLeadershipSettings()
    {
        $this->validate([
            'leadership_section_tag' => 'required|string|max:255',
            'leadership_section_heading' => 'required|string|max:255',
            'governor_role' => 'required|string|max:255',
            'governor_name' => 'required|string|max:255',
            'governor_bio' => 'required|string',
            'governor_tags' => 'nullable|string',
            'governor_image_file' => 'nullable|image|max:3072',
            'commissioner_role' => 'required|string|max:255',
            'commissioner_name' => 'required|string|max:255',
            'commissioner_bio' => 'required|string',
            'commissioner_tag' => 'nullable|string',
            'commissioner_image_file' => 'nullable|image|max:3072',
        ]);

        if ($this->governor_image_file) {
            $path = $this->governor_image_file->store('settings', 'public');
            Setting::set('governor_image', $path);
            $this->governor_image_current = $path;
            $this->reset('governor_image_file');
        }

        if ($this->commissioner_image_file) {
            $path = $this->commissioner_image_file->store('settings', 'public');
            Setting::set('commissioner_image', $path);
            $this->commissioner_image_current = $path;
            $this->reset('commissioner_image_file');
        }

        Setting::set('leadership_section_tag', $this->leadership_section_tag);
        Setting::set('leadership_section_heading', $this->leadership_section_heading);

        Setting::set('governor_role', $this->governor_role);
        Setting::set('governor_name', $this->governor_name);
        Setting::set('governor_bio', $this->governor_bio);
        Setting::set('governor_tags', $this->governor_tags);

        Setting::set('commissioner_role', $this->commissioner_role);
        Setting::set('commissioner_name', $this->commissioner_name);
        Setting::set('commissioner_bio', $this->commissioner_bio);
        Setting::set('commissioner_tag', $this->commissioner_tag);

        session()->flash('success', 'Executive Leadership details and images updated successfully.');
    }

    public function deleteSubscriber($id)
    {
        Subscriber::findOrFail($id)->delete();
        session()->flash('success', 'Subscriber email removed successfully.');
    }

    public function saveUser()
    {
        $this->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->reset(['name', 'email', 'password', 'password_confirmation']);
        
        session()->flash('success', 'User successfully added.');
    }

    public function deleteUser($id)
    {
        if (auth()->id() == $id) {
            session()->flash('error', 'You cannot delete your own account.');
            return;
        }
        
        User::findOrFail($id)->delete();
        session()->flash('success', 'User successfully deleted.');
    }

    public function render()
    {
        $users = User::orderBy('name')->get();
        $subscribers = Subscriber::latest()->get();
        return view('livewire.admin.settings.index', compact('users', 'subscribers'))->layout('layouts.app');
    }
}
