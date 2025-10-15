# base64-decode-and-encode
This project is a web-based **Text ⇄ Base64 Converter** that allows users to easily encode or decode text without reloading the page. It features two main text areas — one for plain text and one for Base64 — along with a single “Convert” button that automatically detects which box was edited last and performs the appropriate conversion.

When the user clicks **Convert**, JavaScript sends the entered data to a **PHP backend** via a `fetch()` POST request. The PHP script checks whether it received plain text or Base64, then uses built-in functions (`base64_encode` or `base64_decode`) to perform the conversion and returns the result. The JavaScript then updates the opposite text box with the output instantly.

Each text area includes a **Copy** button that lets users quickly copy the content to their clipboard. The interface is styled using CSS to create a clean, professional look with a **purple theme**, responsive design for both desktop and mobile devices, and a favicon for branding. The project demonstrates smooth frontend-backend interaction, live data exchange using JavaScript and PHP, and a focus on user-friendly design.

