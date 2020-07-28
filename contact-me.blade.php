<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>It works Again!</h1>
    <p>It sounds like you want to hear more about {{$topic}}.</p>
</body>
</html> -->

@component('mail::message')

# A Heading

Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero veniam dolorem molestias consequatur facilis odit ipsa,
quisquam dolor amet rerum quibusdam reprehenderit quidem officiis deleniti illo ipsum eaque explicabo enim!
Autem aliquam ut architecto voluptatibus. Et perferendis temporibus saepe velit adipisci! Perferendis inventore
similique deserunt ea assumenda a sapiente facere! Necessitatibus id nulla magni possimus commodi consequatur ea numquam
praesentium?
Fugiat, velit sed at, vero ipsum dolore unde esse in enim labore quia voluptas. Explicabo, nam magnam est dicta beatae
inventore expedita. Est quae exercitationem, eveniet necessitatibus amet neque incidunt.

- A list
- Goes
- Here


@component('mail::button',['url' =>'https://github.com/adilawrence23'])
    Visit GitHub
@endcomponent

@endcomponent