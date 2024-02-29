---
title: "NI Launch Remote Actor"
externalUrl: https://www.vipm.io/package/ni_lib_launch_remote_actor
summary: "You can now cause an actor to launch on a remote system just by replacing the normal Launch Actor.vi with a new Remote Launch Actor.vi."
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

Redirecting to https://www.vipm.io/package/ni_lib_launch_remote_actor

Vendor: National Instruments

Author(s): Stephen Loftus-Mercer
 
Full Description:
You can now cause an actor to launch on a remote system just by replacing the normal Launch Actor.vi with a new Remote Launch Actor.vi.  The new VI has the identical conpane as Launch Actor but with the App Refnum input terminal. We chose to make it a separate VI instead of just adding to Launch Actor so that the AF itself is still entirely unencumbered by network code. Thus anyone who isn't using network connectivity doesn't pay the price of having to load the network classes into memory. 

The connection uses VI Server. We could have used any of several other protocols, some of which would have been more secure, but we chose to go with an option that is more familiar to most users.

There is a lot of documentation and comments throughout the newly added VIs. The biggest documentation is on the block diagram of 'Upper Proxy Actor.lvclass:Launch Remote Actor.vi'. There you'll find a PNG of the network topology and the relationships among all the various parts.

The two machines do have to be peers on the network.  We did not figure out how to make a bi-directional network connection where one machine is behind a router and using port forwarding. That would have required using a different communications protocol than VI Server, since we cannot open an app refnum on the client side to itself and then pass that to the server, nor are there any other credentials that we know that would work.