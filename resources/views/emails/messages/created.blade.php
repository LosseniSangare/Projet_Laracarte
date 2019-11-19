@component('mail::message')
# Introduction

The body of your message.

<ul>
  <li>{{$_nom}}</li>
  <li>{{$_email}}</li>

  @component('mail::panel')
    {{$_msg}}
@endcomponent



Thanks,<br>
{{ config('app.name') }}
@endcomponent
