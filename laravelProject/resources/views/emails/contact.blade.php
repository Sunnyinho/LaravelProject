@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => 'https://www.youtube.com'])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
