---
title: "IG HTTP Server"
externalUrl: https://www.vipm.io/package/illuminatedg_lib_ig_http_server
date: 2023-10-16
summary: "HTTP Web Server implemented with 100% LabVIEW. Includes HTTPS, Form handling, Sessions, WebSocket Upgrades, and more."
showSummary: true
showAuthor: false
showEdit: false
showData: false
showViews: false
showReadingTime: false
showWordCount: false
showBreadcrumbs: false
showHeadingAnchors: false
sharingLinks: false
showZenMode: false
showPagination: false
showRelatedContent: false
draft: false
tags:
 - "VIPM"
 - "VIPM Community"
---

Redirecting to https://www.vipm.io/package/illuminatedg_lib_ig_http_server

Vendor: IlluminatedG

Author(s): Derrick Bommarito
 
Full Description:
HTTP Web Server for LabVIEW applications. Provides easy to use common features such as file serving and request handling akin to LabVIEW Web Services. The underlying processing flow is comprised of many steps that can be augmented with additional functionality by registering interface implementations specific to each step.

For demos and examples see the **IG HTTP Server Examples** package.

**This project is under active development and as such should not be considered a secure web server implementation without your own verification with the features you use.** This server does aim to default to the more secure option when possible and enables important features such as HTTPS and secure WebSockets but care should always be taken any time a server is exposed to a network.

The github repository at https://github.com/illuminated-g/lv-http-server provides most of the high level documentation and there are plenty of examples to demonstrate the available features.

Features of this web server include:
 - HTTPS including automatic redirecting from port 80 to the HTTPS port
 - File Serving - includes protections against attacks trying to ascend out of the specified root folder
 - Sessions (& Cookies) - Ability to store user data server side across requests
 - WebSocket connection upgrades - Enable WebSocket connection by request path at the same port the web content is accessed at.
 - CSRF tokens to make it easier to protect against POST and other submission attacks
 - Request processing trace logging - Useful for debug and performance testing
 - Authentication framework - Automated redirects to login page, logout handling, ability to plug in implementations for users and user providers to identify requests, and utilities for ensuring passwords are handled in a more secure manner.
 - Debug mode to respond to error requests with the full error message

Needs work:
 - Caching - implemented but caching handlers don't react to cache headers properly.