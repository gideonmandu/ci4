<!-- using view parser -->
<h1>{page_heading}</h1>
{subjects_list}
<h1>{subject}</h1>
<p>{abbr}</p>
{/subjects_list}

<!-- conditional rendering -->
{if $status}
<p>Welcome to CI4</p>
{endif}
<!-- conditional rendering -->
<!-- using view parser -->