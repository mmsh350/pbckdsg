<?php

namespace App\Livewire\Admin\Settings;

use Livewire\Component;
use App\Models\User;
use App\Models\Setting;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class Index extends Component
{
    public $activeTab = 'contact'; // 'contact', 'system', 'subscribers', 'users'

    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

    public $sync_document_dates = false;
    public $send_subscriber_alerts = true; // Master toggle for subscriber notifications

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
