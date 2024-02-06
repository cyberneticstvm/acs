<!DOCTYPE html>
<html>

<head>
    <title>Aurega Corporate Service Contact Us</title>
</head>

<body>
    Dear Aurega,
    <p>You've recieved contact us form submitted via Website.</p>
    <p>Name: {{ $data->name }}</p>
    <p>Email: {{ $data->email }}</p>
    <p>Contact Number: {{ $data->contact_number }}</p>
    <p>Service: {{ $data->servicename->name }}</p>
    <p>Message: {{ $data->message }}</p>
    <br />
    <br />
    Regards,<br />
    Aurega Corporate Service.
</body>

</html>