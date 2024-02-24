# Upinel/Get2Post

Converts GET requests to POST and forwards data accordingly.

# Description

This PHP script takes query parameters from a GET request, constructs a form with those parameters, and then automatically submits the POST request to the specified URL. This script can be particularly useful when it's necessary to convert a GET request into a POST request on-the-fly.

# Usage

To use the Get2Post script:

1. Place the `get2post.php` file on your web server.

2. Construct a GET request to the `get2post.php` URL, including a `url` query parameter that indicates the destination URL for the POST request along with any other query parameters you wish to forward.

```php
// Example GET request format
https://your-domain.com/get2post.php?url=https://destination-domain.com/receive_post.php&param1=value1&param2=value2
```
3. When the GET request is made to the get2post.php, the script will automatically create a form and submit a POST request to https://destination-domain.com/receive_post.php with param1 and param2 included in the POST data.

# Contributing

Contributions are welcome! Feel free to submit pull requests or open issues to suggest improvements or report bugs.

# Note

This script has no error handling by design and should only be used in controlled environments. Always validate and sanitize incoming data when using it in production scenarios.

# License
This project is licensed under Apache License, Version 2.0.

# Author
Nova Upinel Chow  
Email: dev@upinel.com

# Buy me a coffee
If you wish to donate us, please donate to [https://paypal.me/Upinel](https://paypal.me/Upinel), it will be really lovely.
