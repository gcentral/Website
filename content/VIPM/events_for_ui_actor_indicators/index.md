---
title: "Events for UI Actor Indicators"
externalUrl: https://www.vipm.io/package/events_for_ui_actor_indicators
date: 2023-08-29
summary: "Easily create events for front panel indicators of UI actors"
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
 - "GUI"
 - "NI"
 - "VIPM Community"
---

Redirecting to https://www.vipm.io/package/events_for_ui_actor_indicators

Vendor: justACS and SAS Workshops

Author(s): Allen C Smith and Sam Taggart
 
Full Description:
**Events for UI Actor Indicators ** is a set of wizards that allow you to quickly create UI actors from a template, and then add user events to handle updates to its front panel indicators.

**Creating a UI Actor from Template**

In your project menu, select Tools » Create Actor from Template...  You'll see the Create Actor From Template dialog.

Name your actor, and then click 'Create Actor.'  A new actor, cloned from the UI Template, will be added to your project. 

The new actor generally conforms to the pattern taught in Actor-Oriented Design in LabVIEW.  It comes configured to show front panel when called, actor core.vi already contains an event handling loop, and events are created and destroyed in Pre Launch Init.vi and a subVI of Stop Core.vi

(This tool supports creating actors from any template, not just the UI Template.  To add your own templates to the pulldown menu, create a subfolder in <LabVIEW>/Project/Create Actors From Template.  Name the folder '_<My Template Name>', and be sure to include the leading underscore.  Copy your template into the folder.  It will be available in the pulldown menu the next time you invoke Create Actor from Template.)

**Adding Event Support to a UI Actor**

Add an indicator to the front panel of your new actor, and right click on it.  Select 'Add Event Support'.

The tool will add

    a suitable event to the actor's attributes,
    event creation code to Pre Launch Init.vi,
    event destruction code to a VI called Destroy User Events.vi (which is called in Pre Launch Init and Stop Core), and
    event handling code to the event structure in Actor Core.vi.

All that remains is for you to generate the event in an appropriate subVI.

**Notes**

***The scripting code will tag any indicator for which it has generated event support, so you cannot generate code for the same indicator twice.***  Furthermore, if you copy an indicator with event support, you will also copy the tag, so you won't be able to generate an event for the new indicator either.

The scripting code uses labels on certain block diagram items to do its work.  Those labels are identified by comments; removing the labels will break the scripting code.  If your existing actors follow the general pattern of the template (create user events in Pre Launch Init, use an event structure in Actor Core, and destroy the events in Stop Core) you should be able modify your existing code to work with these tools by adding the appropriate labels.

Diagram cleanup still leaves something to be desired; we hope to address that in a future release.

Please feel free to post any comments or critiques to the NI forums, here:  https://forums.ni.com/t5/Actor-Framework-Documents/Events-for-UI-Actor-Indicators/ta-p/3869260.  We'll answer as our paid work permits.