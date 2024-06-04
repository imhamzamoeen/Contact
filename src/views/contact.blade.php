<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>

<body>
    <h1>
        Contact
        <form method="post" action="{{ route('contact_store') }}">
            @csrf
            <input type="text" name="name" value="">
            <input type="email" name="email" value="">
            <input type="text" name="subject" value="">
            <input type="text" name="message" value="">
            <button type="submit" name="Submit" class="btn btn-primary">Submit</button>
        </form>
    </h1>
</body>

</html>
