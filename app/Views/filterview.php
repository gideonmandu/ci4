<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{page_title|lower}</title>
</head>

<body>
    <h1>{page_heading|title|limit_chars(3)}</h1>
    <p>Date Of Creation: {date|date(l dS F Y)}</p>
    <p>Date Modified: {date|date_modify(+5days)|date(l dS F Y)}</p>
    <p>Price: {price|local_currency(USD)|highlight_code}</p>
    <p>Price to be rounded: {price_rounded|round(1)}</p>
</body>

</html>