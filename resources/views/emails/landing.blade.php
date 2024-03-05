<!DOCTYPE html>
<html>

<head>
    <title>Aurega Corporate Service LLC Lead Form</title>
</head>

<body>
    Dear Aurega,
    <p>You've recieved new lead via Website.</p>
    <p>Name: {{ $data->name }}</p>
    <p>Email: {{ $data->email }}</p>
    <p>Contact Number: {{ $data->mobile }}</p>
    <p>Service: {{ $data->service ?? '' }}</p>
    <p>Message: {{ $data->message ?? '' }}</p>
    <br />
    <br />
    Regards,<br />
    Aurega Corporate Service LLC.
</body>

</html>