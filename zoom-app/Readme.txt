URL : https://artisansweb.net/how-to-create-a-meeting-on-zoom-using-zoom-api-and-php/

* Create an OAuth App on Zoom *

1. Once you have your Zoom account, you need to create an OAuth app on Zoom using the below steps.
Register your app on Zoom APP Marketplace.
2. Upon registering an app, you will get your generated credentials. Here you need to pass Redirect URL for OAuth and Whitelist URL.
3. On the next step, enter the basic information about your app.
4. In the tab, you can optionally enable some additional features such as Event Subscriptions and Chat Subscriptions for your app.
5. Under the ‘Scopes’ tab, you need to add scopes regarding your app. For example, you can add a scope for Zoom meetings.

*WARNING* If you are on localhost then use the ngrok and generate the local URL. In my case, ngrok URLs for OAuth redirection and Whitelist URL are as shown below.


* Basic Setup and Configuration *

composer require guzzlehttp/guzzle


* DATABASE *

CREATE TABLE `token` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `access_token` text NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
