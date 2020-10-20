@component('mail::message')

# {{ $subject }}

**Hello** {{ $user->name }},

This message confirms that your Mindanao Art Account **{{ $user->email }}** was deleted due to a violation of our Terms of Service that was left unresolved.

To attempt to restore access to the account, please email support@min-art.org immediately.

Mindanao Art Accounts can only be restored within a short period of time after deletion.

<br>
{{ config('app.name') }} Team
@endcomponent
