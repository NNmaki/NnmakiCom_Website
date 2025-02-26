# nnmaki.com - Portfolio Webiste

At first, my purpose was to create a portfolio site using a CMS content management system like WordPress. However, after considering it, I decided to build it using pure HTML and CSS combined with some functions written in PHP.

## Goals

My goal was to create a landing page with three static background sections which would switch seamlessly when scrolling, which was perhaps the most challenging part to implement. Another difficulty was making the website as scalable as possible. I tested it on different resolutions, from widescreen to mobile. Additionally, I aimed to include some small CSS effects and animations, at least in the full-screen view. The hover effect was already familiar to me and adds a lot of "liveliness," but I also tested a so-called typing text animation using the @keyframes CSS-rule. To improve scalability, I used relative size units for elements and images. In some cases, I also utilized CSS @media-queries and made adjustments for three different screen resolutions.

Check it out: [https://nnmaki.com/scoreboard/](https://nnmaki.com/)

![nnmakicom_1000x670_1](https://github.com/user-attachments/assets/69d279ea-9430-4b5a-8ccb-1f6d2c981010)

![nnmakicom_1000x670_3](https://github.com/user-attachments/assets/21cec2d0-21bc-4a41-a9ca-60504901a125)

--
## Project

I implemented the contact form using PHP with the PHPMailer-library. PHPMailer supports sending emails via SMTP and includes good error-handling functions. The configuration file stores login credentials for the SMTP server, and the script sends the form data in a predefined format to a specified email address. Added also reCaptcha from Google to prevent flooding.

For the burger menu, which opens from the sidebar, and the image carousels on the project pages, I used JavaScript.

I believe I could have completed this much more easily using WordPress, but coding it from scratch gave me a lot of freedom in design without relying on third-party plugins.


