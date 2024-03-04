---
title: "Multiplexed Messenger Channel"
externalUrl: https://www.vipm.io/package/channels_messenger_multiplexed
date: 2023-01-31
summary: "The Multiplexed Messenger Channel is similar to the Messenger Channel in that it is a multi-writer, multi-reader queue, but it is actually an array of such queues."
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

Redirecting to https://www.vipm.io/package/channels_messenger_multiplexed

Vendor: Multiplexed Messenger Channel

Author(s): Multiplexed Messenger Channel
 
Full Description:
The Multiplexed Messenger Channel is similar to the Messenger Channel in that it is a multi-writer, multi-reader queue, but it is actually an array of such queues.

The endpoints have a full complement of optional inputs and outputs, but the new input that makes this Channel special is the subchannel index.  Different writers and readers can dynamically choose which subchannel they wish to communicate on.

The examples include a 'MultiStation Controller' that shows a 'Manager-Minion' with a manager VI which controls 8 concurrent station VIs.