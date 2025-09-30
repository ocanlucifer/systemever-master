<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>IT Inventory Inquiry</title>
</head>
<body>
    <h2>New IT Inventory Inquiry</h2>
    <p><strong>Full Name:</strong> {{ $data['full_name'] ?? '' }}</p>
    <p><strong>Company Name:</strong> {{ $data['company_name'] ?? '' }}</p>
    <p><strong>Job Title:</strong> {{ $data['job_title'] ?? '' }}</p>
    <p><strong>Email:</strong> {{ $data['email'] ?? '' }}</p>
    <p><strong>Phone:</strong> {{ $data['phone'] ?? '' }}</p>
    <p><strong>Message:</strong><br> {!! nl2br(e($data['message'] ?? '')) !!}</p>
</body>
</html>
