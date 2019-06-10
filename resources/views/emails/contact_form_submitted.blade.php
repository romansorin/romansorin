{{-- Set email header line as: {{ $subject }} – contact form submission --}}

Name: {{ $name }}
Email: {{ $email }}
Subject: {{ $subject }}

Message: {{ $user_message }}
@isset($budget)
Budget: {{ $budget }}
@endisset
