<!DOCTYPE html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

<div class="container" style="width: 600px; padding: 10px; background-color: #ddd; margin: 5px auto;">
  <h2>Contact Details</h2>
  <hr/>
  <table style="width:99%; padding: 10px; border: 1px solid #fff;">
    <thead>
        <tr>
            <th>Full Name:</th>
            <td>{{ $data['full_name'] }}</td>
        </tr>
        <tr>
            <th>Email-id:</th>
            <td>{{ $data['email_id'] }}</td>
        </tr>
        <tr>
            <th>Contact No:</th>
            <td>{{ $data['contact_no'] }}</td>
        </tr>
        <tr>
            <th>Message:</th>
            <td>{{ $data['message'] }}</td>
        </tr>
    </thead>
  </table>
</div>

</body>
</html>
