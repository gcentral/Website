---
title: "Applications Messaging Manager"
externalUrl: https://www.vipm.io/package/marelli_applications_messaging_manager
date: 2022-01-19
summary: "For feedback or ideeas for improvement please contact **<u><color=blue>alex."
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
 - "VIPM Community"
 - "Actor Framework"
---

Redirecting to https://www.vipm.io/package/marelli_applications_messaging_manager

Vendor: Marelli

Author(s): Alex Bugnar (alex.bugnar@marelli.com)
 
Full Description:
For feedback or ideeas for improvement please contact **<u><color=blue>alex.bugnar@marelli.com</color></u>**

**What it does:**

  --  a much simpler and more intuitive alternative to Actor Framework, based on the principle of a network with star topology and addressing the nodes by name

  --  easily create fully independent components which can work as part of a software, without them having to be aware of what other components are part of that software

  --  create modular software and easily add additional components when new functionality is required

**How it works:**

AMM comes in the form of a library which contains a single class through which all functionality is implemented. Each component of a software instantiates an object of this class and specifies an AMM name. All components which specify the same AMM name will become nodes in the same network, managed by that AMM. Each component goes live in the network by registering with the AMM and specifying its own name and optionally, a list of notifications to which it wants to subscribe.

After this, each component can perform point-to-point communication by using another component's name (Command and Response messages), send Broadcast messages intended for all registered components or send Notification messages intended for all registered components which have subscribed to a particular notification. 

The communication protocol (attributes of messages, including type of data they carry) is completely user defined.