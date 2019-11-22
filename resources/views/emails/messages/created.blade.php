@component('mail::message')
# Introduction

The body of your message.

<ul>
  <li>{{$_msg->nom}}</li>
  <li>{{$_msg->email}}</li>

  @component('mail::panel')
    {{$_msg->message}}
@endcomponent



Thanks,<br>
{{ config('app.name') }}
@endcomponent
