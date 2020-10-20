@component('mail::message')
# Your account has been schedule for deletion

**A final word from our team:**

{{ "

We're sorry to see you leave mindanao art. But before you go, if there is anything we can do to improve your experience with our website, please let us know by emailing on support@min-art.org

\n

We care very much about your artwork on our site. If you truly do not want to stay with us, then there is nothing else you need to do. Your account has been scheduled for deletion on our site.

\n
But, if you would like to give us another change (and we really hope you do), then please email us on support@min-art.org and let us know what we can do to accomodate your needs. We'll do everthing we can to make our site better for you.

If you change your mind you can recover your account by emailing us on support@min-art.org

" }}

Sincerely,<br>
{{ config('app.name') }} Team
@endcomponent
