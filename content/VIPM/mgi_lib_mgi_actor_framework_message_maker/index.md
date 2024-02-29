---
title: "MGI Actor Framework Message Maker"
externalUrl: https://www.vipm.io/package/mgi_lib_mgi_actor_framework_message_maker
summary: "An enhanced Actor Framework Message Maker!

Key improvements over NI's Actor Framework Message Maker:
-Ability to update already built messages
-New message icons
-Send Message VI gets its description from the message VI

To use the tool open a your project then select 'Tools'->'Actor Framework Message Maker (MGI)'."
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
draft: true
tags:
 - "VIPM"
 - "NI LabVIEW Tools Network"
 - "Actor Framework"
---

Redirecting to https://www.vipm.io/package/mgi_lib_mgi_actor_framework_message_maker

Vendor: MGI

Author(s): Moore Good Ideas, inc.
 
Full Description:
An enhanced Actor Framework Message Maker!

Key improvements over NI's Actor Framework Message Maker:
-Ability to update already built messages
-New message icons
-Send Message VI gets its description from the message VI

To use the tool open a your project then select 'Tools'->'Actor Framework Message Maker (MGI)'. Next select the methods you'd like to create messages for and click 'Build/Update Selected Messages'

We had two main gripes when working with the actor framework message maker supplied by NI:
1. If you changed the message VI, you had to manually fix the message class
2. A lot of block diagram readability is lost because of the plain 'Send Message' VIs, and it takes a lot of time to go in and change the icons and descriptions.

This new message maker aims to fix both of these issues. 

First, you can update messages. The message maker automatically detects which messages are out of date, and the user just has to click a button. 

Next, readability. We felt like there were two main things that a message needed to significantly increase block diagram readability. First, it needs a good icon. The icon should clearly show that it's a message, but also tell you what the message does. To do this, we steal parts of the icon from your souce code to create a distinct and helpful icon. Second, it needs a good VI description. This is again stolen from the message VI. Now you can look at a block diagram, mouse over things, and get a good idea of what your actor code is doing.


Please visit http://mooregoodideas.com/improved-actor-framework-message-maker for more information.