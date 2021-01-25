@component('mail::message')
# Introduction

Hello from Laravel Website
@component('mail::panel')
Welcome User!
@endcomponent

@component('mail::table')
| Laravel       | Table         | Example  |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
@endcomponent

@component('mail::button', ['url' => ''])
Get Started
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
