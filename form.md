# Form Email Configuration Guide

This document provides instructions for enabling/disabling email notifications for form submissions.

## Files Modified

1. `submit-enquiry.php` - Enquiry form handler (for oil-grease-resistant-paper.php and other product pages)
2. `submit-contact.php` - Contact form handler (for contact-us.php)

## Current Status

**Emails are currently DISABLED** for both forms. Form data is still being stored in the database.

## To Re-enable Email Notifications

### For Enquiry Form (submit-enquiry.php)

1. Open `submit-enquiry.php`
2. Find the commented section starting with `/* EMAIL SENDING CODE - DISABLED` (around line 57-59)
3. Remove the `/*` at the start and `*/` at the end to uncomment the code

### For Contact Form (submit-contact.php)

1. Open `submit-contact.php`
2. Find the commented section starting with `/* EMAIL SENDING CODE - DISABLED` (around line 27-28)
3. Remove the `/*` at the start and `*/` at the end to uncomment the code

## Email Configuration Details

### SMTP Settings Used:
- **Host:** smtp.gmail.com
- **Port:** 587
- **Encryption:** TLS
- **Username:** manish@technofra.com
- **Password:** kwsx egye tejs iycf (App Password)

### To Change Email Configuration:

In both files, update these lines:

```php
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'manish@technofra.com';
$mail->Password = 'kwsx egye tejs iycf';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->setFrom('manish@technofra.com', 'Wrap Pack N Carry');
$mail->addAddress('manish@technofra.com'); // Admin email recipient
```

### To Add Multiple Recipients:

```php
$mail->addAddress('email1@example.com');
$mail->addAddress('email2@example.com');
```

## Testing Email Functionality

After re-enabling emails:
1. Fill out the enquiry form on any product page (e.g., oil-grease-resistant-paper.php)
2. Fill out the contact form on contact-us.php
3. Check that:
   - Data is stored in the database
   - Admin receives the notification email
   - Client receives thank-you email (for contact form)

## Database Tables

- **Enquiry Form:** `enquiries` table
  - Fields: name, phone, email, product, format, variant, size, quantity, message
  
- **Contact Form:** `contact_us` table
  - Fields: name, phone, email, subject, message