---
title: "Actor Hierarchy Inspector"
externalUrl: https://www.vipm.io/package/justacs_lib_actor_hierarchy_inspector
date: 2023-07-18
summary: "The Actor Hierarchy Inspector displays the hierarchy of your Actor Framework project in real time."
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

Redirecting to https://www.vipm.io/package/justacs_lib_actor_hierarchy_inspector

Vendor: justACS

Author(s): Allen C. Smith and Meghan R. Smith
 
Full Description:
The Actor Hierarchy Inspector displays the hierarchy of your Actor Framework project in real time.

To launch the tool, select **Show All Actors** from the Tools » AF Tools menu of your project file.  The tool's panel displays the current hierarchy in a tree control; the control will update as actors are launched or stopped. A **Stop All Actors** tool is also included.

You will see a panel that shows the unique ID, debug alias, and fully qualified names of all currently running actors, arranged in a tree view.

Right click on any actor in the hierarchy to bring up a shortcut menu of options for that actor.

**Ping** gives a measure of the responsiveness of the target actor.  The tool sends a message to the actor and measures the response time in seconds.

**Show Block Diagram** will open the block diagram of the target actor.

**Show Front Panel** will open the front panel of the target actor.

**Stop Actor\\Emergency Stop Actor** will send a Stop or Emergency stop to the target actor.

You may also stop all running actors by clicking the **Stop All Actors** button.

**Please note** that you must enable AF Debug tracing to use this tool.  Add the Conditional Disable Symbol 'AF_Debug_Trace', with the value 'TRUE' to your project's list of Conditional Disable Symbols.

We recommend closing LabVIEW before installing this package.

This is the beta release for this product.  Please post your feedback to this product's NI forum or vipm.io pages.