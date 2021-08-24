This is the folder with code to obtain authorization from Gmail for sending emails. Follow the instructions at:
https://github.com/PHPMailer/PHPMailer/wiki/Using-Gmail-with-XOAUTH2

To obtain the authorization copy this folder to the public folder while obtaining access and then be sure to remove the folder once complete.

All the API Keys / credentials should go in .env.local which is gitignored to never get checked into source control. Therefore credentials will need to manually be copied between systems and emailing will generally not be accessible to developers of the website. Emailing can be tested from the test domain before final deployment to the live gcentral.org server.