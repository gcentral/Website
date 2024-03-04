---
title: "NI ShellRT"
externalUrl: https://www.vipm.io/package/ni_shellrt
date: 2016-09-01
summary: "Access a SSH console window from your LabVIEW project window."
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
 - "NI"
 - "NI LabVIEW Tools Network"
---

Redirecting to https://www.vipm.io/package/ni_shellrt

Vendor: NI

Author(s): NI ASE
 
Full Description:
NI ShellRT allows a quick access to a shell on a remote NI LinuxRT target from the LabVIEW project window. The user may then execute basic commands to interact with his target. This includes installing new packages, debugging, running scripts or managing the filesystem.

VIPM 2014 must be installed in order to install and use this package.

NI ShellRT is also distributed through a BSD license from RENCI: https://sshnet.codeplex.com/license

Support and feedback is provided through the Reference Design Portal: 
- https://decibel.ni.com/content/docs/DOC-46731

Versions:
2.0.0.x: New feature: support multiple consoles. Press Ctrl+N to instantiate a new console window. 
New feature: support path autocompletion. Press Tab when typing the start of a relative or asolute path, the command will be autocompleted to the first match found.
Fixed an issue where the username was typed in password mode. 
Fixed an issue where wrong credentials led to a LabVIEW crash.
Fixed the focus of the command. It now does not autofocus the command (which prevented copying parts of the shell). It only focus on the command when starting to write a command.

1.1.0.x: Bug fix where not all programmable LinuxRT targets were supported. Made console window floating instead of modal. Added ability to auto-enable SSH.
1.0.0.x: Initial Release