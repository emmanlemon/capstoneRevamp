<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="http://malsup.github.com/jquery.form.js"></script>
    <link rel="shortcut icon" type="image/x-icon" href="{{ url("../images/sepnas_logo.png") }}" />
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="{{ url('css/admin/feedback.css') }}">
    <title>Sepnas Feedback</title>
</head>
<body>
    @extends('admin.extension.navigator_side')
    @section('navigator_side')
    @endsection
    <div class="section">
        @foreach ($contact as $feedback)
            <div class="container_feedback">
                <p>Name: {{ $feedback->name }}</p>
                <p>Subject: {{ $feedback->subject }}</p>
                <p>Message: {{ $feedback->message }}</p>
                <p>Email: {{ $feedback->email }}</p>
                <p>Recipient: {{ $feedback->recipient }}</p>
            </div>
     @endforeach
     <div style="float:right; padding-right: 10px">
        {{ $contact->links() }}
      </div>
    </div>
</body>
</html>