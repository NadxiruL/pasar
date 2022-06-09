{{-- @component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent --}}


<h1>Email Verification Mail</h1>
Please verify your email with bellow link:
<a href="{{ route('account.verify', $token) }}">Verify Email</a>
