---
title: "GPower VI Register"
externalUrl: https://www.vipm.io/package/gpower_lib_viregister
summary: "A VI Register combines the performance and simplicity in use of a local variable with the scope of a global variable – without any bindings beyond the block diagram."
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
---

Redirecting to https://www.vipm.io/package/gpower_lib_viregister

Vendor: GPower

Author(s): Steen Schmidt
 
Full Description:
A VI Register combines the performance and simplicity in use of a local variable with the scope of a global variable – without any bindings beyond the block diagram. You simply drop in a VI Register wherever you'd normally drop a local variable to write data to or read data from, or rather wherever you'd wish you could just drop a local variable.

- VI Registers are independent of front panel controls, indicators, LabVIEW projects and other files. They exist in the block diagram only and require no extra programming – just drop them in. No more errors like when writing to the Value property node of a control and you get an error due to the VI front panel not being available (in an executable for instance). No more delayed or missing updates when writing to a control terminal on LabVIEW Real-Time for instance (which you should never do in the first place). No need to create and maintain functional globals, events, notifiers, or queues to pass data around.

- The scope of a VI Register is global, but this toolset offers functions to easily create register names that allow for more private scopes. Thus you can use VI Registers to share data between parallel structures inside a single VI, to share data between multiple VIs, or to share data globally between entirely independent VI hierarchies for instance.

- VI Registers support locking for synchronous access.

- VI Registers are equipped with error terminals, which gives you the option of enforcing execution order. No more need for sequence structures to arrange writes and reads in the desired order as you have to with locals and globals.

-	Four flavors of VI Registers are available: A single-element current value register (with optional event-generation ability), a circular buffer, a FIFO buffer, and a LIFO buffer.

- You can programmatically create, destroy, and get status of all VI Registers in the system.

- VI Register performance is comparable to local variables and queues with a typical I/O execution time in the 100-500 ns range.

- VI Registers stay in the same thread as the caller VI, so there is no thread swapping, there is no demand for the user interface thread or root loop access, and therefore no blocking or delaying behavior as you'd experience with some of the built-in variable technologies.