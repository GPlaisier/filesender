subject: Feedback van uw {if:target_type=="recipient"}ontvanger{endif}{if:target_type=="guest"}gast{endif} {target.email}

{alternative:plain}

Geachte heer, mevrouw,

We hebben een e-mailfeedback ontvangen van uw {if:target_type=="recipient"}ontvanger{endif}{if:target_type=="guest"}gast{endif} {target.email}, vind het als bijlage.

Hoogachtend,
{cfg:site_name}

{alternative:html}

<p>
    Geachte heer, mevrouw,
</p>

<p>
    We hebben een e-mailfeedback ontvangen van uw {if:target_type=="recipient"}ontvanger{endif}{if:target_type=="guest"}gast{endif} {target.email}, vind het als bijlage.
</p>

<p>
    Hoogachtend,<br />
    {cfg:site_name}
</p>
