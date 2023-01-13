<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ url('css/admin/feedback.css') }}">
    <title>Document</title>
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