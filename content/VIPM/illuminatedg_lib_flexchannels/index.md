---
title: "IG FlexChannels"
externalUrl: https://www.vipm.io/package/illuminatedg_lib_flexchannels
date: 2022-03-04
summary: "New Channel template where readers determine mechanism: lossy, lossless, or event-driven and lossless readers can be restartable."
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
 - "communication"
---

Redirecting to https://www.vipm.io/package/illuminatedg_lib_flexchannels

Vendor: IlluminatedG

Author(s): Derrick Bommarito
 
Full Description:
Adds a new Channel template to the create channel dialog in LabVIEW. This combines the behavior of several other templates. Multiple communication mechanisms can be used with the same channel wire and the reader determines the mechanism. A monitoring status endpoint is also available so code can monitor the status of value updates and the queue sizes of all lossless readers.

Since the channel can be forked to multiple readers, it is possible for the readers to influence the performance of each other and of the writer. Each lossless reader endpoint gets its own dedicated queue and can specify the maximum queue depth individually. Once a queue is full, the timing of the reader will dictate the timing of the writer.

Lossy readers can be used when only the latest value is important, similar to notifiers/tags. Lossy readers can be configured to wait for the next new element with a timeout.

Event-based communication is also possible with an endpoint that returns an event registration. Events also perform lossless transmission, albeit with less control, so care should be taken and tests done to ensure acceptable performance for higher bandwidth communication. Events are perfectly suited for configuration and command style communication.

There are no palettes for this package, interactions with channels are done from the Right-Click -> Create -> Channel Reader/Writer menu. Several simpler examples are included but don't utilize the full channel process present in LabVIEW. For more extensive examples check out IG Flex Channels Examples.