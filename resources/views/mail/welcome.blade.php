<x-mail::message>
# Welcome {{ $user->name }},
We are please to have you here. 
---
<x-mail::panel>
    This is a lovely pane
</x-mail::panel>

{{-- <x-mail::button :url="route('homepage')"> color="success|error|primary" --}}
<x-mail::button :url="route('homepage')">
    View Some Services
</x-mail::button>

**Thanks for choosing us.**
</x-mail::message>
