subject: Terugkoppelingsformulier
{if:target_type=="recipient"}ontvanger{endif}{if:target_type=="guest"}gastgebruiker{endif}#{target_id} {target.email}

{alternative:plain}

Geachte heer, mevrouw,

Wij ontvingen terugkoppeling per email van {if:target_type=="recipient"}ontvanger{endif}{if:target_type=="guest"}gastgebruiker{endif}#{target_id} {target.email}, u treft deze bijgesloten aan.

Hoogachtend,
{cfg:site_name}

{alternative:html}

<p>
    Geachte heer, mevrouw,
</p>

<p>
    Wij ontvingen terugkoppeling per email van {if:target_type=="recipient"}ontvanger{endif}{if:target_type=="guest"}gastgebruiker{endif}#{target_id} {target.email}, u treft deze bijgesloten aan.
</p>

<p>
    Hoogachtend,<br />
    {cfg:site_name}
</p>
 
