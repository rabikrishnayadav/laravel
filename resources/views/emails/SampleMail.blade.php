@component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

@component('mail::panel')
This is the panel content
@endcomponent

<!-- for crating table in mail -->

@component('mail::table')

| Laravel 	|	Table 	| 	Example 	|
| ----------|:---------:|--------------:|
| Col 2 is  | Centered  | Rs.50     		|
| Col 3 is  | Right-Aligned | Rs.80  	|

@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
