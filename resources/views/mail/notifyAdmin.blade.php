@component('mail::message')
# Hello, Admin

A New Post was Upload with Title:<strong>{{$blog_post['title']}}</strong>.

@component('mail::button', ['url'=> 'http://127.0.0.1:8000'])
Home
@endcomponent

Thanks for choosing Abc Company Pvt Ltd.

@endcomponent


{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NotifyAdmin</title>
</head>
<body>
    <h3>New Post is Added</h3>
    <p>Title:<span>{{$blog_post['title']}}</span></p>
    <p>{{$blog_post['body']}}</p>
</body>
</html> --}}