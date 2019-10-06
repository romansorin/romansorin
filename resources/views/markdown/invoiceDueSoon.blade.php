@component('mail::message')

**Hi {{$name}},**

This is a reminder that your invoice is due in 7 days.

**Amount Due:** ${{$total}}<br>
**Due By:** {{$due_date}}


@component('mail::button', ['url' => $url, 'color' => 'success'])
Pay this Invoice
@endcomponent

If you have any questions about this invoice, simply reply to this email or reach out to our [support
team]({{$support}}) for
help.

Regards,
rs Billing

-----

<small>If you’re having trouble with the button above, copy and paste the URL below into your web browser.</small>

{{$action_url}}

@endcomponent